<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SafeTrack - SOS Details</title>


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

        .details-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .alert-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 1px solid #e9ecef;
        }

        .alert-icon {
            width: 60px;
            height: 60px;
            background: #ffe5e8;
            color: #dc3545;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
        }

        .alert-header h3 {
            margin: 0;
            font-weight: 700;
        }

        .alert-header p {
            margin: 4px 0 0;
            color: #6c757d;
        }

        .detail-item {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 18px;
            height: 100%;
        }

        .detail-label {
            color: #6c757d;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .detail-value {
            font-size: 16px;
            font-weight: 600;
            color: #212529;
            word-break: break-word;
        }

        .message-box {
            background: #fff5f5;
            border-left: 4px solid #dc3545;
            padding: 18px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .map-btn {
            display: inline-block;
            background: #dc3545;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: 600;
        }

        .map-btn:hover {
            background: #bb2d3b;
            color: white;
        }

        .back-btn {
            display: inline-block;
            background: #6c757d;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: 600;
        }

        .back-btn:hover {
            background: #5c636a;
            color: white;
        }

        .button-area {
            margin-top: 25px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
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
            <i class="fa-solid fa-circle-info text-danger me-2"></i>
            SOS Details
        </h4>

        <div class="admin-name">

            <i class="fa-solid fa-user-shield me-1"></i>

            <?= esc(session()->get('admin_email')) ?>

        </div>

    </div>


    <div class="content">

        <div class="details-card">

            <!-- Header -->

            <div class="alert-header">

                <div class="alert-icon">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>

                <div>

                    <h3>SOS Alert Details</h3>

                    <p>
                        Incident #<?= esc($incident['id'] ?? '') ?>
                    </p>

                </div>

            </div>



            <div class="row g-3">


                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            Incident ID
                        </div>

                        <div class="detail-value">
                            #<?= esc($incident['id'] ?? '-') ?>
                        </div>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            User
                        </div>

                        <div class="detail-value">

                            <i class="fa-solid fa-user text-danger me-2"></i>

                            <?= esc($incident['user_name'] ?? 'Unknown') ?>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            Latitude
                        </div>

                        <div class="detail-value">
                            <?= esc($incident['latitude'] ?? '-') ?>
                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            Longitude
                        </div>

                        <div class="detail-value">
                            <?= esc($incident['longitude'] ?? '-') ?>
                        </div>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            Pincode
                        </div>

                        <div class="detail-value">

                            <i class="fa-solid fa-location-dot text-danger me-2"></i>

                            <?= esc($incident['pincode'] ?? '-') ?>

                        </div>

                    </div>

                </div>



                <div class="col-md-6">

                    <div class="detail-item">

                        <div class="detail-label">
                            Location
                        </div>

                        <div class="detail-value">

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

                            <?php if ($hasLocation): ?>

                                <a
                                    href="https://www.google.com/maps?q=<?= urlencode($latitude . ',' . $longitude) ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="map-btn"
                                >
                                    <i class="fa-solid fa-map-location-dot me-1"></i>
                                    Open Map
                                </a>

                            <?php else: ?>

                                <span class="text-muted">
                                    Location unavailable
                                </span>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

            <div class="message-box">

                <div class="detail-label">
                    <i class="fa-solid fa-message me-1"></i>
                    SOS Message
                </div>

                <div class="detail-value">

                    <?= esc($incident['message'] ?? 'No message provided.') ?>

                </div>

            </div>


            <div class="button-area">

                <a
                    href="<?= base_url('admin/incidents') ?>"
                    class="back-btn"
                >
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back to SOS History
                </a>

                <?php if ($hasLocation): ?>

                    <a
                        href="https://www.google.com/maps?q=<?= urlencode($latitude . ',' . $longitude) ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="map-btn"
                    >
                        <i class="fa-solid fa-location-dot me-1"></i>
                        View SOS Location
                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>