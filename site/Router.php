<?php 
/**
* Created by JooGii.
* User: ;
* Date: 21.10.2016;
* Time: 09:02;
*/
namespace TheAlex7r\Jyexample\Site;

use Joomplace\Library\JooYii\Router as BaseRouter;

defined('_JEXEC') or die;

jimport('JooYii.autoloader',JPATH_LIBRARIES);


class Router extends BaseRouter
{

    protected function setNamespace()
    {
        $this->_namespace = 'TheAlex7r\\Jyexample\\Admin';
    }

}