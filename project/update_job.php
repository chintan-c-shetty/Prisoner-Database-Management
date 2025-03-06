<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="Select * from `job` where job_id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $jo_name=$row['JOB_NAME'];
    $salary=$row['SALARY'];
    $j_id=$row['JAIL_ID'];

    if(isset($_POST['submit'])){
        $jo_name=$_POST['job_name'];
        $salary=$_POST['salary'];
        $j_id=$_POST['jail_id'];
      
      $sql="update `job` set job_id=$id,job_name='$jo_name',salary='$salary',jail_id='$j_id'
      where job_id=$id ";
      $result=mysqli_query($con,$sql);
      if($result){
        header('location:display_job.php');
      }else{
        die(mysqli_error($con));
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAIL DATABASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      a{
        text-decoration:none;
        color:white;
      }
      .image{
            width:80px;
            height:80px;
           }
            .logo{
                display: flex;
                justify-content: center;
                color:rgb(54, 93, 218);
                font-style: bold;
                font-weight: 700;
                padding-top:0px;
                font-size: 40px;
                font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .menu{
                display: flex;
                justify-content: center;
            }
            .menu-bar {
            border-radius: 25px;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            display: inline-flex;
            background-color: rgba(0, 0, 0, 0.4);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            align-items: center;
            padding: 0 10px;
            }
            .menu-bar li {
            list-style: none;
            color: white;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 12px 16px;
            font-size:15px;
            margin: 0 8px;
            position: relative;
            cursor: pointer;
            white-space: nowrap;
            }
            .menu-bar li::before {
            content: " ";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
            transition: 0.2s;
            border-radius: 25px;
            }
            .menu-bar li:hover {
            color: black;
            }
            .menu-bar li:hover::before {
            background: linear-gradient(to bottom, #e8edec, #d2d1d3);
            box-shadow: 0px 3px 20px 0px black;
            transform: scale(1.2);
        }
    </style>
  </head>
  <body>
  <div>
    <center><img class="image" src="images/jail logo.png"></center>
    <div class="logo">JAIL DEPARTMENT</div>
    <div class="menu">
        <ul class="menu-bar">
            <a href="home.php"><li>HOME</li></a>
            <a href="about_us.php"><li>ABOUT US</li></a>
            <a href="contact_us.php"><li>CONTACT US</li></a>
            <li>SETTINGS</li>
      </ul>
     </div>
    </div>
    <div class="container my-5">
     <form method="post">
      <div class="mb-3">
        <label>Job Name</label>
        <input type="text" class="form-control" placeholder="Enter the name of Job" name="job_name" value=<?php echo $jo_name;?> >
      </div>
      
      <div class="mb-3">
        <label>Salary</label>
        <input type="number" min="10000" class="form-control" placeholder="Enter the salary" name="salary" value=<?php echo $salary;?>>
      </div>
      <div class="mb-3">
        <label>Jail ID</label>
        <input type="number" min="1" class="form-control" placeholder="Enter the ID of jail" name="jail_id"value=<?php echo $j_id;?>>
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
     </form>
   </div>
    
  </body>
</html>