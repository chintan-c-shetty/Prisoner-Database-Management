<!doctype html>
<?php
     include 'connect.php';
?>
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
    <div class="container">
        <button class="btn btn-primary my-5"><a href="lawyer.php" class="text-light">add lawyer</a></button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">LAWYER ID</th>
        <th scope="col">LAWYER NAME</th>
        <th scope="col">AGE</th>
        <th scope="col">CITY</th>
        <th scope="col">STATE</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        $sql="Select * from `lawyer`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $l_id=$row['LAWYER_ID'];
                $name=$row['LAWYER_NAME'];
                $age=$row['AGE'];
                $city=$row['CITY'];
                $state=$row['STATE'];
                echo '
                <tr>
                <td>'.$l_id.'</td>
                <td>'.$name.'</td>
                <td>'.$age.'</td>
                <td>'.$city.'</td>
                <td>'.$state.'</td>
                <td>
                    <button class="btn btn-primary"><a href="update_lawyer.php?updateid='.$l_id.'" class="text-light">UPDATE</a></button>
                    <button class="btn btn-danger"><a href="delete_lawyer.php?deleteid='.$l_id.'" class="text-light">DELETE</a></button>
                </td>
                </tr>';
            }
        }
        ?>
    </tbody>
    </table>
    </body>
</html>