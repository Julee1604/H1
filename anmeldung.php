<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Geschützer Bereich</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Quicksand:wght@500&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Quicksand:wght@500&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
  </head>

    <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a
            class="navbar-brand .align-top .align-middle .align-bottom"
            href="index.php"
            ><img class="logo" src="img/Logo/logo-main - Kopie.png"
          /></a>
          <!--Hamburger menü-->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dienstleistungen.php"
                  >Dienstleistung</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="laborausstattung.php"
                  >Laborausstattung</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aktuelles.php"
                  >Aktuelles und Veranstaltungen</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="archiv.php">Archiv/Galerie</a>
              </li>

              <li class="nav-item">
                    <a class="nav-link" href="Lebenslauf.php">Kontakt</a>
                  </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="anmeldung.php">Geschützer Bereich</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
    </header> 

        <main style="margin-top: 150px; width: 100%;">
        
            <h2 style="text-align: center; padding-bottom: 3rem;">Bitte melden Sie sich an:</h2>

            <form class="form_login" action="login.php" method="post" accept-charset=utf-8>
            <h2 style="font-size: 2rem;margin: 30px;">LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Benutzer</label>
                <input type="text" name="uname" placeholder="Benutername"><br>

                <label>Passwort</label>
                <input type="password" name="password" placeholder="Passwort"><br>

                <button type="submit">Anmelden</button>
            </form>
        </main>
    </body>
</html>