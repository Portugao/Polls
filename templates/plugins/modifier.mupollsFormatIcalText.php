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
 * The mupollsFormatIcalText modifier outputs a given text for the ics output format.
 * Example:
 *     {'someString'|mupollsFormatIcalText}
 *
 * @param string $string The given output string.
 *
 * @return string Processed string for ics.
 */
function smarty_modifier_mupollsFormatIcalText($string)
{
    $result = preg_replace('/<a href="(.*)">.*<\/a>/i', "$1", $string);
    $result = str_replace('�', 'Euro', $result);
    $result = ereg_replace("(\r\n|\n|\r)", '=0D=0A', $result);

    return ';LANGUAGE=' . \ZLanguage::getLanguageCode() . ';ENCODING=QUOTED-PRINTABLE:' . $result . "\r\n";
}
