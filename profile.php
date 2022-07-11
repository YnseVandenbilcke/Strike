<?php
  require_once dirname(__FILE__) . "/src/helper/debug.php"; 
  require_once dirname(__FILE__) . "/src/helper/auth.php";
  require_once dirname(__FILE__) . "/src/repository/strikerepository.php"; 

  // maak een variabele $user met daarin de gebruiker met de login_id uit de session

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/screen.css" rel="stylesheet">

  <title>Strike - Todo App</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <div class="text-white bg-dark c-sidebar col-sm-4 col-lg-3 d-flex flex-column">
        <a href="index.php" class="d-flex align-items-center text-white text-decoration-none">
          </svg><h1 class="fs-4">Strike</h1>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <svg class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-house-door" viewBox="0 0 16 16">
                <path
                  d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="tasks-overview.php" class="nav-link">
              <svg class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-list-task" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                <path
                  d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                <path fill-rule="evenodd"
                  d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
              </svg>
              Taken
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Angelo Fallein</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="profile.php">Profiel</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Uitloggen</a></li>
          </ul>
        </div>
      </div>


      <main class="col-sm-8 col-lg-9 ms-sm-auto px-md-4">

          <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom justify-content-between">
            <h2>
              <span class="fs-5 fw-semibold">Profiel</span>
            </h2>
          </div>
        <div>

        <!-- Vervang de waarden in de value attributen door de waarden van $user -->
        <form class="needs-validation pt-3" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Voornaam</label>
              <input name="firstname" type="text" class="form-control" id="firstName" placeholder="" value="***Voornaam***" required="">
            
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Achternaam</label>
              <input name="lastname" type="text" class="form-control" id="lastName" placeholder="" value="***Achternaam***" required="">
              
            </div>

            <div class="col-12">
              <label for="email" class="form-label">E-mail</label>
              <input name="email" type="email" class="form-control" value="***E-mail***" id="email" required="">
              
            </div>
        </form>
      </div>

      </main>

    </div>
  </div>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>