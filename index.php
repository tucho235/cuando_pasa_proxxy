<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset="utf-8">
        <meta name="generator" content="GravCMS" />
        <meta name="description" content="Blog personal de Victor Rosset" />
        <meta name="google-site-verification" content="U7GQQd3AqKBjABjFjskXF2FhWRf9mMukLtjtP80fyQA" />
        <meta name="keywords" content="cuando pasa, cuando, pasa, proxy, cuando pasa proxy" />
        <meta name="twitter:card" property="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" property="twitter:title" content="Cuando Pasa Proxy" />
        <meta name="twitter:description" property="twitter:description" content="Cuando Pasa Proxy" />
        <meta name="twitter:image" property="twitter:image" content="http://cp.tucho235.com.ar/cuando_pasa_600_314.png" />
        <meta name="twitter:site" property="twitter:site" content="@tucho235" />
        <meta name="og:sitename" property="og:sitename" content="item" />
        <meta name="og:title" property="og:title" content="Cuando Pasa Proxy" />
        <meta name="og:description" property="og:description" content="Cuando Pasa Proxy" />
        <meta name="og:type" property="og:type" content="article" />
        <meta name="og:url" property="og:url" content="http://cp.tucho235.com.ar" />
        <meta name="og:image" property="og:image" content="http://cp.tucho235.com.ar/android-chrome-512x512.png" />
        <meta name="fb:app_id" property="fb:app_id" content="712729472237695" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="http://cp.tucho235.com.ar/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://cp.tucho235.com.ar/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://cp.tucho235.com.ar/favicon-16x16.png">
        <link rel="manifest" href="http://cp.tucho235.com.ar/site.webmanifest">
        <link rel="mask-icon" href="http://cp.tucho235.com.ar/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffab00">
        <meta name="theme-color" content="#ffab00">
        <title>Cuando Pasa Proxy</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .bg-orange, body {
                background: #ffab00 !important;
            }
            .navbar {
                #position: fixed;
                width: 100%;
            }
            header {
                background: #ffab00 !important;
                #margin-left: 10px;
                #margin-right: 10px;
            }
            .jumbotron {
                #margin-left: 10px;
                #margin-right: 10px;
                padding-left: 15px;
                padding-right: 15px;
            }
            .tweetsection{
                position: fixed;
                #left: 50%;
                right: 0px;
                bottom: 0px;
                height: 50px;
                z-index: 0;

            }
            /* For Firefox */
            input[type='number'] {
                -moz-appearance:textfield;
            }

            /* Webkit browsers like Safari and Chrome */
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            .beta {
                position: absolute;
                right: -42px;
                bottom: -4px;
            }
        </style>
    </head>
    <body>

    <header style="z-index: 1; position: fixed; width: 100%; z-index: 1">
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Favoritas</h4>
                        <ul class="list-unstyled" id="favList">
                            <li><a href="#" id="resetFav" class="text-white">Resetear Favoritas</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://twitter.com/tucho235" target="_blank" class="text-white"><i class="fab fa-twitter"></i>&nbsp;Sígueme en Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="favicon-32x32_2.png" />&nbsp;
                    <strong>Cuando Pasa Proxy</strong>&nbsp;<span style="position: relative"><span class="badge badge-info beta">beta</span></span>
                </a>
                <button class="navbar-toggler" style="z-index: 1; background-color: rgba(52,58,64,.5);" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <?php
        $parada = '';
        if (    ($_SERVER['REQUEST_METHOD'] == 'POST')
            and (isset($_POST['parada'])))
        {
            $parada = trim($_POST['parada']);
        }
        ?>
        <section class="jumbotron container text-center bg-orange" style="width: 100%; padding-bottom: 0px; padding-top: 20px;">
            <form action="" method="post">
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="parada" class="float-left">Parada:</label>
                    <input class="form-control form-control-lg" type="number" name="parada" id="parada" placeholder="nro de parada" value="<?= $parada; ?>" min="1" max="999999"><br>
                </div>
                <div class="float-right">
                    <button type="submit" value="Submit" class="btn btn-primary">Consultar</button>
                </div>
            </form>
            <div class="float-left" style="display: block; width: 100%; text-align: left">
                <?php if (strlen($parada)) : ?>
                    Parada: <?= $parada ?>&nbsp;<a href="#" style="display: none;" id="linkAddToFav" title="Agregar a Favoritas" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-star"></i></a><a href="#" id="removeParadaFromFav" style="display: none;"  data-parada="<?= $parada ?>" title="Remover de Favoritas"><i class="far fa-star"></i></a> <hr>
                <?php endif; ?>
            </div>
        </section>
    </header>
    <main role="main" style="padding-top: 275px; z-index: 0; padding-left: 20px;">
        <section class="container" style="margin-bottom: 60px;">
            <?php
                $result = [];
                if (    ($_SERVER['REQUEST_METHOD'] == 'POST')
                    and (isset($_POST['parada'])))
                {
                    $ch = curl_init( 'http://cuandopasa.smartmovepro.net/default.aspx/RecuperarDatosPuntos2' );
                    # Setup request to send json via POST.
                    $payload = json_encode( array(
                        'identificadorParada' => $parada,
                        'descripcionLinea'    => "VER TODAS",
                        'codigioLineaGrupo'   => "0"
                    ) );
                    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
                    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                    # Return response instead of printing.
                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                    # Send request.
                    $result = curl_exec($ch);
                    curl_close($ch);
                    # Print response.
                    $result = json_decode($result);
                }
                foreach ($result as $item){
                    echo nl2br($item);
                }
            ?>
        </section>
        <section class="tweetsection">
            <div class="container">
                <div class="float-right">
                    <a class="twitter-share-button"
                       href="https://twitter.com/intent/tweet?text=Estoy%20usando%20el%20nuevo%20Cuando%20Pasa%20Proxy"
                       data-size="large">Tweet</a>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar a Favoritas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nameParadaFav" class="float-left">Nombre Parada:</label>
                        <input class="form-control form-control-lg" type="text" name="parada" id="nameParadaFav" placeholder="Nombre de Parada">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="addParadaToFavs" data-parada="<?= $parada ?>" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="app.js" type="application/javascript"></script>
    <script>window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));</script>
    </body>
</html>
