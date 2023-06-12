@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100">
        
            <div class="container mt-3 mb-4">
            <div class="row">
            <div class="col-md-3">
            <div class="card mb-4 shadow">
            <div class="card-body">
            <h6><i class="fa fa-search mr-1 text-primary"></i> Search SMM Services</h6>
            <p class="mb-0">Search through our database of SMM services compiled from all SMM Panels we know!</p>
            </div>
            </div>
            <script src="https://love.comparesmm.com/load.js" kind="rectangle"></script>
            <br class="mb-2">
            @foreach($activepanels as $activepanel)
              <div class="card shadow mb-4 panel-card">
                <a class="card-img-top" style="background:url(/storage/{{$activepanel->image}} )" href="/panels/{{$activepanel->title}}">
                <span>
                <img src="/storage/{{$activepanel->image}}" alt="FortuneSMM Icon" class="m-3">
                </span>
                </a> 
                <div class="card-body">
                <h6 class="card-title mb-2 mt-1 text-truncate">
                <a class="text-white" href="/panels/{{$activepanel->title}}">{{$activepanel->title}}</a>
                </h6>
                <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">{{$activepanel->commendnum}}</strong>
                <span class="text-muted ml-2 mr-2">|</span>
                {{$activepanel->servicenum}} Services
                </div>
              </div>
            @endforeach
            </div>
              <script>
                  $(".panel_switch").on('change', function(){
                    var panels = [];
                    var all = true;
                    $(".panel_switch").each(function(){
                      if($(this).is(":checked")){
                        panels.push($(this).val())
                      } else {
                        all = false;
                      }
                    })
                    if(all){ $("#show_all").prop('checked', true); } else {
                      $("#show_all").prop('checked', false);
                    }
                    $("input[name='panel']").val(panels.join(':'));
                  })
                  $("#show_all").on('change', function(){
                    if($(this).is(":checked")){
                      $(".panel_switch").prop('checked', true);
                    } else {
                      $(".panel_switch").prop('checked', false);
                    }
                  })
                </script>
            <div class="col-md-9">
            <form action="/search" method="get" class="mb-3">
            <div class="row">
            <div class="col-md-7">
            <div class="input-group">
            <input type="hidden" name="panel" value>
            <input type="text" value='{{$query}}' name="q" class="form-control form-control-lg bg-light text-white border-primary" placeholder="Search SMM Panel services" aria-label="Search services" value autofocus>
            </div>
            </div>
            <div class="col-md-5">
            <div class="input-group">
            <select class="form-control form-control-lg bg-light text-dark" name="sort">
            <option value>Popular</option>
            <option value="rate" {{ $sort == 'rate'? 'selected' : '' }}>By Rate [^]</option>
            <option value="rate_top" {{$sort == 'rate_top'? 'selected' : '' }}>By Rate [v]</option>
            <option value="min" {{ $sort == "min"? 'selected' : '' }}>Minimal amount</option>
            <option value="max" {{ $sort == 'max'? 'selected' : '' }}>Maximal amount</option>
            </select>
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search mr-1"></i> <strong>Search</strong></button>
            </div>
            </div>
            </div>
            </div>
            </form>

           <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
                          <div class="mb-1"></div>
                          <strong>245454 SMM Services</strong> found
                          for "{{$query}}"
                          <div class="mb-1">

                          <div class="card mb-2">
                            <div class="card-body p-2 pl-3 pb-3">
                            <small class="text-uppercase">
                            Found <strong>{{$num}} SMM Panels</strong> matching your search "{{$query}}"
                            </small>
                            <div class="mb-1"></div>
                            @foreach($products as $product)
                            <a href="/panels/{{$product->title}}" class="btn btn-sm btn-outline-dark mr-1 mb-1">
                            <img src="/storage/{{$product->image}}" class="float-left" style="height:16px;width:16px;margin-right:6px;">
                            {{$product->title}}
                            </a>
                           @endforeach
                            </div>
                            </div>
                          </div>

                        
                        


              @if($query=='')
                          <div class="card shdaow mb-4 mt-4">
                          <div class="card-header">
                          <i class="fa fa-search fa-3x float-right" style="font-size:80px; opacity:0.2"></i>
                          <h5 class="mt-2">
                          <i class="fa fa-search mr-1 text-primary"></i>
                          Search for <span class="text-dark">SMM Services</span> on
                          <span class="text-white">391 SMM Panels</span>
                          </h5>
                          <p class="mb-1">
                          Try one of these searches:
                          <a href="/search?q=Twitch Followers">Twitch Followers</a>, <a href="/search?q=Instagram">Instagram</a>, <a href="/search?q=Twitter">Twitter</a>, <a href="/search?q=TikTok Followers">TikTok Followers</a>, <a href="/search?q=Facebook">Facebook</a>
                          </p>
                          <p class="mb-2 text-muted">
                          <i class="fa fa-info-circle mr-1"></i>
                          And find one of <span class="text-dark">550833 SMM Services</span> in our Database!
                          </p>
                          </div>
                          <img src="assets/things.svg" class="card-img-top">
                          </div>
              @else

              @foreach($panels as $panel)
                          <div class="card border-success mb-2 shadow" id="i2168166">
                          <div class="card-body p-2">
                          <div class="mb-1">
                          <small class="float-right">
                              <a class="text-dark" href="/search?category=Website+Boost">Website Boost</a>
                          </small>
                          <span class="text-dark"><a class="text-dark" href="/panels/{{$panel->title}}">{{$panel->title}}</a></span>
                          </div>
                          <a href="/panels/{{$panel->title}}">
                          <img src="/assets/boostfollows.png?cc=1682613408" style="height:12px; float:left; margin-top:4px; margin-right:6px;">
                          BoostFollows
                          </a>
                          <span class="text-muted ml-2">
                          Min <span class="text-dark">20</span> /
                          Max <span class="text-dark">10000</span>
                          </span>
                          <span class="float-right" style="margin-top:-4px">
                          <big><strong class="text-white">$0.20</strong></big>
                          <small> / 1000</small>
                          </span>
                          </div>
                          </div>
                        @endforeach  
                        <nav class="pagy-bootstrap-nav">
                        {{ $panels->onEachSide(1)->links('home.pagination') }}
                        </nav>  
               
              @endif
            </div>
            </div>
            </div>
    </main>

@endsection
