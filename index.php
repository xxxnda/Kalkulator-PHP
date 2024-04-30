<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
    <!-- Link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        body{
           background-color: #f0f0f0;
           font-family: 'Poppins', sans-serif;
        }
        form{
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            margin: 0 auto; /* Center form horizontally */
            max-width: 500px; /* Limit form width for better readability */
            margin-top: 50px; /* Add some space from the top */
        }
        #jawab{
            padding: 30px;
            border-radius: 5px;
            text-align: center;
            background-color: #fff;
        }
        footer{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        bottom: 0;
        width: 100%;
        position: absolute;
        }
    </style>
</head>
<body>
    <div class="container">

        <form method="POST" >
        <h2>Kalkulator PHP</h2><br>
           <label>Masukan Angka Pertama: </label><br>
            <input type="number" name="fnum" placeholder="Angka Pertama" class="form-control">
            <br>
            <label>Masukan Angka Kedua: </label><br>
            <input type="number" name="snum" placeholder="Angka Kedua" class="form-control">
            <br>
            <label>Plih Operasi </label><br>
            <select name="operator" class="form-control">
                <option>Pilih Operasi</option>
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>/</option>
            </select>
            <br>
        <input type="submit" name="submit" value="Hitung" class="btn btn-success">
        <input type="reset" class="btn btn-danger" onclick="document.getElementById('jawab').innerHTML = '';">
        <br><br>
        <h4>Lihat Jawaban</h4>
        <div id="jawab">
            <?php 
            if (isset($_POST['submit'])) {
                $result1 = $_POST['fnum'];
                $result2 = $_POST['snum'];
                $sign = $_POST['operator'];

                switch ($sign) {
                    case 'Pilih Operasi':
                        echo "Silakan pilih di salah satu operator";
                        break;
                    case '+':
                        echo $result1 + $result2;
                        break;
                    case '-':
                        echo $result1 - $result2;
                        break;
                    case 'x':
                        echo $result1 * $result2;
                        break;
                    case '/':
                        echo $result1 / $result2;
                        break;
                }
            }
            ?>
            </form>
        </div>
    </div>    
    <footer>
        <p>&copy; 2024 - Amanda Jayanti Mulyana</p>
    </footer>
</body>
</html>