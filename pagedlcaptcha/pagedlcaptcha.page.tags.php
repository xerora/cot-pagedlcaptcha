<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=page.tags
[END_COT_EXT]
==================== */

$pagedl_show_captcha = (isset($_COOKIE['dlveri'])) ? false : true;
$t->assign(array(
	'PAGE_DOWNLOAD_VERIFYIMG' => cot_captcha_generate(),
	'PAGE_DOWNLOAD_VERIFYSHOW' => $pagedl_show_captcha
));

if($cfg['plugin']['pagedlcaptcha']['error'])
{
	cot_display_messages($t);
}
