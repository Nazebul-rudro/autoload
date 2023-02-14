<?php
// include_once("./vendor/autoload.php");
// use cal\Sumfunction\sum;
// use cal\Sumfunction\sumfun;
// use cal\Multicaption\mul;
spl_autoload_register(function($masssing){
        include($masssing. ".php");
    });


// $num1 = $_POST['num1'] ?? "";
// $num2 = $_POST['num2'] ?? "";
// $op = $_POST['op'] ?? "";

$multicaptions = new multicaption;
$multicaptions -> multi();
echo $multicaptions -> name = "Rudhro";
// 
// $newmal = new mul;
// $newmal -> multicaption();
// echo $newmal->name =" Sakib";


// $totalsum = new sumfun (12, 6);
// echo $totalsum -> get_sum();
// $totalsum -> sum($number1, $number2);
// echo $totalsum -> number1 = 10;
// echo $totalsum -> number2 = 20;
// $totalsum -> number1 = $num1;
// $totalsum -> number2 = $num2;

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body>
    
  <section class="col-md-4 offset-md-4 mt-5">
    
    <div class="card">
    <div class="card-body">
    <form action="" method="post" class="">
    <h2 class="py-4">Calculator</h2>
    <hr>
        <div class="my-3">
            <label for="num1" class="form-label">Number 1</label>
            <input type="number" name="num1" id="num1" class="form-control">
        </div>
        <div class="my-3">
            <select name="op" id="" class="form-select">
                <option selected>Open this select menu</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div class="my-3">
            <label for="num2" class="form-label">Number 2</label>
            <input type="number" name="num2" id="num2" class="form-control">
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" value="Calculate" class="btn btn-warning">
        </div>
    </form>
    <div class="d-flex justify-content-center mt-2">
        <p class="text-dark ">Result : </p>
    </div>
    </div>
    </div>
  </section>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>