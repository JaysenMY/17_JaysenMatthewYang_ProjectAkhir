<?php
include 'connect.php';

$id = $_GET['id'];

$data = mysqli_query($connect, "SELECT * FROM data WHERE id='$id'");
while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data | Maison Verre</title>

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
        }

        .brand-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-title h1 {
            font-size: 36px;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .brand-title p {
            color: #666;
        }

        .back {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back a {
            padding: 8px 15px;
            background: #dedede;
            border-radius: 10px;
            text-decoration: none;
            color: #222;
            transition: 0.3s;
        }

        .back a:hover {
            background: #c9c9c9;
        }

        .update-box {
            background: #fff;
            padding: 40px 50px;
            width: 420px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .update-box h2 {
            margin-bottom: 25px;
            font-size: 22px;
            color: #222;
        }

        .update-box label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            margin-top: 12px;
            font-size: 14px;
        }

        .update-box input, .update-box select {
            width: 100%;
            padding: 11px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-bottom: 10px;
            outline: none;
        }

        .update-box input:focus, .update-box select:focus {
            border-color: #000;
        }

        .update-box button {
            width: 100%;
            padding: 12px;
            border: none;
            background: #111;
            color: white;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }

        .update-box button:hover {
            background: #000;
        }
    </style>
</head>
<body>

    <div class="back">
        <a href="index.php">← Back</a>
    </div>

    <div class="brand-title">
        <h1>MAISON VERRE</h1>
        <p>Edit Your Details</p>
    </div>

    <div class="update-box">
        <h2>Edit Information</h2>

        <form method="POST" action="ubah.php">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label>Name</label>
            <input type="text" name="name" value="<?php echo $d['name']; ?>" required>

            <label>Age</label>
            <input type="number" name="age" value="<?php echo $d['age']; ?>" required>

            <label>Gender</label>
            <select name="gender" required>
                <option value="Male" <?php if($d['gender']=="Male") echo "selected"; ?>>Male</option>
                <option value="Female" <?php if($d['gender']=="Female") echo "selected"; ?>>Female</option>
            </select>

            <label>Height (cm)</label>
            <input type="number" name="tinggi" value="<?php echo $d['tinggi']; ?>" required>

            <label>Style</label>
            <input type="text" name="gaya" value="<?php echo $d['gaya']; ?>" required>

            <button type="submit">Save Changes</button>

        </form>
    </div>
    <?php
    }?>
    <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
    </footer>
</body>
</html>
