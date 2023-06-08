<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/salgados_page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break to Coffe</title>

</head>

<body>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="header">
                    <h1>Break to Coffe</h1>
                </div>  
            </div>
            <div class="main-galery">
                <h4><strong>Salgados</strong></h4>

                <div class="galeryUm">
                    <div class="coxinha">
                        <a target="_blank" href="img_5terre.jpg">

                            <img src="imagens/img_salgados/coxinha.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Coxinha <br>R$3,00</strong></div>
                    </div>
                    <div class="kibe">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_salgados/kibe.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Kibe <br> R$8,00</strong></div>
                    </div>
                    <div class="empada_frango">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="imagens/img_salgados/empadadefrango.svg" alt="Northern Lights">
                        </a>
                        <div class="desc"><strong style="float: left;">Empada<br> R$6,00</strong></div>
                    </div>
                    <div class="quiche">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="imagens/img_salgados/quiche.svg" alt="Northern Lights">
                        </a>
                        <div class="desc"><strong style="float: left;">Quiche <br> R$6,00</strong></div>
                    </div>
                </div>
                <div class="galeryDois">

                    <div class="empadao">

                        <a target="_blank" href="img_5terre.jpg">
                            <img src="/imagens/img_salgados/empanadao novo.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Empadão <br> R$6,00</strong></div>
                    </div>
                    <div class="batata">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_salgados/batata novo.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Batata frita <br> R$6,00</strong></div>
                    </div>
                    <div class="pastel">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="imagens/img_salgados/pastel de forno new.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Pastel de Forno <br> R$6,00</strong></div>
                    </div>
                    <div class="bolinha">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_salgados/bolinho novo.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Bolinhas de Queijo <br> R$6,00</strong></div>
                    </div>
                </div>
                
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="index_screen.html">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="bebidas_page.php">
                        <span class="icon"><i class="fas fa-coffee"></i></span>
                        <span class="item">Bebidas</span>
                    </a>
                </li>
                <li>
                    <a href="salgados_page.php" class="active">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Salgados</span>
                    </a>
                </li>
                <li>
                    <a href="sobremesas_page.html">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Sobremesas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-info"></i></span>
                        <span class="item">Sobre</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>