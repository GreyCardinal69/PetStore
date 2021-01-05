<?php include 'inc/header.php' ?>
<!--Header-->
<!--BreadCrumb-->
<div class="row mt-3">
  <div class="col-md-6 d-md-block bg-dark text-light pt-4 pb-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="product.php">Products</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home Page</a></li>
      </ol>
    </nav>
  </div>
  <div class="col-md-6 d-md-block bg-dark text-light justify-content-center pt-1">
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
<!-- Options -->
<div class="row border-top">
 <div class="col-12 d-md-block col-md-3 sidebar bg-light border-right border-left border-bottom mt-4 border-top text-decoration-none">
  <form>
    <p class="pt-4 border-bottom">
      <a class="text-muted text-uppercase text-decoration-none" data-toggle="collapse" href="#select" role="button"
      aria-expanded="false" aria-controls="select11">
      Select Your Pet
    </a>
  </p>
  <div class="collapse bg-light p-2" id="select">
    <div>
      <input type="checkbox" id="Cats">
      <label class="text-dark text-uppercase" for="Cats">Cats</label>
    </div>
    <div>
      <input type="checkbox" id="Dogs">
      <label class="text-dark text-uppercase" for="Dogs">Dogs</label>
    </div>
    <div>
      <input type="checkbox" id="Turtles">
      <label class="text-dark text-uppercase" for="Turtles">Turtles</label>
    </div>
    <div>
      <input type="checkbox" id="Fish">
      <label class="text-dark text-uppercase" for="Fish">Fish</label>
    </div>
  </div>
  <p class="border-bottom">
    <a class="text-muted text-uppercase border-bottom text-decoration-none" data-toggle="collapse" href="#select2" role="button"
    aria-expanded="false" aria-controls="select22">
    Select Food For:
  </a>
</p>
<div class="collapse bg-light p-2" id="select2">
  <div>
    <input type="checkbox" id="Cats">
    <label class="text-dark text-uppercase" for="Cats">Cats</label>
  </div>
  <div>
    <input type="checkbox" id="Dogs">
    <label class="text-dark text-uppercase" for="Dogs">Dogs</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Turtles</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Fish</label>
  </div>
</div>
<p class="border-bottom">
  <a class="text-muted text-uppercase text-decoration-none" data-toggle="collapse" href="#select3" role="button"
  aria-expanded="false" aria-controls="select33">
  Select Accessories For:
</a>
</p>
<div class="collapse bg-light p-2" id="select3">
  <div>
    <input type="checkbox" id="Dogs">
    <label class="text-dark text-uppercase" for="Dogs">Cats</label>
  </div>
  <div>
    <input type="checkbox" id="Dogs">
    <label class="text-dark text-uppercase" for="Dogs">Dogs</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Turtles</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Fish</label>
  </div>
</div>
<p class="border-bottom">
  <a class="text-muted text-uppercase text-decoration-none" data-toggle="collapse" href="#select4" role="button"
  aria-expanded="false" aria-controls="select44">
  Select Equipment For:
</a>
</p>
<div class="collapse bg-light p-2" id="select4">
  <div>
    <input type="checkbox" id="Dogs">
    <label class="text-dark text-uppercase" for="Dogs">Cats</label>
  </div>
  <div>
    <input type="checkbox" id="Dogs">
    <label class="text-dark text-uppercase" for="Dogs">Dogs</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Turtles</label>
  </div>
  <div>
    <input type="checkbox" id="Turtles">
    <label class="text-dark text-uppercase" for="Turtles">Fish</label>
  </div>
</div>
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="imgOnly">
  <label class="custom-control-label text-muted text-uppercase" for="imgOnly">With Images Only</label>
</div>
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="freeImages">
  <label class="custom-control-label text-muted text-uppercase" for="freeImages">Free Shipping</label>
</div>
</form>
</div>
<!-- Options -->
<!-- Products using foreach and mysql web2 database -->
<?php $result = select('products');?>
<div class="col-12 col-md-9 main border-right border-left">
  <div class="row justify-content-center">
    <?php foreach ($result as $value): ?>
      <div class="col-5 col-sm-5 col-md-5 product-card border p-2 mx-auto mt-4">  
        <a href="single.php?id=<?php echo $value['id'];?>"><img src="img/<?php if(file_exists(getcwd().'/img/'.$value['img'])) {echo $value['img'];} else {echo 'empty.png';} ?>" class="card-img-top <?php active('single.php');?>" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title"><?php echo $value['name'];?></h5>
          <p class="card-text"><?php echo cutText($value['meta']); ?></p>
        </div>
        <div class="flex-column card-body justify-content-center align-bottom">
          <div class="align-bottom display-4 align-items-center justify-content-center">
            <p class="mt-auto align-bottom"><?php echo $value['price'].'֏'; ?></p>
          </div>
          <a href="card.php?id=<?php echo $value['id'];?>"><button class="align-bottom btn btn-outline-dark <?php active('card.php');?>">Add To Cart</button> </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div></div></div></div>
  <!-- Products using foreach and mysql web2 database -->
  <!--Footer-->
  <?php include 'inc/footer.php' ?>