
<?php 
	include "header.php"
?>


<?php 
	include "nav.php"
?>

<body>

	<div id="centerColumn">
    <h2>Random Fact</h2>
	<p>Looking for the best way to stay ahead of trends in the web design and web development industry? You’ve come to the right place. With our web design and web development blog, it’s easy to remain up-to-date on the market, plus learn new tips and tricks for web design and web development.</p>
	
      <h3>Far Away!</h3>
	  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>


<form action="#" method="post" id="myForm" name="form_save">
<fieldset id="form">
	<legend><h3>Please complete below!</h3></legend>

	<!-- <p><label for="title">Mr.</label>
	<input type="radio" id="male" name="title" />
	<label for="title">Mrs.</label>
	<input type="radio" id="female" name="title" /></p> -->
		
	<p><label for="fullname">Your Name:</label>
	<input type="text" id="fullname" name="f_Name" /></p>

	<p><label for="phone">Phone #:</label>
	<input type="text" id="phone" name="p_num" /></p>


	<p>
		<input type="submit" value="Submit!" name="submit" />
	</p>

</fieldset>
</form>
</div>

<div id="thanks_msg">
	<h2>Thank you <span id="thanksCustomer">!</span> This number belongs to you :)</h2>

</div>


<?php 
	include "footer.php"
?>

</body>
</html>
