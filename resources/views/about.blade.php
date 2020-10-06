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
                <a class="nav-link" href="/state-district">State-district</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/about">About</a>
              </li>
            </ul>
          </div>
    </div>
</nav>

<div class="container mt-3">
  <article>
    <p>This is a one day build project to provide information* about COVID-19 outbreak in myanmar.</p>
    
    <p>The data/api used is provided by <a target="_blank" href="https://github.com/thantthet/covid19-api">this github account user</a>.</p>
    
    <p>This website is entirely created for practice/learning purposes for the creator and should not be regarded as a reliable source of information regarding COVID-19.</p>
    
    <p>This source code can be found <a target="_blank" href="https://github.com/KyalSinLinLett/mmcovid.git">here</a>.</p>

    <p><b>*PLEASE NOTE THAT THE DATA PROVIDED MAY BE FALSE SINCE IT IS PROVIDED BY A THIRD PARTY. FOR RELIABLE DATA, YOU SHOULD VISIT THE <a target="_blank" href="https://www.mohs.gov.mm/Main/content/publication/2019-ncov">MOHS's WEBSITE.</a></b></p>
  </article>
</div>


@endsection