<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do dador - o seu portal web</title>
    <link href="css/style.css" rel="stylesheet">

    <!---*Fonte*--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!---*css bootstrap*--->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">

    <!---*javascript bootstrap*--->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  

    
    <!---*font awesome*---> 
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!---*progressbar*--->
    <script src="js/progressbar.min.js"></script>

    <!---*parallax*--->
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.1/dist/simpleParallax.min.js"></script>
</head>
<body>
    <!---*cabeçalho*--->
    <header>
      <div class="container" id="nav-container">
          <nav class="navbar navbar-expand-lg fixed-top ">
            <a href="home.html" class="navbar-brand">
              <img id="logo" src="img/logo-pag-500.png" alt="Está logo ilustra uma gota de sangue caindo nas mãos">O Portal do Dador
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navegation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <ul class="navbar-nav">
              <li class="nav-item">
                
                <a class="nav-link active" aria-current="page" href="#home-menu"><i class="fa-solid fa-house"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service-menu">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact-menu ">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="localizacao-mapa.php">Localização</a>
              </li>
            </ul>

            <a href="cadastro.php"><button type="button" class="btn " style=" background:#0085ff; margin: .3rem; ">Cadastre-se</button></a>
            <a href="login.php"><button type="button" class=" btn" style=" background:#0085ff;  margin: .3rem;">Entrar</button></a>              
          </div>
        </nav>
      </div>
    </header>

    <!---*Slide*--->
    <div class="container">
      <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" >
          <div class="carousel-item active" style="background-image: url(img/doação-transf-750.png);">
              
           <div class="carousel-caption d-nome d-md-block"> 
             <h2>Faça hoje a sua doação</h2>
              <p>A sua <strong>acção</strong> provoca reacções <strong>positivas</strong> na vida de muitas pessoas.</p>
              <a href="cadastro.php" class="main-btn">Fazer doação</a>
            </div>
          </div>  
          <div class="carousel-item" style="background-image: url(img/bd2-750.png);">
            
            <div class="carousel-caption d-nome d-md-block"> 
              <h2>Faça hoje a sua doação</h2>
              <p><strong>Doe </strong>sangue, multiplique essa <strong>atitude!</strong> A doação de sangue não tem preferência de raça ou etnia .</p>
              <a href="cadastro.php" class="main-btn">Fazer doação</a>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(img/bd1-750.png);">
          
            <div class="carousel-caption d-nome d-md-block"> 
              <h2>Faça hoje a sua doação</h2>
              <p>Doar <strong>sangue</strong> é fácil, basta <strong>esticar o braço</strong>.</p>
              <a href="cadastro.php" class="main-btn">Fazer doação</a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>  
        </div>
        </div>
    </div>

   

    <!---*home*------*sobre o portal*--->
    <section class="home" id="home-menu">       
        <div id="about-area">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h3 class="main-title">Sobre o Portal do Dador</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/bg-slide.png"  alt="Processo de colheita de sangue">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Um portal preocupado com a comunidade</h3>
                <p>O portal foi desenvolvido com o intuito de promover o aumento da concientização sobre a doação de sangue, e dar a conhecer algumas das etapas que a antecedem. A doação de sangue é um ato voluntário e altruísta, que pode salvar vidas. O sangue doado é utilizado em transfusões para pacientes que precisam de sangue como em casos de cirurgias, acidentes, doenças crônicas, entre outros.</p>

                <p>De referir ainda, que o sistema conta com:</p>
                <ul class="about-list">
                  <li><i class="fa-solid fa-circle-chevron-right"></i>Layout responsivo para os dispositivos comuns;</li>
                  <li><i class="fa-solid fa-circle-chevron-right"></i>Layout simples, que facilita o aprendiado e utilização;</li>
                  <li><i class="fa-solid fa-circle-chevron-right"></i>Recurso de geolocalização, se desejar saber quais as unidades estão próximas de si;</li>
                  <li><i class="fa-solid fa-circle-chevron-right"></i>E ainda, pode emitir seu relatório de rastreio.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
         
    </section>



    <!---*Cards do portal*---> 
    <section class="service" id="service-menu">
      <h3 class="main-title">Saiba mais aqui</h3>
      <div class="card-group">
        <div class="card">
        
          <img src="img/br.png" class="card-img-top" alt="Ilustração de tubo de ensaio, para respresentar o rastreio">
          <div class="card-body">
            <h5 class="card-title">Rastreio de Sangue</h5>
            <p class="card-text">Este serviço permite identificar precocemente patologias relacionadas ao sistema cardiovascular, focando-se no coração e vasos sanguíneos.</p> 
            <a href="rastreio.php" class="main-btn">Saiba mais</a>
          </div>
          
        </div>
        <div class="card">
          <img src="img/bt1.png" class="card-img-top" alt="Tubo de ensaio, cada um contendo sangue de todos osgrupos sanguineos">
          <div class="card-body">
            <h5 class="card-title">Exame de sangue</h5>
            <p class="card-text">Também conhecido por hemograma, é utilizado para avaliar as três principais linhagens de células do sangue, sendo bastante utilizado  no diagnóstico de várias doenças. </p>
            <a href="exame.php"class="main-btn">Saiba mais</a>
          </div>          
        </div>
        <div class="card">
          <img src="img/questions-256.png" class="card-img-top" alt="Mãos ao alto para questionar.">
          <div class="card-body">
            <h5 class="card-title">Perguntas frequentes</h5>
            <p class="card-text">Aqui, encontras respostas para algumas perguntas, e se ainda assim tiver dúvidas pode encaminhar para o nosso correio eletrônico, teremos muito gosto em ajudar.</p>
            <a href="perguntas.html"class="main-btn">Saiba mais</a>
          </div>
        </div>
      </div>
    </section>
   
    <!---*Cadastre-se no portal*--->
    <div id="apply-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 apply-box" id="company-img"></div>
          <div class="col-md-6 apply-box" id="pattern-img">
          <h4>Já pensou em doar sangue?</h4>
            <p>Ser dador de sangue é muito mais do que dar sangue, é ser a fonte que nutre a vida e reacende a chama da vontade de viver. Para ser um dador, não precisa de muito, apenas estique o braço. Junte-se a causa, uma <strong>gota 4 vidas</strong>. </p>
            <a href="cadastro.php" rel="next" class="main-btn" id="apply-btn">Entrar</a>
          </div> 
      </div>
      </div>
    </div>

      <!---*rodapé do portal*--->
    <section class="Contact" id="Contact-menu">
        <div id="contact-area">
          <div class="container"> 
            <div class="row">
              <div class="col-md-12" id="">
                <h3 class="main-title">Fale connosco</h3>
              </div>
              <div class="col-md-4 contact-box">
                <i class="fas fa-phone"></i>
                <p><span class="contact-title">Contacte-nos:</span> (+244)93x xxx xxx</p>
                <p><span class="contact-title">Horários:</span> 09:00 - 17:00</p>
              </div>
              <div class="col-md-4 contact-box">
                <i class="fas fa-envelope"></i>
                <p><span class="contact-title">Envie-nos um email em:</span> contacto@portaldador.com.ao</p>
                </div>
              <div class="col-md-4 contact-box">
                <i class="fas fa-map-marker-alt"></i>
                <p><span class="contact-title">Encontre-nos em:</span> Av. Lorem ipsum edificio nº 23</p>
            </div>
              
            </div>
          </div>
        </div>
      </section>
    <footer>
      <div id="copy-area">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p> Criação e Desenvolvimento: 
                  <a href="mailto:esperancamandele8s@gmail.com" target="_blank">Esperança Mandele</a> &copy; 2023 -- Todos os Direitos Reservados.
                </p>
              </div>
            </div>
          </div>
      </div>
    
        
      <table>
        <tr>
            <th>ID<th>
            <th>Nome<th>
              <th>Endereco</th>
            <th>Contacto<th>
        </tr>

      <?php
        require_once("C:/xampp/htdocs/portaldodador/controller/centroController.php");

        $centro = new centroController($model);
        $resultado = $centro -> listarcentro();
        foreach ($resultado as $centro){
          print_r("<tr>
                      <td>".$centro['idcentro']."</td>
                      <td>".$centro['nomecentro']."</td>
                      <td>".$centro['contacto']."</td>
                      <td>".$centro['enderecocentro']."</td>
                   </tr>");
        }
       /*$resultado = $centro->listarCentroPorId(4);
        print_r($resultado[0]["nomecentro"]);
        

        

        $user = new usuarioController();

        $resultado = $user->listarUsuarios();
        foreach($resultado as $usuario){
            print_r("<tr>
                        <td>".$usuario['idusuario']."</td>
                        <td>".$usuario['nomeusuario']."</td>
                        <td>".$usuario['perfilusuario']."</td>
                        <td>".$usuario['senhausuario']."</td>
                     </tr>");
        }
        $resultado = $user->listarUsuarioPorId(1);
        print_r($resultado[0]["nomeusuario"]);*/
         ?>
    </table>
        
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>