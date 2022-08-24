<!--
    Como o header se repete em todas as paginas do tema, a melhor opção 
    é criar um bloco de construção para ele é so chamamos o arquivo...
-->

<!DOCTYPE html>
<!-- **No WORDPRESS TUDO PRECISA SER DINAMICO -->

<!-- Linguagem e meta charset do site são definidos pelo usuario na configuração do adm wp, para isso são chamadas duas funções -->
<html <?php language_attributes();?> > 
<head>
    <meta charset=" <?php bloginfo( 'charset' );?> ">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- O title é incluido no functions.php --> 
</head>
<body <?php body_class();?> > <!-- body_class: ele nos ajuda a identificar em qual pág estamos trabalhando no tema (ela retorna as classes relacionadas a pág que estamos vizualizando)-->
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="logo">
                    logo
                </div>
                <div class="searchbox">
                    pesquisa
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    menu
                </nav>
            </section>
        </header>