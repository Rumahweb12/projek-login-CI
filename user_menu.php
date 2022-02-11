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
                                        <a href="menu" class="btn btn-primary btn-sm">Home </a>
                                        <a class="border-success btn btn-light btn-sm " href="user">User</a>
                                    </div>
                                    <h1 class="mt-2">Daftar Mahasiswa</h1>

                                    <form class="user" method="POST" action="<?= base_url('login/login_action'); ?>">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Profile</th>
                                                    <th scope="col">Nim</th>
                                                    <th scope="col">Nama Mahasiswa</th>
                                                    <th scope="col">Prodi</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img src="/img/foto1.jpeg" alt="" width="100"></td>
                                                    <td>1900018192</td>
                                                    <td>Hafizh Nauval </td>
                                                    <td>Teknik Informatika</td>
                                                    <td><a href="" class="btn btn-success">Detail</a></td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><img src="/img/foto4.jpg" alt="" width="100"></td>
                                                    <td>1900018182</td>
                                                    <td>Siti Khodijah</td>
                                                    <td>Teknik Informatika</td>
                                                    <td><a href="" class="btn btn-success">Detail</a></td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><img src="/img/foto2.jpg" alt="" width="100"></td>
                                                    <td>1900018100</td>
                                                    <td>Dimas Arya </td>
                                                    <td>Teknik Informatika</td>
                                                    <td><a href="" class="btn btn-success">Detail</a></td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td><img src="/img/foto3.png" alt="" width="100"></td>
                                                    <td>1900018200</td>
                                                    <td>Ahmad Agung </td>
                                                    <td>Teknik Informatika</td>
                                                    <td><a href="" class="btn btn-success">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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