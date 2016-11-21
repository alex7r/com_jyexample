<?php 
/**
* Created by JooGii.
* User: Me;
* Date: 19.10.2016;
* Time: 21:13;
*/
namespace TheAlex7r\Jyexample\Admin\Model;

use Joomplace\Library\JooYii\Model;

defined('_JEXEC') or die;

class Example extends Model
{
	protected $_fields = array(
		'title' => array(
			'mysql_type' => 'varchar(128)',
			'type' => 'text',
			'filter' => 'safehtml',
			'required' => true,
		),
		'published' => array(
			'mysql_type' => 'int(1) unsigned',
			'type' => 'radio',
			'class' => 'btn-group',
			'nullable' => false,
			'default' => 1,
			'option' => array(
				0 => 'Disabled',
				1 => 'Enabled',
			)
		),
		'description' => array(
			'mysql_type' => 'text',
			'type' => 'editor',
			'filter' => 'safehtml',
			'group' => '',
			'fieldset' => 'basic',
			'class' => '',
			'read_only' => null,
			'nullable' => false,
			'default' => null,
			'required' => true,
		),
	);

	protected function determine()
	{
		$this->_table = '#__simple_data';
	}
}