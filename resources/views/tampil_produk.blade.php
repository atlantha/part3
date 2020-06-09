<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Part III | @yield('title')</title>
</head>
<body>

{{-- HEADER  --}}
 <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container-fluid">
        <a class="navbar-brand" href="#">Part III</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item @yield('home')">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item @yield('produk')">
            <a class="nav-link" href="#">Produk</a>
            </li>
          </ul>
        </div>
     </div> 
    </nav>
 </header>
{{-- END HEADER --}}

{{-- CONTENT --}}
 <section id="content">
     @yield('content')
 </section>
 {{-- END CONTENT --}}

 {{-- FOOTER --}}
 <footer id="footer" class="bg-dark py-4 text-center mt-4 text-white">
    <div class="container">
        Sistem Pendataan Part III | copyright {{ date ("Y") }}
    </div>
 </footer>
 {{-- END FOOTER --}}

    
</body>
</html>