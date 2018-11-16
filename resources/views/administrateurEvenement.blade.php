@extends('layout.layoutSESF')
@section('titrePage')
    Administrateur evénement
@endsection
@section('contenuPage')

    @if(Request::is('administrateurEvenement/mobile*'))
        <nav class="navbar bg-dark navbar-dark">
            <a class="navbar-brand" href="/">SESF</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsibleNavbar" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/administrateurEvenement/mobile/enregistrerJoueur">EnregistrerJoueur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrateurEvenement/mobile/creerEvenement">Créer événement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrateurEvenement/mobile/scannerJoueur">Scanner un joueur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrateurEvenement/mobile/information">Information</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endif

    @if(Request::is('administrateurEvenement/mobile/scannerJoueur'))
    </br>

        <div class="text-center">
            <button type="button" class="btn btn-success disabled">Carte scanner avec succès</button>
        </div>
        </br>
        <section class="offset-4">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="card card-personal">
                        <img class="card-img-top" src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTE1ODA0OTcxOTUyMDE0ODYx/elon-musk-20837159-1-402.png" alt="Card image cap">
                        <div class="card-body">
                            <a>
                                <h4 class="card-title title-one">Elon Musk</h4>
                            </a>
                            <p class="card-meta">Date d'inscription: 3018</p>
                            <p class="card-text">Adresse: 320 chemin des prunes 01299 vatican</p>
                            <p class="card-text">Mail : elon.musk@paypal.com</p>
                            <p class="card-text">Nationalité : Moldave</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif


    @if(Request::is('administrateurEvenement/mobile/enregistrerJoueur'))
        <div class="card-body" >
            <div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Nom</label>
                        <input type="text" class="form-control is-valid" id="validationServer013" placeholder="Nom"
                               value="Mark" required>
                        <div class="valid-feedback">
                            bon!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer023">Prenom</label>
                        <input type="text" class="form-control is-valid" id="validationServer023" placeholder="Prenom"
                               value="Otto" required>
                        <div class="valid-feedback">
                            bon!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServerUsername33">Pseudo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend33">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername33" placeholder="Pseudo"
                                   aria-describedby="inputGroupPrepend33" required>
                            <div class="invalid-feedback">
                                Vous devez entrer un pseudo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer033">Pays</label>
                        <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="Pays"
                               required>
                        <div class="invalid-feedback">
                            Vous devez entrer un nom de pays valide
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer043">Ville</label>
                        <input type="text" class="form-control is-invalid" id="validationServer043" placeholder="Ville"
                               required>
                        <div class="invalid-feedback">
                            Vous devez entrer un nom de ville valide
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationServer053">Photo d'identité</label>
                        <input type="text" class="form-control is-invalid" id="validationServer053" placeholder="Photo"
                               required>
                        <div class="invalid-feedback">
                            prenez une photo de la personne s'il vous plait
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer053">Photo face</label>
                        <input type="text" class="form-control is-invalid" id="validationServer053" placeholder="Photo"
                               required>
                        <div class="invalid-feedback">
                            prenez une photo de la personne s'il vous plait
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input is-invalid" id="invalidCheck33" required>
                        <label class="custom-control-label" for="invalidCheck33">L'utilisateur a accepte les conditions d'utilisation de la gamer ID</label>
                        <div class="invalid-feedback">
                            L'utilisateur doit accepter les conditions d'utilisation de la gamer ID
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success disabled">Carte scanner avec succès</button>
                </div>
                </br>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
        </div>
    @endif


    @if(Request::is('administrateurEvenement/appliweb*'))
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="/">SESF</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/administrateurEvenement/appliweb/listevenement">Liste événements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrateurEvenement/appliweb/creerEvenement">Créer événement</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Événement
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/administrateurEvenement/appliweb/information">Information</a>
                        <a class="dropdown-item" href="/administrateurEvenement/appliweb/importerFichier">Importer fichier</a>
                    </div>
                </li>
            </ul>
        </nav>
    @endif


    @if(Request::is('administrateurEvenement/appliweb/importerFichier'))
                <style>
                    .container {
                        padding: 80px 120px;
                    }
                    .bg-1 h3 {color: #fff;}
                    .bg-1 p {font-style: italic;}
                    .list-group-item:first-child {
                        border-top-right-radius: 0;
                        border-top-left-radius: 0;
                    }
                    .list-group-item:last-child {
                        border-bottom-right-radius: 0;
                        border-bottom-left-radius: 0;
                    }
                    .thumbnail {
                        padding: 0 0 15px 0;
                        border: none;
                        border-radius: 0;
                    }
                    .thumbnail p {
                        margin-top: 15px;
                        color: #2854ab;
                    }
                    .btn {
                        padding: 10px 20px;
                        background-color: #333;
                        color: #f1f1f1;
                        border-radius: 0;
                        transition: .2s;
                    }
                    .btn:hover, .btn:focus {
                        border: 1px solid #333;
                        background-color: #fff;
                        color: #2854ab;
                    }
                </style>
                </br>
                </br>
                <table class="table table-bordered">
                    <!-- Table head -->
                    <thead>
                    <tr>
                        <th>Inscription finalisé</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                    </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                    <tr>
                        <th scope="row">
                            <!-- Material unchecked -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="tableMaterialCheck2" checked>
                                <label class="form-check-label" for="tableMaterialCheck2">Check 1</label>
                            </div>
                        </th>
                        <td>Jean</td>
                        <td>Maurice</td>
                        <td>31/12/2000</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <!-- Material unchecked -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="tableMaterialCheck3">
                                <label class="form-check-label" for="tableMaterialCheck3">Check 2</label>
                            </div>
                        </th>
                        <td>Antoinette</td>
                        <td>Le corbusier</td>
                        <td>31/12/1999</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <!-- Material unchecked -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="tableMaterialCheck4" checked>
                                <label class="form-check-label" for="tableMaterialCheck4">Check 3</label>
                            </div>
                        </th>
                        <td>Romaric</td>
                        <td>Bon vivant</td>
                        <td>02/11/1945</td>
                    </tr>
                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table  -->
                <div class="container">
                    <h3 class="text-center">Telecharger votre fichier</h3>
                    <p class="text-center">Voici les différents formats acceptés par l'application<br><br></p>
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><strong>Format Excel</strong></p>
                                <button class="btn" data-toggle="modal" data-target="#myModal">.XLSX</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><strong>Format LibreOffice</strong></p>
                                <button class="btn" data-toggle="modal" data-target="#myModal">.ODS</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><strong>Format universel</strong></p>
                                <button class="btn" data-toggle="modal" data-target="#myModal">.CSV</button>
                            </div>
                        </div>
                    </div>
                </div>

    @endif


    @if(Request::is('administrateurEvenement/appliweb'))

            </br>
            <section class="offset-4">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="card card-personal">
                            <img class="card-img-top" src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTE1ODA0OTcxOTUyMDE0ODYx/elon-musk-20837159-1-402.png" alt="Card image cap">
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title title-one">Elon Musk</h4>
                                </a>
                                <p class="card-meta">Date d'inscription: 3018</p>
                                <p class="card-text">Adresse: 320 chemin des prunes 01299 vatican</p>
                                <p class="card-text">Mail : elon.musk@paypal.com</p>
                                <p class="card-text">Nationalité : Moldave</p>
                                <div class="text-center">
                                    <a href="#"><button type="button" class="btn btn-primary m-1">Modifier</button></a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </section>
    @endif

    @if(Request::is('administrateurEvenement/appliweb/creerEvenement') or Request::is('administrateurEvenement/mobile/creerEvenement'))
                    <div class="card m-4">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Création événement</h4>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="form34" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form34">Nom événement</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="form29" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form29">lieu</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa fa-tag prefix grey-text"></i>
                                    <input type="text" id="form32" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form32">Type</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa fa-tag prefix grey-text"></i>
                                    <input type="text" id="form32" class="form-control validate" placeholder="10/12/2018">
                                    <label data-error="wrong" data-success="right" for="form32">Date</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-pencil prefix grey-text"></i>
                                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                                    <label data-error="wrong" data-success="right" for="form8">Description</label>
                                </div>
                                <hr>
                                <div class="list-group">
                                    <a href="#" class="list-group-item active">Jean de la compta</a>
                                    <a href="#" class="list-group-item active">Remi à la régis</a>
                                    <a href="#" class="list-group-item">Jaqueline</a>
                                </div>
                                <label data-error="wrong" data-success="right" for="form8">Team</label>

                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-primary">Créer <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </div>
                    </div>
        </div>

    @endif


    @if(Request::is('administrateurEvenement/appliweb/information') or Request::is('administrateurEvenement/mobile/information'))

        <div class="card m-4">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Evénement</h4>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate" placeholder="Polylan">
                        <label data-error="wrong" data-success="right" for="form34">Nom événement</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="form29" class="form-control validate" placeholder="Esplanade 13, CP-16, 1015 Lausanne, Suisse">
                        <label data-error="wrong" data-success="right" for="form29">lieu</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" class="form-control validate" placeholder="Une LAN">
                        <label data-error="wrong" data-success="right" for="form32">Type</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" class="form-control validate" placeholder="10/12/2018">
                        <label data-error="wrong" data-success="right" for="form32">Date</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4">
Depuis 2002, l'association PolyLAN qui est une comission de l'AGEPoly organise des LAN (ou LAN party) deux fois par an. Ces rassemblements, qui se déroulent dans le hall du batiment SG et au RLC à l'EPFL ainsi que parfois à l'Amphimax à l'UNIL ou plus récemment au SwissTech Convention Center, voient s'affronter jusqu'à 1250 participants au travers d'un réseau local.

Le comité, formé principalement d'étudiants de la faculté I&C, est composé d'une vingtaine de membres, qui mettent en pratique les connaissances acquises dans le cadre de leurs études. Bénéficiant de l'infrastructure électrique, informatique et logistique de l'EPFL, l'association propose une manifestation de grande qualité pour un prix abordable. Contrairement aux autres événements de ce type, où l'esprit de compétition prime avant tout, la convivialité ainsi que le côté ludique des jeux vidéos sont privilégiés.

                        </textarea>
                        <label data-error="wrong" data-success="right" for="form8">Description</label>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Jean de la compta</a>
                        <a href="#" class="list-group-item active">Remi à la régis</a>
                        <a href="#" class="list-group-item">Jaqueline</a>
                    </div>
                    <label data-error="wrong" data-success="right" for="form8">Team</label>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">Modifier <i class="fa fa-paper-plane-o ml-1"></i></button>
                    <button class="btn btn-danger">Supprimer <i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
        </div>
    @endif

    @if(Request::is('administrateurEvenement/appliweb/listevenement'))
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Polylan
                <span class="badge badge-primary badge-pill"> participant : 12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                PalexpoGamingShow
                <span class="badge badge-primary badge-pill"> participant : 50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Anniversaire de Tim Berners Lee
                <span class="badge badge-primary badge-pill"> participant : 99</span>
            </li>
        </ul>
    @endif




@endSection
