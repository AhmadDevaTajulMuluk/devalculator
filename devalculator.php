<!-- Nama    : Ahmad Deva Tajul Muluk
    NIM     : 2204737
    Kelas   : RPL-4A -->

<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if(isset($_POST['num'])) {
    if ($_POST['num'] == 'C') {
        $angka_input = "";
    } else {
        $angka_input = $_POST['input'].$_POST['num'];
    }
} else {
    $angka_input = "";
}

if(isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
    $angka_input = "";
}

if(isset($_POST['equal'])) {
    $angka_input = $_POST['input'];
    switch($_COOKIE['op']) {
        case "+":
            $hasil = $_COOKIE['num'] + $angka_input;
            break;
        case "-":
            $hasil = $_COOKIE['num'] - $angka_input;
            break;
        case "*":
            $hasil = $_COOKIE['num'] * $angka_input;
            break;
        case "/":
            $hasil = $_COOKIE['num'] / $angka_input;
            break;
    }
    $angka_input = $hasil;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devalculator</title>
    <style>
        body {
            background: linear-gradient(45deg, #FFA07A, #FFD700);
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calc {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 50px auto;
            margin-bottom: 20px;
            padding-top: 30px;
            padding-bottom: 30px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .maininput {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            height: 60px;
            width: calc(100% - 22px);
            font-size: 36px;
            text-align: right;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }

        .btn {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            color: #333;
            font-size: 24px;
            padding: 15px 20px;
            margin: 5px;
            width: calc(25% - 10px);
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .equal {
            background-color: #FFA500;
            color: #fff;
        }

        .equal:hover {
            background-color: #FF8C00;
        }

        .operator {
            background-color: #FF4500;
            color: #fff;
        }

        .operator:hover {
            background-color: #FF6347;
        }

        .clear {
            background-color: #FF6347;
            color: #fff;
        }

        .clear:hover {
            background-color: #FF4500;
        }
        
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <input type="text" class="maininput" name="input" value="<?php echo @$angka_input ?>"> <br> <br>
            <div class="btn-container">
                <input type="submit" class="btn" name="num" value="7">
                <input type="submit" class="btn" name="num" value="8">
                <input type="submit" class="btn" name="num" value="9">
                <input type="submit" class="btn operator" name="op" value="+"> <br><br>
                <input type="submit" class="btn" name="num" value="4">
                <input type="submit" class="btn" name="num" value="5">
                <input type="submit" class="btn" name="num" value="6">
                <input type="submit" class="btn operator" name="op" value="-"><br><br>
                <input type="submit" class="btn" name="num" value="1">
                <input type="submit" class="btn" name="num" value="2">
                <input type="submit" class="btn" name="num" value="3">
                <input type="submit" class="btn operator" name="op" value="*"><br><br>
                <input type="submit" class="btn clear" name="num" value="C">
                <input type="submit" class="btn" name="num" value="0">
                <input type="submit" class="btn equal" name="equal" value="=">
                <input type="submit" class="btn operator" name="op" value="/">
                <p>&copy; 2024 Ahmad Deva Tajul Muluk</p>
            </div>
        </form>
    </div>
</body>
</html>
