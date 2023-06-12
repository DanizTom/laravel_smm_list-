@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100">
            <div class="container mt-3">
            <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
            <br class="mb-0">
            <p>
            <i class="fas fa-list-check mr-1"></i>
            Showing <strong class="text-dark">0 - 18</strong> of 183
            SMM Panels in our <strong class="text-dark">SMM Panel Database</strong>
            </p>
            <div class="row">
              @foreach($newpanels as $newpanel)
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow mb-4 panel-card">
                        <a class="card-img-top" style="background-image:url(/storage/{{$newpanel->image}})" href="/panels/{{$newpanel->title}}">
                        <span>
                        <img src="/storage/{{$newpanel->image}}" alt="Crescitaly Icon" class="m-3">
                        </span>
                        </a> <div class="card-body">
                        <h5 class="card-title mb-2">
                        <a class="text-white" href="/panels/{{$newpanel->title}}">{{$newpanel->title}}</a>
                        </h5>
                        <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">{{$newpanel->commendnum}}</strong>
                        <span class="text-muted ml-2 mr-2">|</span>
                        {{$newpanel->servicenum}} Services
                        </div>
                        </div>
                    </div>
                @endforeach
            

            <div class="col-12 bg-light pt-2 mb-3">
            <small class="text-uppercase"><a href="/promote"><i class="fa fa-star"></i> Featured</a> SMM Panels</small>
               <div class="row mt-1">
            
                    @foreach($activepanels as $activepanel)
                        <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
                        
                        <div class="card shadow mb-4 panel-card">
                        <a class="card-img-top" style="background:url(/storage/{{$activepanel->image}} ) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/{{$activepanel->title}}">
                        <span>
                        <img src="/storage/{{$activepanel->image}} " alt="SMMFlare - #1 SMM Panel Icon" class="m-3">
                        </span>
                        </a> <div class="card-body text-center">
                        <h6 class="card-title mb-2 mt-1 text-truncate">
                        <a class="text-white" href="/panels/{{$activepanel->title}}">{{$activepanel->title}}</a>
                        </h6>
                        <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">{{$activepanel->commendnum}}</strong>
                        <span class="text-muted ml-2 mr-2">|</span>
                        {{$activepanel->servicenum}} Services
                        </div>
                        </div>
                        </div>
                    @endforeach
              </div>
            
            
            </div>
            
            @foreach($panels as $panel)
            <div class="col-lg-4 col-md-6">
            <div class="card shadow mb-4 panel-card">
            <a class="card-img-top" style="background-image:url(/storage/{{$panel->image}})" href="/panels/{{$panel->title}}">
            <span>
            <img src="/storage/{{$panel->image}} " alt="{{$panel->title}}" class="m-3">
            </span>
            </a> <div class="card-body">
            <h5 class="card-title mb-2">
            <a class="text-white" href="/panels/{{$panel->title}}">{{$panel->title}}</a>
            </h5>
            <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">{{$panel->commendnum}}</strong>
            <span class="text-muted ml-2 mr-2">|</span>
            {{$panel->servicenum}} Services
            </div>
            </div>
            </div>
            
            @endforeach
            </div>
            <nav class="pagy-bootstrap-nav">
            {{ $panels->onEachSide(1)->links('home.pagination') }}
            </nav>
            </div>
        </main>

@endsection
