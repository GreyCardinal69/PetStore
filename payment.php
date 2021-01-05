<?php include 'inc/header.php' ?>
<!--header-->
<div class="row">
  <div class="col">
   <hr>
   <div class=" justify-content-center d-flex mt-3">
    <h3>Payment Information</h3>
  </div>
  <hr>
</div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col-9 col-sm-9 col-md-9 mt-3 mb-5">
    <table class="table table-bordered border-success">
      <tbody >
        <tr >
          <td class="border-dark text-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Credit Card Number:</p></div></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><input type="text" class="form-control text-dark" id="exampleInputPassword1" placeholder="1234-1234-1234-1234"></div></td>
          <tr>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Expire Date:</p></div></td>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="MM/YY"></div></td>
          </tr>
          <tr>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">CVC:</p></div></td>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Security Code"></div></td>
          </tr>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Card Name:</p></div></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name"></div></td>
        </tr>
        <tr>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Credit Card:</p></div></td>
          <td class="border-dark align-middle">

            <div class="justify-content-around d-flex">
              <img src="img/1.png" style="max-width: 60px">
              <img src="img/2.png" style="max-width: 60px">
              <img src="img/3.png" style="max-width: 60px">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col"></div>
</div>
<div class="row">
  <a href="shipping.php" class="btn btn-outline-dark ml-auto mr-5 mb-4 <?php active('shipping.php');?>">Shipping</a>
</div>
</div>
<!--footer-->
<?php include 'inc/footer.php' ?>