<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
    echo 'active';
  }
}

function select($table,$where=NULL){
  global $db;
  if ($where != NULL) {
    $sql = 'SELECT * FROM `'.$table.'` WHERE id='.$where;
  }
  else{
    $sql = 'SELECT * FROM `'.$table.'`';
  }
  return $result = mysqli_query($db,$sql);  
}

function insert(){
  $name = $_POST['name']; 
  $price = $_POST['price'];
  $img = 'empty.jpg';
  if(!empty($_POST['img'])){
    $img = $_POST['img'];
  } 
  $meta = $_POST['meta'];
  global $db;
  if (!empty($name) && !empty($price) &&! empty($meta)) {
    $sql = "INSERT INTO `products` (name,price,meta,img) VALUES ('$name','$price','$meta','$img')";
    $result = mysqli_query($db, $sql);
    if ($result) {
     echo '<div class="success">
     <p>Added Your Product!</p>
     </div>';
     echo '<meta http-equiv="refresh" content="3,url=index.php"/>';
   }
   else{
    echo '<div class="error">
    <p>An error has occured. Check Your Input For Errrors.</p>
    </div>';
    echo '<meta http-equiv="refresh" content="4"/>';
  }
}
else{
  echo '<meta http-equiv="refresh" content="3"/>';
}
}
function errorCheck($message){
  echo '<div class="error">
  <p>'.$message.'</p>
  </div>';
}
if (isset($_GET['delete'])){
  delete($_GET['delete']);
}

function delete($id){
  global $db;
  $sql = 'DELETE FROM `products` WHERE id='.$id;
  $result = mysqli_query($db, $sql);
  echo 'Deleted The Product';
  header('Location: index.php');
}

function update(){
        $id = $_POST['id']; 
        $name = $_POST['name']; 
        $price = $_POST['price'];
        $img = 'empty.jpg';
        if(!empty($_POST['img'])){
          $img = $_POST['img'];
        } 
        $meta = $_POST['meta']; 
        global $db;
 $sql="UPDATE `products` SET `name`='".$name."', `price`='".$price."', `meta`='".$meta."', `img`='".$img."' WHERE `id`=$id";
  if(mysqli_query($db, $sql)){ 
    echo "Successfully updated the product.";
  } else {
    echo "An Error Has Occured";
  }
    echo '<meta http-equiv="refresh" content="1",url=index.php"/>';
}?>