<html>
<head>
  	<title>PHP FizzBuzz</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<!-- form with inputs and submit button -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
	print_from: <input type="number" step="0.000001" min="-9999" max="9999" name="print_from"><br>
	print_to: <input type="number" step="0.000001" min="-9999" max="9999" name="print_to"><br>
	<input type="submit">
</form>


<?php
//filter input to validate variables 
$print_from = filter_input(INPUT_GET, "print_from", FILTER_VALIDATE_FLOAT);
$print_to = filter_input(INPUT_GET, "print_to", FILTER_VALIDATE_FLOAT);

// echo out the header for the table
echo "<table id='fizzBuzzTable'>
		<tr>
			<th>
				Printing from $print_from to $print_to
			</th>
		</tr> ";

		if ($print_from == '' && $print_to == '') {
			echo "</table>";
		} else {
			
			//fizzbuzz loop 	
			for ($i = $print_from; $i <= $print_to; $i++) {
				$output = '';

				//fizzbuzz conditions
				if ($i % 3 == 0) {
					$output .= 'Fizz';
				}

				if ($i % 5 == 0) {
					$output .= 'Buzz';
				}

				if (!$output) {
					$output = $i;
				}

				//echo out the fizzbuzz loop results to the table
				echo "<tr class=\"";
						// add class to highlight green
						if ($i % 10 == 0)
						{
							echo "bg-success";
						}
						echo " \">
					<td>" . $output . "
					</td>
				</tr>";
			}

		//close table
		echo "</table>";

		}
?>

<!-- jQuery cdn -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<script type="text/javascript">
	//wait for the page to finish loading
	$(window).on('load', function() {
	  	// count the rows in the table 
	    var fizzBuzzTable = document.getElementById('fizzBuzzTable').rows.length-1;
		
		//alert responses
		if (fizzBuzzTable > 1){
			alert('The table has ' + fizzBuzzTable + ' rows.');
		}

		if (fizzBuzzTable === 1){
			alert('The table has 1 row.');
		}

		if (fizzBuzzTable === 0) {
			alert('The table has no rows. Input a print_to and print_from value to create a table.');
		}
	});
</script>

</body>
</html>