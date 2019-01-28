<div id="leftColumn">
    <h2>Navigation</h2>
    <!-- <br/>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    <nav> -->
<?php 

$array = array("Home", "About", "Gallery", "Events", "Contact");
echo '<ul>';
foreach($array as $key=>$value){
    echo '<li><a href="">'.$value.'</a></li>';

}

echo '</ul>';






?>
  </div>