<?php
include "db.php";
session_start();

if(!isset($_SESSION['uid'])){
  header("Location: login.php");
  exit();
}

include "partials/header.php";

$search="";
if(isset($_GET['search'])){
  $search=$_GET['search'];
  $products=$conn->query("SELECT * FROM products WHERE name LIKE '%$search%'");
} else {
  $products=$conn->query("SELECT * FROM products");
}
?>

<!-- HERO SECTION -->
<section class="hero">

<div class="hero-content">
<h1>Upgrade Your Tech Experience</h1>
<p>Discover premium gadgets and accessories</p>
<a href="#products" class="hero-btn">Shop Now</a>
</div>

</section>


<!-- CATEGORIES -->
<section class="categories">

<h2>Shop by Category</h2>

<div class="category-grid">

<div class="category-card">
<img src="assets/images/laptop.jpg">
<p>Laptops</p>
</div>

<div class="category-card">
<img src="assets/images/headphones.jpg">
<p>Audio</p>
</div>

<div class="category-card">
<img src="assets/images/keyboard.jpg">
<p>Keyboards</p>
</div>

<div class="category-card">
<img src="assets/images/mouse.jpg">
<p>Accessories</p>
</div>

</div>

</section>


<!-- SEARCH -->
<div class="search-box">
<form method="GET">
<input type="text" name="search" placeholder="Search products..." value="<?php echo $search; ?>">
<button type="submit">Search</button>
</form>
</div>


<!-- PRODUCTS -->
<section id="products">

<div class="product-grid">

<?php while($p=$products->fetch_assoc()): ?>

<div class="product-card">

<img src="assets/images/<?php echo $p['image']; ?>">

<h3><?php echo $p['name']; ?></h3>

<p><?php echo $p['description']; ?></p>

<div class="price">₹<?php echo $p['price']; ?></div>

<div>
<?php
for($i=1;$i<=5;$i++){
echo $i <= $p['rating'] ? "⭐" : "☆";
}
?>
</div>

<form method="POST" action="add_to_cart.php">
<input type="hidden" name="product_id" value="<?php echo $p['id']; ?>">
<button>Add to Cart</button>
</form>

</div>

<?php endwhile; ?>

</div>

</section>


<?php include "partials/footer.php"; ?>