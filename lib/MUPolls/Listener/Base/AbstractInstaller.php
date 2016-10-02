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
 * @version Generated by ModuleStudio (http://modulestudio.de).
 */

/**
 * Event handler base class for module installer events.
 */
abstract class MUPolls_Listener_Base_AbstractInstaller
{
    /**
     * Listener for the `installer.module.installed` event.
     *
     * Called after a module has been successfully installed.
     * Receives `$modinfo` as args.
     *
     * @param Zikula_Event $event The event instance
     */
    public static function moduleInstalled(Zikula_Event $event)
    {
    }
    
    /**
     * Listener for the `installer.module.upgraded` event.
     *
     * Called after a module has been successfully upgraded.
     * Receives `$modinfo` as args.
     *
     * @param Zikula_Event $event The event instance
     */
    public static function moduleUpgraded(Zikula_Event $event)
    {
    }
    
    /**
     * Listener for the `installer.module.uninstalled` event.
     *
     * Called after a module has been successfully uninstalled.
     * Receives `$modinfo` as args.
     *
     * @param Zikula_Event $event The event instance
     */
    public static function moduleUninstalled(Zikula_Event $event)
    {
    }
    
    /**
     * Listener for the `installer.subscriberarea.uninstalled` event.
     *
     * Called after a hook subscriber area has been unregistered.
     * Receives args['areaid'] as the areaId. Use this to remove orphan data associated with this area.
     *
     * @param Zikula_Event $event The event instance
     */
    public static function subscriberAreaUninstalled(Zikula_Event $event)
    {
    }
}