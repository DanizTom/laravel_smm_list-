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
                        <a href="/dashboard" class="btn btn-light w-100 p-3">
                        <i class="fa fa-dashboard fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-dashboard mb-2 d-md-none"></i>
                        <p class="mb-0">Dash<span class="d-none d-sm-inline-block">board</span></p>
                        </a>
                        <a href="/userpanels" class="btn btn-primary w-100 p-3">
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
                        <p class="text-uppercase text-dark mb-2">Your SMM Panels</p>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="card mb-3">
                        <div class="card-body lead">
                        <em>You have no SMM Panels associated with your account</em>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="alert border-info mb-2" style="border:2px solid #BADA55">
                        <i class="fas fa-info-circle text-muted mr-2"></i>
                        If you are missing your panel please (re-)claim & confirm ownership of your panel below!
                        </div>
                        </div>
                        <section class="bg-light p-4 mb-4">
                        <div class="container my-2">
                        <div class="row">
                        <div class="col-md-8 mb-3">
                        <h5 class="mb-3"><i class="fa fa-plus mr-2"></i> <span class="text-dark">add new <strong>SMM Panel</strong></span></h5>
                        <p class="lead">
                        Add your SMM Panel to SMMWatch.com <strong class="text-white">for free</strong>.<br>
                        Your Panel only needs a standard API and you can get started anytime.
                        </p>
                        <a href="/auth/smm-panels/new" class="btn btn-outline-primary btn-lg"><i class="fa fa-plus mr-1"></i> add new <strong>SMM Panel</strong></a>
                        </div>
                        <div class="col-md-4">
                        <ul class="pl-0 lead text-dark" style="list-style:none;">
                        <li><i class="fa fa-check text-success mr-2"></i> <strong>Grow</strong> your SMM Panel</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Advertise to a huge user base</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Get found by future customers</li>
                        <li class="text-white"><i class="fa fa-check text-success mr-2"></i> Start earning more today!</li>
                        </ul>
                        <a href="/learn/panels/listing" class="btn btn-secondary">Learn more</a>
                        </div>
                        </div>
                        </div>
                        </section>
                        <div class="container">
                        <div class="row" id="import">
                        <div class="col-md-12 mb-5">
                        <h5><span class="text-primary">Claim:</span> Existing Panel</h5>
                        <hr class="border-primary mb-4">
                        <p>
                        If you lost access to your account or panel listing you can claim the listing back to your account
                        using the following tool.
                        </p>
                        <a href="/auth/smm-panels/claim" class="btn btn-secondary"><i class="fa fa-eye mr-2"></i> Claim existing SMM Panel</a>
                        </div>
                        </div>
                </div>
    </main>

@endsection
