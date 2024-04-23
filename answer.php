<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Volume of Pyramid, in PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Manya" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Volume of Pyramid,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Volume of Pyramid, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/pyramid.png" alt="pyramid image" />
        </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
            $lengthOfPyramid = $_POST["length-of-pyramid"];
            $widthOfPyramid = $_POST["width-of-pyramid"];
            $heightOfPyramid = $_POST["height-of-pyramid"];

            // process
            $volume = ($lengthOfPyramid * $widthOfPyramid * $heightOfPyramid) / 3;

            // output
            echo "If pyramid has length = " . $lengthOfPyramid . " mm and the width = " . $widthOfPyramid . " mm and the height = " . $heightOfPyramid. " mm. ";
            echo "<br />";
            echo "<br />";
            echo "The area of the trapezoid is " . round($volume, 2) . " mm³.";
            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>