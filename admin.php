<?php

@include 'connection.php';

 session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <!-- Custom Css file link  -->
     <link rel="stylesheet" href="Css/style.css">
     <style>
        .admin-container{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-size: cover !important;
        }

        .admin-container .admin-content{
            text-align: center;
        }
        
        .admin-container .admin-content h3{
            font-size: 3rem;
            color: var(--main-color);
        }
        
        .admin-container .admin-content h3 span{
            background: var(--main-color);
            color: var(--white);
            border-radius: 5px;
            padding: 0 15px;
        }
        
        .admin-container .admin-content h1{
            font-size: 6rem;
            color: var(--white);
        }
        
        .admin-container .admin-content h1 span{
            color: var(--main-color);
        }

        .admin-container .admin-content p{
            font-size: 20px;
            color: var(--black);
            margin-bottom: 20px;
        }
        
        .admin-container .admin-content .formbtn{
           display: inline-block;
           padding: 10px 30px;
           font-size: 20px;
           background: #333;
           color: #fff;
           margin: 0 5px;
           text-transform: capitalize;
        }
        
        .admin-container .admin-content .formbtn:hover{
            background: var(--main-color);
        }

     </style>
</head>
<body>
    <div class="admin-container" style="background:url(Images/hours100-1.jpg)">
        <div class="admin-content">
            <h3>hi, <span>admin</span></h3>
            <h1>Welcome <span></span></h1>
            <p>This is an admin page</p>
            <a href="user-login.php" class="formbtn">login</a>
            <a href="register.php" class="formbtn">register</a>
            <a href="logout.php" class="formbtn">logout</a>
        </div>
    </div>
</body>
</html>