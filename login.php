<?php
session_start();
include 'connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM daftar WHERE username='$username'";
    $result = mysqli_query($connect, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        header("Location: data.php");
        exit();
    } else {
        echo "<script>alert('Incorrect username or password! Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Maison Verre</title>
    <style>
        /* General Page Setup */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e8e8e8, #ffffff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #222;
        }

        /* Header / Brand Title */
        .brand-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-title h1 {
            font-size: 36px;
            letter-spacing: 2px;
            color: #111;
        }

        .brand-title p {
            font-size: 15px;
            color: #666;
        }

        /* Login Container */
        .login-box {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 30px;
            color: #222;
            letter-spacing: 1px;
        }

        /* Form Inputs */
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            transition: border-color 0.3s;
            outline: none;
        }

        .login-box input:focus {
            border-color: #000;
        }

        /* Login Button */
        .login-box button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 12px;
            margin-top: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-box button:hover {
            background-color: #000;
        }

        /* Register Text */
        .login-box p {
            margin-top: 20px;
            font-size: 14px;
            color: #444;
        }

        .login-box a {
            color: #000;
            font-weight: 500;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
        }

        .login-box a:hover {
            border-bottom: 1px solid #000;
        }

        /* Back Home Button */
        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back-home a {
            text-decoration: none;
            color: #333;
            font-size: 15px;
            background-color: #f2f2f2;
            padding: 8px 16px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .back-home a:hover {
            background-color: #ddd;
        }

        /* Small screen responsiveness */
        @media (max-width: 500px) {
            .login-box {
                width: 90%;
                padding: 40px 25px;
            }
        }
    </style>
</head>
<body>
    <div class="back-home">
        <a href="home.php">← Back to Home</a>
    </div>

    <div class="brand-title">
        <h1>MAISON VERRE</h1>
        <p>Where confidence meets style</p>
    </div>

    <div class="login-box">
        <h2>Login to Your Account</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>New to Maison Verre? <a href="register.php">Create an account</a></p>
    </div>
    <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
    </footer>
</body>
</html>
