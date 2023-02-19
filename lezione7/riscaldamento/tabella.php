<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    $frutti = $_POST['frutti'] ?? [];

   foreach($frutti as $frutto){
        echo $frutto  . '<br>';
   }

} else {
    echo '<form method="post">
    <input type="text" name="frutti[]"><br> 
    <input type="text" name="frutti[]"><br> 
    <input type="text" name="frutti[]"><br> 
    <input type="text" name="frutti[]"><br> 
         
    <input type="submit" value="submit">
        </form>';

}