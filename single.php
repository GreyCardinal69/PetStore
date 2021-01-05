<?php include 'inc/header.php' ?>
<!--Header-->
<!--BreadCrumb-->
<?php $result=select('products',$_GET['id']);$r=mysqli_fetch_object($result);?>
<div class="row mt-3">
  <div class="col-md-6 d-none d-md-block d-sm-none bg-light mt-1 text-decoration-none bg-dark text-light pt-4 pb-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="product.php">Products</a></li>
        <li class="breadcrumb-item active text-primary" aria-current="page"><?php echo $r->name; ?></li>
      </ol>
    </nav>
  </div>
  <div class="col-md-6 d-none d-md-block d-sm-none bg-light mt-1 text-decoration-none bg-dark text-light justify-content-center pt-1">
    <form action="" class="form-inline col-12 col-md-auto pt-4 ml-auto">
      <label for="sortBy" class="mr-2 pt-1 ml-auto col-md-auto d-md-block d-none">Sort By</label>
      <select class="custom-select col-md-auto d-md-block d-none bg-dark text-light pt-1" id="sortBy">
        <option value="1">Price: Low to High</option>
        <option value="2">Price: High to Low</option>
        <option value="3">By Rating</option>
      </select>
    </form>
  </div>
</div>
<!--BreadCrumb-->
<div class="row mt-4">
  <div class="col-12 mb-2">
    <h2 class="text-primary font-weight-bold"><?php echo $r->name?></h2>
  </div>
</div>
<!--Images And Description-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="row">
        <div class="col-3">
          <a class="border d-inline-block m-1 p-1" data-fancybox="gallery" href="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"><img
            class="img-fluid" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"></a>
            <a class="border d-inline-block m-1 p-1" data-fancybox="gallery" href="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"><img
              class="img-fluid" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"></a>
              <a class="border d-inline-block m-1 p-1" data-fancybox="gallery" href="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"><img
                class="img-fluid" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"></a>
                <a class="border d-inline-block m-1 p-1" data-fancybox="gallery" href="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"><img
                  class="img-fluid" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>"></a>
                </div>
                <div class="col">
                  <a class="" data-fancybox="gallery" href="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>">
                    <img
                    class="img-fluid" src="img/<?php if(file_exists(getcwd().'/img/'.$r->img)) {echo $r->img;} else {echo 'empty.png';} ?>">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12">
                  <h3 class="font-weight-bold pl-5 mt-5"><?php echo $r->price.'֏'; ?></h3>
                </div>
              </div>
              <form class="w-100 row pl-5" action="">
                <div class="col-12 col-md-5">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Quantity</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" value="1">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                 <a href="card.php" class="btn btn-outline-dark <?php active('card.php');?>" tabindex="-1" role="button" aria-disabled="true">Add To Cart</a>
               </div>
             </form>
             <div class="row pl-5">
              <div class="col-12">
                <p class="font-weight-bold my-2">Options</p>
              </div>
              <div class="col-12">
                <form action="">
                  <div class="custom-control custom-switch custom-control-inline">
                    <input type="checkbox" id="mouse" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="mouse">Normal</label>
                  </div>
                  <div class="custom-control custom-switch custom-control-inline">
                    <input type="checkbox" id="earphone" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="earphone">Custom Choice</label>
                  </div>
                </form>
              </div>
              <div class="col-12">
                <p class="font-weight-bold my-2">Variations</p>
              </div>
              <div class="col-6">
                <select class="custom-select">
                  <option selected>Some other Variation</option>
                  <option value="1">Yet another Variation</option>
                  <option value="2">Custom Variation</option>
                  <option value="3">Recommended Variation</option>
                  <option value="4">Least recommended Variation</option>
                </select>
              </div>
              <div class="col-6"></div>
              <div class="col-12">
                <p class="font-weight-bold mt-3">Delivery</p>
              </div>
              <div class="col-6">
                <select class="custom-select">
                  <option selected>To home</option>
                  <option value="2">To choosen location</option>
                </select>
              </div>
              <div class="col-6"></div>
            </div>
          </div>
        </div>
      </div>
      <!--Images And Description-->
      <div class="row mt-3">
        <div class="accordion w-100" id="accordionExample">
          <ul class="nav nav-tabs">
            <li class="nav-item" id="headingOne">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
              aria-controls="collapseOne">Overview</a>
            </li>
            <li class="nav-item" id="headingTwo">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
              aria-controls="collapseTwo">Rating</a>
            </li>
          </ul>
          <div class="card">
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
              <p class="font-weight-bold">Quick Stats</p>
              <ul>
                <li>Some random fact.</li>
                <li>Another random fact.</li>
                <li>Yet another random fact.</li>
                <li>One more random fact.</li>
                <li>Second random fact.</li>
                <li>Some info about the origin.</li>
                <li>Some other info.</li>
                <li>Please buy this product.</li>
                </ul><?php echo $r->meta; ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <span class="w-25">Care Level</span>
                <div class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="10"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $result = select('products');?>
      <?php $random = rand(1,5);$result = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row = mysqli_fetch_array($result);
      $random2 = rand(1,5);$result2 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row2 = mysqli_fetch_array($result2);
      $random3 = rand(1,5);$result3 = mysqli_query($db,"SELECT * FROM products order by RAND() limit 5");
      $row3 = mysqli_fetch_array($result3)?>
      <div class="row d-md-block d-none">
       <div class="d-flex justify-content-center">
         <h4 class="mx-auto pt-4">Other Things You Might be Interested In</h4>
       </div>
       <div class="col-md-12 d-md-block col d-flex justify-content-space-around">
        <div class="d-flex mt-3 border-top">
          <div class="card col-md-3 d-md-block d-none mx-auto mt-5 d-flex justify-content-center" style="width: 24rem;">
            <img src="img/<?php if(file_exists(getcwd().'/img/'.$row['img'])) {echo $row['img'];} else {echo 'empty.png';} ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center">
              <a href="single.php?id=<?php echo $row['id'];?>" class="card-link"><?php echo $row['name']; ?></a>
            </div>
          </div>
          <div class="card col-md-3 d-md-block d-none mx-auto mt-5" style="width: 24rem;">
            <img src="img/<?php if(file_exists(getcwd().'/img/'.$row2['img'])) {echo $row2['img'];} else {echo 'empty.png';} ?>" class="card-img-top" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center">
              <a href="single.php?id=<?php echo $row2['id'];?>" class="card-link"><?php echo $row2['name']; ?></a>
            </div>
          </div>
          <div class="card col-md-3 d-md-block d-none mx-auto mt-5" style="width: 24rem;">
            <img src="img/<?php if(file_exists(getcwd().'/img/'.$row3['img'])) {echo $row3['img'];} else {echo 'empty.png';} ?>" class="card-img-top" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center">
              <a href="single.php?id=<?php echo $row3['id'];?>" class="card-link"><?php echo $row3['name']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <?php include 'inc/footer.php' ?>