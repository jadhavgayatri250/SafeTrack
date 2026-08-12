<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SafeTrack | Registered Users</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f9;
        }


        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 290px;
            height: 100vh;
            background: #b92535;
            color: white;
        }

        .brand {
            text-align: center;
            padding: 45px 20px;
            border-bottom: 1px solid rgba(255,255,255,.2);
        }

        .brand-icon {
            width: 65px;
            height: 65px;
            background: white;
            color: #dc3545;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 30px;
        }

        .brand h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .brand p {
            font-size: 17px;
            margin: 0;
            opacity: .9;
        }

        .menu {
            padding: 25px 12px;
        }

        .menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 17px 18px;
            margin-bottom: 8px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 500;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,.20);
        }

        .menu i {
            width: 28px;
            margin-right: 8px;
        }


        .main-content {
            margin-left: 290px;
            min-height: 100vh;
        }


        .topbar {
            height: 85px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
            border-bottom: 1px solid #ddd;
        }

        .topbar h1 {
            font-size: 30px;
            font-weight: 700;
            margin: 0;
        }

        .admin-email {
            color: #666;
            font-size: 16px;
        }

        .admin-email i {
            margin-right: 8px;
        }


        .content {
            padding: 35px;
        }

        .intro-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,.06);
        }

        .intro-card h2 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .intro-card p {
            color: #666;
            font-size: 18px;
            margin: 0;
        }


        .users-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,.06);
        }

        .users-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .users-header h2 {
            font-size: 25px;
            font-weight: 700;
            margin: 0;
        }

        .user-count {
            background: #ffe1e5;
            color: #dc3545;
            padding: 9px 15px;
            border-radius: 25px;
            font-weight: 600;
        }


        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fa;
            color: #222;
            font-size: 17px;
            padding: 18px 15px;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody td {
            padding: 17px 15px;
            vertical-align: middle;
            font-size: 17px;
        }

        .table tbody tr:hover {
            background: #fafafa;
        }

        .user-icon {
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ffe3e7;
            color: #dc3545;
            border-radius: 50%;
            margin-right: 12px;
        }

        .view-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .view-btn:hover {
            background: #bb2d3b;
            color: white;
        }


        @media(max-width: 900px) {

            .sidebar {
                width: 220px;
            }

            .main-content {
                margin-left: 220px;
            }

            .content {
                padding: 20px;
            }

            .topbar {
                padding: 0 20px;
            }
        }

        @media(max-width: 700px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .table-responsive {
                overflow-x: auto;
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

        <h2>SafeTrack</h2>

        <p>Admin Panel</p>

    </div>


    <div class="menu">

        <a href="<?= base_url('admin/dashboard') ?>">
            <i class="fa-solid fa-gauge-high"></i>
            Dashboard
        </a>

        <a href="<?= base_url('admin/users') ?>" class="active">
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



    <div class="topbar">

        <h1>
            <i class="fa-solid fa-users" style="color:#dc3545;"></i>
            Registered Users
        </h1>

        <div class="admin-email">

            <i class="fa-solid fa-user-shield"></i>

            admin@safetrack.com

        </div>

    </div>




    <div class="content">


        <div class="intro-card">

            <h2>
                <i class="fa-solid fa-users" style="color:#dc3545;"></i>
                Users Management
            </h2>

            <p>
                View all registered SafeTrack users.
            </p>

        </div>


        <div class="users-card">

            <div class="users-header">

                <h2>
                    Registered Users
                </h2>

                <div class="user-count">

                    <i class="fa-solid fa-users"></i>

                    <?= count($users) ?> Users

                </div>

            </div>


            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>User</th>

                            <th>Email</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php if (!empty($users)): ?>

                            <?php $serialNo = 1; ?>

                            <?php foreach ($users as $user): ?>

                                <tr>


                                    <td>
                                        <strong>
                                            #<?= $serialNo ?>
                                        </strong>
                                    </td>


                                    <td>

                                        <span class="user-icon">

                                            <i class="fa-solid fa-user"></i>

                                        </span>

                                        <?= esc($user['name']) ?>

                                    </td>


                                    <td>

                                        <i
                                            class="fa-solid fa-envelope"
                                            style="color:#777; margin-right:10px;"
                                        ></i>

                                        <?= esc($user['email']) ?>

                                    </td>


                                    <td>

                                        <a
                                            href="<?= base_url('admin/users/view/' . $user['id']) ?>"
                                            class="view-btn"
                                        >

                                            <i class="fa-solid fa-eye"></i>

                                            View

                                        </a>

                                    </td>

                                </tr>


                                <?php $serialNo++; ?>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>

                                <td
                                    colspan="4"
                                    class="text-center"
                                >

                                    No registered users found.

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


</body>

</html>