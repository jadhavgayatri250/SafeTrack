
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - SafeTrack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background:#f5f7fb;
        }

        .navbar{
            background:#dc3545;
        }

        .navbar-brand{
            color:white;
            font-weight:bold;
            font-size:28px;
        }

        .navbar-brand:hover{
            color:white;
        }

        .card{
            border:none;
            border-radius:20px;
            transition:.3s;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        .card:hover{
            transform:translateY(-8px);
        }

        .icon{
            font-size:55px;
            margin-bottom:20px;
        }

        .welcome{
            padding:50px;
            text-align:center;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="#">
SafeTrack Dashboard
</a>

<div class="ms-auto">


<a href="/logout"
   style="color:white; text-decoration:none; font-size:20px; font-weight:bold;">
    Logout
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<div class="welcome">

<h2 class="fw-bold">
Welcome to SafeTrack
</h2>

<p class="text-muted">
Women Safety SOS Alert & Nearest Helpdesk Locator
</p>

</div>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card p-4 text-center">

            <div class="icon text-danger">
                <i class="fas fa-bell"></i>
            </div>

            <h4>SOS Alert</h4>

            <p>Send emergency SOS with your live location.</p>

            <a href="/sos" class="btn btn-danger">
                Open SOS
            </a>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 text-center">

            <div class="icon text-primary">
                <i class="fas fa-location-dot"></i>
            </div>

            <h4>Nearest Helpdesk</h4>

            <p>Search nearby police helpdesk.</p>

            <a href="/helpdesk" class="btn btn-primary">
        Search
        </a>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 text-center">

            <div class="icon text-success">
                <i class="fas fa-phone"></i>
            </div>

            <h4>Emergency Contacts</h4>

            <p>Police, Ambulance and Women Helpline.</p>

            <a href="/emergency" class="btn btn-success">
        View
        </a>

        </div>
    </div>

    <div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card p-4 text-center">

            <div class="icon text-warning">
                <i class="fas fa-clock-rotate-left"></i>
            </div>

            <h4>My SOS History</h4>

            <p>View all your previous SOS alerts.</p>

            <a href="/history" class="btn btn-warning text-white">
                View History
            </a>

        </div>
    </div>

</div>

<div class="row mt-5">

</div>

</div>

</body>
</html>