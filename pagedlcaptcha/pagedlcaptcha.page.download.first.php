<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=page.download.first
[END_COT_EXT]
==================== */

if($usr['id'] == 0 && !empty($cot_captcha) && !isset($_COOKIE['dlveri']))
{

	if($cfg['plugin']['pagedlcaptcha']['captcha'] != 'core')
	{
		$cfg['captchamain'] = $cfg['plugin']['pagedlcaptcha']['captcha'];
	}
	if($_SERVER['REQUEST_METHOD'] != 'POST' || !cot_captcha_validate(cot_import('rverify', 'P', 'TXT')))
	{
		if($cfg['plugin']['pagedlcaptcha']['error'])
		{
			cot_error('captcha_verification_failed');
		}
		cot_redirect(str_replace('&amp;', '&', $pag['page_pageurl']));
	}
	else
	{
		cot_setcookie('dlveri', $sys['now'], time()+$cfg['plugin']['pagedlcaptcha']['expire'], $cfg['cookiepath'], $cfg['cookiedomain'], $sys['secure'], true);
		cot_redirect(cot_url('page', array('c' => $pag['page_cat'], 'id' => $id, 'a' => 'dl'), '', true));
	}
}
elseif(isset($_COOKIE['dlveri']))
{
	$_SESSION['dl'] = $id;
}