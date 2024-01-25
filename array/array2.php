<?php
#associative array
$st=array("name"=>"mahek","rollno"=>3,"class"=>"b1","course"=>"bca","regno"=>15612422253,"enrolno"=>220801021,"mobno"=>9023580307,
"sub"=>"php","city"=>"rajkot","department"=>"IT");
foreach($st as $val)
{
print_r($val);
echo "<br>";
}
echo "<br>";
echo ($st["city"]);

?>