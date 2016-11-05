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
 * @version Generated by ModuleStudio 0.7.0 (http://modulestudio.de) at Sat Jul 16 13:46:57 CEST 2016.
 */

	/**
 * Version information base class.
 */
class MUPolls_Version extends MUPolls_Base_AbstractVersion
{
    /**
     * Retrieves meta data information for this application.
     *
     * @return array List of meta data.
     */
    public function getMetaData()
    {
    	$meta = parent::getMetaData();
    	
    	// the current module version
    	$meta['version']              = '1.0.1';    	
    	$meta['displayname']          = $this->__('MUPolls');
    	// the module description
    	$meta['description']          = $this->__('MUPolls is a module for Polls.');
    	// permission schema
    	$meta['securityschema'] = array(
    			'MUPolls::' => '::',
    			'MUPolls::Ajax' => '::',
    			'MUPolls:ItemBlock:' => 'Block title::',
    			'MUPolls:ItemListBlock:' => 'Block title::',
    			'MUPolls:Option:' => 'Option ID::',
    			'MUPolls:Poll:' => 'Poll ID::',
    			'MUPolls:Vote:' => 'Vote ID::',
    	);
    	
    	return $meta;
    	
    }
}
