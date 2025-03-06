<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `case` where case_id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:display_case.php');
        }else{
            die(mysqli_error($con));
        }

    }
?>