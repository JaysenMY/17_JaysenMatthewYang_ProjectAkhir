<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Verre | Data List</title>

    <style>


        .brand-title {
            text-align: center;
            margin-bottom: 25px;
        }
        
        table {
            width: 100%;
            max-width: 800px;     /* << Reduce maximum width */
            border-collapse: collapse;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            margin: 0 auto;       /* << Center table */
        }

        body {
            margin: 0;
            padding: 40px 15px;    /* << Add side padding so table doesn’t touch edges */
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e8e8e8, #ffffff);
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }


        .brand-title h1 {
            font-size: 38px;
            letter-spacing: 2px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .brand-title p {
            color: #666;
            font-size: 15px;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 20px;
            font-size: 17px;
            text-decoration: none;
            background: #111;
            color: #fff;
            padding: 10px 20px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background: #000;
        }

        th {
            background: #111;
            color: #fff;
            padding: 14px;
            font-size: 16px;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: center;
            font-size: 15px;
        }

        tr:hover td {
            background: #f8f8f8;
        }

        .action-btn {
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 8px;
            font-size: 14px;
            margin: 0 3px;
            color: white;
        }

        .update-btn {
            background: #0077ff;
        }

        .delete-btn {
            background: #e60023;
        }

        .update-btn:hover {
            background: #005fcc;
        }

        .delete-btn:hover {
            background: #b8001c;
        }
    </style>

</head>
<body>

    <div class="brand-title">
        <h1>MAISON VERRE</h1>
        <p>Where confidence meets style</p>
    </div>

    <a href="tambah.php" class="add-btn">+ Add New Data</a>
 
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Height</th>
            <th>Style</th>
            <th>Actions</th>
        </tr>

        <?php
        include 'connect.php';
        $data = mysqli_query($connect, "SELECT * FROM data");

        while ($d = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $d["name"]; ?></td>
                <td><?php echo $d["age"]; ?></td>
                <td><?php echo $d["gender"]; ?></td>
                <td><?php echo $d["tinggi"]; ?></td>
                <td><?php echo $d["gaya"]; ?></td>
                <td>
                    <a class="action-btn update-btn" href="update.php?id=<?php echo $d["id"]; ?>">Update</a>
                    <a class="action-btn delete-btn" href="delete.php?id=<?php echo $d["id"]; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
    </footer>

</body>
</html>
