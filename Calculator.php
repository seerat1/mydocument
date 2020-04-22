
<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{

					if(isset($_POST['formGender']) )
                    {
                    
                      $var = $_POST['formGender'];
                      
                    }
                    if($var=="S")
                    {
                    	echo '<h1>Language is required</h1>';
                    }
                

  
					// Check number values
					if(is_numeric($_POST['number1']) )
					{
						// Calculate total
						if($var=="E")
						{
							$total = $_POST['number1'] *0.25;	
						}
						else
						{
							$total = $_POST['number1'] *0.30;	
						}
						
						
						// Print total to the browser
						echo "<h3>PRICE(GBP)</h3>";
						echo "<h1> {$total}<span>&#163;</span></h1> ";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="Calculator.php">
		    	
		    	
		    	<br>
		    	<p> PLEASE ENTER THE TOTAL NUMBER OF WORDS <p>
		        <input name="number1" type="text" class="form-control" style="width: 400px; display: inline" />
	            <br>
	            <br>
	            <p>
                LANGUAGE <br> <br>
                <select name="formGender">
                <option value="S">Select...</option>
                <option value="E">English</option>
                <option value="O">Others</option>
                </select>
                </p>
                <br>
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>

