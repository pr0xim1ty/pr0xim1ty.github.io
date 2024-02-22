<!DOCTYPE html>
<html>
	<body>
		<?php
			function Redirect($url, $permanent = false) {
    			header('Location: ' . $url, true, $permanent ? 301 : 302);
    			exit();
			}

			Redirect('./html/success.html', false);
		?>
	</body>
</html>