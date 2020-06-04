<div class="container bg-light border rounded" style="height: 35rem; width: 80rem;">
    <div class="row" style="height: 15%;">
        <div class="col-6 col-xs-2 col-sm-3 col-md-3 col-lg-1">
            <img src="./public/img/logo-QuizzSA.png" class="postion-relative" style="height: 10%;" alt="">
        </div>
        <div class="col-9 col-xs-3 col-sm-3 col-md-6 col-lg-9">
            <h4 class="title text-center text-nowrap mt-3">Créer et Paramétrer votre Quizz</h4>
        </div>
    </div>
    <div class="row" style="height: 10%;">
        <div class="col">
            <form class="form-inline float-right mr-5" action="" method="post" id="f">
                <div class="form-group">
                    <label for="nbr">Nombre de question / jeu</label>
                    <input type="text" class="form-control bg-light " id="nbr" name="nbr" value="">
                </div>
                <button class="btn btn-warning" type="submit">OK</button>
            </form>
        </div>
    </div>
    <div class="row" style="height: 65%;">
        <div class="col-4 bg-light border rounded">
            <div class="row">
                <div class="col-3"><img src="./public/img/avatar.png" class="img-circle" alt="Cinque Terre" width="100" height="100"></div>
                <div class="col-9"> 
                <h5 class="title text-secondary ml-4 mt-3">Admin</h5>
                <h5 class="title text-secondary ml-5 mt-3">Admin</h5>
            </div>
            </div>
            <div class="nav flex-column nav-pills mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active text-secondary bg-light" id="v-pills-home-tab" data-toggle="pill" href="index.php?page=./src/admin/admin&menu=listequestions" role="tab" aria-controls="v-pills-home" aria-selected="true">Liste des Questions
                <svg class="bi bi-card-list float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                <circle cx="3.5" cy="5.5" r=".5"/>
                <circle cx="3.5" cy="8" r=".5"/>
                <circle cx="3.5" cy="10.5" r=".5"/>
                </svg></a>
                <a class="nav-link text-secondary" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Créer Admin
                <svg class="bi bi-plus-square float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg>
                </a>
                <a class="nav-link text-secondary" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Liste des Joueurs
                <svg class="bi bi-card-list float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                <circle cx="3.5" cy="5.5" r=".5"/>
                <circle cx="3.5" cy="8" r=".5"/>
                <circle cx="3.5" cy="10.5" r=".5"/>
                </svg></a>
                <a class="nav-link text-secondary" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Créer des Questions
                <svg class="bi bi-plus-square float-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg>
                </a>
            </div>
            <div class="mt-3">
            <button class="btn btn-info navbar-btn ml-3">Dashboard</button>
            <button class="btn btn-danger navbar-btn float-right">Déconnexion</button>
            </div>
        </div>
        <div class="col-8 bg-light border rounded overflow-auto">
            <h4>1. les langages du Web ?</h4>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                HTML
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                CSS
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                R
            </label>
            </div>
            <h4>2. D’où vient le corona ?</h4>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Chine
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Italie
            </label>
            </div>
            <h4>3. Quel est le cerveau de lordinateur ?</h4>
            <div class="form-group">
            <input type="text" id="disabledTextInput" class="form-control" value="CPU" readonly placeholder="">
            </div>
            <h4>4. Les précurseurs de la révolution digitale ?</h4>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                GAFAM
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                CIA-FBI
            </label>
            </div>
            <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="section-droite">
        <?php
        // if (isset($_GET['menu'])) {
        //     if ($_GET['menu']=='createadmin') {
        //         require_once('createadmin.php');
        //     } elseif ($_GET['menu']=='createquestions') {
        //         require_once('createquestion.php');
        //     } elseif ($_GET['menu']=='listequestions') {
        //         require_once('listequestion.php');
        //     } elseif ($_GET['menu']=='listJoueurs') {
        //         require_once('listejoueur.php');
        //     } elseif ($_GET['menu']=='dash') {
        //         require_once('dashbord.php');
        //     }

            
        // } else {
        //     require_once('./src/connexion/listQuestions.php');
        // }
        ?>
    </div>