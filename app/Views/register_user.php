<?php helper(['form']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-6">
                <h1>Sign Up</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>

                <!-- Form Open with CodeIgniter -->
                <?= form_open('/register_user/save'); ?>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Name</label>
                        <!-- Using form_input for CSRF protection and set_value for repopulating input -->
                        <?= form_input('name', set_value('name'), 'class="form-control" id="InputForName"'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email Address</label>
                        <!-- Using form_input for CSRF protection and set_value for repopulating input -->
                        <?= form_input('email', set_value('email'), 'class="form-control" id="InputForEmail"'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <!-- Using form_password for password input -->
                        <?= form_password('password', '', 'class="form-control" id="InputForPassword"'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Address</label>
                        <!-- Using form_input for CSRF protection and set_value for repopulating input -->
                        <?= form_input('address', set_value('address'), 'class="form-control" id="InputForAddress"'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="InputForContact" class="form-label">Contact</label>
                        <!-- Using form_input for CSRF protection and set_value for repopulating input -->
                        <?= form_input('contact', set_value('contact'), 'class="form-control" id="InputForContact"'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <!-- Using form_password for password input -->
                        <?= form_password('confpassword', '', 'class="form-control" id="InputForConfPassword"'); ?>
                    </div>

                    <!-- Using form_submit for the submit button -->
                    <?= form_submit('submit', 'Register', 'class="btn btn-primary"'); ?>
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
