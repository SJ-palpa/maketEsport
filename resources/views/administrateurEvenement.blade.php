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
                        <a class="nav-link" href="/administrateurEvenement/mobile/enregistrerJoueur">enregistrerJoueur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endif
    @if(Request::is('administrateurEvenement/mobile/enregistrerJoueur'))
        <div class="card-body" >
            <div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Nom</label>
                        <input type="text" class="form-control is-valid" id="validationServer013" placeholder="First name"
                               value="Mark" required>
                        <div class="valid-feedback">
                            bon!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer023">Prenom</label>
                        <input type="text" class="form-control is-valid" id="validationServer023" placeholder="Last name"
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
                            <input type="text" class="form-control is-invalid" id="validationServerUsername33" placeholder="Username"
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
                        <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="City"
                               required>
                        <div class="invalid-feedback">
                            Vous devez entrer un nom de pays valide
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer043">Ville</label>
                        <input type="text" class="form-control is-invalid" id="validationServer043" placeholder="State"
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
                    <a class="nav-link" href="#">Créer événement</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Événement
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/administrateurEvenement/appliweb/enregistrerJoueur">enregistrer Joueur</a>
                        <a class="dropdown-item" href="">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
            </ul>
        </nav>
    @endif
    @if(Request::is('administrateurEvenement/appliweb'))
            <section class="offset-5">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-personal">
                            <img class="card-img-top" src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTE1ODA0OTcxOTUyMDE0ODYx/elon-musk-20837159-1-402.png" alt="Card image cap">
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title title-one">Elon Musk</h4>
                                </a>
                                <p class="card-meta">Inscrit en 3018</p>
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
    @if(Request::is('administrateurEvenement/appliweb/enregistrerJoueur'))
        <div class="card-body" >
            <form>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Nom</label>
                        <input type="text" class="form-control is-valid" id="validationServer013" placeholder="First name"
                               value="Mark" required>
                        <div class="valid-feedback">
                            bon!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer023">Prenom</label>
                        <input type="text" class="form-control is-valid" id="validationServer023" placeholder="Last name"
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
                            <input type="text" class="form-control is-invalid" id="validationServerUsername33" placeholder="Username"
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
                        <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="City"
                               required>
                        <div class="invalid-feedback">
                            Vous devez entrer un nom de pays valide
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer043">Ville</label>
                        <input type="text" class="form-control is-invalid" id="validationServer043" placeholder="State"
                               required>
                        <div class="invalid-feedback">
                            Vous devez entrer un nom de ville valide
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationServer053">Photo d'identité</label>
                        <input type="text" class="form-control is-invalid" id="validationServer053" placeholder="Zip"
                               required>
                        <div class="invalid-feedback">
                            prenez une photo de la personne s'il vous plait
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer053">Photo face</label>
                        <input type="text" class="form-control is-invalid" id="validationServer053" placeholder="Zip"
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
                <button class="btn btn-primary" type="submit">Valider</button>
            </form>
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