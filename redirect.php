<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SYSREF - Sistema de Refeições</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="resources/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="resources/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<div class="center">
<!-- Redirection Counter -->
<script type="text/javascript">
  var count = 7 ; // Timer
  var redirect = "index.php?page=preparations"; // Target URL

  function countDown() {
    var timer = document.getElementById("timer"); // Timer ID
    if (count > 0) {
      count--;
      timer.innerHTML = "Esta página será redirecionada em " + count + " segundos"; // Timer Message
      setTimeout("countDown()", 1000);
    } else {
      window.location.href = redirect;
    }
  }
</script>

<div id="master-wrap">
  <div id="logo-box">

    <div class="animated fast fadeInUp">
      <!-- ICONE -->
      <h1>Pronto!</h1>
    </div>

    <div class="notice animated fadeInUp">
      <p class="lead">Seu cadastro foi realizado com sucesso!</p>
      <a class="btn animation" href="javascript:history.back()">&larr; Voltar</a>
    </div>

    <div class="footer animated slow fadeInUp">
      <p id="timer">
        <script type="text/javascript">
          countDown();
        </script>
      </p>
      
    </div>

  </div>
  <!-- /#logo-box -->
</div>
<!-- /#master-wrap -->
</div>