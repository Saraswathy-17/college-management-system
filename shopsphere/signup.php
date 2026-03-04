<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

  $conn->query("INSERT INTO users (username,email,password)
  VALUES ('$username','$email','$password')");

  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup - ShopSphere</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Inter',sans-serif;
}

body{
  height:100vh;
  display:flex;
  overflow:hidden;
  background:#0f172a;
  color:white;
}

/* Subtle Glow */
body::before{
  content:"";
  position:absolute;
  width:600px;
  height:600px;
  background:radial-gradient(circle,#6366f1 0%, transparent 70%);
  top:-200px;
  left:-200px;
  filter:blur(150px);
  opacity:0.4;
}

body::after{
  content:"";
  position:absolute;
  width:600px;
  height:600px;
  background:radial-gradient(circle,#9333ea 0%, transparent 70%);
  bottom:-200px;
  right:-200px;
  filter:blur(150px);
  opacity:0.3;
}

/* Layout */
.container{
  display:flex;
  width:100%;
  position:relative;
  z-index:2;
}

.left{
  flex:1;
  display:flex;
  justify-content:center;
  align-items:center;
  padding:60px;
  text-align:center;
}

.left h1{
  font-size:48px;
  font-weight:700;
}

.left p{
  margin-top:20px;
  font-size:17px;
  color:#cbd5e1;
  max-width:400px;
}

/* Glass Card */
.right{
  flex:1;
  display:flex;
  justify-content:center;
  align-items:center;
}

.card{
  width:400px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(20px);
  border:1px solid rgba(255,255,255,0.1);
  padding:45px;
  border-radius:20px;
  box-shadow:0 20px 60px rgba(0,0,0,0.5);
  animation:fadeUp 0.7s ease;
}

@keyframes fadeUp{
  from{opacity:0; transform:translateY(30px);}
  to{opacity:1; transform:translateY(0);}
}

.card h2{
  text-align:center;
  margin-bottom:30px;
  font-weight:600;
}

.input-group{
  position:relative;
  margin-bottom:20px;
}

.input-group input{
  width:100%;
  padding:14px 14px 14px 45px;
  border-radius:12px;
  border:1px solid rgba(255,255,255,0.2);
  background:rgba(255,255,255,0.08);
  color:white;
  font-size:14px;
  transition:0.3s;
}

.input-group input::placeholder{
  color:#94a3b8;
}

.input-group input:focus{
  outline:none;
  border-color:#6366f1;
  box-shadow:0 0 0 3px rgba(99,102,241,0.3);
}

.input-group span{
  position:absolute;
  left:14px;
  top:50%;
  transform:translateY(-50%);
  opacity:0.6;
}

/* Button */
.card button{
  width:100%;
  padding:14px;
  border:none;
  border-radius:14px;
  background:linear-gradient(135deg,#6366f1,#9333ea);
  color:white;
  font-size:15px;
  cursor:pointer;
  transition:0.3s;
}

.card button:hover{
  transform:translateY(-2px);
  box-shadow:0 10px 30px rgba(99,102,241,0.4);
}

.card p{
  margin-top:20px;
  text-align:center;
  font-size:14px;
}

.card a{
  color:#818cf8;
  text-decoration:none;
  font-weight:600;
}
</style>
</head>
<body>

<div class="blob blob1"></div>
<div class="blob blob2"></div>

<div class="container">

  <div class="left">
    <div>
      <h1>Join ShopSphere</h1>
      <p>Create your account and explore premium tech gadgets built for modern life.</p>
    </div>
  </div>

  <div class="right">
    <div class="card">
      <h2>Create Account</h2>

      <form method="POST">

        <div class="input-group">
          <span>👤</span>
          <input type="text" name="username" placeholder="Full Name" required>
        </div>

        <div class="input-group">
          <span>📧</span>
          <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-group">
          <span>🔒</span>
          <input type="password" name="password" placeholder="Create Password" required>
        </div>

        <button type="submit">Sign Up</button>
      </form>

      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>

</div>

</body>
</html>