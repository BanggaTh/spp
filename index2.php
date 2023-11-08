<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Admin / Petugas - Aplikasi SPP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <h4 class="text-center">Login Admin / Petugas</h4>
                    <div class="card">
                        <div class="card-header">
                            <img src="logo-spp.png" width="100%">
                        </div>
                        <div class="card-body">
                            <form action="proses-login-petugas.php" method="post">
                                <div class="form-group mb-2">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda.." required>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda.." required>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-primary"> Login </button>
                                </div>
                                <a href="index.php"> Login Sebagai Siswa </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>