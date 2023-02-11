<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<?php
/*

$user = ['name'=>'John','surname'=>'Doe','age'=>35, 'salary'=>35000];

echo $user['name'] . " "; 
*/
$users = [
    ['name'=>'Mary','surname'=>'Doe','age'=>21, 'salary'=>12000],
    ['name'=>'Antony','surname'=>'Smith','age'=>34, 'salary'=>21000],
    ['name'=>'Frank','surname'=>'Marshall','age'=>56, 'salary'=>34000],
];
$keys = array_keys($users[0]);
echo '<table class="table table-bordered table-striped"><thead class="thead-light"><tr>';
foreach($keys as $key){
    echo '<th scope="col">' . $key . '</th>';
}
echo '</tr></thead><tbody>';

foreach ($users as $user){
    echo '<tr>';
    foreach ($user as  $value){
        echo '<td>' . $value . '</td>';
    } 
    echo '</tr>';
}
echo '</tbody></table>';

?>

</div>