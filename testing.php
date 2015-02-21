<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<forms method="POST" action="testing.php?submit=1">
			<input type="text" name="username">
			<input type="pw" name="pw">
			<input type="submit">
		</forms>
		<? if(isset($_GET["submit"])){
			echo "sadjfladskjflksdjflaskdjflaskjdlfkasjdlfkasjdlfkasjdlfjasldkfjalsdkfjlasjdf";
		}?>
	</body>
</html>