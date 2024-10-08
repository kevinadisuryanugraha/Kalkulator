<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: bisque;
        }

        .card {
            background-color: rgb(35, 35, 57);
            border-radius: 10px;
            width: 25%;
            padding: 1rem;
            position: absolute;
            left: 50%;
            top:50%;
            transform: translate(-50%, -50%);
        }

        .card h1 {
            text-align: center;
            font-family: sans-serif;
            color: white;
            padding: 1rem;
        }

        .card .form input {
            display: flex;
            width: 95%;
            height: 2rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            font-size: 20px;
        }

        .card .form select {
            width: 70%;
            height: 2.5rem;
            border-radius: 5px;
            float: left;
            margin-right: 1rem;
        }

        .card .form #button {
            width: 20%;
            height: 2.5rem;
            display: flex;
            border: none;
            font-size: 15px;
            font-weight: bold;
            background-color: red;
            color: white;
            cursor: pointer;
        }
    </style>

    <!-- Proses Hitung -->
    <?php
    if (isset($_POST['hitung'])){
        $bilangan_1 = $_POST['bilangan_1'];
        $bilangan_2 = $_POST['bilangan_2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bilangan_1+$bilangan_2;
            break;
            case 'kurang':
                $hasil = $bilangan_1-$bilangan_2;
            break;
            case 'bagi':
                $hasil = $bilangan_1/$bilangan_2;
            break;
            case 'persen':
                $hasil = $bilangan_1%$bilangan_2;
            break;
            case 'kali':
                $hasil = $bilangan_1*$bilangan_2;
            break;
        }
    }
    ?>
</head>

<body>
    <div class="card">
        <h1>KALKULATOR</h1>
        <div class="form">
            <form action="kalkulator.php" method="POST">
                <input type="number" name="bilangan_1" placeholder="Masukkan Angka" required>
                <input type="number" name="bilangan_2" placeholder="Masukkan Angka" required>
                <select id="operasi" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="bagi">/</option>
                    <option value="persen">%</option>
                    <option value="kali">*</option>
                </select>
                <input type="submit" name="hitung" id="button" value="Hitung" required>
            </form>
            <!-- Ini proses hasil -->
            <?php if(isset($_POST['hitung'])){ ?> 
                <input type="number" value="<?php echo $hasil; ?>" class="hasil">
            <?php }else{ ?>
                <input type="number" value="0" class="hasil">
            <?php } ?>
        </div>
    </div>
</body>

</html>