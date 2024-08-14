<?php
 @include 'connection.php';
 if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    }else{
        if($password != $cpass){
            $error[] = 'password not match!';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$password','$user_type')";
            mysqli_query($conn, $insert);
            header('location:user-login.php');
        }
    }

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>

    <!-- Custom Css file link  -->
     <link rel="stylesheet" href="Css/style.css">
     <style>
        .reg-form-container{
            min-height: 100vh;
            display: flex;
            align-items:center;
            justify-content: center;
            padding: 20px;
            background-size: cover !important;
        }
        .reg-form-container .reg-form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background: #fff;
            text-align: center;
            width: 600px;
            /* margin: 2rem auto; */
        }
        .reg-form-container .reg-form h3{
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 5px;
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
        .reg-form-container .reg-form .error-msg{
            margin: 10px 0;
            display: block;
            background: var(--main-color);
            color: white;
            border-radius: 5px;
            font-size: 20px;
            padding: 10px;
        }
     </style>
</head>
<body>
    <div class="reg-form-container" style="background:url(Images/hours100-1.jpg)">
        <form action="" method="post" class="reg-form">
            <h3>Yoga Studio Registration Form</h3>
            <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="name" placeholder="enter your name" required>
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <input type="password" name="cpassword" placeholder="confirm your password" required>
            <select name="user_type" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="Register Now" class="reg-btn">
            <p>already have an account? <a href="user-login.php">login now</a></p>
        </form>
    </div>
</body>
</html>