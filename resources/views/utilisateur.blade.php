@extends('layout.layoutSESF')
@section('titrePage')
    utilisateur
@endsection
@section('contenuPage')
    @if(Request::is('utilisateur/mobile*'))
        <nav class="navbar bg-dark navbar-dark">
            <a class="navbar-brand" href="/">SESF</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsibleNavbar" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/utilisateur/mobile">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/utilisateur/mobile/QRcode">QR code</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endif
    @if(Request::is('utilisateur/mobile'))
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
                                <hr>
                                <div class="text-center">
                                    <a href="#"><button type="button" class="btn btn-primary m-1">Modifier</button></a>
                                </div>
                                <div class="text-center">
                                    <a href="#"><button type="button" class="btn btn-primary m-1">Desactiver ma gamer ID</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @endif



    @if(Request::is('utilisateur/appliweb*'))
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="/">SESF</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur/appliweb/information">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur/appliweb/QRcode">QR Code</a>
                </li>
            </ul>
        </nav>
    @endif

    @if(Request::is('utilisateur/appliweb') or Request::is('utilisateur/appliweb/information')  )
        <section class="offset-4">
            <div class="row">
                <div class="col-md-6 col-lg-6">
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
                            <div class="text-center">
                                <a href="#"><button type="button" class="btn btn-primary m-1">Desactiver ma gamer ID</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(Request::is('utilisateur/appliweb/QRcode') or Request::is('utilisateur/mobile/QRcode')  )
        </br>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Qrcode_wikipedia_fr_v2clean.png/220px-Qrcode_wikipedia_fr_v2clean.png" class="rounded mx-auto d-block" alt="QRcode">
    @endif
@endSection