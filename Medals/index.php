<?php
    $page = "startpagina";
    if(isset($_GET["page"])) {
        $page = $_GET["page"];
    }
?>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Medals From Holland</title>
</head>
<body>
  <div class="sidenav">
    <div>
      <img src="img/pening Dordrecht.jpg" alt="eerepening dordrecht" width="30%" height="auto" class="logo">
      <p class="webName"><b>Medals from Holland</b></p>
      <p class="name">Door: Herman de Vries</p>
    </div>
      <a class="start" href="index.php?page=aanleiding">Aanleiding ▸</a>
      <a class="start" href="index.php?page=startpagina">Startpagina ▸</a>
        <button class="dropdown-btn">Eerepeningen 1813-1815 ▾ 
          <i class="fa fa-caret-down"></i>
        </button>
    <div class="dropdown-container">
        <a href="index.php?page=dordrecht">Dordrecht 1813 ▸</a>
        <a href="index.php?page=breda">Breda 1813 ▸</a>
        <a href="index.php?page=brielle">Brielle 1813 ▸</a>
        <a href="index.php?page=ooltgensplaats">Ooltgensplaat 1813 ▸</a>
        <a href="index.php?page=sHertogenbosch">'s-Hertogenbosch 1814 ▸</a>
        <a href="index.php?page=naarden">Naarden 1814 ▸</a>
    </div>
  </div>
  <div class="main">
  <?php
      include("pages/" .$page. ".html");
  ?>
  </div>
  <script src="script.js"></script>
  </body>
</html> 