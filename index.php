<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Salow ACSG 540 Web Development GIPHY Final PHP</title>
        <meta charset = "utf-8" />
        <link rel="icon" href="data:,">
    
        <link href="./style.css" type = "text/css" rel = "stylesheet"/>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>
    <div onscroll="getGifs()">
        <header>GIPHY Images <br />
            <p class="subhead"> Cows are the best. By Nicole S. </p>

            <form method="POST" action="">
              <input id="Search_input" type="text" placeholder="Search here">
              <button id="searchButton" type="button">Search</button>
              <button id="more" type="button">More!</button>
            </form>
        </header>

        <p id = "results">
        </p>  
    </div>    

    <script type="text/javascript" src="./index.js"></script>


    <?php
        include("nav.php")
    ?>

  </body>
</html>