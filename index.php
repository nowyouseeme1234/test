<?php
  
    $link = mysqli_connect("localhost", "root", "", "php_test");
if($link == false)
die("Error: could not connect.". mysqli_connect_error());
else
{
    echo "<br>"."connected successfully. host info: ". mysqli_get_host_info($link)."<br>";
    

    //create tables sqls
$sql1 = "CREATE TABLE test(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
name VARCHAR(30) NOT NULL,
password INT NOT NULL)
";

    // insert into table sql
    
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    echo $name." ". $pass;

$sql3 = "INSERT INTO test(name, password) VALUES('$name', '$pass')";


    //  execute create table
if($name==null || $pass == null){
    die("Error: name or password is empty");
}
if(mysqli_query($link, $sql3)){
       echo "<br>"."inserted into table successfully";
     } else{
         echo "ERROR: Could not insert into table. " . mysqli_error($link);
     }



mysqli_close($link);


}
?>
