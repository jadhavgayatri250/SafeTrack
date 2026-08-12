<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SafeTrack | Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(
                135deg,
                #f3f6fb 0%,
                #eef2f7 50%,
                #e8edf5 100%
            );
            min-height: 100vh;
        }

        .navbar {
            background: #dc3545;
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            color: #fff !important;
            font-size: 32px;
            font-weight: 700;
            text-decoration: none;
        }


        .login-container {
            min-height: calc(100vh - 82px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }


        .login-card {
            width: 100%;
            max-width: 540px;
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .login-title {
            text-align: center;
            color: #dc3545;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 40px;
        }


        .form-label {
            font-size: 18px;
            font-weight: 600;
            color: #222;
            margin-bottom: 10px;
        }


        .form-control {
            height: 64px;
            border-radius: 14px;
            border: 1px solid #d8dee8;
            font-size: 18px;
            padding: 15px;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15);
        }


        .login-btn {
            width: 100%;
            height: 64px;
            border: none;
            border-radius: 50px;
            background: #dc3545;
            color: #fff;
            font-size: 22px;
            font-weight: 600;
            margin-top: 25px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #bb2d3b;
            color: #fff;
            transform: translateY(-2px);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #dc3545;
            font-size: 17px;
            font-weight: 600;
            text-decoration: none;
        }

        .back-link:hover {
            color: #bb2d3b;
        }

        .error-message {
            background: #f8d7da;
            color: #842029;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }


        @media (max-width: 768px) {

            .navbar-brand {
                font-size: 27px;
            }

            .login-container {
                padding: 30px 20px;
            }

            .login-card {
                padding: 40px 25px;
            }

            .login-title {
                font-size: 40px;
            }

            .form-control {
                height: 58px;
            }

            .login-btn {
                height: 58px;
                font-size: 20px;
            }
        }

    </style>

</head>

<body>


<nav class="navbar">

    <div class="container">

        <a class="navbar-brand" href="/">
            SafeTrack
        </a>

    </div>

</nav>



<div class="login-container">

    <div class="login-card">

        <h1 class="login-title">
            Admin Login
        </h1>


        <?php if (session()->getFlashdata('error')): ?>

            <div class="error-message">
                <?= session()->getFlashdata('error') ?>
            </div>

        <?php endif; ?>


<form action="<?= base_url('admin/login/check') ?>" method="post">
            <!-- Admin Email -->

            <div class="mb-4">

                <label class="form-label">
                    Admin Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Admin Email"
                    required
                >

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    required
                >

            </div>


            <button
                type="submit"
                class="login-btn"
            >
                Admin Login
            </button>

        </form>


        <a
            href="<?= base_url('login') ?>"
            class="back-link"
        >
            Back to User Login
        </a>

    </div>

</div>

</body>

</html>