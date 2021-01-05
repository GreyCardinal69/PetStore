<?php include 'inc/header.php' ?>
<!--Main Columns-->
<div class="row">
  <div class="col-md-12 d-flex">
    <h2 class="mr-auto ml-auto mt-5 mb-5 ">Recommended Products</h2>
  </div>
  <?php $result = select('products');?>
  <?php foreach ($result as $value): ?>
    <div class="col-md-3 col-sm-4 col-12 mt-2 mb-2">
      <div class="card mb-3">
        <img src="img/<?php if(file_exists(getcwd().'/img/'.$value['img'])) {echo $value['img'];} else {echo 'empty.png';} ?>" class="card-img-top <?php active('single.php');?>" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="product.php" class="text-decoration-none <?php active('product.php');?>"><p class="card-text text-decoration-none text-dark"><?php echo $value['name'];?></p></a>
         <a href="card.php?id=<?php echo $value['id'];?>"> <button class="btn btn-outline-dark w-100 mt-4 <?php active('card.php');?>">Add To Cart</button></a>
       </div>
     </div>
   </div>
 <?php endforeach; ?>
</div>
<!--Main Columns-->
<div class="row">
  <div class="d-flex col-md-12">
    <div id="carouselExampleIndicators" class="carousel slide col-md-12 mt-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner_vbb.jpg"
          class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner_bundy.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner_healty_monoproteic.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="border border-muted text-center col-md-3 col-sm-6 col-12 mt-5 mb-2 ml-auto mr-auto" style="width: 18rem;">
      <img src="img/bcd4c012-77fe-4869-8fc2-1d2f7aa8ab07.JPG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">A wide variety of aquarium equipment to make your aquarium better.</p>
      </div>
    </div>
    <div class="border border-muted text-center col-md-3 col-sm-6 col-12 mt-5 mb-2 ml-auto mr-auto" style="width: 18rem;">
      <img src="img/s-l400.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">A wide variety of aquarium accessories, which you can use to decorate your aquarium.</p>
      </div>
    </div>
    <div class="border border-muted text-center col-md-3 col-sm-6 col-12 mt-5 mb-2 ml-auto mr-auto" style="width: 18rem;">
      <img src="img/92132447-dog-pet-accessories-icon-set-.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">A wide variety of accessories and toys for your pets so they wont be bored.</p>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php' ?>