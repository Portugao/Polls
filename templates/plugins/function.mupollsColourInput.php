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
 * The mupollsColourInput plugin handles fields carrying a html colour code.
 * It provides a colour picker for convenient editing.
 *
 * @param array            $params  All attributes passed to this function from the template.
 * @param Zikula_Form_View $view    Reference to the view object.
 *
 * @return string The output of the plugin.
 */
function smarty_function_mupollsColourInput($params, $view)
{
    return $view->registerPlugin('MUPolls_Form_Plugin_ColourInput', $params);
}
