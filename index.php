<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP GRAPH - LEVEL</title>

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="printConf" type="text/x-handlebars-template">
      <div class="box">
        <h4>Id:{{id}} <br> {{ title }}: </h4>
        <p>{{ description }}</p>
      </div>
    </script>



    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>
  <body>
    <h1>Tabella Configurazioni</h1>
    
    <form id="myForm">
      <label for="title">Titolo:</label>
      <input type="text" name="title" value="nuovo titolo"><br>
      <label for="description">Descrizione:</label>
      <input type="text" name="description" value="nuova descrizione"><br>
      <input type="submit" name="submit" value="Nuova configurazione"> 
    </form>

    <form id="updateForm">
      <label for="id">Id:</label>
      <input type="text" name="id"> <br>
      <label for="title">Titolo:</label>
      <input type="text" name="title" value="modifica titolo"><br>
      <label for="description">Descrizione:</label>
      <input type="text" name="description" value="modifica descrizione"><br>
      <input type="submit" name="submit" value="Modifica configurazione">
    </form>

    <form id="deleteForm">
      <label for="id">Id:</label>
      <input type="text" name="id"> <br>
      <input type="submit" name="submit" value="Rimuovi configurazione">
    </form>
    <div id="container" class="container">
    </div>
  </body>
</html>
