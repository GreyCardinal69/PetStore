<?php include 'inc/header.php' ?>
<!--header-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mt-5 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-3 mb-3">Order Preview</h2>
  </div>
</div>
<!--Info-->
<div class="row">
  <div class="col-12">
   <table class="table table-bordered table-sm justify-content-center mt-5 mb-5">
    <thead>
      <tr>
        <th class="d-none d-sm-block col align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Image</p></div></th>
        <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Name</p></div></th>
        <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Price</p></div></th>
        <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Quantity</p></div></th>
      </tr>
    </thead>
          <?php $random = rand(1,5);$result = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row = mysqli_fetch_array($result);
      $random2 = rand(1,5);$result2 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row2 = mysqli_fetch_array($result2);     
       $random3 = rand(1,5);$result3 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row3 = mysqli_fetch_array($result3);?>
    <tbody>
      <tr>
        <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row3['img'])) {echo $row3['img'];} else {echo 'empty.png';} ?>"></div></th>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row3['name'] ?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row3['price'].'֏'?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,10); ?></p></div></td>
      </tr>
      <tr>
        <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row['img'])) {echo $row['img'];} else {echo 'empty.png';} ?>"></div></th>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['name'] ?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['price'].'֏'?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,10); ?></p></div></td>
      </tr>
      <tr>
        <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row2['img'])) {echo $row2['img'];} else {echo 'empty.png';} ?>"></div></th>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['name'] ?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['price'].'֏'?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,10); ?></p></div></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mt-3 mb-2 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Payment Information</h2>
  </div>
</div>
<!--Info-->
<div class="row">
</div>
<div class="row">
  <div class="col"></div>
  <div class="col-9 col-sm-9 col-md-9 mt-5 mb-5">
    <table class="table table-bordered border-success">
      <tbody >
        <tr >
          <td class="border-dark text-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Credit Card Number:</p></div></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">1234-2345-3456-4567</p></div></td>
          <tr>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Expire Date:</p></div></td>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">07/2022</p></div></td>
          </tr>
          <tr>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">CVC:</p></div></td>
            <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">2234</p></div></td>
          </tr>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Card Name:</p></div></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">VISA</p></div></td>
        </tr>
        <tr>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Credit Card:</p></div></td>
          <td class="border-dark align-middle">

            <div class="justify-content-around d-flex">
              <img src="img/1.png" style="max-width: 120px">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col"></div>
</div>
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex border-bottom border-top mb-2 justify-content-center align-items-center border-dark">
    <h2 class="mr-auto ml-auto mt-4 mb-4">Shipping</h2>
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
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Avan, Duryan 45/38</p></div></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">City:</p></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Erevan</p></div></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Zip:</p></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">ZIP</p></div></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">First Name:</p></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Mikayel</p></div></td>
        </tr>
        <tr>
          <td class="border-dark" colspan="4"><p class="m-2">Last Name:</p></td>
          <td class="border-dark align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="m-2">Kananov</p></div></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-2"></div>
</div>
<div class="row">
  <div class="col-12 justify-content-center d-flex text-Bold border-dark border-bottom border-top mb-2">
    <hr>
    <h2 class="mb-4 mt-4"><?php echo $row3['price'] + $row2['price'] + $row['price'].'֏'; ?></h2>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 justify-content-center d-flex text-Bold">
    <a href="endline.php" class="btn btn-outline-dark ml-auto mr-5 mb-4 mt-4 <?php active('endline.php');?>">Check Out</a>
  </div>
</div>
</div>
<!--footer-->
<?php include 'inc/footer.php' ?>