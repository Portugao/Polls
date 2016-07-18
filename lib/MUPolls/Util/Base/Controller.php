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
 * Utility base class for controller helper methods.
 */
class MUPolls_Util_Base_Controller extends Zikula_AbstractBase
{
    /**
     * Returns an array of all allowed object types in MUPolls.
     *
     * @param string $context Usage context (allowed values: controllerAction, api, actionHandler, block, contentType, util).
     * @param array  $args    Additional arguments.
     *
     * @return array List of allowed object types.
     */
    public function getObjectTypes($context = '', $args = array())
    {
        if (!in_array($context, array('controllerAction', 'api', 'actionHandler', 'block', 'contentType', 'util'))) {
            $context = 'controllerAction';
        }
    
        $allowedObjectTypes = array();
        $allowedObjectTypes[] = 'option';
        $allowedObjectTypes[] = 'poll';
        $allowedObjectTypes[] = 'vote';
    
        return $allowedObjectTypes;
    }

    /**
     * Returns the default object type in MUPolls.
     *
     * @param string $context Usage context (allowed values: controllerAction, api, actionHandler, block, contentType, util).
     * @param array  $args    Additional arguments.
     *
     * @return string The name of the default object type.
     */
    public function getDefaultObjectType($context = '', $args = array())
    {
        if (!in_array($context, array('controllerAction', 'api', 'actionHandler', 'block', 'contentType', 'util'))) {
            $context = 'controllerAction';
        }
    
        $defaultObjectType = 'poll';
    
        return $defaultObjectType;
    }

    /**
     * Checks whether a certain entity type uses composite keys or not.
     *
     * @param string $objectType The object type to retrieve.
     *
     * @return boolean Whether composite keys are used or not.
     */
    public function hasCompositeKeys($objectType)
    {
        switch ($objectType) {
            case 'option':
                return false;
            case 'poll':
                return false;
            case 'vote':
                return false;
                default:
                    return false;
        }
    }

    /**
     * Retrieve identifier parameters for a given object type.
     *
     * @param Zikula_Request_Http $request    The current request.
     * @param array   $args       List of arguments used as fallback if request does not contain a field.
     * @param string  $objectType Name of treated entity type.
     * @param array   $idFields   List of identifier field names.
     *
     * @return array List of fetched identifiers.
     */
    public function retrieveIdentifier(Zikula_Request_Http $request, array $args, $objectType = '', array $idFields)
    {
        $idValues = array();
        foreach ($idFields as $idField) {
            $defaultValue = isset($args[$idField]) && is_numeric($args[$idField]) ? $args[$idField] : 0;
            if ($this->hasCompositeKeys($objectType)) {
                // composite key may be alphanumeric
    if ($request->query->has($idField)) {
                    $id = $request->query->get($idField, $defaultValue);
                } else {
                    $id = $defaultValue;
                }
            } else {
                // single identifier
    if ($request->query->has($idField)) {
                    $id = (int) $request->query->filter($idField, $defaultValue, FILTER_VALIDATE_INT);
                } else {
                    $id = $defaultValue;
                }
            }
    
            // fallback if id has not been found yet
            if (!$id && $idField != 'id' && count($idFields) == 1) {
                $defaultValue = isset($args['id']) && is_numeric($args['id']) ? $args['id'] : 0;
    if ($request->query->has('id')) {
                    $id = (int) $request->query->filter('id', $defaultValue, FILTER_VALIDATE_INT);
                } else {
                    $id = $defaultValue;
                }
            }
            $idValues[$idField] = $id;
        }
    
        return $idValues;
    }

    /**
     * Checks if all identifiers are set properly.
     *
     * @param array  $idValues List of identifier field values.
     *
     * @return boolean Whether all identifiers are set or not.
     */
    public function isValidIdentifier(array $idValues)
    {
        if (!count($idValues)) {
            return false;
        }
    
        foreach ($idValues as $idField => $idValue) {
            if (!$idValue) {
                return false;
            }
        }
    
        return true;
    }

    /**
     * Create nice permalinks.
     *
     * @param string $name The given object title.
     *
     * @return string processed permalink.
     * @deprecated made obsolete by Doctrine extensions.
     */
    public function formatPermalink($name)
    {
        $name = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '.', '?', '"', '/', ':', '�', '�', '�'),
            array('ae', 'oe', 'ue', 'Ae', 'Oe', 'Ue', 'ss', '', '', '', '-', '-', 'e', 'e', 'a'),
            $name
        );
        $name = DataUtil::formatPermalink($name);
    
        return strtolower($name);
    }
}
