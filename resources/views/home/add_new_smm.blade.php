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
<h4><i class="fa fa-plus mr-2"></i> Add new <strong>SMM Panel</strong></h4>
<p class="lead mb-4">
Add your SMM Panel to SMMWatch.com <strong class="text-white">for free</strong>.
Promote & Grow your SMM Panel with us!
</p>
<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-body">
<style>
            .invalid-feedback {color:#ffbaba}
          </style>
<form class="new_panel" id="new_panel" action="/smm-panels/new" accept-charset="UTF-8" method="post">
    
@csrf
<div class="mb-3">
    <label class="form-label required" for="panel_title">SMM Panel Title (Max 22 characters)</label>
    <input placeholder="Awesome Panel" class="form-control" type="text" name="panel_title" id="panel_title" /></div>
<div class="mb-3">
    <label class="form-label required" for="panel_url">SMM Panel URL</label>
    <input placeholder="https://example.com" class="form-control" type="text" name="panel_url" id="panel_url" /></div>
<div class="row mt-4">
<div class="col-md-12">
<h5>API Access</h5>
<p class="mb-4 mt-2">
We require API access to index your services in order to get listed.
Create a user and use that API key to proceed.
<a href="/learn/api-standard">Learn more about the API Standard</a>
</p>
</div>
<div class="col-md-6">
<div class="mb-3">
    <label class="form-label required" for="panel_api_url">API URL</label>
    <input placeholder="https://panel.com/api/v2" class="form-control" type="text" name="panel_api_url" id="panel_api_url" /></div>
</div>
<div class="col-md-6">
<div class="mb-3">
    <label class="form-label required" for="panel_api_key">API KEY</label>
    <input placeholder="123456789123456789" class="form-control" type="text" name="panel_api_key" id="panel_api_key" /></div>
</div>
</div>
<div class="actions">
<input type="submit" name="commit" value="Create Panel" class="btn btn-outline-success btn-lg float-right text-white mt-3" data-disable-with="Create Panel" />
</div>
</form>
</div>
</div>
</div>
<div class="col-md-4">
<section class="bg-light shadow">
<div class="pl-4 pr-4 pt-3">
<div class="row mt-2 mb-0">
<div class="col-md-12 mb-3">
<h5><i class="fa fa-eye mr-1 text-success"></i> Get Seen</h5>
<p>Get seen by thousands of visitors everyday looking for cheap & quality SMM services!</p>
</div>
<div class="col-md-12 mb-3">
<h5><i class="fa fa-edit mr-1 text-primary"></i> Panel Details</h5>
<p>Configure & Change details and information and more of your SMM Panel</p>
</div>
<div class="col-md-12 mb-3">
<h5><i class="fa fa-rocket mr-1 text-info"></i> Panel Promotion</h5>
<p>Promote your Panel with Bumps, Featured & more. Get more visibility for your services!</p>
</div>
<div class="col-md-12">
<h5><i class="fa fa-trophy mr-1 text-warning"></i> Get Featured</h5>
<p>Get featured on the website and get seen by even more people.</p>
</div>
</div>
</div>
</section>
</div>
</div>
<br>
<h5 class="mb-3 mt-4"><i class="fa fa-book mr-2"></i> Listing Rules</h5>
<ol class="pl-3 mb-5">
<li>Only <strong>one listing per panel</strong>. Multiple listings can result in a permanent ban without prior notice.</li>
<li><strong>Stay civil</strong>. Don't include swearing, bad wording or anything else in your titles, description or texts.</li>
<li>Don't include unnecessary extra words like Panel SMM or anything. This only hurts your findability.</li>
<li>Your panels API should return english services, if not make sure your panel removes english as a language.</li>
<li>Domain for the SMM Panel & the API URL must be the same</li>
<li>Don't vote yourself. If we see obvious fake votes we may ban your panel permanently.</li>
<li>This is our platform, if you participate in anything fishy or scam your users we may ban you anytime.</li>
</ol>
</div>
</main>

@endsection
