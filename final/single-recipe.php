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
            src="./assets/recipes/Aelplermagrone.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Älplermagrone</h2>
            <p>
            Bewährt und einfach gut. Zu diesem währschaften Gericht 
            passt auch ein feines Apfelmus ausgezeichnet.
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Vorbereitungszeit</h5>
                <p>5 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Zubereitungzeit</h5>
                <p>30 min.</p>
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
                Zwiebeln, Knoblauch und Kartoffeln schälen. Zwiebeln in Ringe, Knoblauch in Scheibchen und Kartoffeln in Würfel schneiden. Zwiebeln, Knoblauch und Speck in einer beschichteten Bratpfanne goldbraun braten, herausnehmen, beiseite stellen.
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
                Bouillon und Rahm aufkochen, Kartoffeln und Teigwaren beigeben, zugedeckt bei kleiner 
                Hitze ca. 10 Min. kochen, bis die Teigwaren al dente sind und alle Flüssigkeit aufgesogen ist. 
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
                Käse unter die Kartoffeln und Teigwaren mischen, würzen, auf Teller verteilen. Beiseite gestellte Speck-Mischung darauf anrichten.
              </p>
            </div>
            <!-- end of third instruction -->
          </article>
          <!-- Sidepart -->
          <article class="second-column">
            <div>
              <h4>Zutaten</h4>
              <p class="single-ingredient">2 Zwiebeln</p>
              <p class="single-ingredient">2 Knoblauchzehen</p>
              <p class="single-ingredient">400g Kartoffeln</p>
              <p class="single-ingredient">150g Speckwürfel</p>
              <p class="single-ingredient">5dl Gemüseboullion</p>
              <p class="single-ingredient">2dl Halbrahm</p>
              <p class="single-ingredient">250g Teigwaren</p>
              <p class="single-ingredient">60g geriebener Gruyère</p>
              <p class="single-ingredient">0.5 TL Salz</p>
              <p class="single-ingredient">wenig Pfeffer</p>
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
        <span class="footer-logo">SimplyRecipes</span> Built by
        <a href="https://www.johnsmilga.com/">Coding Addict</a>
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
