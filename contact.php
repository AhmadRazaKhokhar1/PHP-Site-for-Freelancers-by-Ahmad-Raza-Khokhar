<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" >
</head>
<header>
    <a href="index.html">
        <h3 
        style="border:1px sloid chartreuse; background-color: rgb(9, 255, 0);
          color:rgb(255, 255, 255); 
        box-shadow:#001eff; -webkit-box-shadow: 0 0 5px #7bff00, 0 0 5px #001eff, 0 0 30px #8b8b8b;
      -webkit-transition-delay: 0.6s;
      transition-delay: 0.6ms; text-decoration: underline rgb(30, 253, 1);
         height: 50px; text-align: center; justify-content: center; 
         ">
      TECH MANIA
    </h3><br><br>
      </a><a href="index.html"><button style="background-color: rgba(0, 255, 0, 0.63); margin-left: -1055px;">Go Back</button></a>
</header>
<body>

    <!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<form action="form-handler.php" method="post">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name">
		<br><br>
		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name">
		<br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<br><br>
		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob">
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
    <?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$first_name = $_POST['first-name'];
		$last_name = $_POST['last-name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		
		$to = 'ahmadrazayousaf19@gmail.com';
		$subject = 'Contact Form Submission';
		$message = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nDate of Birth: $dob";
		$headers = "From: $email";
		
		if (mail($to, $subject, $message, $headers)) {
			echo 'The form has been submitted successfully.';
		} else {
			echo 'The form could not be submitted.';
		}
	}

    // call_user_func($first_name, opcache_get_status($last_name));
?>

</body>
</html>