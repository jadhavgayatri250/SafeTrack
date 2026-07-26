<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SafeTrack | Women Safety</title>

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
    background:#f8f9fa;
}

.navbar{
    background:#d62839;
    padding:15px 0;
    box-shadow:0 4px 15px rgba(0,0,0,.15);
}

.navbar-brand{
    color:#fff !important;
    font-size:28px;
    font-weight:700;
}

.navbar-brand i{
    margin-right:8px;
}

.nav-link{
    color:#fff !important;
    font-size:18px;
    font-weight:500;
    margin-left:18px;
    transition:.3s;
}

.nav-link:hover{
    color:#ffe5ea !important;
}

.hero{
    height:90vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:#fff;

    background:linear-gradient(
        135deg,
        #f3f6fb 0%,
        #eef2f7 50%,
        #e8edf5 100%
    );
}

.hero{
    color:#222;
}

.hero h1{
    color:#dc3545;
    font-size:65px;
    font-weight:700;
}

.hero p{
    color:#555;
    font-size:24px;
    line-height:1.6;
}

.btn-custom{
    width:180px;
    height:55px;
    border-radius:50px;
    display:inline-flex;
    justify-content:center;
    align-items:center;
    gap:10px;
    margin:10px;
    font-size:20px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn-light{
    background:#dc3545 !important;
    color:#fff !important;
    border:none !important;
    box-shadow:0 8px 20px rgba(220,53,69,.25);
}

.btn-light i{
    color:#fff !important;
    font-size:18px;
}

.btn-light:hover{
    background:#bb2d3b !important;
    color:#fff !important;
    transform:translateY(-3px);
}

.btn-outline-light{
    background:#fff !important;
    color:#dc3545 !important;
    border:2px solid #dc3545 !important;
}

.btn-outline-light i{
    color:#dc3545 !important;
    font-size:18px;
}

.btn-outline-light:hover{
    background:#dc3545 !important;
    color:#fff !important;
    transform:translateY(-3px);
}

.btn-outline-light:hover i{
    color:#fff !important;
}

@media(max-width:768px){

.hero{
    height:auto;
    padding:70px 20px;
}

.hero h1{
    font-size:46px;
}

.hero p{
    font-size:20px;
}

.hero i{
    font-size:60px;
}

.btn-custom{
    width:160px;
    height:50px;
    font-size:18px;
}

.navbar-brand{
    font-size:24px;
}

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="/">
SafeTrack
</a>

<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/login">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/register">Register</a>
</li>

</ul>

</div>

</div>

</nav>
<section class="hero">

<div class="container">

<h1>SafeTrack</h1>

<p>
Women Safety SOS Alert &<br>
Nearest Helpdesk Locator
</p>

<a href="/login" class="btn btn-light btn-custom">
Login
</a>

<a href="/register" class="btn btn-outline-light btn-custom">
Register
</a>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>