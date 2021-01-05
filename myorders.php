<?php include 'inc/header.php' ?>
<!--Header-->
<!--Bread-->
<div class="row mt-3">
  <div class="col-md-12 d-md-block bg-dark text-light pt-4 pb-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="index.php" class="pl-1 text-decoration-none <?php active('index.php');?>"><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home /</a></li></a>
        <a href="myaccount.php" class="pl-1 text-decoration-none"><li class="breadcrumb-item <?php active('myaccount.php');?>"><a class="text-decoration-none text-dark" href="myaccount.php">Account Settings /</a></li></a>
        <a href="myorders.php"  class="pl-1 text-decoration-none"><li class="breadcrumb-item active text-primary <?php active('myorders.php');?>" aria-current="page">My Orders</li></a>
      </ol>
    </nav>
  </div>
</div>
<!--Bread-->
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex mt-4  mb-4 border-bottom border-top border-dark">
    <h2 class="mt-3 ml-auto mr-auto mb-3">My Orders</h2>
  </div>
</div>
<!--Info-->
<!--My ORders-->
<div class="row">
  <div class="col"></div>
  <div class="col-10">
    <table class="table table-bordered table-sm justify-content-center">
      <thead>
        <tr>
          <th class="d-none d-sm-block col align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Image</p></div></th>
          <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Name</p></div></th>
          <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Price</p></div></th>
          <th class="col-3 align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto">Quantity</p></div></th>
        </tr>
      </thead>
      <tbody>
     <?php $result = select('products');?>
      <?php $random = rand(1,5);$result = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row = mysqli_fetch_array($result);
      $random2 = rand(1,5);$result2 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row2 = mysqli_fetch_array($result2);
      $random3 = rand(1,5);$result3 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row3 = mysqli_fetch_array($result3)?>
        <tr>
          <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row['img'])) {echo $row['img'];} else {echo 'empty.png';} ?>"></div></th>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['name']; ?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['price'].'֏'?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,5)?></p></div></td>
        </tr>
        <tr>
         <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row2['img'])) {echo $row2['img'];} else {echo 'empty.png';} ?>"></div></th>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['name']; ?></p></div></td>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['price'].'֏'?></p></div></td>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,5);?></p></div></td>
       </tr>
       <tr>
        <div class="justify-content-center d-flex">
          <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row3['img'])) {echo $row3['img'];} else {echo 'empty.png';} ?>"></div></th>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row3['name']; ?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row3['price'].'֏'?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,5);?></p></div></td>
        </div>
      </tr>
    </tbody>
  </table>
</div>
<div class="col"></div>
</div>
<!--My ORders-->
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex mt-4  mb-4 border-bottom border-top border-dark">
    <h2 class="mt-3 ml-auto mr-auto mb-3">My Wishlist</h2>
  </div>
</div>
<!--Info-->
<!--My Wishlist-->
<div class="row">
  <div class="col"></div>
  <div class="col-10">
    <table class="table table-bordered table-sm justify-content-center">
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
         <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row2['img'])) {echo $row2['img'];} else {echo 'empty.png';} ?>"></div></th>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['name']; ?></p></div></td>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row2['price'].'֏'?></p></div></td>
         <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,5);?></p></div></td>
       </tr>
       <tr>
        <div class="justify-content-center d-flex">
          <th class="d-none d-sm-block mt-1"><div class="d-flex justify-content-center"><img style="max-width: 90px" src="img/<?php if(file_exists(getcwd().'/img/'.$row3['img'])) {echo $row3['img'];} else {echo 'empty.png';} ?>"></div></th>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['name']; ?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo $row['price'].'֏'?></p></div></td>
          <td class="align-middle"><div class="justify-content-center d-flex align-content-end flex-wrap"><p class="my-auto"><?php echo rand(1,5);?></p></div></td>
        </div>
      </tr>
     </tbody>
   </table>
 </div>
 <div class="col"></div>
</div>
<!--Info-->
<div class="row">
  <div class="col-md-12 d-flex mt-4  mb-4 border-bottom border-top border-dark">
    <h2 class="mt-3 ml-auto mr-auto mb-3">Recently Viewed</h2>
  </div>
</div>
<!--Info-->
<?php $resulte = mysqli_query($db,"SELECT name, img, meta FROM products;") ;
$rowse = mysqli_fetch_all($resulte, MYSQLI_ASSOC);
$ids = array_column($rowse, 'img');?>
<div class="row">
<?php for ($i=0; $i < 4; $i++): ?>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center mt-3">
    <div class="card mx-auto" style="width: 18rem;">
      <img src="img/<?php if(file_exists(getcwd().'/img/'.$ids[$i])) {echo $ids[$i];} else {echo 'empty.png';} ?>" class="card-img-top" alt="...">
      <div class="card-body">
       <div class="d-flex justify-content-center"> <h5 class="card-title "><?php echo $rowse[$i]['name']; ?></h5></div>
       <div class="d-flex justify-content-center"><a href="single.php" class="btn btn-primary <?php active('single.php');?>">More Info</a></div>
     </div>
   </div>
 </div>
<?php endfor; ?>
</div>
</div>
<!--My Wishlist-->
<!--Footer-->
<?php include 'inc/footer.php' ?>