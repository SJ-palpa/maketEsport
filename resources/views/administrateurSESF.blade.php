@extends('layout.layoutSESF')
@section('titrePage')
    Administrateur SeSF
@endsection
@section('contenuPage')
    @if(Request::is('administrateurSESF*'))
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="/">SESF</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/administrateurSESF/listejoueur">Liste joueurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrateurSESF/enregistrerAdminEvenement">enregistrer administrateur evenement</a>
                </li>
            </ul>
        </nav>
    @endif
    @if(Request::is('administrateurSESF/enregistrerAdminEvenement'))
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
                <button class="btn btn-primary" type="submit">Valider</button>
            </form>
        </div>
    @endif
    @if(Request::is('administrateurSESF/listejoueur'))
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Giroud Parmentier
                <span class="badge badge-success badge-pill"> gamer ID : active</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Guy Sartre
                <span class="badge badge-warning badge-pill"> gamer ID : désactivé</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Patrick Rothfuss
                <span class="badge badge-success badge-pill"> gamer ID : active</span>
            </li>
        </ul>
    @endif
@endSection