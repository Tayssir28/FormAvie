<?php
if (session()->has('user_id')) {
    header('Location: /signIn');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formavie</title>
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="log">
                                <a href="{{url('index')}}"><img src="image/logo.png" alt="#"></a>
                            </div>
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li><a href="{{url('index')}}">Accueil</a></li>
                                        <li><a href="{{url('formation')}}">Formation</a></li>
                                        <li><a href="{{url('avis')}}">Avis</a></li>
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a onclick="supp()" class="btn" style="background-color:blue;margin-top:0px; color:white;">Déconnexion</a>
                                <a href="{{ url('profil') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top:5px; position: absolute;margin-left: 15px;cursor: pointer;" onclick="location.href='{{url('profil')}}'">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlXRFQxmNNbE0OM4TwFicFVUjSNjQ6uieRk5gW8XBzdf5Y3OXTPxw11T6R" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGfriC2RmYRABzA0M4cHjCJK/tf0i/5Nmg46KLMZpql5zq52FAEowcP6JM" crossorigin="anonymous"></script>
    <script>
         @if(!session()->has('user_id'))
            // Remove user_id and user_table from sessionStorage if not present in session
            sessionStorage.removeItem('user_id');
            sessionStorage.removeItem('user_table');
        @endif
        @if(session()->has('user_id'))
            // Set the new user_id and user_table from session
            sessionStorage.setItem('user_id', '{{ session('user_id') }}');
            sessionStorage.setItem('user_table', '{{ session('user_table') }}');
	    @endif
    </script>
    <script>
        function supp(){
            sessionStorage.removeItem('user_id');
            sessionStorage.removeItem('user_table');
            window.location.href = 'signIn';
        }
    </script>
</body>
</html>
