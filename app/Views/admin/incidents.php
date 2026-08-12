<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SafeTrack - SOS History</title>

   
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

   
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>
        body {
            margin: 0;
            background: #f5f6f8;
            font-family: Arial, sans-serif;
        }

     
        .sidebar {
            min-height: 100vh;
            background: #b02a37;
            color: white;
            position: fixed;
            width: 250px;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        .brand {
            text-align: center;
            padding: 15px 10px 30px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .brand-icon {
            width: 55px;
            height: 55px;
            background: white;
            color: #dc3545;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-size: 25px;
        }

        .brand h4 {
            margin: 0;
            font-weight: 700;
        }

        .brand small {
            opacity: 0.8;
        }

        .sidebar-menu {
            padding: 20px 12px;
        }

        .sidebar-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 13px 15px;
            margin-bottom: 8px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: rgba(255,255,255,0.18);
        }

        .sidebar-menu i {
            width: 25px;
        }

    
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 18px 30px;
            border-bottom: 1px solid #e5e5e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h4 {
            margin: 0;
            font-weight: 700;
        }

        .admin-name {
            color: #6c757d;
            font-size: 14px;
        }

        .content {
            padding: 30px;
        }


        .page-header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .page-header h3 {
            margin: 0 0 5px;
            font-weight: 700;
        }

        .page-header p {
            margin: 0;
            color: #6c757d;
        }

       
        .table-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .table-card h5 {
            font-weight: 700;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fa;
            color: #495057;
            font-weight: 700;
            padding: 14px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 14px;
            vertical-align: middle;
        }

        .sos-badge {
            background: #ffe5e8;
            color: #dc3545;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .location-link {
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
        }

        .location-link:hover {
            text-decoration: underline;
        }

        .view-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 7px 13px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
        }

        .view-btn:hover {
            background: #bb2d3b;
            color: white;
        }

        .empty-message {
            text-align: center;
            padding: 50px;
            color: #6c757d;
        }

        .message-cell {
            max-width: 220px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 768px) {

            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar-menu {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }

            .sidebar-menu a {
                margin-bottom: 0;
            }

            .content {
                padding: 20px;
            }

            .topbar {
                padding: 15px 20px;
            }

            .admin-name {
                display: none;
            }
        }
    </style>
</head>

<body>


<div class="sidebar">

    <div class="brand">

        <div class="brand-icon">
            <i class="fa-solid fa-shield-halved"></i>
        </div>

        <h4>SafeTrack</h4>

        <small>Admin Panel</small>

    </div>

    <div class="sidebar-menu">

        <a href="<?= base_url('admin/dashboard') ?>">
            <i class="fa-solid fa-gauge-high"></i>
            Dashboard
        </a>

        <a href="<?= base_url('admin/users') ?>">
            <i class="fa-solid fa-users"></i>
            Users
        </a>

        <a href="<?= base_url('admin/incidents') ?>" class="active">
            <i class="fa-solid fa-triangle-exclamation"></i>
            SOS History
        </a>

        <a href="<?= base_url('admin/logout') ?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>


<div class="main-content">



    <div class="topbar">

        <h4>
            <i class="fa-solid fa-triangle-exclamation text-danger me-2"></i>
            SOS History
        </h4>

        <div class="admin-name">

            <i class="fa-solid fa-user-shield me-1"></i>

            <?= esc(session()->get('admin_email')) ?>

        </div>

    </div>



    <div class="content">

      
        <div class="page-header">

            <h3>
                <i class="fa-solid fa-triangle-exclamation text-danger me-2"></i>
                SOS Alerts
            </h3>

            <p>
                Monitor all SOS alerts submitted through SafeTrack.
            </p>

        </div>


        <div class="table-card">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="mb-0">
                    All SOS Records
                </h5>

                <span class="sos-badge">

                    <i class="fa-solid fa-bell me-1"></i>

                    <?= count($incidents ?? []) ?> Alerts

                </span>

            </div>


            <?php if (!empty($incidents)): ?>

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>User</th>

                                <th>Latitude</th>

                                <th>Longitude</th>

                                <th>Pincode</th>

                                <th>Message</th>

                                <th>Location</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($incidents as $incident): ?>

                                <?php
                                    $latitude = $incident['latitude'] ?? '';
                                    $longitude = $incident['longitude'] ?? '';

                                    $hasLocation =
                                        $latitude !== '' &&
                                        $longitude !== '' &&
                                        $latitude !== null &&
                                        $longitude !== null &&
                                        is_numeric($latitude) &&
                                        is_numeric($longitude);
                                ?>

                                <tr>


                                    <td>
                                        <strong>
                                            #<?= esc($incident['id'] ?? '') ?>
                                        </strong>
                                    </td>

                                    <td>

                                        <i class="fa-solid fa-user text-danger me-2"></i>

                                        <?= esc($incident['user_name'] ?? 'Unknown') ?>

                                    </td>


                                    <td>
                                        <?= esc($latitude) ?>
                                    </td>

                                    <td>
                                        <?= esc($longitude) ?>
                                    </td>


                                    <td>
                                        <?= esc($incident['pincode'] ?? '-') ?>
                                    </td>


                                    <td>

                                        <div
                                            class="message-cell"
                                            title="<?= esc($incident['message'] ?? '') ?>"
                                        >
                                            <?= esc($incident['message'] ?? '-') ?>
                                        </div>

                                    </td>


                                    <td>

                                        <?php if ($hasLocation): ?>

                                            <a
                                                href="https://www.google.com/maps?q=<?= urlencode($latitude . ',' . $longitude) ?>"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="location-link"
                                            >
                                                <i class="fa-solid fa-location-dot me-1"></i>
                                                View Map
                                            </a>

                                        <?php else: ?>

                                            <span class="text-muted">
                                                Not available
                                            </span>

                                        <?php endif; ?>

                                    </td>

                                    <td>

                                        <a
                                            href="<?= base_url('admin/incidents/' . ($incident['id'] ?? '')) ?>"
                                            class="view-btn"
                                        >
                                            <i class="fa-solid fa-eye me-1"></i>
                                            View
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <div class="empty-message">

                    <i class="fa-solid fa-triangle-exclamation fa-2x mb-3"></i>

                    <h5>No SOS Alerts Found</h5>

                    <p>
                        There are currently no SOS records in the database.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>