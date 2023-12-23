<?php helper(['form']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1>Sign In</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>

                <!-- Form Open with CodeIgniter -->
                <?= form_open('/login_user/auth'); ?>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <!-- Using form_input for CSRF protection and set_value for repopulating input -->
                        <?= form_input('email', set_value('email'), 'class="form-control" id="InputForEmail"'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <!-- Using form_password for password input -->
                        <?= form_password('password', '', 'class="form-control" id="InputForPassword"'); ?>
                    </div>
                    <!-- Using form_submit for the submit button -->
                    <?= form_submit('submit', 'Login', 'class="btn btn-primary"'); ?>
                <?= form_close(); ?>
                <!-- Form Close with CodeIgniter -->
            </div>
        </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
