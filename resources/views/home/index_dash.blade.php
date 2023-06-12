@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100">
            <section class="bg-light">
                <div class="container">
                <div class="btn-group d-flex" role="group" aria-label="Basic example">
                <a href="/dashboard" class="btn btn-primary w-100 p-3">
                <i class="fa fa-dashboard fa-2x mb-2 d-none d-md-block"></i>
                <i class="fa fa-dashboard mb-2 d-md-none"></i>
                <p class="mb-0">Dash<span class="d-none d-sm-inline-block">board</span></p>
                </a>
                <a href="/userpanels" class="btn btn-light w-100 p-3">
                <i class="fa fa-cube fa-2x mb-2 d-none d-md-block"></i>
                <i class="fa fa-cube mb-2 d-md-none"></i>
                <p class="mb-0"><span class="d-none d-md-inline-block">SMM</span> Panels</p>
                </a>
                <a href="/userfinance" class="btn btn-light w-100 p-3">
                <i class="fa fa-credit-card fa-2x mb-2 d-none d-md-block"></i>
                <i class="fa fa-credit-card mb-2 d-md-none"></i>
                <p class="mb-0">Finances</p>
                </a>
                <a href="/useraccount" class="btn btn-light w-100 p-3">
                <i class="fa fa-cog fa-2x mb-2 d-none d-md-block"></i>
                <i class="fa fa-cog mb-2 d-md-none"></i>
                <p class="mb-0">Account</p>
                </a>
                </div>
                </div>
            </section>
            <div class="container my-4">
            <div class="row">
            <div class="col-md-8">
            <div class="card mb-4">
            <div class="card-body">
            <i class="fa fa-star text-warning float-left fa-3x mr-4"></i>
            <h6 class="mb-1 mt-1 text-white">Welcome to <strong>SMM Watch</strong></h6>
            <p class="mb-0">Use your account to create, manage & promote your SMM Panel(s)</p>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card text-left mb-4">
            <div class="card-body">
            <i class="fa fa-calendar text-muted float-right fa-3x ml-4"></i>
            <p class="mb-2">Account Created</p>
            <h6 class="mb-0 text-white">about 4 hours ago</h6>
            </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-3">
            <h6><i class="fa fa-user text-white mr-2"></i> User Account</h6>
            <ul class="pl-3">
            <li><a href="/auth/account">Account Settings</a></li>
            <li><a href="/auth/finances">User Finances</a></li>
            <li><a href="/auth/finances/topup">TopUp Balance</a></li>
            </ul>
            </div>
            <div class="col-md-3">
            <h6><i class="fa fa-bullhorn text-white mr-2"></i> Panel Management</h6>
            <ul class="pl-3">
            <li><a href="/auth/smm-panels">Your SMM Panels</a></li>
            <li><a href="/auth/smm-panels/new">Add new SMM Panel</a></li>
            <li><a href="/auth/smm-panels#import">Import or Claim SMM Panel</a></li>
            </ul>
            </div>
            <div class="col-md-3">
            <h6><i class="fa fa-book text-white mr-2"></i> Learn more</h6>
            <ul class="pl-3">
            <li><a href="/learn/panels/listing">Add your SMM Panels</a></li>
            <li><a href="/learn/panels/promotion">Promote your SMM Panels</a></li>
            <li><a href="/learn/panels/options">Configure your SMM Panels</a></li>
            </ul>
            </div>
            <div class="col-md-3">
            <h6>&nbsp;</h6>
            <ul class="pl-3 mt-2">
            <li><a href="/learn/panels/promotion/featured">Get your Panel featured</a></li>
            <li><a href="/learn/panels/promotion/bumps">Auto Bump your Panel</a></li>
            <li><a href="/learn/api-standard">API Standard (requirements)</a></li>
            </ul>
            </div>
            </div>
            </div>
    </main>

@endsection
