<?php
include 'connect.php';

// When submit button is clicked
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $tinggi = $_POST['tinggi'];
    $gaya = $_POST['gaya'];

    // Insert into database
    $query = "INSERT INTO data (name, age, gender, tinggi, gaya)
              VALUES ('$name', '$age', '$gender', '$tinggi', '$gaya')";

    // Run query
    $result = mysqli_query($connect, $query);

    // Redirect if successful
    if ($result) {
        echo "<script>
                alert('Data successfully added!');
                window.location='data.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Failed to add data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Verre | Add New Entry</title>

    <style>
        body {
            margin: 0;
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e8e8e8, #ffffff);
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        form {
            width: 380px;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        label {
            font-size: 15px;
            margin-bottom: 5px;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            margin-bottom: 15px;
        }

        input:focus, select:focus {
            border-color: #111;
        }

        button {
            width: 100%;
            background: #111;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #000;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
            color: #111;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

    <h2>Add New Entry</h2>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your full name" required>

        <label>Age</label>
        <input type="number" name="age" placeholder="Enter your age" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Height (cm)</label>
        <input type="number" name="tinggi" placeholder="Insert Your Height" required>

        <label>Style</label>
        <input type="text" name="gaya" placeholder="Enter your style (e.g. Casual, Formal)" required>

        <button type="submit" name="register">Submit</button>
    </form>

    <a class="back-link" href="data.php">← Back to List</a>

    <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
    </footer>

</body>
</html>
