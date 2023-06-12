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
        <h4 class="mb-2 text-dark">Contact</h4>
        <h2>
        <span class="text-info">[</span>
        SMM <span style="font-weight:thin!important">Watch</span>
        <span class="text-info">]</span>
        </h2>
        </div>
        </div>
        </section>
        <div class="container my-4">
        <div class="card mb-4">
        <div class="card-body text-center">
        <p class="mb-0 lead">
        SMMWatch.com is generally self service. We do not sell any services via contact, please use the website.
        If you have any issues, questions that can't be answered from reading a bit closer or any other problems
        you can contact us at <a href="https://t.me/CompareSMM">@CompareSMM</a> on Telegram
        </p>
        </div>
        </div>
        <div class="card mb-4">
        <div class="card-body text-center">
        <p class="mb-0 lead">
        <i class="fas fa-info-circle text-warning mr-2"></i>
        We <strong>never contact you first</strong>. Be aware of possible scam &amp; impersonators
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-4">
        <div class="card h-100">
        <div class="card-body">
        <h5 class="mb-3"><i class="fa fa-arrow-right text-warning mr-2"></i> <strong>For Panel Users</strong></h5>
        <ul class="lead mb-0">
        <li><a href="/panels">All SMM Panels</a></li>
        <li><a href="/search">Search SMM Services</a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col-md-6 mb-4">
        <div class="card h-100">
        <div class="card-body">
        <h5 class="mb-3"><i class="fa fa-arrow-right text-primary mr-2"></i> <strong>For Panel Owners</strong></h5>
        <ul class="lead mb-0">
        <li><a href="/learn/panels/listing">List your SMM Panel</a></li>
        <li><a href="/learn/panels/promotion">Promote your SMM Panel</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
</main>

@endsection
