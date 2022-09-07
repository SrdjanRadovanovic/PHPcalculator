<?php
include "includes/calc.inc.php";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculator = new Calc($num1, $num2, $cal);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- JavaScript Bundle with Popper -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body>
  <style>

    #num1 {
      width: 80%;
    }
    #num2 {
      width: 80%;
    }
    #cal {
      width: 80%;
    }
    .formbackground {
      background-color: black;
      color: aqua;
      text-align: center;
      padding-top: 50px;
      padding-bottom: 50px;
      border: 5px solid aqua;
      font-size: 50px;
    }

  </style>
  <div class="container">
    <div class="row">
      <center><div class="col-6">
        <center><h1>Result:</h1></center>
        <div class="formbackground">
       <?php echo $calculator->calcMethod(); ?>
        </div>
      </div></center>
    </div>
  </div>
</body>
</html>