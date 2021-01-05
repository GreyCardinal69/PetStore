<?php include 'inc/header.php' ?>
<!--header-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mt-4 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Address</h2>
  </div>
</div>
<!--Info-->
<div class="row">
  <div class="col-2"></div>
  <div class="col-8 mt-5 mb-5">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Address:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Avan, Duryan 45/38"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">City:</p></td>
          <td class="border-dark" style="width: 50%;"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Erevan"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Zip:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Some Zip"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">First Name:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mikayel"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Last Name:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kananov"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-2"></div>
  <a href="alles.php" class="btn btn-outline-dark ml-auto mr-5 mb-4 <?php active('alles.php');?>">Place order</a>
</div>
</div>
<!--Footer-->
<?php include 'inc/footer.php' ?>