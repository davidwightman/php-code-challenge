#FizzBuzz Assessment

Step 1. create a bare bones Twitter Boostrap (getbootstrap.com) page here

	- use as little HTML as possible

	- include Bootstrap CSS, Jquery, and anything else you may need using CDNs

Step 2. write a function that outputs every whole number between given variables print_from and print_to

	- input variables print_from and print_to may or may not be whole numbers

	- output should be in the form of an html table

	- table head should say "Printing from $print_from to $print_to" in single cell

	- each printed number should be a separate row in the table body

	- for each number that is a multiple of three print “Fizz” instead of the number

	- for multiples of five print “Buzz” instead of the number

	- for numbers which are multiples of both three and five print “FizzBuzz”

	- for multiples of ten highlight the table row green using applicable bootstrap CSS class

Step 3. create a form, process the variables and call function

	- build a form that has two numeric inputs print_from and print_to with a submit button

	- allow only values from -9999 to 9999

	- use the GET method and have the form submit to itself

	- URL should look like "something.php?print_from=-143&print_to=23"

	- validate X and Y variables supplied via $_GET

	- call the function inside a bootstrap column


Step 4. use javascript or jquery to count the number of lines in the output table and alert the user

	- alert should occur once the page is completed loading

	- should contain just the number of rows in the body of the table (inlcuding if there are 0 rows)

Step 5. wrap up and submit
	- add simple comments to your code explaining what is happening at each step