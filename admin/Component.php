<?php 
/**
* Created by JooGii.
* User: Me;
* Date: 19.10.2016;
* Time: 21:51;
*/
namespace TheAlex7r\Jyexample\Admin;

defined('_JEXEC') or die;

class Component extends \Joomplace\Library\JooYii\Component
{
	protected static $_default_controller = 'Example';

    protected function setNamespace()
    {
        $this->_namespace = __NAMESPACE__;
    }
}