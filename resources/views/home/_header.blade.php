@php
  $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="/"><strong class="text-primary">[</strong> <strong>SMM</strong> Watch <strong class="text-primary">]</strong></a>
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
        

        @if (Auth::user()) 
        
        <div class="dropdown">
        <button class="btn btn-light dropdown-toggle pl-2 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user text-white"></i> <span class="d-inline-block ml-2 d-md-none">User Dashboard</span>
        </button>


        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/dashboard"><i class="fa fa-arrow-right mr-2 fa-fw"></i> Dashboard</a>
        <a class="dropdown-item" href="userpanels"><i class="fa fa-arrow-right mr-2 fa-fw"></i> SMM Panels</a>
        <a class="dropdown-item" href="/userfinance"><i class="fa fa-arrow-right mr-2 fa-fw"></i> Finances</a>
        <a class="dropdown-item" href="/useraccount"><i class="fa fa-cogs mr-2 fa-fw"></i> Settings</a>

        <form class="button_to" method="get" action="{{ route('admin_logout') }}"><input type="hidden" name="_method" value="delete" autocomplete="off" /><input class="btn btn-outline-danger w-100 mt-3" type="submit" value="Logout" /><input type="hidden" name="authenticity_token" value="I3Bq9YoyqgSK+NISaaBI+OTQqY4c2mg0Eee7rSlOa2Zz7K1OBU5zd/mrETbxWr2H+8eNnydAeKwBEmln19Iv5g==" autocomplete="off" /></form>
        </div>

        @else
        <a href="/register" class="btn  mr-2 btn-sm  btn-primary">
        Register
        </a>
        <a href="/login" class="btn btn-light mr-2 btn-sm text-muted">
        Login
        </a>
        @endif
        </div>
        </div>
        </div>
    </nav>
