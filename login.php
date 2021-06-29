<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="<?= base_url('/style1.css');?>">
    </head>
    <body>
        <div class="login-wrapper">
            <h1>Sign In</h1>
            <br>
            <?php if(session()->getFlashdata('flash_msg')):?>
                <div class="alert alert-danger"><?=
                    session()->getFlashdata('flash_msg') ?>
                </div>
            <?php endif;?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email address<br></label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password<br></label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
</html>