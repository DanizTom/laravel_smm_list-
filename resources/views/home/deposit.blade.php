@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

        <main role="main" class="h-100">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <section class="bg-light">
        <div class="container">
        <div class="btn-group d-flex" role="group" aria-label="Basic example">
        <a href="/auth/dashboard" class="btn btn-light w-100 p-3">
        <i class="fa fa-dashboard fa-2x mb-2 d-none d-md-block"></i>
        <i class="fa fa-dashboard mb-2 d-md-none"></i>
        <p class="mb-0">Dash<span class="d-none d-sm-inline-block">board</span></p>
        </a>
        <a href="/auth/smm-panels" class="btn btn-light w-100 p-3">
        <i class="fa fa-cube fa-2x mb-2 d-none d-md-block"></i>
        <i class="fa fa-cube mb-2 d-md-none"></i>
        <p class="mb-0"><span class="d-none d-md-inline-block">SMM</span> Panels</p>
        </a>
        <a href="/auth/finances" class="btn btn-primary w-100 p-3">
        <i class="fa fa-credit-card fa-2x mb-2 d-none d-md-block"></i>
        <i class="fa fa-credit-card mb-2 d-md-none"></i>
        <p class="mb-0">Finances</p>
        </a>
        <a href="/auth/account" class="btn btn-light w-100 p-3">
        <i class="fa fa-cog fa-2x mb-2 d-none d-md-block"></i>
        <i class="fa fa-cog mb-2 d-md-none"></i>
        <p class="mb-0">Account</p>
        </a>
        </div>
        </div>
        </section>
        <style>
        body {
        background: url(/mountain.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        </style>
        <div class="container my-5" style="max-width:720px">
        <h3 class="text-center mb-3"><span class="text-primary">TopUp</span>: Account Balance</h3>
        <p class="lead text-center mb-5">
        Top up your SMMWatch account balance with Crypto currencies.
        Several popular currencies are supported and exchanged to USD
        at the current market rate.
        </p>
        <div class="card">
        <div class="card-body">
        <form action="{{ route('deposite') }}" method="post">
        @csrf
        <div class="input-group mb-4">
        <div class="input-group-prepend"><span class="input-group-text bg-light text-muted">$ USD</span></div>
        <input type="number" name="amount" class="form-control bg-light form-control-lg text-white" value="25.00" placeholder="10" min="1" max="10000" step="0.01" autofocus>
        </div>
        <div class="row" id="payment_options">
        <div class="col-sm-6 text-left">
        <div class="list-group list-group-radio mt-2" style="font-size:14px; line-height:22px">
        <small class="text-uppercase">Popular Coins</small>
        <label class="list-group-item text-left" data-min="10">
        <img src="https://nowpayments.io/images/coins/btc.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $10</small>
        <input type="radio" name="currency" value="btc" class="mr-1" checked>
        <span>Bitcoin</span>
        </label>
        <label class="list-group-item text-left" data-min="5">
        <img src="https://nowpayments.io/images/coins/eth.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $5</small>
        <input type="radio" name="currency" value="eth" class="mr-1">
        <span>Ethereum</span>
        </label>
        <label class="list-group-item text-left" data-min="10">
        <img src="https://nowpayments.io/images/coins/ltc.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $10</small>
        <input type="radio" name="currency" value="ltc" class="mr-1">
        <span>Litecoin</span>
        </label>
        <label class="list-group-item text-left" data-min="1">
        <img src="https://nowpayments.io/images/coins/bch.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $1</small>
        <input type="radio" name="currency" value="bch" class="mr-1">
        <span>Bitcoin Cash</span>
        </label>
        <label class="list-group-item text-left" data-min="1">
        <img src="https://nowpayments.io/images/coins/trx.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $1</small>
        <input type="radio" name="currency" value="trx" class="mr-1">
        <span>Tron</span>
        </label>
        <label class="list-group-item text-left" data-min="1">
        <img src="https://nowpayments.io/images/coins/dash.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $1</small>
        <input type="radio" name="currency" value="dash" class="mr-1">
        <span>Dash</span>
        </label>
        <label class="list-group-item text-left" data-min="8">
        <img src="https://nowpayments.io/images/coins/xmr.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $8</small>
        <input type="radio" name="currency" value="xmr" class="mr-1">
        <span>Monero</span>
        </label>

        </div>
        </div>
        <div class="col-sm-6 text-left">
        <small class="text-uppercase">Stable Coins</small>
        <div class="list-group list-group-radio mt-2" style="font-size:14px; line-height:22px">
        <label class="list-group-item text-left" data-min="3">
        <img src="https://nowpayments.io/images/coins/usdttrc20.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $3</small>
        <input type="radio" name="currency" value="usdttrc20" class="mr-1">
        <span>USDT &nbsp;<strong class="text-muted">TRC20</strong></span>
        </label>
        <label class="list-group-item text-left" data-min="20">
        <img src="https://nowpayments.io/images/coins/usdterc20.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $20</small>
        <input type="radio" name="currency" value="usdterc20" class="mr-1">
        <span>USDT &nbsp;<strong class="text-muted">ERC20</strong></span>
        </label>
        <label class="list-group-item text-left" data-min="20">
        <img src="https://nowpayments.io/images/coins/dai.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $20</small>
        <input type="radio" name="currency" value="dai" class="mr-1">
        <span>Dai</span>
        </label>
        </div>
        <br>
        <small class="text-uppercase">Other Coins</small>
        <div class="list-group list-group-radio mt-2" style="font-size:14px; line-height:22px">
        <label class="list-group-item text-left" data-min="20">
        <img src="https://nowpayments.io/images/coins/sand.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $20</small>
        <input type="radio" name="currency" value="sand" class="mr-1">
        <span>Sand</span>
        </label>
        <label class="list-group-item text-left" data-min="20">
        <img src="https://nowpayments.io/images/coins/matic.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $20</small>
        <input type="radio" name="currency" value="matic" class="mr-1">
        <span>Matic</span>
        </label>
        <label class="list-group-item text-left" data-min="15">
        <img src="https://nowpayments.io/images/coins/klv.svg" style="height:22px;margin-right:12px;">
        <small class="float-right" style="margin-top:3px">Min $15</small>
        <input type="radio" name="currency" value="klv" class="mr-1">
        <span>Klever</span>
        </label>
        </div>
        </div>

        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg btn-block mt-3 text-white">
        <i class="fas fa-shopping-cart mr-2"></i>
        Topup Balance
        </button>
        </form>
        </div>
        <script>
            $("input[name='amount']").on('keyup change', function(){
                var amount = parseFloat($(this).val());
                $("#payment_options label[data-min]").each(function(){
                if(parseFloat($(this).attr('data-min')) > amount){
                    $(this).addClass('disabled')
                    if($("input",this).is(":checked")){
                    $("input", this).prop('checked', false);
                    }
                } else {
                    $(this).removeClass('disabled')
                }
                })
            })
            </script>
        </div>
        <br>
        </div>
        </main>

 


@endsection
