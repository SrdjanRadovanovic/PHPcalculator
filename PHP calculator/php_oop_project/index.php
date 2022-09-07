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
      text-align: center;
      padding-top: 50px;
      padding-bottom: 20px;
      border: 5px solid aqua;
    }
    .container {
      
    }

  </style>
  <div class="container">
    <div class="row">
      <center><div class="col-6">
        <center><h1>Calculator</h1></center>
        <div class="formbackground">
        <form class="form-group" id="form" action="calc.php" method="POST">
          <center><input class="form-control" id="num1" type="text" name="num1" placeholder="Number 1"></center><br>
          <center><input class="form-control" id="num2" type="text" name="num2" placeholder="Number 2"></center><br>
          <center><select class="form-select" id="cal" name="cal">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multyply</option>
          </select></center><br>
          <button class="btn btn-outline-info" type="submit">Calculate</button>
        </form>
        </div>
      </div></center>
    </div>
  </div>
</body>
</html>