<?php include 'inc/header.php' ?>
<!--header-->
<?php $result=select('products',$_GET['id']);$r=mysqli_fetch_object($result);?>
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
    <tbody>
      <tr>
        <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"></div></th>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $r->name; ?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $r->price; ?></p></div></td>
        <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,10); ?></p></div></td>
      </tr>
      <?php $random = rand(1,5);$result = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row = mysqli_fetch_array($result);
      $random2 = rand(1,5);$result2 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row2 = mysqli_fetch_array($result2);?>
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
  <div class="col-12 justify-content-center d-flex text-Bold border-dark border-bottom border-top mb-2">
    <hr>
    <h2 class="mb-4 mt-4"><?php echo $r->price + $row2['price'] + $row['price'].'֏'; ?></h2>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12 justify-content-center d-flex text-Bold">
    <a href="payment.php" class="btn btn-outline-dark ml-auto mr-5 mb-4 mt-4 <?php active('payment.php');?>">Check out</a>
  </div>
</div>
</div>
<!--footer-->
<?php include 'inc/footer.php' ?>