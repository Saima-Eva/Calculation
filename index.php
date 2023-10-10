<?php
    $add=null;
    if(isset($_POST['submit_btn'])){
      $number1 = $_POST['first_no'];
      $number2 = $_POST['second_no'];

      $add = $number1 + $number2;
    }
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Calculation</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <!--  form start -->
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <br>
  <div class="row">
    <div class="col-12">
      <label for="first_no">Enter your first number</label><br>
      <input type="number" id="first_no" name="first_no" class="form-control first_no" placeholder="First Number">
    </div>
    <br><br><br><br>
    <div class="col-12">
    <label for="second_no">Enter your Second number</label><br>
      <input type="number" id="second_no" name="second_no" class="form-control second_no" placeholder="Second Number">
    </div>

    <br><br><br><br>
    <div class="col-12">
    <!-- <input type="submit" name="submit_btn" class="form-control submit" value="submit"> -->
    <button type="submit" name="submit_btn" class="btn btn-danger">Submit</button>
    <button type="reset" class="btn btn-dark">Reset</button>
    </div>

    </div>
    <br>
  </div>
</form>
       <!--  form end -->

       <div><?php
           echo $add;
       ?></div>
      </div>
    </div>
  </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>