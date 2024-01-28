<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exame de sangue</title>
    <link href="css/style.css" rel="stylesheet">

    <!---*Fonte*--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!---*css bootstrap*--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!---*javascript bootstrap*--->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">

    <!---*font awesome*---> 
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>

    <header>
      <div class="container" id="nav-container">
          <nav class="navbar navbar-expand-lg fixed-top ">
            <a href="index.php" class="navbar-brand">
              <img id="logo" src="img/logo-pag-500.png" alt="Está logo ilustra uma gota de sangue caindo nas mãos">O Portal do Dador
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navegation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <ul class="navbar-nav">
                    <li class="nav-item">
                      
                      <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i>Home</a>
                    </li>
           </ul>

            <a href="cadastro.php"><button type="button" class="btn " style=" background:#0085ff; margin: .3rem; ">Cadastre-se</button></a>
              <a href="login.php"><button type="button" class=" btn" style=" background:#0085ff;  margin: .3rem;">Entrar</button></a>        
          </div>
        </nav>
      </div>
    </header>
    
    <div id="about-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <h3 class="main-title">Exame de sangue</h3>
                <p>Um exame de sangue é um teste laboratorial, um procedimento médico no qual uma pequena quantidade de sangue é coletada do paciente e examinada em um laboratóriorealizado no sangue para obter informções sobre doenças e funçoes dos órgãos.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="img/blood-exm.png"  alt="Processo de colheita de sangue">
               
            </div>
            <div class="col-md-6">
              <h3 class="about-title">Quando preciso fazer um exame de sangue</h3>
              <p>Dependendo da razão pela qual o exame de sangue está sendo realizado, ele pode ser necessário antes de um procedimento médico, durante o tratamento de uma doença, para monitorar a condição de saúde ou como parte de um programa de acompanhamento regular. Um exemplo comumm de exame de sangue é o <strong>hemograma completo</strong>, que avalia as células que compõem o sangue, como os leucócitos (<strong>glóbulos brancos</strong>) , as hemácias  (<strong>glóbulos vermehos ou eritrócitos</strong>) e as <strong>plaquetas</strong> . Este exame é realizado a partir da análise de uma amostra de sangue e, quando alterado, pode ser indicativo de anemia, inflamações, infecções e doenças como linfoma ou leucemia, por exemplo.
            </p>

            <p>E, alguns dos exames de sangue são:</p>
            <ul type="square" class="about-list">
                   
                <li><i class="fa-solid fa-circle-chevron-right"></i>Hemograma completo</li>
                <li><i class="fa-solid fa-circle-chevron-right"></i>Grupo e fator RH</li>
                <li><i class="fa-solid fa-circle-chevron-right"></i>Grupo e fator RH</li>
                <li><i class="fa-solid fa-circle-chevron-right"></i>Ureia 12</li>
                <li><i class="fa-solid fa-circle-chevron-right"></i>Creatina</li>
                <li><i class="fa-solid fa-circle-chevron-right"></i>HDL colesterol</li>
            </ul>
            <img src="img/exam-blood.png" alt="">
          </div>
       </div>
      </div>
    </div>        
  
    <div id="apply-exame">
      <div class="container-fluid">
        <div class="row">
          <h3 class="main-title">Formulario de exame de sangue</h3>  
          <div class="col-md-6 ">
            <form action="#" method="post">
              <label for="nomeExame">Nome</label>
              <input type="text">
              <label for="tipoExame">Tipo de exame</label>
              <input type="text">
              <label for="dataExame">Data</label>
              <input type="date" name="dataExame" id="dataExame">
              <label for="horaExame">Hora</label>
              <input type="time" name="horaExame" id="horaExame">
              <input type="submit" value="Submit">
            </form>
          </div>
          <div class="col-sm-5 apply-box ">
          <p>Siga as instruções do profissional de saúde que irá realizar o exame de sangue, incluindo a informação sobre se é necessário parar medicamentos anticoagulantes, seja pelo prazo estipulado pelo médico, seja por 24 horas antes da realização do exame de sangue. E se tiver com alguma duvida basta aceder a nossa lista de <a href="perguntas.html" rel="next">perguntas frequentes</a>.</p>
         
          </div> 
      </div>
      </div>
    </div>

    

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <a href="index.php" rel="Prev"><button style=" background-color: #0085ff; color:#180F4A;" class="btn" type="button">Voltar a página principal</button></a>
   </div>



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
    </footer> 

    <script src="js/scripts.js"></script>
</body>
</html>