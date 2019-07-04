<?php 
include('db.php');

if(isset($_POST['save_task'])){
   $title=$_POST['title'];
   $description=$_POST['description'];

    $query="INSERT INTO task(title,description) VALUES ('$title','$description')";
    $res=mysqli_query($conn,$query);

    if(!$res){
        die("QUERY FAIL");
    }
    
$_SESSION['message']='Task saved succesfully';
$_SESSION['message_type']='success';

    header("Location: index.php");
}
?>