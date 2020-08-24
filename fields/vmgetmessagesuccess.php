<?php
defined('_JEXEC') or die();
class JElementVmGetMessageSuccess extends JElement {
    function fetchElement($name, $value, &$node, $control_name) {
		$value = htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8');
		$value = trim($value);
		$value = ( empty($value) ) ? JText::_('VMPAYMENT_MESSAGE_SUCCESS_DEFAULT') : $value;
		$html = '<textarea style="width:auto!important" name="params[message_success]" id="params_message_success" cols="118" rows="8">' . $value . '</textarea>';
		return $html;
    }
}