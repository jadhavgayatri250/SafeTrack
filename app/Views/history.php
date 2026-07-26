<!DOCTYPE html>
<html>
<head>
    <title>My SOS History</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>

    body{
        background:#f4f6f9;
    }

    .table{
        background:white;
        border-radius:10px;
        overflow:hidden;
    }

    h2{
        color:#dc3545;
        font-weight:bold;
    }

    </style>

</head>
<body>

<div class="container mt-5">

<h2 class="text-center mb-4">
My SOS History
</h2>

<table class="table table-bordered table-hover">

<thead class="table-danger">

<tr>

<th>ID</th>

<th>User</th>

<th>Latitude</th>

<th>Longitude</th>

<th>Message</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<?php if(!empty($incidents)): ?>

<?php foreach($incidents as $row): ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['user_name']; ?></td>

<td><?= $row['latitude']; ?></td>

<td><?= $row['longitude']; ?></td>

<td><?= $row['message']; ?></td>

<td>
    <a href="/history/delete/<?= $row['id']; ?>"
    class="text-danger text-decoration-none"
    onclick="return confirm('Are you sure you want to delete this record?')">
    Delete
</a>
</td>

</tr>

<?php endforeach; ?>

<?php else: ?>

<tr>

<td colspan="6" class="text-center">
No SOS Alerts Found
</td>

</tr>

<?php endif; ?>

</tbody>

</table>

<div class="text-center mt-3">

<a href="/dashboard" class="btn btn-secondary">
Back to Dashboard
</a>

</div>

</div>

</body>
</html>