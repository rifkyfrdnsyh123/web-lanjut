<!DOCTYPE html>
<html>
<head>
    <title>UDINUS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://4.bp.blogspot.com/-YWuX5LISxoI/WLw6WCBJBKI/AAAAAAAAC1c/xGnw4xF8tFw6oMgdf2Bip1dT7dN6PZ3WQCLcB/s1600/udinus-campus.jpg);
            
        }

        .container {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 410px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
        }

        h2 {
            text-align: center;
        }

        .hasil {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>UDINUS</h2>
        <div class="hasil">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nim = $_POST["nim"];
                $nama = $_POST["nama"];
                echo "NIM: " . $nim . "<br>";
                echo "Nama: " . $nama;
            } else {
                echo "Data tidak ditemukan.";
            }
            ?>
        </div>
    </div>
</body>
</html>
