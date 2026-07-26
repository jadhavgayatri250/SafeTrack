<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

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
    padding:15px 0;
    box-shadow:0 4px 15px rgba(0,0,0,.15);
}

.navbar-brand{
    color:#fff !important;
    font-size:32px;
    font-weight:700;
    text-decoration:none;
}

.login-section{
    min-height:calc(100vh - 78px);
    display:flex;
    justify-content:center;
    align-items:flex-start;
    padding-top:70px;
}

.card{
    width:430px;
    padding:40px;
    border:none;
    border-radius:20px;
    background:#fff;
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
}

.form-control:focus{
    border-color:#dc3545;
    box-shadow:0 0 0 .2rem rgba(220,53,69,.15);
}

.btn-danger{
    height:52px;
    border:none;
    border-radius:50px;
    font-size:22px;
    font-weight:600;
    background:#dc3545;
}

.btn-danger:hover{
    background:#c82333;
}

a{
    color:#dc3545;
    text-decoration:none;
    font-weight:600;
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

<div class="login-section">

<div class="card">

<div class="text-center">

<h2>Login</h2>

</div>

<?php if(session()->getFlashdata('error')): ?>

<div class="alert alert-danger">
<?= session()->getFlashdata('error') ?>
</div>

<?php endif; ?>

<form method="post" action="/login/check">

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

Login

</button>

</form>

<hr>

<div class="text-center">

Don't have an account?

<a href="/register">Register</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>