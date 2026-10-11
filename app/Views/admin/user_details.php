
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SafeTrack | User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-header bg-danger text-white">
            <h3 class="mb-0">Registered User Details</h3>
        </div>

        <div class="card-body">
            <p><strong>ID:</strong> <?= esc($user['id']) ?></p>
            <p><strong>Name:</strong> <?= esc($user['name']) ?></p>
            <p><strong>Email:</strong> <?= esc($user['email']) ?></p>

            <a href="<?= base_url('admin/users') ?>"
            class="btn btn-danger">Back to Users</a>
        </div>
    </div>
</div>

</body>
</html>
