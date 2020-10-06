@extends('welcome')

@section('content')

<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container" id="navbar-content">
            
        <a id="nb-brand" href="/" class="navbar-brand">mmcovid</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Overall analytics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/state-district">State-district</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
            </ul>
          </div>
    </div>
</nav>

<div class="my-3" id="app">
    <state-district></state-district>
</div>
@endsection