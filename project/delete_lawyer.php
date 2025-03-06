<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `lawyer` where lawyer_id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:display_lawyer.php');
        }else{
            die(mysqli_error($con));
        }

    }
?>