<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<head>
<body>
@if(Request::is('/'))
    <div class="container text-center">
        <a href="/appliweb"><button type="button" class="btn btn-primary m-5">Application web</button></a>
    </div>
    </br>
    </br>
    <div class="container text-center">
        <a href="/mobile"><button type="button" class="btn btn-primary m-5">Application mobile</button></a>
    </div>
@endif

@if(Request::is('mobile'))

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Votre Login</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Votre mot de passe</label>
                </div>

            </div>

            <div class="container text-center">
                <a href="/administrateurEvenement/mobile"><button type="button" class="btn btn-primary m-1">Administrateur événement</button></a>
            </div>
            <div class="container text-center">
                <a href="/utilisateur/mobile"><button type="button" class="btn btn-primary m-1">utilisateur</button></a>
            </div>
        </div>
    </div>
@endif

@if(Request::is('appliweb'))
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Votre Login</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Votre mot de passe</label>
                </div>

            </div>
            <div class="container text-center">
                <a href="/administrateurSESF"><button type="button" class="btn btn-primary m-1">Administrateur SeSF</button></a>
            </div>
            <div class="container text-center">
                <a href="/administrateurEvenement/appliweb"><button type="button" class="btn btn-primary m-1">Administrateur événement</button></a>
            </div>
            <div class="container text-center">
                <a href="/utilisateur/appliweb"><button type="button" class="btn btn-primary m-1">utilisateur</button></a>
            </div>
        </div>
    </div>

@endif

</body>