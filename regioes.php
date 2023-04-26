<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
   body{
       background-color:
   }

   h1{
	font-size:30px;
	padding:10px;
	display:flex;
	justify-content:center;
	align-items:center; 
background:linear-gradient(to right, #11d643 10%, #0981c7 50%, #cdf614 90%) ;
background-size: 200% auto;
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
animation: animate2 3.5s linear infinite;
text-align: center;
font-family: Helvetica;
color: #FFF;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #000;

}
@keyframes animate2{
to{
    background-position:200%;
    
}
}


   img{
       width:300px;
       height:300px;
   }

   .container{
       display:flex;
       justify-content:center;
       align-items:center;
       flex-direction:row;
   }
 
   p{
       max-width:200px;
       margin-right:10px;
       font-family:arial;
   }

   figcaption{
       text-align:center;
       font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   }

   .btn2{
       background-color:green;
       color:white;
       font-size:20px;
       height:40px;
       border:none;
       border-radius:20px;
       text-align:center;
       margin: 5px 5px 5px 5px;
   }

   footer{
       position:absolute;
       bottom:0;
      left:46%;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size:25px;
   }



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regiões do Brasil</title>
</head>
<body>
<a href="regioes.html"><button class="btn2">Voltar para a página inicial</button></a>

<?php

$estado = $_GET["estado"];

switch($estado) {
    //Norte
    case 1: 
       echo "<h1>Região Norte</h1>";
       echo "<br>";
       echo "<div class='container'><p>O norte do Brasil engloba os estados de Acre, Amapá, Amazonas, Pará, Rondônia, Roraima e Tocantins. A floresta tropical da Amazónia, célebre pela sua biodiversidade, abrange a maior parte da região. No estado do Amazonas, a cidade de Manaus encontra-se nas margens do Rio Negro e, por vários quilómetros, a água escura desse rio corre junto à água clara do rio Solimões, no denominado Encontro das Águas. Mais à frente, formam o rio Amazonas.</p><figure> <img src='https://i.pinimg.com/originals/25/85/36/258536ea0740f697c949adf826634d64.jpg' alt='imagem de Tocantins'><figcaption>Jalapão - Tocantins </figcaption></figure></div>";
       break;
    //Nordeste
    case 2: 
       echo "<h1>Região Nordeste</h1>";
       echo "<br>";
       echo "<div class='container'><p>A Região Nordeste é uma das cinco regiões do Brasil definidas pelo Instituto Brasileiro de Geografia e Estatística em 1969. Possui área equivalente à da Mongólia ou do estado do Amazonas, população equivalente à da África do Sul e um IDH alto, também comparável com o da África do Sul.</p><figure><img src='https://i.pinimg.com/736x/52/5f/77/525f77327c5dc963a961e450d06d958c.jpg' alt='imagem da Bahia'><figcaption>Elevador Larceda - Bahia</figcaption></figure></div>";
       break;
    //Centro-Oeste
    case 3:
    echo "<h1>Região Centro-Oeste</h1>";
       echo "<br>";
       echo "<div class='container'><p>A Região Centro-Oeste é uma das cinco regiões do Brasil definidas pelo IBGE em 1969. É formada por três estados: Goiás, Mato Grosso e Mato Grosso do Sul, mais o Distrito Federal, onde se localiza Brasília, a capital do país e a cidade mais populosa da região.</p><figure><img src='https://i.pinimg.com/736x/7f/a0/c6/7fa0c66f1bbbd29365169301ae509cc5.jpg' alt='imagem do Distrito Federal'><figcaption>Os Candangos - Distrito Federal</figcaption></figure></div>";
         break;
    //Sudeste
    case 4:
    echo "<h1>Região Sudeste</h1>";
       echo "<br>";
       echo "<div class='container'><p>O sudeste brasileiro é uma região que engloba os 4 estados vizinhos de Rio de Janeiro, São Paulo, Minas Gerais e Espírito Santo. O estado costeiro do Rio de Janeiro é conhecido pela sua capital, a cidade do Rio de Janeiro, onde os pontos de referência incluem o Pão de Açúcar e a estátua do Cristo Redentor. A capital do estado de São Paulo, a vasta cidade de São Paulo, é o centro financeiro do Brasil e alberga edifícios icónicos como uma catedral neogótica.</p><figure> <img src='https://i.pinimg.com/736x/fe/0f/f0/fe0ff0f30bfd61ddd2c8f8c7b3560166.jpg' alt='imagem do Distrito Federal'><figcaption>Avenida Paulista - São Paulo</figcaption></div>";
         break;
   //Sul
   case 5:
   echo "<h1>Região Sul</h1>";
   echo "<br>";
   echo "<div class='container'><p>A Região Sul do Brasil é a menor das cinco regiões do país, com área territorial de 576 774,31 km², sendo maior que a área da França metropolitana e menor que o estado brasileiro de Minas Gerais. Faz parte da Região Centro-Sul do Brasil.</p><figure> <img src='https://i.pinimg.com/736x/10/18/bd/1018bd0dc003208c211ab6f278be61d1.jpg' alt='Foto de Santa Catarina'><figcaption>Ponte Hercílio Luz - Florianópolis</figcaption></div>";
        break;
}

?>

<footer>Por Marco Marchi</footer>
</body>
</html>