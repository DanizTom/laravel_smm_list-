
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The SMM Panel Monitor &amp; List » [ SMMWatch ]</title>
    <meta name="keywords" content="SMM Watch, SMM Panel List, Best SMM Panels" />
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="64x64">
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="SMdqpFkb9nUMfuMDgYIWeJbGS8JLNBeHBjV9uG4X/9jg36MJIEDc2vOHcBmXeHeDSlSLPfKSAQNoLH8L8o1Bcw==" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets/application-83c9c87c1a264e43b48ca4c61316427d6ca76973618bb2a749826f4b9206127d.css" media="all" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="importmap" data-turbo-track="reload">{
      "imports": {
        "@hotwired/turbo-rails": "/assets/turbo.min-eef6d0d72563b8765529b3f72bffff1fb8dcdd7f6a0eb025a2478c06e030d1cf.js",
        "application": "/assets/application-4b9d90546cdef657573ebf282d13f6bdc31c6cdca6cbee6b1db41e48a65d5d60.js"
      }
    }</script>
    <link rel="modulepreload" href="/assets/turbo.min-eef6d0d72563b8765529b3f72bffff1fb8dcdd7f6a0eb025a2478c06e030d1cf.js">
    <script src="/assets/es-module-shims.min-d89e73202ec09dede55fb74115af9c5f9f2bb965433de1c2446e1faa6dac2470.js" async="async" data-turbo-track="reload"></script>
    <script type="module">import "application"</script>
</head>
<body>
   @php
  $setting = \App\Http\Controllers\HomeController::getSetting();
  @endphp

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href=""><strong class="text-primary">[</strong> <strong>SMM</strong> Watch <strong class="text-primary">]</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link btn btn-light btn-sm mr-2" href="/panels"><i class="fa fa-cube mr-1"></i> SMM Panels</a>
        </li>
        <li class="nav-item">
        <a class="nav-link btn btn-light btn-sm mr-2" href="/platform"><i class="fa fa-globe mr-1"></i> Platforms</a>
        </li>

        <li class="nav-item">
        <a class="nav-link btn btn-light btn-sm" href="/search"><i class="fa fa-search mr-1"></i> Search</a>
        </li>
        </ul>
        @if (Route::has('register'))
        <a href="/register" class="btn  mr-2 btn-sm  btn-primary">
        Register
        </a>
        <a href="/login" class="btn btn-light mr-2 btn-sm text-muted">
        Login
        </a>
        @endif
       
        </div>
        </div>
    </nav>
    <main role="main" class="h-100">


            <section class="bg-light" style="background-image:url(assets/carbon_fibre.png)">
            <div class="container py-3">
            <p class="mb-0">
            <i class="fa fa-arrow-right text-info mr-2"></i>
            Login or <a href="/auth/register">create an account</a> with SMM Watch
            </p>
            </div>
            </section>
            <style>
            body {
              background: url(assets/mountain.jpg) no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
            </style>
            <div class="container my-4">
            <div class="row">
            <div class="col-md-4">
            <div class="card my-3">
            <div class="card-body">
            <h5 class="text-dark text-uppercase mb-4">Login</h5>
            <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
                 @csrf


                <div class="mb-3">
                    <label class="form-label required" for="user_email">Email</label>
                    <input autofocus="autofocus" autocomplete="error" class="form-control form-control bg-light text-white" type="email" value name="email" id="email" />
                </div>

              
                                   
               
                <div class="mb-3">
                    <label class="form-label required" for="user_password">Password</label>
                    <input autocomplete="current-password" class="form-control form-control bg-light text-white" type="password" name="password" id="password" />
                </div>

                
                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-text text-white"> {{__('email_or_password_error')}} </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" style="background-color: gray;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                
                <div class="form-check mb-3">
                    <input name="user[remember_me]" type="hidden" value="0" autocomplete="off" />
                    <input class="form-check-input" type="checkbox" value="1" name="user[remember_me]" id="user_remember_me" />
                    <label class="form-check-label" for="user_remember_me">Remember me</label>
                </div>
                <br>
                <input type="submit" name="commit" value="Log in" class="btn btn-secondary" data-disable-with="Log in" />
            </form>
            <br>
            <a href="/auth/register">Sign up</a><br/>
            <a href="/auth/password/new">Forgot your password?</a><br/>
            <a href="/auth/confirmation/new">Didn&#39;t receive confirmation instructions?</a><br/>
            <a href="/auth/unlock/new">Didn&#39;t receive unlock instructions?</a><br/>
            </div>
            </div>
            </div>
            <div class="col-md-8">
            <div class="card my-3">
            <div class="card-body text-center">
            Welcome to <strong class="text-white">[ SMMWatch ]</strong> &nbsp; The #1 free SMM Panel list
            </div>
            </div>
            <p class="lead text-muted text-center mb-4">
            . ~ &nbsp;<i class="fa fa-star"></i>&nbsp; ~ .
            </p>
            <div class="row">
            <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
            <i class="fas fa-user text-primary fa-2x mb-3"></i>
            <h6 class="mb-2 text-truncate text-white">Your SMM Panel</h6>
            <p class="mb-0">Add your Panels to our SMM list & monitor <strong>for free</strong></p>
            </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
            <i class="fas fa-trophy text-warning fa-2x mb-3"></i>
            <h6 class="mb-2 text-truncate text-white">Promote your Panel</h6>
            <p class="mb-0">Increase your visibility on our site with smart promotion</p>
            </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
            <i class="fas fa-money-bills text-success fa-2x mb-3"></i>
            <h6 class="mb-2 text-truncate text-white">Grow your Profit</h6>
            <p class="mb-0">More visibility = more profit. Start earning more!</p>
            </div>
            </div>
            </div>
            </div>
            <p class="lead text-muted text-center">
            <span class="text-white">
            <strong class="text-primary mr-2">NEW:</strong>
            Panel Management now only works with account!
            </span>
            </p>
            <p class="text-center">
            Anyone can create an account with SMM Watch.<br>
            However it only makes sense if you want to add, manage & promote your SMM Panel
            </p>
            </div>
            </div>
            </div>
    </main>
    <footer id="footer" class="bg-black pt-4 pb-4 mt-5">
        <div class="container">
        <div class="row">
        <div class="col-md-3 pt-2 mb-3">
        <strong><span class="text-primary">[</span> Ultimate SMM Panel List <span class="text-primary">]</span></strong>
        <p class="mb-2 mt-2">The biggest open list of SMM Panels & Social Media Marketing Services</p>
        <p class="mb-2 mt-2">
        &copy; 2019 - 2023 &nbsp;/&nbsp;
        <a href="https://smmwatch.com">SMMWatch.com</a>
        </p>
        <p class="mb-0 mt-2" style="font-size:10px">
        Free SMM Panel List sponsored by<br>
        <a href="https://www.comparesmm.com" class="text-white"><i class="fas fa-search-dollar text-white mr-1"></i> <strong>CompareSMM.com</strong></a>
        </p>
        </div>
        <div class="col-md-3 mb-3">
        <small class="text-uppercase">Find <a href="/platform" class="text-dark">SMM Services</a> for</small>
        <div class="mb-2"></div>
        <a href="/platform/twitch" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-twitch fa-fw mr-1" style="color:#6441a5"></i>
        <strong class="text-uppercase">Twitch</strong>
        </small></a>
        <a href="/platform/tik-tok" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fas fa-music fa-fw mr-1" style="color:#69C9D0"></i>
        <strong class="text-uppercase">TikTok</strong>
        </small></a>
        <a href="/platform/reddit" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-reddit-alien fa-fw mr-1" style="color:#ff4500"></i>
        <strong class="text-uppercase">Reddit</strong>
        </small></a>
        <a href="/platform/soundcloud" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-soundcloud fa-fw mr-1" style="color:#ff8800"></i>
        <strong class="text-uppercase">Soundcloud</strong>
        </small></a>
        <a href="/platform/discord" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-discord fa-fw mr-1" style="color:#5865F2"></i>
        <strong class="text-uppercase">Discord</strong>
        </small></a>
        <a href="/platform/instagram" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-instagram fa-fw mr-1" style="color:#405de6"></i>
        <strong class="text-uppercase">Instagram</strong>
        </small></a>
        <a href="/platform/facebook" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-facebook fa-fw mr-1" style="color:#3b5998"></i>
        <strong class="text-uppercase">Facebook</strong>
        </small></a>
        <a href="/platform/pinterest" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-pinterest fa-fw mr-1" style="color:#bd081c"></i>
        <strong class="text-uppercase">Pinterest</strong>
        </small></a>
        <a href="/platform/telegram" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-telegram fa-fw mr-1" style="color:#0088cc"></i>
        <strong class="text-uppercase">Telegram</strong>
        </small></a>
        <a href="/platform/twitter" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-twitter fa-fw mr-1" style="color:#1da1f2"></i>
        <strong class="text-uppercase">Twitter</strong>
        </small></a>
        <a href="/platform/imdb" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-imdb fa-fw mr-1" style="color:#f5de50"></i>
        <strong class="text-uppercase">IMDb</strong>
        </small></a>
        <a href="/platform/youtube" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-youtube fa-fw mr-1" style="color:#ff0000"></i>
        <strong class="text-uppercase">Youtube</strong>
        </small></a>
        <a href="/platform/spotify" class="text-dark mr-2" style="white-space: nowrap;"><small>
        <i class="fab fa-spotify fa-fw mr-1" style="color:#1db954"></i>
        <strong class="text-uppercase">Spotify</strong>
        </small></a>
        </div>
        <div class="col-md-3 mb-3">
        <div class="card shadow mb-4 panel-card">
        <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/smm-for-you.jpg) no-repeat center center; background-size: cover; -webkit-background-size: cover; height:150px;" href="/panels/smm-for-you">
        <span>
        <img src="https://smmwatch.com/icons/smm-for-you.png" alt="Smm For You Icon" class="m-3">
        </span>
        </a> <div class="card-body text-center">
        <h6 class="card-title mb-2 mt-1 text-truncate">
        <a class="text-white" href="/panels/smm-for-you">Smm For You</a>
        </h6>
        </div>
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <a href="/panels/new" class="btn btn-outline-primary btn-block text-left mb-2">
        <span class="text-success">»</span>
        <strong>ADD YOUR PANEL</strong>
        </a>
        <div class="mb-2">
        » <a href="/panels">Panels</a>
        » <a href="/platform">Platforms</a>
        » <a href="/search">Search</a>
        </div>
        <div class="btn-group d-flex mb-1">
        <a href="/learn/faq" class="btn w-100 btn-sm btn-outline-secondary text-dark"><i class="fas fa-question text-primary mr-1"></i> FAQ</a>
        <a href="/learn/panels/monitoring" class="btn w-100 btn-sm btn-outline-secondary text-dark mr-1"><i class="fas fa-eye text-secondary mr-1"></i> Monitoring</a>
        </div>
        <div class="btn-group d-flex">
        <a href="/learn/panels/promotion" class="btn w-100 btn-sm btn-outline-secondary text-dark"><i class="fas fa-bullhorn text-warning mr-1"></i> Advertise</a>
        <a href="/contact" class="btn w-100 btn-sm btn-outline-secondary text-dark mr-1"><i class="fas fa-at text-primary mr-1"></i> Contact</a>
        </div>
        </div>
        </div>
        </div>
    </footer>
    <noscript>
          <img src="https://shy.cia.li/ingress/1f07284f-8098-4b50-b2a4-852be648f3d5/pixel.gif">
        </noscript>
    <script defer src="https://shy.cia.li/ingress/1f07284f-8098-4b50-b2a4-852be648f3d5/script.js"></script>
</body>
</html>


 