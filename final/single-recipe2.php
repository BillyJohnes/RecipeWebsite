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
    <!-- navigation  -->
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
    <!-- end of navigation -->
    <!-- Headline -->
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="./assets/recipes/Lammracks.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Lammracks mit Peperoni</h2>
            <p>
            So praktisch und lecker! Ganz einfach im Ofen gegart
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Vor- und Zubereitungszeit:</h5>
                <p>20 min</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Backen:</h5>
                <p>20min</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Personen</h5>
                <p>4</p>
              </article>
            </div>
            </p>
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
              Kartoffeln vierteln, Peperoni in ca. 1 cm breite Streifen, 
              Knoblauch in Scheibchen schneiden. Alles mit dem Öl mischen, salzen, 
              auf einem mit Backpapier belegten Blech verteilen. Backen: ca. 15 Min. 
              in der Mitte des auf 220 Grad vorgeheizten Ofens.
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
              Fleisch im heissen Öl rundum ca. 5 Min. anbraten, würzen, 
              auf das Gemüse legen. Fertig backen: ca. 15 Min.
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
              Von der Zitrone wenig Schale abreiben, 2 Esslöffel Saft auspressen, $
              Melisse fein schneiden, daruntermischen, dazu servieren.
              </p>
            </div>
          </article>
          <!-- end of third instruction -->
          <!-- Sidepart -->
          <article class="second-column">
            <div>
              <h4>Zutaten</h4>
              <p class="single-ingredient">800g Kartoffeln</p>
              <p class="single-ingredient">3 rote Peperoni</p>
              <p class="single-ingredient">2 Knoblauchzehen</p>
              <p class="single-ingredient">2 EL Olivenöl</p>
              <p class="single-ingredient">2 TL Salz</p>
              <p class="single-ingredient">2 Lammracks, je ca.400g</p>
              <p class="single-ingredient">Öl zum Braten</p>
              <p class="single-ingredient">wenig Pfeffer</p>
              <p class="single-ingredient">1 Zitrone</p>
              <p class="single-ingredient">1 Bund Zitronenmelisse</p>
            </div>
          </article>
          <!-- end of Sidepart -->
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
