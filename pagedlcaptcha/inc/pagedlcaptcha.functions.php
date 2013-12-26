<?php defined('COT_CODE') or die('Wrong URL');

function pagedlcaptcha_captcha_list()
{
	return array_merge(array('core'), cot_captcha_list());
}