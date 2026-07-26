<!DOCTYPE html>
<html>
<head>
    <title>Nearest Helpdesk | SafeTrack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .card{
            margin-top:40px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,.1);
        }

        h2{
            color:#dc3545;
            font-weight:bold;
        }
    </style>

</head>
<body>

<div class="container">

<div class="card p-4">

<h2 class="text-center mb-4">Nearest Helpdesk</h2>

<form method="post" action="/helpdesk/search">

<div class="row">

<div class="col-md-9">
<input type="text" name="pincode" class="form-control" placeholder="Enter Pincode" required>
</div>

<div class="col-md-3">
<button class="btn btn-danger w-100">Search</button>
</div>

</div>

</form>

<hr>

<?php if(isset($helpdesks)){ ?>

<table class="table table-bordered table-striped">

<tr>
<th>Police Station</th>
<th>Address</th>
<th>Pincode</th>
<th>Phone</th>
</tr>

<?php foreach($helpdesks as $row){ ?>

<tr>
<td><?= $row['name']; ?></td>
<td><?= $row['address']; ?></td>
<td><?= $row['pincode']; ?></td>
<td><?= $row['phone']; ?></td>
</tr>

<?php } ?>

</table>

<?php } ?>

<a href="/dashboard" class="btn btn-secondary">
Back to Dashboard
</a>

</div>

</div>

</body>
</html>