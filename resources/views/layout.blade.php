<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8 bg-success text-center py-2">
                <h2>Eloquent CRUD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8 bg-warning mb-3">
                <h4>@yield('title')</h4>
            </div>
        </div>
        
        <div class="row">
        <div class="col-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{session ('status')}}
            </div>
        @endif
        </div>
        </div>
        
        <div class="row">
            <div class="col-7">
                @yield('content') <!-- This will yield content from child views -->
            </div>
        </div>
    </div>

  </body>
</html>

