<?php
 @include 'connection.php';
 if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] == $row['name'];
            header('location:admin.php');
        }
        elseif($row['user_type'] == 'user'){
            header('location:home.php');
        }
    }else{
        $error[] = "incorrect email or password";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <!-- Custom Css file link  -->
     <link rel="stylesheet" href="Css/style.css">
     <style>
        .reg-form-container{
            min-height: 100vh;
            display: flex;
            align-items:center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-size: cover !important;
        }
        .reg-form-container .reg-form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background: #fff;
            text-align: center;
            width: 500px;
        }
        .reg-form-container .reg-form h3{
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #333;
        }
        .reg-form-container .reg-form input,
        .reg-form-container .reg-form select{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background: #eee;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        .reg-form-container .reg-form select option{
            background: var(--white);
        }
        .reg-form-container .reg-form .reg-btn{
            background: #fbd0d9;
            color: var(--main-color);
            font-size: 20px;
            cursor: pointer;
        }
        .reg-form-container .reg-form .reg-btn:hover{
            color: white;
            background: var(--main-color);
        }
        .reg-form-container .reg-form p{
            margin-top: 10px;
            font-size: 1.7rem;
        }
        .reg-form-container .reg-form p a{
            color: var(--main-color);
        }
        .log-head{
            font-size: 3rem;
            position: absolute;
            top: 10%;
            color: var(--white);

        }
     </style>
</head>
<body>
    <div class="reg-form-container" style="background:url(Images/hours100-1.jpg)">
        <form action="" method="post" class="reg-form">
            <h3>Yoga Studio Login Form</h3>
            <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            
            ?>
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <input type="submit" name="submit" value="Login Now" class="reg-btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>
    </div>
</body>
</html>