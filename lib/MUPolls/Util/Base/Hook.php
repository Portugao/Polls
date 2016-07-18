<?php
/**
 * MUPolls.
 *
 * @copyright Michael Ueberschaer (MU)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package MUPolls
 * @author Michael Ueberschaer <kontakt@webdesign-in-bremen.com>.
 * @link http://webdesign-in-bremen.com
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.7.0 (http://modulestudio.de).
 */

/**
 * Utility base class for hook related helper methods.
 */
class MUPolls_Util_Base_Hook extends Zikula_AbstractBase
{
    /**
     * Calls validation hooks.
     *
     * @param Zikula_EntityAccess $entity   The currently processed entity.
     * @param string              $hookType Name of hook type to be called.
     *
     * @return boolean Whether validation is passed or not.
     */
    public function callValidationHooks($entity, $hookType)
    {
        $hookAreaPrefix = $entity->getHookAreaPrefix();
    
        $hook = new Zikula_ValidationHook($hookAreaPrefix . '.' . $hookType, new Zikula_Hook_ValidationProviders());
        $validators = $this->notifyHooks($hook)->getValidators();
    
        return !$validators->hasErrors();
    }

    /**
     * Calls process hooks.
     *
     * @param Zikula_EntityAccess $entity The currently processed entity.
     * @param string              $hookType Name of hook type to be called.
     * @param Zikula_ModUrl       $url      The url object.
     */
    public function callProcessHooks($entity, $hookType, $url)
    {
        $hookAreaPrefix = $entity->getHookAreaPrefix();
    
        $hook = new Zikula_ProcessHook($hookAreaPrefix . '.' . $hookType, $entity->createCompositeIdentifier(), $url);
        $this->notifyHooks($hook);
    }

    /**
     * Notify any hookable events.
     *
     * @param Zikula_HookInterface $hook Hook interface.
     *
     * @return Zikula_HookInterface
     */
    public function notifyHooks(Hook $hook)
    {
        $serviceManager = ServiceUtil::getManager();
    
        return $serviceManager->getService('zikula.hookmanager')->notify($hook);
    }
}
