<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Login - FoodTiger Admin Pannel</title>
         <style>
            body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #2c3e50, #34495e);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #ecf0f1;
    }
    .login {
        background: #2c3e50;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
        width: 300px;
    }

    .login h1 {
        color: #ecf0f1;
        margin-bottom: 20px;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #7f8c8d;
        border-radius: 5px;
        background: #34495e;
        color: #ecf0f1;
    }

    input[type="text"]::placeholder, input[type="password"]::placeholder {
        color: #95a5a6;
    }

    .btn-primary {
        background: #e74c3c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-primary:hover {
        background: #c0392b;
    }

    .text-center {
        color: #bdc3c7;
    }

    a {
        color: #e74c3c;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
         </style>
        <!-- <link rel="stylesheet" href="../css/admin.css"> -->
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>

            <p class="text-center">Created By - <a href="https://github.com/shefat2002">Shefat Al Mahmud</a></p>
        </div>

    </body>
</html>

<?php 

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        //COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;

            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>