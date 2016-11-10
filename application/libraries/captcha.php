<?php
class captcha
{
	function render()
	{
		require_once 'php-captcha/php-captcha.inc.php';

		// define fonts
		$aFonts = array('assets/font/VeraMoBd.ttf');
		
		// create new image
		$oPhpCaptcha = new PhpCaptcha($aFonts, 200, 60);
		//$oPhpCaptcha->DisplayShadows(true);
		$oPhpCaptcha->UseColour(true);
		$oPhpCaptcha->Create();
	}
}
?>