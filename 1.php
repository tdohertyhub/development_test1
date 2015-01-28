<?php
for ($i=0; $i<5;$i++){
    echo "Helloworld<br/>";
}
?>
    <hr/>

<?php
$x=5;
if($x == 4)
    echo "x is 4";
else
    echo "x is not 4";
?>

    <hr/>

<?php
$arr = array();
$arr[] = "dog";
$arr[] = "cat";
//var_dump($arr); //print out entire contents of array

for ($i=0; $i< count($arr);$i++){
    echo $i."=".$arr[$i]."<br/>";
}
?>
    <hr/>

<?php
function println ($str){
    echo $str."<br/>";
}

println("my");
println("name");
println("is");
println("tom");

?>

    <hr/>

    <a href="1.php? x=1">1 time </a><br/>
    <a href="1.php? x=8">8 times </a><br/>
    <hr/>

<?php
if (isset($_GET['x']))
    $x=$_GET['x'];
else
    $x=0;

for ($i=0;$i<$x;$i++)
    println("row #".$i);

?>