@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

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
            <form class="new_user" id="new_user" action="smm.html" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="TAN9yoI1kiS0NkUoSUw2NWu85tiGyJiBKTM/hn+xmjOyI0BGFPhcejyze8klCFOtrrSCkrgLkw0DqqHPOHOr1g==" autocomplete="off" />
            <div class="mb-3"><label class="form-label required" for="user_email">Email</label><input autofocus="autofocus" autocomplete="email" class="form-control form-control bg-light text-white" type="email" value name="user[email]" id="user_email" /></div>
            <div class="mb-3"><label class="form-label required" for="user_password">Password</label><input autocomplete="current-password" class="form-control form-control bg-light text-white" type="password" name="user[password]" id="user_password" /></div>
            <div class="form-check mb-3"><input name="user[remember_me]" type="hidden" value="0" autocomplete="off" /><input class="form-check-input" type="checkbox" value="1" name="user[remember_me]" id="user_remember_me" /><label class="form-check-label" for="user_remember_me">Remember me</label></div>
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

@endsection
