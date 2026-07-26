<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Segoe UI',Arial,sans-serif;
    background:linear-gradient(
        135deg,
        #eef2f7 0%,
        #e9edf4 50%,
        #e3e8f0 100%
    );
}

.navbar{
    background:#d62839;
    padding:18px 0;
    box-shadow:0 4px 15px rgba(0,0,0,.15);
}

.navbar-brand{
    color:#fff !important;
    font-size:32px;
    font-weight:700;
    text-decoration:none;
}

.register-section{
    min-height:calc(100vh - 78px);
    display:flex;
    justify-content:center;
    align-items:center;
}

.card{
    width:430px;
    padding:40px;
    border:none;
    border-radius:20px;
    background:#ffffff;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
}

h2{
    font-size:38px;
    font-weight:700;
    color:#dc3545;
    margin-bottom:30px;
}

label{
    font-size:16px;
    font-weight:600;
    color:#444;
    margin-bottom:6px;
}

.form-control{
    height:52px;
    border-radius:12px;
    border:1px solid #ced4da;
    font-size:16px;
}

.form-control:focus{
    border-color:#dc3545;
    box-shadow:0 0 0 .2rem rgba(220,53,69,.15);
}

.btn-danger{
    height:52px;
    border:none;
    border-radius:50px;
    font-size:20px;
    font-weight:600;
    background:#dc3545;
    transition:.3s;
}

.btn-danger:hover{
    background:#c82333;
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(220,53,69,.30);
}

a{
    text-decoration:none;
    font-weight:600;
    color:#dc3545;
}

a:hover{
    color:#bb2d3b;
}

hr{
    margin:25px 0;
}

</style>

</head>

<body>

<nav class="navbar">

<div class="container">

<a href="/" class="navbar-brand">
SafeTrack
</a>

</div>

</nav>

<div class="register-section">

<div class="card">

<div class="text-center">

<h2>Register</h2>

</div>

<form method="post" action="/register/save">

<div class="mb-3">

<label>Name</label>

<input
type="text"
name="name"
class="form-control"
placeholder="Enter Full Name"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

</div>

<button type="submit" class="btn btn-danger w-100">

Register

</button>

</form>

<hr>

<div class="text-center">

Already have an account?

<a href="/login">Login</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>