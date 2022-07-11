<?php
  require_once dirname(__FILE__) . "/src/helper/debug.php"; 
  require_once dirname(__FILE__) . "/src/helper/auth.php";
  require_once dirname(__FILE__) . "/src/repository/strikerepository.php"; 

  //we maken gebruik van postback dus deze pagina zal de $_POST opvangen

  //correct ingelogd?
  // > sessie aanmaken

  //welke zijn nieuwe taken?
  // > cookie maken met laatste taakid, gebruik getLastTask() uit de repository

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

<body class="text-center signin">
    
  <main class="form-signin">
    <!-- Vul de form aan met de nodige attributen -->
    <form>
      <h1 class="h3 mb-3 fw-normal">Aanmelden</h1>

      <div class="form-floating">
        <input type="email" required class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">E-mail</label>
      </div>
      
      <div class="form-floating">
        <input type="password" required class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Wachtwoord</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Inloggen</button>

      <p class="mt-5 mb-3 text-muted">Strike - Todo App</p>
    </form>
  </main>

</body>

</html>