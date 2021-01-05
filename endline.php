<?php include 'inc/header.php' ?>
<!--header-->
<div class="row">
  <div class="col-12">
    <div class="alert alert-success mt-5 mb-5" role="alert">
      <hr>
      <div  class="justify-content-center d-flex mt-4">
        <img src="img/checkmark.png">
      </div>
      <div class="justify-content-center d-flex mt-4">
        <h4 class="alert-heading">Congratulations! Your order has been placed.</h4>
      </div>
      <hr>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="justify-content-center d-flex mb-5">
      <a href="index.php" class="text-decoration-none <?php active('index.php');?>"><button class="btn btn-outline-dark btn-lg btn-block">Home Page</button></a>
      <a href="myorders.php" class="ml-5 text-decoration-none <?php active('myorders.php');?>"><button class="btn btn-outline-dark btn-lg btn-block">View Order</button></a>
    </div>
  </div>
</div>
</div>
<!--footer-->
<?php include 'inc/footer.php' ?>