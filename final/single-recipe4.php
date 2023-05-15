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
            src="./assets/recipes/recipe-4.jpeg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Pancakes</h2>
            <p>
            Die dürfen auf keinem Brunch-Buffet fehlen, die beliebten Pancakes. 
            Geniessen Sie diese ganz klassisch mit Ahornsirup oder mit Bananen 
            oder frischen Beeren. 
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Vorbereitungszeit</h5>
                <p>5min</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Zubereitungszeit</h5>
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
                Ofen auf 60 Grad vorheizen, Platte und Teller vorwärmen. 
                Butter in einer kleinen Pfanne schmelzen, etwas abkühlen.
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
              Mehl, Zucker, Vanillezucker, Backpulver und Salz in einer Schüssel mischen. 
              Buttermilch und Ei mit der Butter verrühren, zum Mehl giessen, rühren, $
              bis der Teig glatt ist.
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
              Wenig Bratbutter in einer beschichteten Bratpfanne heiss werden lassen. 
              Hitze reduzieren, portionenweise so viel Teig in die Pfanne geben, 
              dass Pancakes von ca. 10 cm Ø entstehen. Sind die Unterseiten gebacken, 
              und lösen sie sich von selbst, Pancakes wenden, fertig backen, warm stellen. 
              Restliche Pancakes gleich zubereiten, anrichten mit Ahornsirup beträufeln.
              </p>
            </div>
            <!-- end of third instruction -->
          </article>
          <!-- Sidepart -->
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">20g Butter</p>
              <p class="single-ingredient">200g Mehl</p>
              <p class="single-ingredient">2 EL gemahlener Rohzucker</p>
              <p class="single-ingredient">1 Päckli Vanillezucker</p>
              <p class="single-ingredient">2 TL Backpulver</p>
              <p class="single-ingredient">0.25TL Salz</p>
              <p class="single-ingredient">3dl Buttermilch</p>
              <p class="single-ingredient">1 frisches Ei</p>
              <p class="single-ingredient">2 EL Ahornsirup</p>
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
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
