<!DOCTYPE php>
<html>

<head>
  <title>Suporte Quantum</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="Imagens/Icon2.png">
  <!-- inclusão do CSS da página-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/layout.css">
  <link rel="stylesheet" type="text/css" href="CSS/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/maxcdn.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> -->
  <style>
    #main {
      margin-left: 3%;
    }

    body,h1,h2,h3,h4,h5,h6 {
      font-family: "Montserrat", sans-serif;
    }

    .w3-row-padding img {
      margin-bottom: "";
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
      width: 11%;
      background: lightgrey;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    body,h1,h5 {
      color: DeepSkyBlue;
    }

    .LogoQuan {
      margin-top: 2px;
      width: 95%;
      height: 10%;
    }

    .texto {
      font-size: 13px;
      font-weight: bold;
    }

    .iconeLateral {
      width: 42%;
      height: 7%;
      margin-top: 8%;
    }

    .buttonLateral {
      width: 45%;
      height: 40%;
      margin-top: 8%;
    }

    .extras {
      font-size: 30px;
      cursor: pointer;
      float: right;
      margin-right: 1%;
    }

    .w3-modal-content {
      margin-top: -6%;
    }

    .modal{
      margin-top: -5px;
    }

    .image {
      width:100%;
      height:100%;
      /* margin-left:; */
      text-align: center;
    }
    .btn{
      position: absolute;
      /* top: 02%; */
      right: -85px;
      height: 5%;
      width: 15%;
      font-size: 15px;      
      font-weight: bold;
      color: white;
    }
    
    .text-comu{
      position: absolute;
      /* text-align: center; */
      top: -10%;
      right: 30%;
      font-size: 35px;      
      font-weight:border;
      /* border:6px; */
      /* border-color: black; */
      color: white;
      font-family: 'Luckiest Guy', cursive;
    }

    .image{
      border-radius: 6px;
    }
</style>
</head>

<body class="w3-dark-grey" id="visao">
  <div class="modal fade" id="meumodal">
    <div class="modal-dialog">
      <div class="modal-content w3-cyan" stywidth="5000px" height="700px">
        <div class="modal-body" >
          <!-- <h5 class="text-comu">Comunicados!!</h5> -->
          <button id="exit" type="button" class="btn btn-default w3-hover-cyan">Fechar</button>
          <img class="image" src="Imagens/Programação Quantum 25 anos.jpg" title="Comunicados">
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <span class="extras" onclick="openNav()">☰</span>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="overlay-content">
      <a href="https://quantum-es.com.br">Site Quantum</a>
    </div>
  </div>
  <script>
    //ramais
    function openRamal() {
      var openRamal = document.getElementById('menu').style.display = 'block';
      // console.log(e.target);
    }

    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="color: black;">
    <!-- Avatar image in top left corner -->
    <img class="LogoQuan" src="Imagens/LogoTeste.png" onClick='parent.location="javascript:location.reload()"'>
    <a href="#about" class="w3-bar-item w3-button w3-hover-grey">
      <i><img class="iconeLateral" src="Imagens/Icones/Sobre.png" title="SOBRE A EMPRESA"></i>
      <p class="texto">SOBRE A EMPRESA</p>
    </a>
    <a href="login.php" class="w3-bar-item w3-button w3-hover-grey">
      <i><img class="iconeLateral" src="Imagens/Icones/Acesso.png" title="PORTAL"></i>
      <p class="texto">PORTAL</p>
    </a>
    </a>
    <a href="http://srv-ap.vgcontabil.local/glpi" class="w3-bar-item w3-button w3-hover-grey">
      <i><img class="iconeLateral" src="Imagens/Icones/Chamados.png" title="CHAMADOS"></i>
      <p class="texto">CHAMADOS</p>
    </a>
    <button class="w3-bar-item w3-button w3-hover-grey" onclick="openRamal()">
      <i><img class="buttonLateral" src="Imagens/Icones/Ramais.png" title="RAMAIS"></i>
      <p class="texto">RAMAIS</p>
    </button>
    <a href="https://www.fsist.com.br/" class="w3-bar-item w3-button w3-hover-grey">
      <i><img class="iconeLateral" src="Imagens/Icones/Etiquetas.png" title="FSIST"></i>
      <p class="texto">FSIST</p>
    </a>
  </nav>
  <!-- Menu's Modal -->
  <script type="text/javascript">
    //Script para clicar fora do Form Ramais
    $(document).ready(function() {
      // Exibo o modal
      var comunic = $("#meumodal").modal("show");
      // if ((e.target.id) === "menu" || (e.target.id) === "button") {
      //   container.hide();
      // }
    });
    $(document).mouseup(function(e) {
      // Remove o modal
      var comunic = $("#meumodal")
      if ((e.target.id) === "exit" ) {
        var comunic = $("#meumodal").modal("hide");
        }
    });
    // Script para clicar fora do Form Ramais
    $(document).mouseup(function(e) {
      var container = $(".w3-modal");
      if ((e.target.id) === "menu" || (e.target.id) === "button") {
        container.hide();
      }
    });
  </script>
  <div id="menu" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="background-color: white;">
      <div id="mramal" class="w3-container w3-grey w3-display-container">
        <span id="button" class="w3-button w3-display-topright w3-large" style="color:white">x</span>
        <h1 style="color:white">Recepção</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Érika <b style="color:black;"> 100 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Expedição</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Myrhela <b style="color:black;"> 103 </b><b style="float:right; margin-right:1%"> Michele Oliveira <b style="color:black;"> 106 </b></b></h5>
        <h5><b style=> Ygor <b style="color:black;"> 104 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Diretoria</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Jonas <b style="color:black;"> 121 </b><b style="float:right; margin-right:1%"> Rômulo <b style="color:black;"> 122 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Departamento Registro</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Wanderly <b style="color:black;"> 201 </b><b style="float:right; margin-right:1%"> Pedro <b style="color:black;"> 207 </b></b></h5>
        <h5><b style=> Lucas Henrique <b style="color:black;"> 202 </b><b style="float:right; margin-right:1%"> Roberta <b style="color:black;"> 208 </b></b></h5>
        <h5><b style=> Jéssica <b style="color:black;"> 203 </b><b style="float:right; margin-right:1%"> Gustavo <b style="color:black;"> 210 </b></b></h5>
        <h5><b style=> Gardênia <b style="color:black;"> 204 </b><b style="float:right; margin-right:1%"> Yasmim IRPF <b style="color:black;"> 211 </b></b></h5>
        <h5><b style=> Gabrielle <b style="color:black;"> 205 </b><b style="float:right; margin-right:1%"> Bryan IRPF <b style="color:black;"> 212 </b></b></h5>
        <h5><b style=> Rosieli <b style="color:black;"> 206 </b><b style="float:right; margin-right:1%"> IRPF 03 <b style="color:black;"> 213 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Departamento Fiscal</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Dionatan <b style="color:black;"> 301 </b><b style="float:right; margin-right:1%"> Larissa Tolentino <b style="color:black;"> 315 </b></b></h5>
        <h5><b style=> Aline <b style="color:black;"> 302 </b><b style="float:right; margin-right:1%"> Luiz <b style="color:black;"> 316 </b></b></h5>
        <h5><b style=> Bryan <b style="color:black;"> 303 </b><b style="float:right; margin-right:1%"> Leidiane <b style="color:black;"> 317 </b></b></h5>
        <h5><b style=> Ana Viana <b style="color:black;"> 304 </b><b style="float:right; margin-right:1%"> Tiane <b style="color:black;"> 318 </b></b></h5>
        <h5><b style=> Gianny <b style="color:black;"> 305 </b><b style="float:right; margin-right:1%"> Dyovana <b style="color:black;"> 319 </b></b></h5>
        <h5><b style=> Jordana <b style="color:black;"> 306 </b><b style="float:right; margin-right:1%"> Cinthya <b style="color:black;"> 320 </b></b></h5>
        <h5><b style=> Ketely <b style="color:black;"> 307 </b><b style="float:right; margin-right:1%"> Margarete <b style="color:black;"> 321 </b></b></h5>
        <h5><b style=> Leandro <b style="color:black;"> 308 </b><b style="float:right; margin-right:1%"> Pedro Henrique <b style="color:black;"> 322 </b></b></h5>
        <h5><b style=> Patricia Andrade <b style="color:black;"> 309 </b><b style="float:right; margin-right:1%"> Guilherme <b style="color:black;"> 323 </b></b></h5>
        <h5><b style=> Wesley <b style="color:black;"> 310 </b><b style="float:right; margin-right:1%"> Hádria <b style="color:black;"> 324 </b></b></h5>
        <h5><b style=> Karla <b style="color:black;"> 311 </b><b style="float:right; margin-right:1%"> Monique <b style="color:black;"> 325 </b></b></h5>
        <h5><b style=> João Cleber <b style="color:black;"> 312 </b><b style="float:right; margin-right:1%"> Evandro <b style="color:black;"> 326 </b></b></h5>
        <h5><b style=> Rosana <b style="color:black;"> 313 </b><b style="float:right; margin-right:1%"> Aryom <b style="color:black;"> 327 </b></b></h5>
        <h5><b style=> Wenes <b style="color:black;"> 314 </b><b style="float:right; margin-right:1%"> Rosinea <b style="color:black;"> 328 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Departamento Contábil</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Ramon </b><b style="color:black;">502</b><b style="float:right; margin-right:1%">Matheus<b style="color:black;"> 515</b></b></h5>
        <h5><b style=> Mayara </b><b style="color:black;">503</b><b style="float:right; margin-right:1%">Janaina<b style="color:black;"> 517</b></b></h5>
        <h5><b style=> Nagila </b><b style="color:black;">504</b><b style="float:right; margin-right:1%">Nayara<b style="color:black;"> 518</b></b></h5>
        <h5><b style=> Bárbara Danielle </b><b style="color:black;">505</b><b style="float:right; margin-right:1%">Samara Segal<b style="color:black;"> 519</b></b></h5>
        <h5><b style=> Gabriel Souza </b><b style="color:black;">506</b><b style="float:right; margin-right:1%">Thamiris <b style="color:black;"> 520</b></b></h5>
        <h5><b style=> Marina </b><b style="color:black;">507</b><b style="float:right; margin-right:1%">João Gabriel <b style="color:black;"> 521</b></b></h5>
        <h5><b style=> Lara Santana </b><b style="color:black;">508</b><b style="float:right; margin-right:1%">Valdomiro <b style="color:black;"> 522</b></b></h5>
        <h5><b style=> Bárbara Zardini </b><b style="color:black;">509</b><b style="float:right; margin-right:1%">Johnny <b style="color:black;"> 523</b></b></h5>
        <h5><b style=> Vinicius </b><b style="color:black;">510</b><b style="float:right; margin-right:1%">Carmen <b style="color:black;"> 524</b></b></h5>
        <h5><b style=> Ana Luisa </b><b style="color:black;">511</b><b style="float:right; margin-right:1%">Samuel <b style="color:black;"> 525</b></b></h5>
        <h5><b style=> Evânia </b><b style="color:black;">512</b><b style="float:right; margin-right:1%">Luiz Felipe <b style="color:black;"> 526</b></b></h5>
        <h5><b style=> Cassia </b><b style="color:black;">513</b><b style="float:right; margin-right:1%">Rodrigo <b style="color:black;"> 527</b></b></h5>
        <h5><b style=> Géviton </b><b style="color:black;">514</b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Departamento Simples</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Michely Binda <b style="color:black;"> 401 </b><b style="float:right; margin-right:1%"> Alana <b style="color:black;"> 407 </b></b></h5>
        <h5><b style=> Rhaylaner <b style="color:black;"> 402 </b><b style="float:right; margin-right:1%"> Tatiane <b style="color:black;"> 408 </b></b></h5>
        <h5><b style=> Ada Celestino <b style="color:black;"> 403 </b><b style="float:right; margin-right:1%"> Lauriete <b style="color:black;"> 409 </b></b></h5>
        <h5><b style=> Elaine Brandão <b style="color:black;"> 404 </b><b style="float:right; margin-right:1%"> Raissa <b style="color:black;"> 420 </b></b></h5>
        <h5><b style=> Jhuan <b style="color:black;"> 405 </b><b style="float:right; margin-right:1%"> Ana Karolina <b style="color:black;"> 422 </b></b></h5>
        <h5><b style=> Juliana Venancio <b style="color:black;"> 406 </b></b></h5>

      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Departamento Pessoal</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Elaine Loureiro <b style="color:black;"> 601 </b><b style="float:right; margin-right:1%"> Yasmin Binda <b style="color:black;"> 610 </b></b></h5>
        <h5><b style=> Elianny <b style="color:black;"> 603 </b><b style="float:right; margin-right:1%"> Patrick <b style="color:black;"> 611 </b></b></h5>
        <h5><b style=> Enimar <b style="color:black;"> 604 </b><b style="float:right; margin-right:1%"> Mariana <b style="color:black;"> 612 </b></b></h5>
        <h5><b style=> Alanis <b style="color:black;"> 605 </b><b style="float:right; margin-right:1%"> Estefania <b style="color:black;"> 613 </b></b></h5>
        <h5><b style=> Samara <b style="color:black;"> 606 </b><b style="float:right; margin-right:1%"> Alan Henrique <b style="color:black;"> 614 </b></b></h5>
        <h5><b style=> Amanda <b style="color:black;"> 608 </b><b style="float:right; margin-right:1%"> Rannielly <b style="color:black;"> 615 </b></b></h5>
        <h5><b style=> Dayse <b style="color:black;"> 609 </b><b style="float:right; margin-right:1%"> Raquel <b style="color:black;"> 616 </b></b></h5>
      </div>
      <div class="w3-container w3-grey">
        <h1 style="color:white">Arquivo</h1>
      </div>
      <div class="w3-container">
        <h5><b style=> Ygor <b style="color:black;"> 801 </b><b style="float:right; margin-right:1%"> Michele Oliveira <b style="color:black;"> 802 </b></b></h5>
      </div>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-dark-grey" id="home">
      <h6 class="w3-jumbo"><span class="w3-hide-small">Bem-vinda à intranet</span>
        <p><span style="color:DeepSkyBlue;font-weight:bold;">Quantum </span>Soluções Empresariais</p>
      </h6>
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-black w3-padding-32" id="about">

      <h2 class="w3-text-dark">Quantum Soluções Empresariais</h2>
      <hr style="width:20%" class="w3-opacity">
      <p>Fundada em 1997 pelos contadores Jonas Lacerda Silva e Romulo Monaldi Marroquio, a Quantum Soluções conta hoje com mais de 90 colaboradores e 500 clientes atendidos nos estados do Espírito Santo e Bahia, sendo que todas essas conquistas são apenas parte da nossa trajetória de destaque no mercado contábil, no qual buscamos entregar sempre o melhor atendimento e os melhores resultados a todos que confiam sua contabilidade aos nossos profissionais.</p>
      <p>E por falar em profissionais, nós, da Quantum Soluções, estamos em constante evolução, mantendo nossos colaboradores focados em oferecer informações acuradas para que você possa alavancar seu negócio com tomadas de decisões assertivas.</p>
      <p>Acreditamos na humanização dos serviços contábeis e, por isso, focamos em entender muito bem as necessidades dos nossos clientes para entregar as melhores soluções a cada um deles.</p>
      <p>Portanto, caso queira fazer parte dessa história e queira tornar a sua empresa muito mais lucrativa, confie o seu negócio a quem irá se dedicar pelo seu sucesso.</p>
      <p>Conte conosco, da Quantum Soluções Empresariais!</p>
    </div>
    <div class="w3-content w3-justify w3-text-black w3-padding-32" id="about">
      <h2 class="w3-text-dark">Intranet</h2>
      <hr style="width:20%" class="w3-opacity">
      <p>
        A Intranet se baseia em uma aplicação privada, afim de reunir funcionalidades voltadas para os membros de uma mesma organização, no intuito de otimizar os procedimentos e a troca de informações pertinentes aos serviços da
        empresa. O acesso é realizado somente pelos utilizadores e colaboradores internos devidamente autorizados.<br>
        A versão Beta da <span style="color:white;font-weight:bold;">Intranet</span> <span style="color:DeepSkyBlue;font-weight:bold;">Quantum Soluções Empresariais</span> disponibiliza a consulta direta ao quadro de ramais da empresa, ao nosso serviço de GLPI para abertura de chamados, link de acesso ao FSIST e ao portal de acesso de BI e gráfico de rendimento das horas dos funcionários. Futuras versões e atualizações da mesma trarão novas funcionalidades e recursos para facilitar o dia-a-dia dos usuários.
      </p>
    </div>
    <div class="w3-content w3-justify w3-text-black w3-padding-32" id="about">
      <h3 class="w3-text-light-grey">Progresso de desenvolvimento</h3>
      <hr style="width:40%" class="w3-opacity">
      <p class="w3-wide">Design</p>
      <div class="w3-white">
        <div class="w3-black" style="height:28px;width:70%"></div>
      </div>
      <p class="w3-wide">Conexão com o banco de dados</p>
      <div class="w3-white">
        <div class="w3-black" style="height:28px;width:80%"></div>
      </div>
      <p class="w3-wide">Responsividade</p>
      <div class="w3-white">
        <div class="w3-black" style="height:28px;width:60%"></div>
      </div>

      <!-- Footer -->
      <footer class="w3-content w3-padding-64 w3-text-black w3-xlarge">
        <a href="https://www.facebook.com/quantumes/?ref=br_rs"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="https://www.instagram.com/quantumsolucoes/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="https://br.linkedin.com/company/quantumes"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
        <p class="w3-medium">Desenvolvido por <a href="" target="_blank" class="w3-hover-text-green">Victor Lima</a></p>
        <div style="position:relative;bottom:1%;z-index:1;" class="w3-tooltip w3-right">
          <a class="w3-button w3-theme" href=""><span class="w3-xlarge">
              <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
        <!-- End footer -->
      </footer>

      <!-- END PAGE CONTENT -->
    </div>

</body>

</html>