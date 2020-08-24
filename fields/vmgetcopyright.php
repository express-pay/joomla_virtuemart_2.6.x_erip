<?php
defined('_JEXEC') or die();
class JElementVmGetCopyright extends JElement {
    function fetchElement($name, $value, &$node, $control_name) {
		$html = "<div style='text-align: center; margin-top: 20px;'>" . JText::_('VMPAYMENT_COPYRIGHT') . date("Y");
		$html .= "<br/>" . JText::_('VMPAYMENT_VERSION') . "2.4" . "</div>";
		return $html;
    }
}