<?php 
namespace TheAlex7r\Jyexample\Site;

use TheAlex7r\Jyexample\Admin\Component;

defined('_JEXEC') or die;

jimport('JooYii.autoloader',JPATH_LIBRARIES);

$component = new Component();
$component->execute();