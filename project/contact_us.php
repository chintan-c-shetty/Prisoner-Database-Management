<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAIL DATABASE</title>
    <style>
           a{
            text-decoration:none;
           }
           p{
            color:white;
            font-size:15px;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
                padding-top: 0px;
                font-size: 40px;
                font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .menu{
                display: flex;
                justify-content: center;
            }
            body {
            background:url('images/JAIL.jpg') center/cover no-repeat;
            height: 100vh;
            margin: 0;
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
            margin: 0 8px;
            font-size:15px;
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
          
        .mesh{
                display:grid;
                grid-template-columns: 1fr;
                row-gap: 15px;
                column-gap: 15px;
                margin: 100px;

        }
       .cards
        {
            background-color: rgba(0, 0, 0, 0.5);

            padding:20px;
            border-radius: 30px;

        }
        .description{
            color:rgb(181, 187, 187);;
            font-style: bold;
            font-size:20px;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .button_container{
            margin:30px;
        }
        .b {
        cursor: pointer;
        position: relative;
        padding: 10px 24px;
        font-size: 10px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color:rgb(181, 187, 187);
        border: 2px solid rgb(181, 187, 187);
        border-radius: 34px;
        background-color: transparent;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
        }

        .b::before {
        content: '';
        position: absolute;
        inset: 0;
        margin: auto;
        width: 50px;
        height: 50px;
        border-radius: inherit;
        scale: 0;
        z-index: -1;
        background-color:rgb(181, 187, 187);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .b:hover::before {
        scale: 3;
        }

        .b:hover {
        color: #212121;
        scale: 1.1;
        box-shadow: 0 0px 20px rgba(181, 187, 187,0.4);
        }

        .b:active {
        scale: 1;
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
    <div class="mesh">
        <div class="cards">
             <center class="description">CONTACT US</center>
             <p>ABHISHEK K - abhishekkotari2003@gmail.com</p>
             <p>ABHISHEK JY - abhishekjy155@gmail.com</p>
             <p>DHANUSH HM - dhanushmanderi@gmail.com</p>
             <p>CHINTAN C SHETTY - dhanushmanderi@gmail.com</p>
        </div>
    </div>
</body>
</html>