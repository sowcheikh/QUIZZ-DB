<?php
if (!isset($_SESSION['loggedIN'])) {
    header('Location: index.php');
}
global $bdd;

?>
<div class="container bg-light border rounded" style="height: 35rem; width: 80rem;">
    <div class="row" style="height: 15%;">
        <div class="col-6 col-xs-2 col-sm-3 col-md-3 col-lg-1">
            <img src="./public/img/logo-QuizzSA.png" class="postion-relative" style="height: 10%;" alt="">
        </div>
        <div class="col-9 col-xs-3 col-sm-3 col-md-6 col-lg-9">
            <h4 class="title text-center text-nowrap mt-3">Créer et Paramétrer votre Quizz</h4>
        </div>
    </div>
    <div class="row" style="height: 85%;">
        <div class="col-4 bg-light border rounded h-75">
            <div class="row">
                <div class="col-3"><img src="./public/img/ch.JPG" class="img-circle" alt="Cinque Terre" width="100" height="100"></div>
                <div class="col-9"> 
                <h5 class="title text-secondary ml-4 mt-3"><?=$_SESSION['login']?></h5>
            </div>
            </div>
            <div id="link">
            <nav class="nav nav-pills flex-column ">
            <a class="nav-link" href="index.php?page=./src/pages/admin/listequestion">Liste des Questions
            <svg class="bi bi-card-list float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                <circle cx="3.5" cy="5.5" r=".5"/>
                <circle cx="3.5" cy="8" r=".5"/>
                <circle cx="3.5" cy="10.5" r=".5"/>
                </svg>
            </a>
            <a class="nav-link" href="index.php?page=./src/pages/admin/createadmin">Créer Admin
            <svg class="bi bi-plus-square float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg>
            </a>
            <a class="nav-link" id="table" href="index.php?page=./src/pages/admin/listejoueur">Liste des Joueurs
            <svg class="bi bi-card-list float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                <circle cx="3.5" cy="5.5" r=".5"/>
                <circle cx="3.5" cy="8" r=".5"/>
                <circle cx="3.5" cy="10.5" r=".5"/>
                </svg>
            </a>
            <a class="nav-link" href="index.php?page=./src/pages/admin/createquestion">Créer des Questions
            <svg class="bi bi-plus-square float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg>
            </a>
            <a href="index.php?page=./src/pages/admin/dashboard" class="nav-link">Dashboard
            <svg class="bi bi-pie-chart float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M7.5 7.793V1h1v6.5H15v1H8.207l-4.853 4.854-.708-.708L7.5 7.793z"/>
            </svg></a>
            </nav>
            <a href="index.php?page=./src/pages/logout" class="btn btn-danger mt-2 float-right">Déconnexion</a>
            </div>
            <div class="mt-3" id="btn">
            <form>
</form>
            </div>
        </div>
        <div class="col-8 shadow-sm bg-white rounded" id="page">
    </div>
    </div>
</div>

    <script src="public/js/route.js"></script>
    <script>

    $('#table').click(function(){
        $.ajax({
                type: "POST",
                url: "data/data.php",
                //data: $('form').serialize(),
                data: '',
                dataType: "JSON",
                success: function (data) {
                   if(data){
                       $('#table').load(''); 
                   }
                }
            });
    })
</script>
