<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Maltez - C.E.A</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Navegação Mobile</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Controle de Estoque e Ativos - Maltez</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <img src="./assets/img/perfil.png" alt=""> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>
                                <li <?php echo (CURRENT_PAGE == "products.php" || CURRENT_PAGE == "add_products.php")?>>
                                    <a href="#"><i class="fa fa-archive fa-fw"></i>Ativos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="products.php"><i class="fa fa-list fa-fw"></i>Listar Todos</a>
                                        </li>
                                    <li>
                                        <a href="add_product.php"><i class="fa fa-plus fa-fw"></i>Adicionar</a>
                                    </li>
                                    </ul>
                                </li>
                                <li <?php echo (CURRENT_PAGE == "customers.php" || CURRENT_PAGE == "add_customer.php"); ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Colaboradores<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="customers.php"><i class="fa fa-list fa-fw"></i>Listar Todos</a>
                                        </li>
                                    <li>
                                        <a href="add_customer.php"><i class="fa fa-plus fa-fw"></i>Adicionar</a>
                                    </li>
                                    </ul>
                                </li>
                                <?php if ($_SESSION['admin_type'] !== 'user'): ?>
                                <li <?php echo (CURRENT_PAGE == "admin_users.php" || CURRENT_PAGE == "admin_users.php"); ?>>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Usuários<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="admin_users.php"><i class="fa fa-list fa-fw"></i>Listar Todos</a>
                                        </li>
                                    <li>
                                        <a href="add_admin.php"><i class="fa fa-plus fa-fw"></i>Adicionar</a>
                                    </li>
                                    </ul>
                                </li>
                               <?php endif; ?>

                               <?php if ($_SESSION['admin_type'] !== 'user'): ?>
                                <li <?php echo (CURRENT_PAGE == "admin_users.php" || CURRENT_PAGE == "admin_users.php"); ?>>
                                    <a href="#"><i class="fa fa-user fa-fw"></i>Ativos X Colaboradores<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="ativo_colaborador.php"><i class="fa fa-list fa-fw"></i>Listar Todos</a>
                                        </li>
                                    <li>
                                        <a href="add_admin.php"><i class="fa fa-plus fa-fw"></i>Adicionar</a>
                                    </li>
                                    </ul>
                                </li>
                               <?php endif; ?>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            <?php endif;?>
            <!-- The End of the Header -->