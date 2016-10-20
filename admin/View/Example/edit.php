<?php 
/**
* Created by JooGii.
* User: Me;
* Date: 19.10.2016;
* Time: 21:44;
*/
defined('_JEXEC') or die;

/** @var \Joomplace\Library\JooYii\Model $item */
$form = $item->getForm();
?>
<form id="adminForm" name="adminForm" class="adminForm" method="POST">
	<?php
	foreach ($form->getFieldset() as $field){
		/** @var JFormField $field */
		echo $field->renderField();
	}
	?>
	<input type="hidden" name="option" value="com_jyexample">
	<input type="hidden" name="controller" value="Example">
	<input type="hidden" name="task" value="">
</form>
