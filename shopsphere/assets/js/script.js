let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide(i){
slides.forEach(s => s.classList.remove("active"));
slides[i].classList.add("active");
}

function nextSlide(){
index++;
if(index >= slides.length) index = 0;
showSlide(index);
}

function prevSlide(){
index--;
if(index < 0) index = slides.length-1;
showSlide(index);
}

document.querySelector(".next").onclick = nextSlide;
document.querySelector(".prev").onclick = prevSlide;

setInterval(nextSlide,4000);
function toggleCart() {
  const cart = document.getElementById("cartSidebar");
  cart.classList.toggle("open");
  fetch("fetch_cart.php")
    .then(res => res.text())
    .then(data => document.getElementById("cartItems").innerHTML = data);
}

function addToCart(id) {
  fetch("add_to_cart.php", {
    method: "POST",
    headers: {"Content-Type":"application/x-www-form-urlencoded"},
    body: "product_id=" + id
  }).then(() => alert("Added to cart"));
}