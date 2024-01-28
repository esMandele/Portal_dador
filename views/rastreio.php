<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreio de sangue</title>
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
                  <h3 class="main-title">O rastreio de sangue</h3>  
                  <p>O rastreio de sangue é um processo de diagnóstico precoce em pessoas que não apresentam sintomas. Este processo de verifica os níveis de um determinado grupo de sangue em uma amostra de sangue, isso inclui a verificação do grupo sanguíneo (A, B, AB ou O) e do Rh (positivo ou negativo). </p>
                </div>
                <div class="col-md-6">
                  <img class="img-fluid" src="img/blood.png"  alt="Processo de colheita de sangue">
                   
                </div>
                <div class="col-md-6">
                    <h3 class="about-title">Importância de manter o registro dos resultados do sangue</h3>
                  

                    <p>Manter o registro dos resultados do sangue é fundamental para a saúde do paciente. Isso permite que o médico identifique quaisquer condições médicas pré-existentes, como hemofilia, doença hemolítica do recém-nascido ou síndrome de anticorpos contra os globos vermelhos. Além disso, o rastreio de sangue pode ajudar a identificar se o paciente está com sangue ou plasma que pode ser doado a outras pessoas, dependendo das circunstâncias médicas. Sendo importante listar outras razões como: </p>

                    <ul class="about-list">
                      <li><i class="fa-solid fa-circle-chevron-right"></i>Integridade das Amostras: Manter a qualidade das amostras coletadas de sangue é um requisito fundamental de qualquer laboratório. Isso garante a integridade da composição das amostras e a obtenção dos resultados corretos nas análises propostas, que influenciam diretamente na segurança e nas condições de saúde dos pacientes submetidos aos exames;</li>

                      <li><i class="fa-solid fa-circle-chevron-right"></i>Monitoramento da Saúde: Manter um registro dos resultados dos exames de sangue permite que você e seu médico monitorem quaisquer mudanças na sua saúde ao longo do tempo. Isso pode ajudar a detectar potenciais problemas de saúde mais cedo, permitindo um tratamento mais eficaz.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <div id="apply-exame">
      <div class="container-fluid">
        <div class="row">
          <h3 class="main-title">Formulario de Rastreio de sangue</h3>  
          <div class="col-md-6 ">
            <form action="#" method="post">
              <label for="resultadoRastreio">Resultado</label>
              <input type="text">
              <label for="">Descrição</label>
              <input type="text">
              <label for="dataRastreio">data</label>
              <input type="date">
              <label for="horaRastreio">Hora</label>
              <input type="time" name="horaRastreio" id="horaRastreio">
             
              <input type="submit" value="Submit">
            </form>
          </div>
          <div class="col-sm-5 apply-box ">
          <p>Se quiser saber mais pode ver o nosso serviço de exames de sague para saber quais <a href="exame.php" rel="next">exames</a> deve fazer para poder doar o seu sangue e salvar mais vidas, e se tiver alguma duvida pode ver a nossa lista de <a href="perguntas.html" rel="next">perguntas frequentes</a> . </p> 
         
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