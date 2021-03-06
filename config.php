<!DOCTYPE html>
<html lang="es">
    <head>        
        <!-- META  -->
        <title>CABIS - Tonga Technology</title>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- FIN META INFO -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- FIN CSS INCLUDE -->      
    </head>
    <body>
        <!-- CONTENIDO -->
        <div class="page-container page-navigation-top-fixed">
            <!-- SIDEBAR -->
            <?php require 'content/sidebar.html';?>
            <!-- FIN SIDEBAR -->
            <div class="page-content">
                <!-- HEADER -->
                <?php require 'content/header.html';?>
                <!-- FIN HEADER -->            
                <!-- SECCION DE CONTENIDO -->
                <?php include 'content/config.html';?>
                <!-- FIN SECCION DE CONTENIDO -->                                
            </div>            
        </div>
        <!-- FIN CONTENIDO -->
        <!-- SALIDA-->
        <?php include 'content/mensajesalida.html';?>
        <!-- FIN SALIDA-->
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS --> 
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->    
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        <script>
            $(function(){
                //Spinner
                $(".spinner_default").spinner()
                $(".spinner_decimal").spinner({step: 0.01, numberFormat: "n"});                
                //End spinner
                //Datepicker
                $('#dp-2').datepicker();
                $('#dp-3').datepicker({startView: 2,viewMode: 'years',format: 'yyyy-mm',minViewMode: "months"});
                $('#dp-4').datepicker({startView: 1});
                $('#dp-5').datepicker({startView: 2,viewMode: 'years',format: 'yyyy-mm',minViewMode: "months"});
                $('#dp-6').datepicker({startView: 2,format: 'yyyy-mm-dd'});
                //End Datepicker
            });
        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>






