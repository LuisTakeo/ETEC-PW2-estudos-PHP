<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockgol - Noticias</title>
    <?php
            include("./src/font-origin.php");
            
        ?>
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <header class="cabecalho">
        <?php
            include("./src/header.php");
            include("./src/navbar.php");
        ?>
    </header>
    <section class="container-conteudo">
        <main class="conteudo-principal">
            <div class="principalMateria">
                <h2 class="tituloMateria">Biquini, Nando Reis e Barão Vermelho são atrações em festival de rock em Divinópolis; ingressos estão à venda</h2>
                <img class="imagemMateria" src="./src/img/banda-ira.png" alt="" srcset="">
                <p class="textomateria"> Biquini, Nando Reis, Barão Vermelho, Ira!, Os Paralamas do Sucesso e Maneva são os shows anunciados para 9ª edição do Joy Rock Festival, em Divinópolis. O evento está marcado para os dias 21 e 22 de abril, no Parque de Exposições, e está com ingressos à venda.</p>
            </div>
            <div class="principalMateria">
                <h2 class="tituloMateria">The Town começa a vender ingressos nesta terça-feira (14); saiba como comprar</h2>
                <img class="imagemMateria" src="./src/img/foo-fighters.webp" alt="" srcset="">
                <p class="textomateria"> 
                Os ingressos para o The Town, festival que acontece em São Paulo em setembro deste ano, começam a ser vendidos às 19h desta terça-feira (14). Para fazer a compra o público tem que se cadastrar no site da Ticket Master. Os organizadores pedem que os interessados se cadastrem antes do horário do começo das vendas.<br><br>

                Os ingressos custam R$ 770 (inteira) e R$ 385 (meia entrada), sem taxas adicionais.<br><br>
                Serão cinco dias de shows – 2, 3, 7, 9 e 10 de setembro. Entre os nomes divulgados como headliners estão Post Malone, Maroon 5, Foo Fighters e Bruno Mars. O festival, dos mesmos organizadores do Rock in Rio, acontece no Autódromo de Interlagos. Iza e Criolo estão entre as atrações nacionais.<br><br>

                São esperadas 600 mil pessoas que se dividirão entre atrações distribuídas em seis palcos, além de parque de diversões, entre outros atrativos.
                
                </p>
            </div>
        </main>
    </section>

    <footer class="rodape">
    <?php
            include("./src/footer.php");
        ?>
    </footer>
</body>
</html>