
## Requirements

- Cotonti 0.9.15 or greater

## Installation

1. Download, unzip, and place the pagedlcaptcha folder into your plugin folder
2. Install through the administration panel
3. Edit page.tpl inside the DOWNLOAD block to display the CAPTCHA for guests, and the regular link / button to members ( refer to example below)
4. (optional) If you want to display an error message when a CAPTCHA entry fails, you need to add `{FILE "{PHP.cfg.themes_dir}/{PHP.cfg.defaulttheme}/warnings.tpl"}` into your page.tpl and enable the configuration in this plugin's configuration page.

## Example page.tpl

Inside DOWNLOAD block:

```html
<!-- IF {PHP.usr.id} > 0 OR !{PAGE_DOWNLOAD_VERIFYSHOW} -->
	<p>{PHP.L.Download}: <a class="strong" href="{PAGE_FILE_URL}">{PAGE_SHORTTITLE}</a></p>
<!-- ELSE -->
	<form method="post" action="{PAGE_FILE_URL}">
	{PAGE_DOWNLOAD_VERIFYIMG}<br />
		<button type="submit">Download</button>
	</form>
<!-- ENDIF -->
```
