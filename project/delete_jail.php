<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `jail` where jail_id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:display_jail.php');
        }else{
            die(mysqli_error($con));
        }

    }
?>