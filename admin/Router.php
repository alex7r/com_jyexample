<?php 
/**
* Created by JooGii.
* User: Me;
* Date: 19.10.2016;
* Time: 21:51;
*/
namespace TheAlex7r\Jyexample\Admin;

use Joomplace\Library\JooYii\Router as BaseRouter;

defined('_JEXEC') or die;

jimport('JooYii.autoloader',JPATH_LIBRARIES);

class Router extends BaseRouter
{

    protected function setNamespace()
    {
        $this->_namespace = __NAMESPACE__;
    }

}