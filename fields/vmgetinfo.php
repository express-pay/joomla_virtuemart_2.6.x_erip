<?php
defined('_JEXEC') or die();
class JElementVmGetInfo extends JElement {
    var $_name = '<a target="_blank" href="https://express-pay.by"><img src="/plugins/vmpayment/erip_expresspay/assets/images/erip_expresspay_big.png" width="270" height="91" alt="exspress-pay.by" title="express-pay.by"></a>';

    function fetchElement($name, $value, &$node, $control_name) {
	    $html = '</td></tr><tr><td><a target="_blank" href="https://express-pay.by"><img src="/plugins/vmpayment/erip_expresspay/assets/images/erip_expresspay_big.png" width="270" height="91" alt="exspress-pay.by" title="express-pay.by"></a></td><td><div style="width: 700px; margin-top: 14px;">' . JText::_('VMPAYMENT_DESCRIPTION') . '</div>';

		return $html;
    }

}