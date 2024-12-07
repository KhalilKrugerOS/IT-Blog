<?php
session_start();
include('connection.php');
include('functions.php');

if( $_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        if(!empty($full_name) && !empty($password) && !is_numeric($full_name))
        {   
            $query = "  SELECT *
                        FROM bloggers
                        WHERE full_name='$full_name' limit 1";
            $result = mysqli_query($con, $query);
            
            if($result) {
                if ($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if ( $user_data['password'] === $password) {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "wrong username or password";

        }
        else
        {
            echo "please enter valid information !";
        }   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
    href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet"
    />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css" /> 

    <script
    type="module"
    src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
    nomodule=""
    src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <title>login</title>
</head>

<body>
    <header class="header">
        <a href="index.html" id="logo">
        <h1><strong><em>IT.Experts.Blog</em></strong></h1>
        </a>
        <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="index.html">Home</a></li>
            <li><a class="main-nav-link" href="Write.html">Write</a></li>
            <li><a class="main-nav-link" href="#">Blogs</a></li>
            <li><a class="main-nav-link" href="#">About</a></li>
        </ul>
        </nav>
    </header>
    <main>
        
    <div class="wrapper">
        <div class="form-box login form">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"> <ion-icon name="mail-outline"></ion-icon> </span>
                    <input name="email" type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                    <input name="password" type="password" name="password" required>
                    <label for="">password</label>
                </div>
                <div class="remember-forgot">
                    <label for="">
                        <input type="checkbox" class="check" name="" id="">
                        remember me
                    </label>
                    <a href="">forgot your password?</a>
                </div>
                <button type="submit" value="login" class="login-btn btn btn-success">
                        Login
                </button>
                <div class="register">
                        don't have an account ? <a href="./signup.php">
                            Register
                        </a>
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="wrapper">
        <div class="form-box login">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"> <ion-icon name="mail-outline"></ion-icon> </span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box both">
                    <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span>
                    <input type="text" name="email" required>
                    <label for="email">First Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                    <input type="password" required>
                    <label for="">password</label>
                </div>
                <div class="remember-forgot">
                    <label for="">
                        <input type="checkbox" class="check" name="" id="">
                        I accept all terms & conditions
                    </label>
                </div>
                <button type="submit" class="login-btn btn btn-success">
                        Sign Up
                </button>
                <div class="register">
                        Already a blogger ? <a href="./login.php">
                            log in
                        </a>
                </div>
            </form>
        </div>
    </div> -->

    </main>
    <footer class="footer" style="margin: none;padding: none;">
        <div class="container grid grid--footer">
            <div class="logo-col">
                <p class="copyright">
                Copyright &copy; 2023 <br> by Khalil and Mouadh, <br>All rights reserved.
            </p>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>