<?php 

    use App\db;

    require_once('App'.DIRECTORY_SEPARATOR.'db.php');
    require_once('App'.DIRECTORY_SEPARATOR.'config.php');

    $conn = db::conecta();

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pisogran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

    </head>
<html>

<body>
    <header>
        <!-- MENU MOBILE-->
        <ul class="side-nav hide-menu" id="menu-mobile">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#pedras">Pedras</a></li>
            <li><a href="#projetos">Portfólio</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#local">Endereço</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0 nav-color">
                <div class="nav-wrapper container">
                    <h1 class="logo_text">Pisogran</h1>                    
                    <ul class="right light hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#pedras">Pedras</a></li>
                        <li><a href="#projetos">Portfólio</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li><a href="#local">Endereço</a></li>
                    </ul>
                    <a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
    </header>

    <!-- ********************* HOME **************************  -->

    <section class="home bloco scrollspy" id="home">
        <div class="row container banner">
            <div class="col s12 center">                
                <a href="https://www.pisogran.com.br"><img src="img/logo-pisogram.png" alt="Pisogran"></a>
                <p class="black-text">Contribuir para a concretização dos sonhos de nossos clientes com o melhor de nossos serviços proporcionando assim uma experiência única no ramo de pedras e revestimentos. Ser a primeira marca do setor a se propagar em todo o estados gerando emprego, conhecimento técnico e plano de carreira para os colaboradores.</p>
                <div class="row">
                    <a class="btn btn-large cor_logo" href="#sobre">Sobre nós</a>
                    <a class="btn btn-large black white-text" href="#contato">Contato</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ************************* SOBRE ************************* -->
    <section class="sobre bloco scrollspy" id="sobre">
        <div class="row container">
            <div class="col s12 center ">
                <h2 class="light titulo">Sobre nós</h2>
            </div>

            <div class="col s12 l6">
                <h5>Quem somos</h5>
                <p class="light">A <b>Pisogran</b> preza pela eficiência e pontualidade para execução do projeto de seus clientes, por isso, não abre mão de profissionais altamente qualificados em sua equipe. Temos uma infraestrutura completa que se destaca desde a venda, produção, medição e instalação de todos os produtos. Tudo é feito com rigor técnico e a qualidade, que faz da <b>Pisogran</b>, uma empresa única no mercado. Atendemos projetos comerciais, industriais e residenciais.</p>
            </div>

            <div class="col s12 l6">
                <!-- <div class="slider">
                    <ul class="slides">
                        <li><img src="img/curso_01.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Automação industrial</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_02.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Comando CLP</h3>
                                <p class="light">Área de atuação: ler os valores lógicos presentes nas entradas,
                                    executar as
                                    instruções que constituem o programa e transferir para as saídas as ordens
                                    provenientes dessas instruções</p>
                            </div>
                        </li>
                        <li><img src="img/curso_03.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Comando elétricos</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_04.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Eletricidade industrial</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_05.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Eletricidade predial</h3>
                                <p class="light">Realiza manutenção preventiva, corretiva e preditiva, quadro de força,
                                    comandos
                                    elétricos e demais equipamento de energia em prédios, analisa as necessidades de
                                    troca e regulagem de peças e aplica testes de funcionamento</p>
                            </div>
                        </li>
                        <li><img src="img/curso_06.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Eletricidade residencial</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_07.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Energia Fotovoltaica</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_08.jpg">
                            <div class="caption left-align">
                                <h3 class="light">desenhos Técnicos</h3>
                                <p class="light">Leitura e Interpretação de desenhos Técnicos </p>
                            </div>
                        </li>
                        <li><img src="img/curso_09.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Eletropneumática</h3>
                            </div>
                        </li>
                        <li><img src="img/curso_10.jpg">
                            <div class="caption left-align">
                                <h3 class="light">Eletrônica I e II</h3>
                            </div>
                        </li>
                    </ul>
                </div> -->

                <div class="carousel carousel-slider center" data-indicators="true">

                    <?php                   
                    
                        $select = "Select img014 From public.n014 Where img014 <> ''";
                        $ret = $conn->query($select);
                        $ret = $ret->fetchAll();
                        //echo"<pre>";var_dump($ret);
                        foreach ($ret as $key => $value) {
                            echo '<a class="carousel-item"><img src="'.$path_img.$value['img014'].'" alt=""></a>';
                        }                        

                    ?>

                </div>

            </div>

        </div>

        <div class="row cor_logo missao-visao-valores">
            <div class="container">
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">directions_run</i></span>
                    <h3 class="light">Missão</h3>
                    <p class="light">Agregar valor as obras de nossos clientes, através de pedras naturais, industrializadas e revestimentos, de qualidade e excelência em serviços.</p>
                </article>

                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">visibility</i></span>
                    <h3 class="light">Visão</h3>
                    <p class="light">Continuar sendo referência em atendimento, qualidade do produto e pontualidade na execução dos projetos. Através de investimento na qualificação dos profissionais e equipamentos de última geração.</p>
                </article>

                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">school</i></span>
                    <h3 class="light">Valores</h3>
                    <p class="light">EXCELÊNCIA NO ATENDIMENTO – ambiente confortável e inspirador com
profissionais capacitados para entender a necessidade do cliente e orientar</p>
                </article>
            </div>

        </div>

    </section>

    <!-- ******************************************* Pedras ******************************************* -->
    <section class="pedras bloco scrollspy" id="pedras">
    
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-black">PEDRAS</h2>
                <p class="light paragrafo white-black">VENHA CONHECER NOSSO SHOWROOM</p>
            </div>
        </div>

        <?php

            $select = "Select img002, def002, cod002, des002 From public.n002 Where img002 <> ''";
            $ret = $conn->query($select);
            $ret = $ret->fetchAll();
            $conta = 0;
            $novaLinha = true;

            foreach ($ret as $key => $value) {
                
                if ( $novaLinha ){
                    echo '<div class="row container">';
                    $novaLinha = false;
                }

                ?>
                    <article class="col s12 m6 l6">
                        <div class="card medium">
                            <div class="card-image">
                                <img src="<?=  $path_img.$value['img002'] ?>" alt="" class="materialboxed">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title cor_texto"><?= $value['des002'] ?></h3>
                                <p class="light"></p>
                            </div>
                            <div class="card-action">
                                <a href="#<?= $value['cod002'] ?>" class="btn btn-floating halfway-fab pulse cor_logo modal-trigger">
                                    <i class="material-icons">description</i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="modal" id="<?= $value['cod002'] ?>">
                        <div class="modal-content">
                            <h5 class="light cor_texto"><?= $value['def002'] ?></h5>
                        </div>
                        <div class="modal-footer">
                            <a class="btn cor_logo modal-action modal-close">Sair</a>
                        </div>
                    </div>

                <?php

                $conta++;

                if ($conta==2){
                    echo '</div>';
                    $conta = 0;
                    $novaLinha = true;
                }

            }

        ?>

    </section>

    <!-- ************************************** PORTFÓLIO ************************** -->
    <section class="projetos bloco scrollspy" id="projetos">

        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-text">PORTFÓLIO</h2>
                <p class="light paragrafo white-text"></p>
            </div>
        </div>

        <?php

            $select = "Select img014, def014, cod014, des014, loc014 From public.n014 Where img014 <> ''";
            $ret = $conn->query($select);
            $ret = $ret->fetchAll();
            $conta = 0;
            $novaLinha = true;

            foreach ($ret as $key => $value) {
                
                if ( $novaLinha ){
                    echo '<div class="row container">';
                    $novaLinha = false;
                }

                ?>
                    <article class="col s12 m6 l6">
                        <div class="card medium">
                            <div class="card-image">
                                <img src="<?= $path_img.$value['img014'] ?>" alt="" class="materialboxed">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title cor_texto"><?= $value['des014'] ?></h3>
                                <p class="light"></p>
                            </div>
                            <div class="card-action">
                                <a href="#<?= $value['cod014'] ?>" class="btn btn-floating halfway-fab pulse cor_logo modal-trigger">
                                    <i class="material-icons">description</i>                                    
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="modal" id="<?= $value['cod014'] ?>">
                        <div class="modal-content">
                            <h5 class="light cor_texto"><?= $value['def014'] ?></h5>
                            <hr>
                            Localização
                            <hr>
                            <?= $value['loc014']?>
                        </div>
                        <div class="modal-footer">
                            <a class="btn cor_logo modal-action modal-close">Sair</a>
                        </div>
                    </div>

                <?php

                $conta++;
                
                if ($conta==2){
                    echo '</div>';
                    $conta = 0;
                    $novaLinha = true;
                }


            }

            ?>

    </section>

    <!--  ********************* Contato ******************************************* -->
    <section class="contato bloco scrollspy" id="contato">
        <div class="row container">
            <div class="col s12 m6 l12">
                <div class="col s12 center">
                    <h2 class="light titulo">Contato</h2>
                </div>
                <div class="formulario white black-text">
                    <h4>Fale conosco</h4>
                    <p class="light paragrafo">Para informações e orçamentos!</p>
                    <form action="App\enviaContato.php" method="post">
                        <div class="input-field">
                            <input type="text" name="nom015" id="nom015" required>
                            <label for="nom015">Seu nome</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="tel015" id="tel015" required>
                            <label for="tel015">Telefone</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="ema015" id="ema015" required>
                            <label for="ema015">E-mail</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="ass015" id="ass015" required>
                            <label for="ass015">Assunto</label>
                        </div>
                        <div class="input-field">
                            <textarea name="des015" id="des015" class="materialize-textarea" required></textarea>
                            <label for="des015">Mensagem</label>
                        </div>
                        <div class="row">
                            <div class="g-recaptcha" data-sitekey="6Lf9tckZAAAAAH5Q44wKx6q8c9yn5fmKfDCcbsi6"></div>
                        </div>
                        <button class="btn cor_logo" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--  ********************* MAPA ******************************************* -->        
    <section class="contato bloco scrollspy" id="local">    
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo">Endereço da Loja</h2>
            </div>
            <div class="col s12 m6 l6 hide-on-med-only">
                <div class="mapa transparent">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1544.5889792861951!2d-43.39890476636712!3d-22.96228877208449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd95706cd1d95%3A0x1e5a92b448d31423!2sEstr.%20dos%20Bandeirantes%2C%206089%20-%20Curicica%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022780-081!5e0!3m2!1spt-BR!2sbr!4v1597176278006!5m2!1spt-BR!2sbr" width="600" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col s12 m6 l6">
                <div class="informacoes white-text">
                    <h4>Redes Sociais</h4>
                    <p class="light paragrafo">Fique por dentro das novidades, siga as nossas redes sociais</p>
                    <a href="https://www.facebook.com/pisogranmarmoraria" class="btn-floating cor_logo"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/pisogranoficial/" class="btn-floating cor_logo"><i class="fa fa-instagram"></i></a>
                    <h4>Endereço</h4>
                    <p class="light">Estrada dos Bandeirantes, nº 6.089<br>RJ - Rio de Janeiro</p>
                    <h4>Contatos</h4>
                    <p class="light"><a href="mailto:pisogran@pisogran.com.br?Subject=Pedido de Orçamento via site">pisogran@pisogran.com.br</a></p>
                    <p><a class="btn-floating cor_logo"><i class="fa fa-whatsapp"></i></a> 21 96744-7700 / 21 96484-1964 / 21 96426-8550</p>
                </div>
            </div>            
        </div>
    </section>

    <!-- ********************** RODAPE *************************  -->
    <footer class="rodape">
        <div class="row container center">
            <a href="#home"><img src="img/fav.png"></a>
            <p class="light white-text">®Pisogran 2019 - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script>

        $(document).ready(function () {
            $('.button-collapse').sideNav();
            $('.scrollspy').scrollSpy({ scrollOffset: 0 });
            $('.carousel.carousel-slider').carousel({ fullWidth: true });
            $('.slider').slider();
            $('.modal').modal();
            $('.hide-menu').click(function () {$('.button-collapse').sideNav('hide');});
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            autoplay();
        });

        $(window).on("scroll", function () {
            /*if ($(window).scrollTop() > 100) {
                $('.navbar').addClass('nav-color');
            } else {
                $('.navbar').removeClass('nav-color');
            }*/
        });
    </script>
</body>

</html>