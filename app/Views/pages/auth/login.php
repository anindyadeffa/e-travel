<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

<body style="background-color: #9ac9dd;" class="Poppins">
    <?php
    $session = session();
    $login = $session->getFlashdata('login');
    $email = $session->getFlashdata('email');
    $password = $session->getFlashdata('password');
    ?>
    <section>
        <div class="login-form">
            <div class="text-center mb-4" style="color: #ffffff;">
                <a href="<?php echo base_url('/') ?>">
                    <h2><b>TRAVEL.IN</b></h2>
                </a>
            </div>
            <?php if ($email) { ?>
                <div class="alert alert-danger w-100 mx-auto">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo $email ?></strong>
                </div>
            <?php } ?>

            <?php if ($password) { ?>
                <div class="alert alert-danger w-100 mx-auto">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo $password ?></strong>
                </div>
            <?php } ?>

            <?php if ($login) { ?>
                <div class="alert alert-success w-100 mx-auto">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo $login ?></strong>
                </div>
            <?php } ?>

            <form action="/auth/valid_login" method="POST" autocomplete="off">
                <h2 class="text-center">Login</h2>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="enamil" placeholder="Email Address" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <!-- <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div> -->
                <p class="text-center"><a href="<?php echo base_url('/register') ?>">don’t have an account? Sign Up.</a></p>
                <div class="form-group">
                    <button type="submit" id="btn-custom" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>