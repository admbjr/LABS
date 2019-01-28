<p>Pick your favorite color</p>
<?php

$colors = array("Blue", "Red", "Green", "Yellow");

echo "<select name='colors' >";
echo "<option value ''>Select</option>";

foreach ($colors as $value) {
    echo "<option value '$value'>$value</option>option>";
}
    
echo "</select>";
?>
<br /><br />        <br />

<form method="post">
Pick your favorite Animals
    <p><input type="checkbox" name="animal[]" value="dog" />Dog</p>
    <p><input type="checkbox" name="animal[]" value="cat" />Cat</p>
    <p><input type="checkbox" name="animal[]" value="fish" />Fish</p>
    <p><input type="checkbox" name="animal[]" value="bird" />Bird</p>
    <p><input type="submit" name="submit" value="submit" /></p>
</form>

<?php

if(isset($_POST["animal"])) {
    if(!empty($_POST["animal"])) {
        echo 'You like these animals';
        foreach($_POST["animal"] as $animal) {
            echo '<p>'.$animal.'</p>';
        } 
    } else {
        echo 'Please select your favorite animal';
    }
}
?>
 

 <!-- // having trouble selecting the check boxes to make them display

// <?php
// if(isset($_POST["animal"])) {
//     $animals = $_POST["animal"];
//     foreach ($animals as $key => $value) {
//         echo '<p>' $key . ' = ' . $value . '</p>';
//     }
// }
// ?> -->


