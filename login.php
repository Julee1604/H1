<?php include("db/db_conn.php");

if ((isset($_POST['uname']) && isset($_POST['password'])) OR isset($_SESSION['user_name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    
    if (empty($uname) AND empty($_SESSION['name'])) {
		header("Location: anmeldung.php?error=Benutzername ist erforderlich");
	    exit();
	}else if(empty($pass) AND empty($_SESSION['name'])){
        header("Location: anmeldung.php?error=Passwort ist erforderlich");
	    exit();
	}else{

		$sql = "SELECT * FROM kunde WHERE user_name='$uname' AND password='$pass'";

		$abfrage = $db->prepare($sql);
        $abfrage->execute();
        $result = $abfrage->fetchAll();

        if(empty($result)){
             header("Location: anmeldung.php?error=Falscher Benutername oder Passwort");
             exit();
        }

        foreach ($result  as $row) { 
		    if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['VName'] = $row['VName'];
                $_SESSION['NName'] = $row['NName'];
            	

                ?>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Geschützer Bereich</title>
                            <meta charset="utf-8" />
                            <meta
                            name="viewport"
                            content="width=device-width, initial-scale=1, shrink-to-fit=no"
                            />
                            <meta name="description" content="" />
                            <meta name="author" content="" />
                            
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
                        <body class="einträge">
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
                            <div style="margin-top: 150px; text-align: center;">
                                <h1>Hallo, <?php echo $_SESSION['VName'].' '.$_SESSION['NName']; ?> - Sie haben sich erfolgreich angemeldet</h1>
                                <label>Auf dieser Seite stehen Ihre persönlichen Dokumente zum Download</label> ^^
                            </div>
                        </body>
                        </html>
                <?php 
               
            }
           
        }
    }

}
	

?>