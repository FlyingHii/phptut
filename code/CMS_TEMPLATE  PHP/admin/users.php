<?php include("includes/header.php");
session_start();


?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <?php include_once('includes/top_nav.php') ?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include_once('includes/side_bar.php') ?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        User
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <?php

                $users = Admin\Includes\Users::getAll();
                foreach ($users as $user) {
                    var_dump($user);
                }

            ?>
        </div>
        <!-- /.container-fluid -->

    </div>

    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>