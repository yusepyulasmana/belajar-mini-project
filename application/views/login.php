<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'partials/Top_section.php' ?>
</head>
<body>
    <div class="container">
        <h2 class="mt-5" mb-3>Form Login</h2>

        <hr>
        <?php if ($this->session->errors): ?>
            <div class="alert alert-danger">
                <?= $this->session->errors ?>
            </div>
         <?php endif ?>   

        <form action="<?= site_url('auth/login_process')?>" method="POST">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        
        <div>
        <label>Password:</label>
        <input type="password" name="password" class="form-control">
        </div>
        <br>
        <button class="btn btn-primary">
            Login
        </button>
        </form>
    </div>
    <?php include 'partials/bottom_section.php'?>
</body>
</html>