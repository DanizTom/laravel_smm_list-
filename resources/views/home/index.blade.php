@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100">

            <section class="bg-secondary py-4 bg-carbon">
            <div class="container">
            <div class="text-center mt-4 mb-4">
            <h2>
            <span class="text-muted">[</span>
            SMM <span style="font-weight:thin!important">Watch</span>
            <span class="text-muted">]</span>
            </h2>
            <p class="lead">The <span class="text-primary">#1</span> public SMM Panel Monitor & List</p>
            </div>
            <div class="row">
            <div class="offset-lg-3 col-lg-6">
            <small class="text-uppercase pl-2">Search for...</small>
            <form action="/search" class="mt-1 mb-2">
            <div class="input-group input-group-lg">
            <input type="text" name="q" class="form-control bg-light text-white" placeholder="Instagram Likes ...">
            <div class="input-group-append">
            <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
            </section>
            <section class="bg-light py-4 shadow">
            <div class="container text-center">
            <p class="mb-0 lead">
            Welcome to
            <strong class="text-white">
            <span class="text-info">[</span> SMM Watch <span class="text-info">]</span>
            </strong>
            the biggest SMM Panel list in the whole world with over
            180 SMM Panels listed & monitored.
            Getting thousands of visitors from all around the world looking for the best,
            cheapest and fastest SMM Services & Panels.
            </p>
            </div>
            </section>

            <div class="container my-3">
            <small class="text-uppercase"><a href="/promote"><i class="fa fa-star"></i> Featured</a> SMM Panels</small>
            <div class="row mt-1">
            <div class="col-6 col-md-4 col-lg-3 ">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/fortunesmm.jpg?cc=HUop3SIIW21z) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/fortunesmm">
            <span>
            <img src="https://smmwatch.com/icons/fortunesmm.png?cc=HUop3SIIW21z" alt="FortuneSMM Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/fortunesmm">FortuneSMM</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            3410 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 ">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/crescitaly.jpg?cc=pW32GMH5dtJS) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/crescitaly">
            <span>
            <img src="https://smmwatch.com/icons/crescitaly.png?cc=pW32GMH5dtJS" alt="Crescitaly Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/crescitaly">Crescitaly</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">5</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            4878 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-none d-md-block">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/global-smm-panel.jpg?cc=yq7TEXrHQyWb) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/global-smm-panel">
            <span>
            <img src="https://smmwatch.com/icons/global-smm-panel.png?cc=yq7TEXrHQyWb" alt="Cheap Telegram Provider Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/global-smm-panel">Cheap Telegram Provider</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">6</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            325 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/stream-promotion.jpg?cc=1682611275) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/stream-promotion">
            <span>
            <img src="https://smmwatch.com/icons/stream-promotion.png?cc=1682611275" alt="Stream Views Provider Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/stream-promotion">Stream Views Provider</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">8</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            1461 Services
            </div>
            </div>
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-md-6">
            <h6 class="text-uppercase text-dark mb-3"><i class="fa fa-heart text-danger mr-2"></i> Popular Panels</h6>
            <div class="list-group mb-4">
            <a class="list-group-item text-truncate" href="/panels/crescitaly">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">5</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">4878 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/crescitaly.png?cc=pW32GMH5dtJS" alt="Crescitaly Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Crescitaly
            </a>
            <a class="list-group-item text-truncate" href="/panels/global-smm-panel">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">6</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">325 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/global-smm-panel.png?cc=yq7TEXrHQyWb" alt="Cheap Telegram Provider Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Cheap Telegram Provider
            </a>
            <a class="list-group-item text-truncate" href="/panels/instagram-likes-provider">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">8</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">1380 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/instagram-likes-provider.png?cc=NeYyEUhFdVlV" alt="InstantLikes SMM Provider Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            InstantLikes SMM Provider
            </a>
            <a class="list-group-item text-truncate" href="/panels/stream-promotion">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">8</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">1461 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/stream-promotion.png?cc=1682611275" alt="Stream Views Provider Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Stream Views Provider
            </a>
            <a class="list-group-item text-truncate" href="/panels/syncc-co">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">14 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/syncc-co.png?cc=1686253545" alt="SYNCC.CO Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            SYNCC.CO
            </a>
            <a class="list-group-item text-truncate" href="/panels/smmflare-1-panel">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">664</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">1967 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/smmflare-1-panel.png?cc=2lOe6ari0ZS1" alt="SMMFlare - #1 SMM Panel Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            SMMFlare - #1 SMM Panel
            </a>
            <a class="list-group-item text-truncate" href="/panels/brands-of-panel">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">268 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/brands-of-panel.png?cc=1684488591" alt="Brands OF Panel Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Brands OF Panel
            </a>
            <a class="list-group-item text-truncate" href="/panels/smm-panel-since-2010">
            <span class="float-right">
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">2</strong>
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted ml-2 mr-2">|</span>
            <span class="text-muted">4044 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/smm-panel-since-2010.png?cc=557pe0G8euSN" alt="SMM Panel Since 2010 Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            SMM Panel Since 2010
            </a>
            </div>
            </div>
            <div class="col-md-6">
            <h6 class="text-uppercase text-dark mb-3"><i class="fa fa-calendar text-info mr-2"></i> Latest Panels</h6>
            <div class="list-group mb-2">
            <a class="list-group-item text-truncate" href="/panels/syncc-co">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">14 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/syncc-co.png?cc=1686253545" alt="SYNCC.CO Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            SYNCC.CO
            <small class="text-muted ml-2">
            about 1 hour ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/-panel">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">4 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/-panel.png?cc=1686017390" alt="이즈스타그램 리그램 자동완성 인기게시물 Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            이즈스타그램 리그램 자동완성 인기게시물
            <small class="text-muted ml-2">
            3 days ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/smmpanel">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">586 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/smmpanel.png?cc=1685637748" alt="SMMPANEL.SOCIAL  Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            SMMPANEL.SOCIAL
            <small class="text-muted ml-2">
            7 days ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/eanns-smm">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">809 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/eanns-smm.png?cc=1685333004" alt="Eanns Smm Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Eanns Smm
            <small class="text-muted ml-2">
            11 days ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/realsmm96">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">2400 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/realsmm96.png?cc=1685256384" alt="REALSMM96 Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            REALSMM96
            <small class="text-muted ml-2">
            12 days ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/joy-smm-panel">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">2727 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/joy-smm-panel.png?cc=1684776564" alt="Joy Smm Panel Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Joy Smm Panel
            <small class="text-muted ml-2">
            17 days ago
            </small>
            </a>
            <a class="list-group-item text-truncate" href="/panels/global-follows">
            <span class="float-right">
            <span class="d-md-none d-lg-inline-block">
            <span class="text-muted">603 Services</span>
            </span>
            </span>
            <img src="https://smmwatch.com/icons/global-follows.png?cc=1684581864" alt="Global Follows Favicon" style="height:16px; width:16px; margin-top:-4px; margin-right:12px; margin-left:-6px">
            Global Follows
            <small class="text-muted ml-2">
            19 days ago
            </small>
            </a>
            </div>
            <a href="/panels/new" class="btn btn-outline-primary btn-block text-left">
            <i class="fa fa-plus fa-fw mr-2"></i>
            Add your <strong>SMM Panel</strong>
            </a>
            </div>
            </div>
            <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
            <div class="mb-4"></div>
            <h6 class="text-uppercase mb-3">
            <span class="float-right"><a href="/platform">See All Platforms <i class="fas fa-arrow-right text-white ml-1"></i></a></span>
            <i class="far fa-heart mr-2 text-danger"></i> <strong>popular</strong> <a href="/platform" class="text-white">social Platforms</a>
            </h6>
            <div class="row">
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/youtube">
            <h6 class="mb-2">
            <i class="fab fa-youtube fa-fw mr-1" style="color:#ff0000"></i>
            Youtube
            </h6>
            <span class="text-dark"><strong>110470</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/twitch">
            <h6 class="mb-2">
            <i class="fab fa-twitch fa-fw mr-1" style="color:#6441a5"></i>
            Twitch
            </h6>
            <span class="text-dark"><strong>8838</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/tik-tok">
            <h6 class="mb-2">
            <i class="fas fa-music fa-fw mr-1" style="color:#69C9D0"></i>
            TikTok
            </h6>
            <span class="text-dark"><strong>52083</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/telegram">
            <h6 class="mb-2">
            <i class="fab fa-telegram fa-fw mr-1" style="color:#0088cc"></i>
            Telegram
            </h6>
            <span class="text-dark"><strong>30809</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/spotify">
            <h6 class="mb-2">
            <i class="fab fa-spotify fa-fw mr-1" style="color:#1db954"></i>
            Spotify
            </h6>
            <span class="text-dark"><strong>25908</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/reddit">
            <h6 class="mb-2">
            <i class="fab fa-reddit-alien fa-fw mr-1" style="color:#ff4500"></i>
            Reddit
            </h6>
            <span class="text-dark"><strong>6169</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/instagram">
            <h6 class="mb-2">
            <i class="fab fa-instagram fa-fw mr-1" style="color:#405de6"></i>
            Instagram
            </h6>
            <span class="text-dark"><strong>196431</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/facebook">
            <h6 class="mb-2">
            <i class="fab fa-facebook fa-fw mr-1" style="color:#3b5998"></i>
            Facebook
            </h6>
            <span class="text-dark"><strong>68057</strong> services listed</span>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4">
            <a class="card-body text-white text-decoration-none" href="/platform/discord">
            <h6 class="mb-2">
            <i class="fab fa-discord fa-fw mr-1" style="color:#5865F2"></i>
            Discord
            </h6>
            <span class="text-dark"><strong>4704</strong> services listed</span>
            </a>
            </div>
            </div>
            </div>
            <small class="text-uppercase"><a href="/promote"><i class="fa fa-star"></i> Featured</a> SMM Panels</small>
            <div class="row mt-1">
            <div class="col-6 col-md-4 col-lg-3 ">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/addsmm.jpg?cc=1683675276) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/addsmm">
            <span>
            <img src="https://smmwatch.com/icons/addsmm.png?cc=1683675276" alt="AddSMM Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/addsmm">AddSMM</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            1489 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 ">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/n1-european-asian-panel.jpg?cc=1682635312) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/n1-european-asian-panel">
            <span>
            <img src="https://smmwatch.com/icons/n1-european-asian-panel.png?cc=1682635312" alt="Urpanel #1 Europe &amp; Asia Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/n1-european-asian-panel">Urpanel #1 Europe &amp; Asia</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            4241 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-none d-md-block">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/smm-panel-since-2010.jpg?cc=557pe0G8euSN) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/smm-panel-since-2010">
            <span>
            <img src="https://smmwatch.com/icons/smm-panel-since-2010.png?cc=557pe0G8euSN" alt="SMM Panel Since 2010 Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/smm-panel-since-2010">SMM Panel Since 2010</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">2</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            4044 Services
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/fortunesmm.jpg?cc=HUop3SIIW21z) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/fortunesmm">
            <span>
            <img src="https://smmwatch.com/icons/fortunesmm.png?cc=HUop3SIIW21z" alt="FortuneSMM Icon" class="m-3">
            </span>
            </a> <div class="card-body text-center">
            <h6 class="card-title mb-2 mt-1 text-truncate">
            <a class="text-white" href="/panels/fortunesmm">FortuneSMM</a>
            </h6>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            3410 Services
            </div>
            </div>
            </div>
            </div>
            </div>
    </main>

@endsection
