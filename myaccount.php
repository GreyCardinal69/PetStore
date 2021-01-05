<?php include 'inc/header.php' ?>
<!--Header-->
<!--Bread-->
<div class="row mt-3">
  <div class="col-md-12 d-md-block bg-dark text-light pt-4 pb-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="index.php" class="pl-1 text-decoration-none"><li class="breadcrumb-item"><a class="text-decoration-none text-dark <?php active('index.php');?>" href="index.php">Home /</a></li></a>
        <a href="myaccount.php"  class="pl-1 text-decoration-none <?php active('myaccount.php');?>"><li class="breadcrumb-item active text-primary" aria-current="page">Account Settings /</li></a>
        <a href="myorders.php" class="pl-1 text-decoration-none"><li class="breadcrumb-item <?php active('myorders.php');?>"><a class="text-decoration-none text-dark" href="myorders.php">My Orders</a></li></a>
      </ol>
    </nav>
  </div>
</div>
<!--Bread-->
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mt-4 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Account Info</h2>
  </div>
</div>
<!--Info-->
<div class="row">
  <div class="col-12 col-sm-12 col-md-3">
    <img class="img-thumbnail rounded mx-auto mt-5 d-block img-fluid border-dark" style="max-height: 80%; max-width: 80%" src="img/CTG_Flag_2.png">
    <a href=""> <button class="btn btn-outline-dark w-100 mt-4">Change Profile Picture</button></a>
  </div>
  <div class="col-12 col-sm-12 col-md-9 mt-4">
    <table class="table table-bordered border-success">
      <tbody >
        <tr >
          <td class="border-dark text-dark"><p class="m-2">Username:</p></td>
          <td class="border-dark"><input type="text" class="form-control text-dark" id="exampleInputPassword1" placeholder="Mikayel"></td>
          <tr>
            <td class="border-dark"><p class="m-2">Email:</p></td>
            <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bootstrap_PHP@mail.ru"></td>
          </tr>
          <tr>
            <td class="border-dark"><p class="m-2">Phone Number:</p></td>
            <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="(+374) 07-09-69-**"></td>
          </tr>
          <td class="border-dark"><p class="m-2">Gender:</p></td>
          <td class="border-dark"> <select class="custom-select">
            <option selected>Male</option>
            <option value="1">Female</option>
          </select></td>
        </tr>
        <tr>
          <td class="border-dark"><p class="m-2">Password:</p></td>
          <td class="border-dark"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="***********"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mt-4 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Address</h2>
  </div>
</div>
<!--Info-->
<div class="row">
  <div class="col-2"></div>
  <div class="col-8 mt-5">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Address:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Avan, Duryan 45/38"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Address 2:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="1622 E Ayre St"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">City:</p></td>
          <td class="border-dark" style="width: 50%;"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Erevan"></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">State:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Armenia"></td>
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
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Middle Name:</p></td>
          <td class="border-dark"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="*********"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-2"></div>
</div>
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-dark border-top mt-4 justify-content-center align-items-center">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Payment</h2>
  </div>
</div>
<!--Info-->
<div class="col-12">

  <form>
    <div class="row mt-5">
      <div class="col"></div>
      <div class="form-group col-md-4 col-12 col-sm-12">
        <div class="justify-content-center d-flex"><label for="inputEmail4">Credit Card Number</label></div>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="1234-1234-1234-1234">
      </div>
      <div class="col"></div>
    </div>
    <div class="row">
      <div class="col-4"></div>
      <div class="form-group col-md-2 col-12 col-sm-12">
        <div class="justify-content-center d-flex"><label for="inputEmail4">Expire Date</label></div>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="MM/YY">
      </div>
      <div class="form-group col-md-2 col-12 col-sm-12">
        <div class="justify-content-center d-flex align-items-center">      <label for="inputEmail4">CVC</label></div>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Security Code">
      </div>
      <div class="col-4"></div>
    </div>
    <div class="row">
      <div class="col"></div>
      <div class="form-group col-md-4 col-12 col-sm-12">
        <div class="justify-content-center d-flex"><label for="inputEmail4">Name On The Card</label></div>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
      </div>
      <div class="col"></div>
    </div>
  </form>
</div>
</div>
<!--Footer-->
<?php include 'inc/footer.php' ?>