<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url('/mainpages/css/styles.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #ffffff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body class="Poppins">
    <?php
    $session = session();
    $error = $session->getFlashdata('error');
    ?>
    <section style="background-color: #9ac9dd;">
        <div class="login-form">
            <div class="text-center mb-4" style="color: #ffffff;">
                <a href="<?php echo base_url('/') ?>">
                    <h2><b>TRAVEL.IN</b></h2>
                </a>
            </div>
            <h2 class="text-center">Sign Up</h2>
            <?php if ($error) { ?>
                <div class="alert alert-danger">
                    <strong>Maaf!</strong> Terjadi Kesalahan:
                    <ul>
                        <?php foreach ($error as $e) { ?>
                            <li><?php echo $e ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <form action="/auth/valid_register" method="POST" autocomplete="off">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name*" required autofocus>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number*" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Create A Password*" required autocomplete="current-password">
                </div>
                <p><small>Password Must Be At Least 8 Characters Long</small></p>
                <p class="text-center mt-2"><a href="<?php echo base_url('/login') ?>">Already have an account? Login.</a></p>
                <div class=" form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>