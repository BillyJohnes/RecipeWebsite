<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About || Final</title>
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
    <!-- end of nav -->
    <main class="page">
      <section class="about-page">
        <article>
          <h2>We are just two students who needed to programm a website as our final project </h2>
          <p>
            Enjoy our 4 cooking recipes and try them at home. We can both recommend all of them. 
            They are really good!
          </p>
          <p>
            If you have any questions you can write us (mabey its not working, we haven't tested it xD)
          </p>
          <a href="contact.php" class="btn"> contact </a>
        </article>
        <!-- needs fixes -->
        <img
          src="./assets/about.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesomesouce!</h5>
        <div class="recipes-list">
          <!-- Aelplermacrone recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/Aelplermagrone.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Älplermacrone</h5>
            <p>Zubereitungszeit: 35min</p>
          </a>
          <!-- end of Aelplermagrone recipe -->
          <!-- Lammracks mit Peperoni recipe -->
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
          <!-- end of Lammracks mit Peperoni recipe -->
          <!-- File im Teig recipe -->
          <a href="single-recipe3.php" class="recipe">
            <img
              src="./assets/recipes/Filet_im_Teig.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Filet_im_Teig</h5>
            <p>Vor- und Zubereitungszeit: 40min</p>
            <p>Backen: 25min</p>
          </a>
          <!-- end of Filet im Teig recipe -->
          <!-- Pancakes recipe -->
          <a href="single-recipe4.php" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Pancakes</h5>
            <p>Zubereitungszeit: 30min </p>
          </a>
          <!-- end of Pancakes recipe -->
        </div>
      </section>
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
