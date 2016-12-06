<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SII</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sii.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="header-page hidden-xs">
    <!--      <img src="../vendor/img/headersiitj.png" alt="" class="img-responsive" />-->
    <a href="index.php">  <img src="../vendor/img/header2.png" class="img-responsive" alt="SIITJ encabezado institucional"  /></a>

    </div>

  </div>
    <div id="wrapper">
    <?php include("../content/navbar.php"); ?><!--incluimos la navegacion del sitio-->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 text-center">
                      <span class="title-periodo" > <i class="fa fa-calendar" aria-hidden="true"></i> Periodo:<strong> Agosto- Enero </strong> </span>
                        <h1 class="page-header">Sistema Integral de Indicadores</h1>
                    </div><!-- /.col-lg-12 -->
                      <!--En lo adelante el contenido será volatil de acuerdo a las necesidades del usuario-->

                    <div class="col-lg-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              DataTables Tablas Avanzadas
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                          <th>Rendering engine</th>
                                          <th>Browser</th>
                                          <th>Platform(s)</th>
                                          <th>Engine version</th>
                                          <th>CSS grade</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="odd gradeX">
                                          <td>Trident</td>
                                          <td>Internet Explorer 4.0</td>
                                          <td>Win 95+</td>
                                          <td class="center">4</td>
                                          <td class="center">X</td>
                                      </tr>
                                      <tr class="even gradeC">
                                          <td>Trident</td>
                                          <td>Internet Explorer 5.0</td>
                                          <td>Win 95+</td>
                                          <td class="center">5</td>
                                          <td class="center">C</td>
                                      </tr>
                                      <tr class="odd gradeA">
                                          <td>Trident</td>
                                          <td>Internet Explorer 5.5</td>
                                          <td>Win 95+</td>
                                          <td class="center">5.5</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="even gradeA">
                                          <td>Trident</td>
                                          <td>Internet Explorer 6</td>
                                          <td>Win 98+</td>
                                          <td class="center">6</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="odd gradeA">
                                          <td>Trident</td>
                                          <td>Internet Explorer 7</td>
                                          <td>Win XP SP2+</td>
                                          <td class="center">7</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="even gradeA">
                                          <td>Trident</td>
                                          <td>AOL browser (AOL desktop)</td>
                                          <td>Win XP</td>
                                          <td class="center">6</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Firefox 1.0</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.7</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Firefox 1.5</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Firefox 2.0</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Firefox 3.0</td>
                                          <td>Win 2k+ / OSX.3+</td>
                                          <td class="center">1.9</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Camino 1.0</td>
                                          <td>OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Camino 1.5</td>
                                          <td>OSX.3+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Netscape 7.2</td>
                                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                                          <td class="center">1.7</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Netscape Browser 8</td>
                                          <td>Win 98SE+</td>
                                          <td class="center">1.7</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Netscape Navigator 9</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.0</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.1</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.1</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.2</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.2</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.3</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.3</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.4</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.4</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.5</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.5</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.6</td>
                                          <td>Win 95+ / OSX.1+</td>
                                          <td class="center">1.6</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.7</td>
                                          <td>Win 98+ / OSX.1+</td>
                                          <td class="center">1.7</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Mozilla 1.8</td>
                                          <td>Win 98+ / OSX.1+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Seamonkey 1.1</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Epiphany 2.20</td>
                                          <td>Gnome</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 1.2</td>
                                          <td>OSX.3</td>
                                          <td class="center">125.5</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 1.3</td>
                                          <td>OSX.3</td>
                                          <td class="center">312.8</td>
                                          <td class="center">A</td>
                                      </tr>

                                  </tbody>
                              </table>
                              <!-- /.table-responsive -->
                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                    </div><!--/.col-lg-12-->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div> <!-- /#wrapper -->

    <?php include '../content/footer.php'; ?>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sii.js"></script>

</body>

</html>
