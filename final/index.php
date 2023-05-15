<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noel_Romans_Kueche || Final</title>
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
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo2.svg" alt="Noel_Romans_Kueche" />
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
    <!-- end of nav -->
    <!-- main -->
    <main class="page">
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <h1>Noel & Romas Genusswelt</h1>
            <h4>no fluff, just recipes</h4>
          </div>
        </div>
      </header>
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>Rezepte</h4>
          <div class="tags-list">
            <a href="single-recipe.php">Pasta</a>
            <a href="single-recipe2.php">Lammracks</a>
            <a href="single-recipe3.php">Filet im Teig</a>
            <a href="single-recipe4.php">Dessert</a>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- Recipe 1, Aelplermagrone -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/Aelplermagrone.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Älplermagrone</h5>
            <p>Zubereitungszeit: 35min</p>
          </a>
          <!-- end of Recipe 1, Aelplermagrone -->
          <!-- Recipe 2 Lammracks mit Peperoni -->
          <a href="single-recipe2.php" class="recipe">
            <img
              src="./assets/recipes/Lammracks.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Lammracks mit Peperoni</h5>
            <p>Vor- und Zubereitungszeit: 20min</p>
            <p>Backen: 30min</p>
          </a>
          <!-- end of Recipe 2 Lammracks mit Peperoni -->
          <!-- Filet im Teig recipe -->
          <a href="single-recipe3.php" class="recipe">
            <img
              src="./assets/recipes/Filet_im_Teig.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Filet im Teig mit Frischkäse</h5>
            <p>Vor- und Zubereitungszeit: 40min</p>
            <p>Backen: 25min</p>
          </a>
          <!-- end of Filet im Teig recipe -->
          <!-- Recepie 4, Pancakes -->
          <a href="single-recipe4.php" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Pancakes</h5>
            <p>Zubereitungszeit: 30min</p>
          </a>
          <!-- end of Recepie 4, Pancakes -->
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
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
