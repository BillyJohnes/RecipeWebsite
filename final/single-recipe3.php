<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single Recipe || Final</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- navigator  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo2.svg" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link"> home </a>
          <a href="about.php" class="nav-link"> about </a>
          <a href="tags.php" class="nav-link"> tags </a>
          <a href="recipes.php" class="nav-link"> recipes </a>

          <div class="nav-link contact-link">
            <a href="contact.php" class="btn"> contact </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navigator -->
    <!-- Headline -->
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="./assets/recipes/Filet_im_Teig.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Filet im Teig mit Frischkäse</h2>
            <p>
            Dieser Klassiker lässt sich prima vorbereiten und gelingt mit unserem feinen Rezept garantiert!
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Vor- und Zubereitungszeit:</h5>
                <p>40min</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Backen:</h5>
                <p>25min</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Personen</h5>
                <p>4</p>
              </article>
            </div>
          </article>
        </section>
        <!-- end of Headline -->
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>Zubereitung</h4>
            <!-- first instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 1</p>
                <div></div>
              </header>
              <p>
              Bratbutter in einer Bratpfanne heiss werden lassen. Fleisch würzen, 
              rundum ca. 4 Min. anbraten, erst wenden, wenn sich eine Kruste gebildet hat. 
              Herausnehmen, auf einem Gitter auskühlen.
              </p>
            </div>
            <!-- end of first instruction -->
            <!-- second instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 2</p>
                <div></div>
              </header>
              <p>
              Petersilie und Toastbrot fein hacken, mit dem Frischkäse und dem Paprika mischen. 
              Schinkentranchen sich leicht überlappend auf die Arbeitsfläche legen. ¾ der 
              Frischkäsemasse in der Länge des Filets auf dem Schinken verteilen, Filet darauflegen. 
              Restliche Frischkäsemasse auf dem Filet verteilen, mit dem vorstehenden Schinken 
              umwickeln, gut andrücken.
              </p>
            </div>
            <!-- end of second instruction -->
            <!-- third instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 3</p>
                <div></div>
              </header>
              <p>
              Ofen auf 220 Grad vorheizen.
              </p>
            </div>
            <!-- end of third instruction -->
            <!-- fourth instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 4</p>
                <div></div>
              </header>
              <p>
              Teig entrollen, an der Schmalseite einen Streifen von ca. 5 cm abschneiden, 
              für die Garnitur beiseite legen. Filet auf den Teig legen, Ei verklopfen. 
              Teigränder mit wenig Ei bestreichen, locker über das Filet legen, gut andrücken. 
              Mit dem Verschluss nach unten auf ein mit Backpapier belegtes Blech legen. 
              Beiseite gelegten Teig in Streifen schneiden, mit wenig Ei bestreichen, 
              Teig damit garnieren, etwas andrücken. Teig mit dem restlichen Ei bestreichen.
              </p>
            </div>
            <!-- end of fourth instruction -->
            <!-- fith instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 5</p>
                <div></div>
              </header>
              <p>
              Fleischthermometer an der dicksten Stelle des Filets einstecken.
            </div>
            <!-- end of fith instruction -->
            <!-- sixth instruction -->
            <div class="single-instruction">
              <header>
                <p>Schritt 6</p>
                <div></div>
              </header>
              <p>
              Backen: ca. 25 Min. auf der untersten Rille des Ofens. 
              Die Kerntemperatur des Fleisches soll ca. 45 Grad betragen. 
              Herausnehmen, ca. 10 Min. ruhen lassen. Filet im Teig in Tranchen 
              schneiden, anrichten.
            </div>
            <!-- end of sixth instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>Zutaten</h4>
              <p class="single-ingredient">1 EL Bratbutter</p>
              <p class="single-ingredient">800g Rindsfilet</p>
              <p class="single-ingredient">1 TL Salz</p>
              <p class="single-ingredient">wenig Pfeffer</p>
              <p class="single-ingredient">1 Bund Petersilie</p>
              <p class="single-ingredient">2 Scheiben Toastbrot</p>
              <p class="single-ingredient">200g Doppelrahm-Frischkäse</p>
              <p class="single-ingredient">0.5 TL Paprika</p>
              <p class="single-ingredient">4 Scheiben Hinterschinken</p>
              <p class="single-ingredient">1 ausgewallter Blätterteig</p>
              <p class="single-ingredient">1 frisches Ei</p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Noel & Romans Genusswelt</span> Built by 
        <span class="footer-logo">Noel and Roman</span>
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
