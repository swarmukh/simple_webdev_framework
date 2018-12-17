<?php
	session_start();
	
	if(!isset($_SESSION["msg"]))
	{
		header("Location: index.php");
		exit(0);
	}
?>
<!DOCTYPE html>
<html oncontextmenu="return false;">
	
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/x-icon" href="img/icon.png">
		<title>Browser Support</title>
		<meta name="robots" content="noindex, nofollow">
		<link type="text/css" rel="stylesheet" href="style/BrowserSupport.css">
    </head>
	
    <body>
        <div class="container">
            <h1>Oops! <span style="color: #bbb;">:(</span></h1>
            <p style="margin-top: 1.75em;"><?php echo convert_uudecode(base64_decode(($_SESSION["msg"]))); ?></p>
            <p>We recommend using one of the following browsers:</p>
			<div style="text-align: center;">
				<div class="frame">
					<a href="http://www.google.com/chrome/browser" target="_blank">
						<span class="element"><img src="img/Browsers/Chrome.png" alt="Google Chrome"/></span>
						<span class="caption">Google Chrome</span>
					</a>
				</div>
				<div class="frame">
					<a href="http://www.microsoft.com/en-us/windows/microsoft-edge" target="_blank">
						<span class="element"><img src="img/Browsers/Edge.png" alt="Microsoft Edge"/></span>
						<span class="caption">Microsoft Edge</span>
					</a>
				</div>
				<div class="frame">
					<a href="https://www.epicbrowser.com" target="_blank">
						<span class="element"><img src="img/Browsers/Epic.png" alt="Epic Privacy Browser" style="width: 96px; height: 96px;"/></span>
						<span class="caption">Epic Browser</span>
					</a>
				</div>
				<div class="frame">
					<a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">
						<span class="element"><img src="img/Browsers/Firefox.png" alt="Mozilla Firefox"/></span>
						<span class="caption">Mozilla Firefox</span>
					</a>
				</div>
				<div class="frame">
					<a href="https://www.opera.com" target="_blank">
						<span class="element"><img src="img/Browsers/Opera.png" alt="Opera"/></span>
						<span class="caption">Opera</span>
					</a>
				</div>
				<div class="frame">
					<a href="https://support.apple.com/downloads/#safari" target="_blank">
						<span class="element"><img src="img/Browsers/Safari.png" alt="Apple Safari"/></span>
						<span class="caption">Apple Safari</span>
					</a>
				</div>
			</div>
        </div>
    </body>
	
</html>