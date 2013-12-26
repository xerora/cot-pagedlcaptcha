<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Code=pagedlcaptcha
Name=Page Download CAPTCHA
Description=Require guests to complete a CAPTCHA every so often in order to download from pages
Version=1.0
Date=2012-12-24
Author=tyler@xaez.org
Copyright=
Notes=
Auth_guests=R
Lock_guests=2345A
Auth_members=RW
Lock_members=2345
Requires_modules=page
Requires_plugins=
Recommends_modules=
Recomments_plugins=
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
expire=01:select:86400,172800,259200,345600,432000,518400,604800:86400:
error=2:radio::0:
captcha=03:callback:pagedlcaptcha_captcha_list():core:
[END_COT_EXT_CONFIG]
==================== */
