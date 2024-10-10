<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/styles.css'); ?>"> <!-- Link CSS tambahan jika ada -->
    <link rel="shortcut icon" href="<?php echo base_url('template/assets/image/smkn 1 slawi.png'); ?>"> <!-- Ganti dengan icon yang sesuai -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Menghubungkan font Poppins -->
    <style>
        body {
            background-image: url('<?php echo base_url('template/assets/img/back.jpg'); ?>'); /* Ganti dengan nama file gambar Anda */
            background-size: cover; /* Menutupi seluruh halaman */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            background-position: center; /* Menempatkan gambar di tengah */
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
        }

        .form-label {
            font-weight: 600; /* Membuat label lebih tebal */
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; /* Jarak antara logo dan judul */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 10%;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="logo">
                            <img src="<?php echo base_url('template/assets/img/smea.png'); ?>" alt="Logo" style="max-width: 50%; height: auto;">
                        </div>
                        <h2 class="text-center">SMEANS | SIGN IN</h2>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form action="<?php echo site_url('admin/auth'); ?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" checked>
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link JS Bootstrap -->
    <script src="<?php echo base_url('template/assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
