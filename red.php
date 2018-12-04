<html>
<body>
	<?php
		$ir = $_POST['elec'];
		switch ($ir) {
			case 'a':
				header("Location: civil.php");
				break;
			case 'b':
				header("Location: chic.php");
				break;
				case 'c':
				header("Location: Adelas.html");
				break;		
				case 'd':
				header("Location: CV.html");
				break;		
		}
	?>
</body>
</html>