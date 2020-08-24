<?php
defined('_JEXEC') or die();
class JElementVmGetHandlerUrl extends JElement {
    function fetchElement($name, $value, &$node, $control_name) {
		$html = '<input type="text" name="handler_url" id="handler_url" value="' . JROUTE::_(JURI::root() . 'index.php?option=com_virtuemart&view=pluginresponse&task=pluginnotification&tmpl=component') . '" size="90" readonly="">';

		return $html;
    }
}