<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-left my-3">

                                        <a href="menu" class="border-success btn btn-light btn-sm">Home</a>
                                        <a href="user" class="btn btn-primary btn-sm">User </a>

                                    </div>

                                    <form class="user" method="POST" action="<?= base_url('login/login_action'); ?>">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Password</th>
                                                    <th scope="col">Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>username1</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>username2</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>username3</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>username4</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>username5</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>username6</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>username7</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>username8</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>username9</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10</th>
                                                    <td>username10</td>
                                                    <td>password</td>
                                                    <td><a href="tambah.php" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="tambah.php" class="btn btn-success btn-sm">Add</a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </form>
                                    <p>
                                        <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                                    <div class="alert alert-warning">
                                        <?php echo session()->getFlashdata('gagal') ?>
                                    </div>
                                <?php } ?>
                                </p>
                                <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>