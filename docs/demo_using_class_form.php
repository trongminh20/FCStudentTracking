for using form auto generation feature:
for customized form
 1: create 3D array with the following formar:
<?php
$inputList = [
    ['label' => ['attribute name'=>'attribute value', .... ],'input' =>['attribute name'=>'attribute value', .... ]],
    ['label' => ['attribute name'=>'attribute value', .... ],'input' =>['attribute name'=>'attribute value', .... ]],
    ['label' => ['attribute name'=>'attribute value', .... ],'input' =>['attribute name'=>'attribute value', .... ]].
    //....
];
?>
2: call the function form view
<?php

?>


in case we only want to display all colunms of a table -> form
<?php
$listOfUnsetCols // is the list of cols that we dont want to display,
// for example, in the table Employees, I dont want to display column password, so
$listOfUnsetCols = ['password'];

$table = $view->display_as_table($id, $class,$table, $listOfUnsetCols,$model);
