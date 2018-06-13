<!DOCTYPE html>
<html lang="pt-br" hola_ext_inject="disabled">

<head>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
    </style>
    <style type="text/css">
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .gm-style {
            font-family: Roboto, Arial, sans-serif;
            font-size: 11px;
            font-weight: 400;
            text-decoration: none
        }

        .gm-style img {
            max-width: none
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add foto - Projeto Planetacraft_BR</title>
    <link rel="shortcut icon" href="img/icon.png">
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/grayscale.css" rel="stylesheet">
    <link href="src/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="src/js/jquery.js"></script>
    <link href="src/css/dropzone.css" rel="stylesheet">
    <script src="src/js/dropzone.js"></script>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand page-scroll" href="inicio">
                    <img class="pull-left" src="img/icon.png" width="32" height="32"><span class="light" style="margin-left:5px;line-height: 35px;"> Planetacraft_BR</span>
                </a>
                </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden active">
                            <a href="#page-top"></a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="inicio">Início</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="historia">Nossa História</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="fechamento">Porque fechamos?</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="agradeco_de_coracao">Agradecimentos</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="dados">Dados</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="videos">Vídeos</a>
                        </li>
                        <li class="">
                                <a class="page-scroll" href="fotos">Fotos</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="redes">Redes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="intro">
            <div class="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <center>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                <h1>Adicionar foto</h1>
                                <p>Adicione suas fotos do servidor em nossa galeria.</p>
                                <hr>
                                <div class="texto icons" align="left">
<br><h2 id="status_add_foto" style="color: #479720;"></h2><br>
<script>
function ADD_FOTO_OK(){
$("#status_add_foto").html("Foto enviada para avaliação, ela vai ser colocada na galeria assim que for aprovada.");
delay = setTimeout(function(){clearTimeout(delay);$(".test_dropzone").html("");}, 500);
delay2 = setTimeout(function(){clearTimeout(delay2);window.location.reload();}, 3000);
}
</script>
<div class="form-group test_dropzone">
<form id="ADD_FOTO" action="p_fotos_add.php" class="dropzone">
<script>
$("#ADD_FOTO").dropzone({ acceptedFiles: "image/jpeg,image/jpg,image/png,image/gif", success: function() {ADD_FOTO_OK();}});
</script>
<div class="dz-message">
<div class="icon"><span class="mdi mdi-cloud-upload"></span></div>
<h2>Arrastar e soltar arquivos aqui</h2><span class="note">(Aceita arquivos .jpeg, .jpg, .png e .gif)</span>
<div class="dropzone-mobile-trigger needsclick"></div>
</div>
</form>
</div>
<br><br><br>

                                </div>
                                <hr>
                                </br>
                                <h4>
                                    <a href="status" style="color: #fff"></h4>
                                </a>
                                </br>
                                <center>
                                    <p></p>
                                </center>
                                </br>
                        </div>
                    </div>
                </div>
<center><br><br><a href="http://www.planetsweb.com.br/" target="_blank" style="cursor: url(https://www.planetsweb.com.br/setores/fotos/geral/logo.cur) 4 12, auto!important;border: none!important;">
<img src="https://www.planetsweb.com.br/setores/fotos/geral/logotipo_branca.png" alt="PlanetsWEB" width="200"></a><br><br><br><br></center>
            </div>
        </header>

        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/jquery.easing.min.js"></script>
        <script src="src/js/grayscale.js"></script>


        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-50795258-2', 'auto');
            ga('send', 'pageview');
        </script>

    </body>

</html>