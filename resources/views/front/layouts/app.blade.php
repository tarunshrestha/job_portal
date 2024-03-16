<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <meta name="csrf-token" content = "{{ csrf_token() }}"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- NAVBAR -->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-primary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-secondary me-2">Login</button>
        <button type="button" class="btn btn-secondary">Sign-up</button>
      </div>
    </header>

    <script>
        $.ajaxSetup({
             header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }   
        });
    </script>
    <!-- Main -->
    @yield('main')

    <!-- footer -->
    <footer>Footer</footer>

</body>
</html>