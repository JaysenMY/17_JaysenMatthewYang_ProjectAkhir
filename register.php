<?php
include 'connect.php';

// Check if form submitted
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO daftar (name, username, age, gender, email, password)
              VALUES ('$name', '$username', '$age', '$gender', '$email', '$password')";

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
            alert('Registration Complete, Please Login.');
            window.location='login.php';
        </script>";
    } else {
        echo "<script>alert('Register Failed! Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Maison Verre</title>
    <style>
        body {
            margin: 0;
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e8e8e8, #ffffff);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            color: #222;
            overflow-y: auto;
        }

        .brand-title {
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
        }

        .brand-title h1 {
            font-size: 38px;
            letter-spacing: 2px;
            color: #111;
            margin-bottom: 5px;
        }

        .brand-title p {
            font-size: 15px;
            color: #666;
        }

        .register-box {
            background-color: #fff;
            padding: 45px 60px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
            margin-bottom: 60px;
        }

        .register-box h2 {
            margin-bottom: 25px;
            color: #222;
            letter-spacing: 1px;
        }

        .register-box form {
            text-align: left;
        }

        .register-box label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #333;
        }

        .register-box input[type="text"],
        .register-box input[type="number"],
        .register-box input[type="password"],
        .register-box input[type="email"],
        .register-box select {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s;
        }

        .register-box input:focus,
        .register-box select:focus {
            border-color: #000;
        }

        .register-box button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-box button:hover {
            background-color: #000;
        }

        .register-box p {
            margin-top: 20px;
            font-size: 14px;
            color: #444;
            text-align: center;
        }

        .register-box a {
            color: #000;
            font-weight: 500;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
        }

        .register-box a:hover {
            border-bottom: 1px solid #000;
        }

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

        @media (max-width: 500px) {
            body {
                padding: 20px 0;
            }

            .register-box {
                width: 90%;
                padding: 35px 25px;
            }

            .brand-title h1 {
                font-size: 30px;
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

    <div class="register-box">
        <h2>Create Your Account</h2>
        <form method="POST">
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="Enter your full name" required>

            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Choose a username" required>

            <label for="age">Age</label>
            <input type="number" name="age" placeholder="Your age" required>

            <label for="gender">Gender</label>
            <select name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="email">Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Create a password" required>

            <button type="submit" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
    </footer>
</body>
</html>
