<?php

// soal no.1
$myArray = [10, 11];
$n;
$hasil;

if (isset($_POST["submit"])) {
    $n = $_POST["fibonanci"];

    for ($i = 0; $i < $n - 2; $i++) {
        $myArray[$i + 2] = $myArray[$i] + $myArray[$i + 1];
    }
}
// akhir soal no.1

// soal no.2
$wadah = 1;
$n = 0;
if (isset($_POST["submit1"])) {
    $n      = $_POST["angka"];


    for ($i = $n; $i > 0; $i--) {
        $wadah = $wadah * $i;
    }
} else {
    $wadah = 0;
}
// akhir soal no.2

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Test 1</title>
</head>

<body>


    <!-- SOAL NO.2 -->
    <section class="soal">
        <h5>Soal No.2</h5>
        <div class="container">
            <h3>Aplikasi Faktorial Sederhana</h3>
        </div>

        <div class="container">
            <div class="row">

                <div class="aplikasi mx-auto">
                    <form action="" method="POST" class="form-inline">
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-form-label">Faktorial</label>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="angka" class="form-control" placeholder="angka">
                        </div>
                        <button type="submit" name="submit1" class="btn btn-primary mb-2">hitung</button>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="jawaban mx-auto">
                    <h5>Jawaban :</h5>
                </div>
            </div>
            <div class="row">
                <div class="hasil mx-auto">
                    <h3><?= $n . "!=" . $wadah; ?></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR SOAL NO.2 -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>