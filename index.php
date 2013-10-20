
<?php
	if (isset($_POST['submit']))
	{
		$height = $width = (int)$_POST['number'];
		$top_bottom = '';

		echo '<pre>';
		
		// top border
		for($j = 0; $j < $width; $j++)
		{
			$top_bottom .= '*';
		}

		echo $top_bottom . '<br />';

		
		for($i = 0; $i < $height-2; $i++)
		{
			// left border
			echo '*';
			
			// inner
			for($j = 0; $j < $width-2; $j++)
			{
				echo '&nbsp';
			}

			// right border
			echo '*<br />';
		}
		
		// bottom border
		echo $top_bottom;
		echo '</pre>';
	}
?>
<html>
	<head></head>
	<body>
		<form method="post" action = "#">
			<input name="number" type="text" value=""/><br />
			<input type="submit" name="submit" value="Submit"/>
		</form>
	</body>
</html>