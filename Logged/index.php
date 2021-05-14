<?php

require_once 'session_logged.php';

?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <title>Home - User name</title>


        <!-- libs -->
        <script type="text/javascript" src="../front-dependencies/lib/jquery/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="../front-dependencies/lib/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../front-dependencies/assets/js/master.js"></script>

        <!-- assets -->
        <link rel="stylesheet" href="../front-dependencies/assets/css/logged/home.css">
        <script type="text/javascript" src="../front-dependencies/assets/js/logged/home.js"></script>

    </head>
    <body>
        <header>
            <div class="header-warp">
                <div class="row">
                    <div class="col-6">
                        <p style="color:#fff">
                            <img src="../front-dependencies/assets/images/logoteste.svg" alt="" id="logo-header"> scaling waffle
                        </p>
                    </div>
                    <div class="col-6">
                        <div id="user-atributes-warper">
                            <img src="https://www.aatesp.com.br/resources/files/pics/nouser.png" alt="" id="user_img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-menu">

            </div>
        </header>

        <body>
            <section>
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-2" id="menu">
                            <ul>
                                <li class="titulo-menu"></i>Suas Pastas</li>
                                <li class="item-menu">Pasta pessoal</li>
                                <li class="item-menu">Design</li>
                                <li class="item-menu">Dev</li>
                                <li class="item-menu-buttom">Nova pasta</li>
                                <li class="titulo-menu"></i>Equipes</li>
                                <li class="item-menu">scaling-waffle</li>
                                <li class="item-menu-buttom">Nova equipe</li>
                            </ul>
                        </div>
                        <div class="col-10" id="app-area">
                            <div class="row">
                                <!-- isso é um card de lista -->
                                <div class="col-3 card-lista-warper">
                                    <div class="card-lista">
                                        <img src="http://s2.glbimg.com/rs1SOYyirS4k0BaulzCOYSgsQ50=/695x0/s.glbimg.com/po/tt2/f/original/2014/04/11/bliss.jpg">
                                        <h1>Pasta pessoal</h1>
                                    </div>
                                </div>
                                <!-- isso é um card de lista fim -->
                                <div class="col-3 card-lista-warper">
                                    <div class="card-lista">
                                        <img src="http://s2.glbimg.com/rs1SOYyirS4k0BaulzCOYSgsQ50=/695x0/s.glbimg.com/po/tt2/f/original/2014/04/11/bliss.jpg">
                                        <h1>Design</h1>
                                    </div>
                                </div>
                                <div class="col-3 card-lista-warper">
                                    <div class="card-lista">
                                        <img src="http://s2.glbimg.com/rs1SOYyirS4k0BaulzCOYSgsQ50=/695x0/s.glbimg.com/po/tt2/f/original/2014/04/11/bliss.jpg">
                                        <h1>Dev</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>

        <footer>
        </footer>
    </body>
</html>