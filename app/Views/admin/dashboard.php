<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SafeTrack Admin Dashboard</title>

  
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

        .welcome-box {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .welcome-box h3 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .welcome-box p {
            margin: 0;
            color: #6c757d;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
            height: 100%;
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 15px;
        }

        .icon-users {
            background: #e7f1ff;
            color: #0d6efd;
        }

        .icon-sos {
            background: #ffe5e8;
            color: #dc3545;
        }

        .icon-helpdesk {
            background: #e8f7ee;
            color: #198754;
        }

        .icon-admin {
            background: #fff3cd;
            color: #856404;
        }

        .stat-title {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .stat-number {
            font-size: 30px;
            font-weight: 700;
            color: #212529;
        }

        .quick-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-top: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .quick-card h5 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .quick-btn {
            text-decoration: none;
            display: block;
            padding: 15px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            color: #212529;
            transition: 0.2s;
        }

        .quick-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .quick-btn i {
            color: #dc3545;
            margin-right: 8px;
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

        <a href="<?= base_url('admin/dashboard') ?>" class="active">
            <i class="fa-solid fa-gauge-high"></i>
            Dashboard
        </a>

        <a href="<?= base_url('admin/users') ?>">
            <i class="fa-solid fa-users"></i>
            Users
        </a>

        <a href="<?= base_url('admin/incidents') ?>">
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

    <!-- Topbar -->

    <div class="topbar">

        <h4>
    Admin Dashboard
</h4>

        <div class="admin-name">

            <i class="fa-solid fa-user-shield me-1"></i>

            <?= esc(session()->get('admin_email')) ?>

        </div>

    </div>


   

    <div class="content">


        <div class="welcome-box">

            <h1>Welcome, Admin</h1>

            <p>
                Monitor SafeTrack users and SOS alerts from this dashboard.
            </p>

        </div>



        <div class="row g-4">

            <!-- Total Users -->

            <div class="col-md-6 col-xl-4">

                <div class="stat-card">

                    <div class="stat-icon icon-users">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div class="stat-title">
                        Total Users
                    </div>

                    <div class="stat-number">
                        <?= esc($totalUsers ?? 0) ?>
                    </div>

                </div>

            </div>



            <div class="col-md-6 col-xl-4">

                <div class="stat-card">

                    <div class="stat-icon icon-sos">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>

                    <div class="stat-title">
                        Total SOS Alerts
                    </div>

                    <div class="stat-number">
                        <?= esc($totalIncidents ?? 0) ?>
                    </div>

                </div>

            </div>



            <div class="col-md-6 col-xl-4">

                <div class="stat-card">

                    <div class="stat-icon icon-helpdesk">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="stat-title">
                        Total Helpdesk Records
                    </div>

                    <div class="stat-number">
                        <?= esc($totalHelpdesks ?? 0) ?>
                    </div>

                </div>

            </div>

        </div>




        <div class="quick-card">

            <h5>
                <i class="fa-solid fa-bolt text-danger me-2"></i>
                Quick Access
            </h5>

            <div class="row g-3">

                <div class="col-md-6">

                    <a
                        href="<?= base_url('admin/users') ?>"
                        class="quick-btn"
                    >
                        <i class="fa-solid fa-users"></i>
                        View Registered Users
                    </a>

                </div>

                <div class="col-md-6">

                    <a
                        href="<?= base_url('admin/incidents') ?>"
                        class="quick-btn"
                    >
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        View All SOS Alerts
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>