<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="calculator rounded">
    <p class="title-calc pt-1">Kalkulator</p>
    <form action="" method="POST" class="p-2">
        <p>Masukkan bilangan 1</p>
        <input type="number" name="bilanganPertama" class="form-control">
        <p>Masukkan bilangan 2</p>
        <input type="number" name="bilanganKedua" class="form-control">
        <div class="row p-2">
            <div class="col-3">
            <button class="btn btn-primary" name="tambah">+</button>
            </div>
            <div class="col-3">
            <button class="btn btn-primary" name="kurang">-</button>
            </div>
            <div class="col-3">
            <button class="btn btn-primary" name="kali">*</button>
            </div>
            <div class="col-3">
            <button class="btn btn-primary" name="bagi">/</button>
            </div>           
        </div>
    </form>
    <div class="hasil">
        <p>Hasil :</p>
        <?php 
            include './proses/function.php';
            if(isset($_POST['bagi'])||isset($_POST['tambah'])||isset($_POST['kali'])||isset($_POST['kurang'])){
            $bil1 = $_POST['bilanganPertama'];
            $bil2 = $_POST['bilanganKedua'];
            if($bil2==''||$bil1==''){
                $bil1=null;
                $bil2=null;
                echo '<p>Anda belum memasukkan inputan dengan tepat</p>';
            }else{
                if(isset($_POST['tambah'])){
                    echo '<p>'.$bil1.' + '.$bil2. ' = '.penjumlahan($bil1,$bil2).'</p>';
                }else if(isset($_POST['kurang'])){
                    echo '<p>'.$bil1.' - '.$bil2. ' = '.pengurangan($bil1,$bil2).'</p>';
                }else if(isset($_POST['kali'])){
                    echo '<p>'.$bil1.' * '.$bil2. ' = '.perkalian($bil1,$bil2).'</p>';
                }else if(isset($_POST['bagi'])){
                    if($bil2==0){
                    echo '<p>'.$bil1.' / '.$bil2. ' = '.'Tidak Terdefinisi'.'</p>';
                    }
                    else{
                    echo '<p>'.$bil1.' / '.$bil2. ' = '.pembagian($bil1,$bil2).'</p>';
                    }
                }
            }
            }
        ?>
    </div>
    </div>   
</body>
</html>