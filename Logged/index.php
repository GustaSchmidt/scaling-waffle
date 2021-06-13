<?php
require_once (dirname(__FILE__).'\team_lib\functions_logged.php');

//headers include pege
$assets = new pageAssets();
$assets->addJs('../front-dependencies/assets/js/logged/home.js');
$assets->addCss('../front-dependencies/assets/css/logged/home.css');

require_once (dirname(__FILE__).'\common_parts\header.php');
?>



<body>
    <section>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-2" id="menu">
                    <ul class="menu_grup">
                        <li class="titulo-menu"></i>Suas Pastas</li>
                        <li class="item-menu">Pasta pessoal</li>
                        <li class="item-menu">Design</li>
                        <li class="item-menu">Dev</li>
                        <li class="item-menu-buttom">Nova pasta</li>
                    </ul>
                </div>
                <div class="col-10" id="app-area">
                    <div class="row">
                        <!-- isso é um card de lista -->
                        <div class="col-3 card-lista-warper">
                            <div class="card-lista" id="0sdfg987">
                                <img src="http://s2.glbimg.com/rs1SOYyirS4k0BaulzCOYSgsQ50=/695x0/s.glbimg.com/po/tt2/f/original/2014/04/11/bliss.jpg">
                                <h1>Pasta pessoal</h1>
                            </div>
                        </div>
                        <!-- fim card de lista -->


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
