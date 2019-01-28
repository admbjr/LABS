<?php

  // Initialize variables for errors

  $titleError=$nameError=$emailError=$commentError ="";



if(isset($_POST["submit"])) {
    
  // taking the inputs 
  
  $title = $_POST['title'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];


//On submitting form below function will execute

  if (empty($_POST["title"])) {
    $titleError = "Title is required";

  } else {

    $title = test_input($_POST["title"]);
  }
   if (empty($_POST["name"])) {
     $nameError = "Name is required";

   } else {

     $name = test_input($_POST["name"]);

     // check name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z]*$/",$name)) {
       $nameError = "First name only"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else {
     $email = test_input($_POST["email"]);

     // check if e-mail address syntax is valid or not
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailError = "Invalid email format";
     }
   }

   if (empty($_POST["comment"])) {
    $commentError = "Please enter a comment";
  }
   } else {
     $comment = test_input($_POST["comment"]);
   }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//php code ends here 
?>

<!--html starts here-->
<!DOCTYPE HTML> 
<html>
	<head>
	<meta charset="utf-8" />
	<title>Lab 3 Php</title>
	<link rel="stylesheet" href="form2.css" />
	</head>
	<body>
 
		<section class="form">
			<div class="form_div">

			<form method="post" action="index.php"> 
  <fieldset>
    <legend>Please fill out below!</legend>
    <br>
    <br>
				<span class="error">* Required field.</span>

				<br>
				<hr/>
				<br>
				Title:<br><br>
				<input class="radio" type="radio" name="title" value="mr">Mr.
				<input class="radio" type="radio" name="title" value="miss">Miss.
				<input class="radio" type="radio" name="title" value="mrs">Mrs.
				<span class="error">*<?php echo $titleError;?></span>
        <br>
        <br>
        Name:<br><br>
        <input class="input" type="text" name="name" value="">
				<span class="error">* <?php echo $nameError;?></span>
				<br>
        <br>
        E-mail:<br><br>
        <input class="input" type="text" name="email" value="">
				<span class="error">* <?php echo $emailError;?></span>
				<br>
        <br>
        Comment:<br><br>
        <textarea name="comment" rows="5" cols="40"></textarea>
        <span class="error">* <?php echo $commentError;?></span>
        <br>
        <br>
				<input class="submit" type="submit" name="submit" value="Submit"> 
        </fieldset>
      </form>
			</div>
		
    </section>
	</body>
</html>