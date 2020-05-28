<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <div class="register">
        <h1>S’inscrire pour tester votre niveau de culture générale </h1>
        <div class="logo">
            <img class="img-fluid" src="./asset/img/logo-QuizzSA.png" alt="">
        </div>
    <div class="inscription">   
    <form action="" method="post">
    <div class="form-group">
    <input type="text" class="form-control form-control-lg" id="nom" placeholder="Entrer votre nom complet">
    <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
  </div>
  <div class="form-group">
    <input type="text" class="form-control form-control-lg" id="login" placeholder="Entrer votre login">
    <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-lg" id="password" placeholder="Entrer votre password">
    <svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-lg" id="password" placeholder="Confirmer votre password">
    <svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
  </div>
  <!-- <input type="file" class="btn btn-warning mb-2 avatar" value="Choisir un avatar"> -->
  <div class="btn1">
                    <!-- On limite le fichier à 100Ko -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    <button class="upload_avatar">Choisir un avatar</button>
                    <input type="file" accept="image/*" name="photo" onchange="loadFile(event)">
                </div>
  <button type="submit" class="btn btn-warning mb-2 compte">Créer un compte</button>
</form>
<div class="av">
    <img id="output" class="avatar_joueur">
    <h1>AVATAR</h1>
</div>
</div> 
</body>
</html>