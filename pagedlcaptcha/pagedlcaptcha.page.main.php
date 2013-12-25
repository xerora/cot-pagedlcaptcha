<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=page.main
[END_COT_EXT]
==================== */

if ($pag['page_file'] && $a == 'dl' && (($pag['page_file'] == 2 && $usr['auth_download']) || $pag['page_file'] == 1))
{

	if($_SERVER['REQUEST_METHOD'] == 'POST' && $usr['id'] == 0 && !empty($cot_captcha))
	{
		cot_redirect($pag['page_pageurl']);
	}
}