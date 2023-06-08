<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/bebidas_page.css">
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
                <h4><strong>Bebidas</strong></h4>

                <div class="galery_cafe">
                    <div class="cafe_simples">
                        <a target="_blank" href="img_5terre.jpg">

                            <img src="imagens/img_bebidas/cafesimples.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Café Simples <br>R$3,00</strong></div>
                    </div>
                    <div class="cappucino">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/cappucino.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Cappucino <br> R$8,00</strong></div>
                    </div>
                    <div class="expresso">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="imagens/img_bebidas/expresso.svg" alt="Northern Lights">
                        </a>
                        <div class="desc"><strong style="float: left;">Expresso <br> R$6,00</strong></div>
                    </div>
                    <div class="expresso">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="imagens/img_bebidas/expresso.svg" alt="Northern Lights">
                        </a>
                        <div class="desc"><strong style="float: left;">Expresso <br> R$6,00</strong></div>
                    </div>
                </div>
                <div class="galery_cha">

                    <div class="cha_simples">

                        <a target="_blank" href="img_5terre.jpg">
                            <img src="/imagens/img_bebidas/cha geladao.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Chá simples <br> R$6,00</strong></div>
                    </div>
                    <div class="cha_gelado">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/cha sem acento.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Chá gelado <br> R$6,00</strong></div>
                    </div>
                    <div class="agua_semgas">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="imagens/img_bebidas/agua_normal.svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Água sem gás <br> R$6,00</strong></div>
                    </div>
                    <div class="agua_comgas">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/agua_com_gas.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Água com gás <br> R$6,00</strong></div>
                    </div>
                </div>
                <div class="galery_refri">

                    <div class="sprite">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="imagens/img_bebidas/sprite (2).svg">
                        </a>
                        <div class="desc"><strong style="float: left;">Sprite<br> R$6,00</strong></div>3
                    </div>
                    <div class="tubaina">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/fanta laranja.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Tubaina <br> R$6,00</strong></div>
                    </div>
                    <div class="fanta">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/coca cola nova.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Fanta <br> R$6,00</strong></div>
                    </div>
                    <div class="coca">
                        <a target="_blank" href="imagens/cappucino.svg">
                            <img src="imagens/img_bebidas/cafe coca cola.svg" alt="Forest">
                        </a>
                        <div class="desc"><strong style="float: left;">Coca <br> R$6,00</strong></div>
                    </div>
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
                    <a href="bebidas_page.php"  class="active">
                        <span class="icon"><i class="fas fa-coffee"></i></span>
                        <span class="item">Bebidas</span>
                    </a>
                </li>
                <li>
                    <a href="salgados_page.php">
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