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
                        <a href="/userpanels" class="btn btn-light w-100 p-3">
                        <i class="fa fa-cube fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-cube mb-2 d-md-none"></i>
                        <p class="mb-0"><span class="d-none d-md-inline-block">SMM</span> Panels</p>
                        </a>
                        <a href="/userfinance" class="btn btn-primary w-100 p-3">
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
                <div class="container my-4"><div class="row">
                    <div class="col-md-3">
                    <div class="card text-left mb-3">
                    <div class="card-body">
                    <i class="fa fa-money text-muted float-right fa-2x ml-4"></i>
                    <p class="mb-2">Account Balance</p>
                    <h5 class="mb-3 text-white">$ {{$balance}}</h5>
                    <a href="/deposit" class="btn btn-block btn-outline-primary text-left text-white">
                    <i class="fas fa-money-bill mr-2"></i> Top Up Balance
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-9">
                    <div class="list-group mb-4">
                    <div class="list-group-item">
                    <em>No balance history ...</em>
                    </div>
                    </div>
                    <nav class="pagy-bootstrap-nav"><ul class="pagination"><li class="page-item prev disabled"><a href="#" class="page-link">‹&nbsp;Prev</a></li><li class="page-item active"><a href="/auth/finances?page=1" class="page-link">1</a></li><li class="page-item next disabled"><a href="#" class="page-link">Next&nbsp;›</a></li></ul></nav>
                    </div>
                    </div>
                </div>
    </main>

@endsection
