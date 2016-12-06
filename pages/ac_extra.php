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
    <!-- <img src="../vendor/img/headersiitj.png" alt="" class="img-responsive" />-->
      <img src="../vendor/img/header2.png" class="img-responsive" alt="" />
    </div>
  </div>
    <div id="wrapper">
    <?php include("../content/navbar.php"); ?><!--incluimos la navegacion del sitio-->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
              <!--Titulo del Sitio-->
                  <div class="col-lg-12">
                    <span class="title-periodo" > <i class="fa fa-calendar" aria-hidden="true"></i> Periodo Agosto- Enero</span>
                    <h1 class="page-header">Actividades Extraescolares Arte y Cultura</h1>
                  </div>

                  <!-- /.col-lg-12 -->
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Captura de alumnos de actividades extraescolares en talleres
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <form role="form">


                              <div class="form-group">
                                <div class="form-inline">
                                  <div class="form-group">
                                    <label for="ac-extra">Actividades</label>
                                    <select id="ac_extra" class="form-control">
                                      <option>Artes Platicas</option>
                                      <option>Cine Club</option>
                                      <option>Danza</option>
                                      <option>Fotografia</option>
                                      <option>Música</option>
                                      <option>Oratoria</option>
                                      <option>Pintura</option>
                                      <option>Poesia</option>
                                      <option>Teatro</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="ac-extra" style="padding-left: 10px;">Sexo </label>
                                    <select id="ac_extra" class="form-control">
                                      <option>Hombres</option>
                                      <option>Mujeres</option>

                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="cantidad" style="padding-left: 10px;"> Cantidad</label>
                                    <input type="number"  class="form-control" id="totalPersona" value="0" min="0" max="100">
                                  </div>

                               </div>

                              </div>

                              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Guardar</button>
                              </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  </div><!--/.col-lg-12-->
              </div><!-- /.row -->
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
