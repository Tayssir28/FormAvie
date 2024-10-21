<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>FORMATION</title>
 <!-- Meta Tags -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="keywords" content="Site keywords here">
 <meta name="description" content="">
 <meta name='copyright' content=''>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 <!-- Title -->
 <title>Formation</title>
 
 <!-- Favicon -->
 <link rel="icon" href="img/favicon.png">
 
 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!-- Nice Select CSS -->
 <link rel="stylesheet" href="css/nice-select.css">
 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <!-- icofont CSS -->
 <link rel="stylesheet" href="css/icofont.css">
 <!-- Slicknav -->
 <link rel="stylesheet" href="css/slicknav.min.css">
 <!-- Owl Carousel CSS -->
 <link rel="stylesheet" href="css/owl-carousel.css">
 <!-- Datepicker CSS -->
 <link rel="stylesheet" href="css/datepicker.css">
 <!-- Animate CSS -->
 <link rel="stylesheet" href="css/animate.min.css">
 <!-- Magnific Popup CSS -->
 <link rel="stylesheet" href="css/magnific-popup.css">
 
 <!-- Medipro CSS -->
 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="css/responsive.css">
<style type="text/css">
    	body{
    margin-top:0px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.inner-wrapper {
    position: relative;
    height: calc(100vh - 3.5rem);
    transition: transform 0.3s;
}
@media (min-width: 992px) {
    .sticky-navbar .inner-wrapper {
        height: calc(100vh - 3.5rem - 48px);
    }
}

.inner-main,
.inner-sidebar {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
}
.inner-sidebar {
    left: 0;
    width: 235px;
    border-right: 1px solid #cbd5e0;
    background-color: #fff;
    z-index: 1;
}
.inner-main {
    right: 0;
    left: 235px;
}
.inner-main-footer,
.inner-main-header,
.inner-sidebar-footer,
.inner-sidebar-header {
    height: 3.5rem;
    border-bottom: 1px solid #cbd5e0;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    flex-shrink: 0;
}
.inner-main-body,
.inner-sidebar-body {
    padding: 1rem;
    overflow-y: auto;
    position: relative;
    flex: 1 1 auto;
}
.inner-main-body .sticky-top,
.inner-sidebar-body .sticky-top {
    z-index: 999;
}
.inner-main-footer,
.inner-main-header {
    background-color: #fff;
}
.inner-main-footer,
.inner-sidebar-footer {
    border-top: 1px solid #cbd5e0;
    border-bottom: 0;
    height: auto;
    min-height: 3.5rem;
}
@media (max-width: 767.98px) {
    .inner-sidebar {
        left: -235px;
    }
    .inner-main {
        left: 0;
    }
    .inner-expand .main-body {
        overflow: hidden;
    }
    .inner-expand .inner-wrapper {
        transform: translate3d(235px, 0, 0);
    }
}

.nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
    color: #3367b5;
    background-color: #c9d8f0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #467bcb;
}
.nav-link.has-icon {
    display: flex;
    align-items: center;
}
.nav-link.active {
    color: #467bcb;
}
.nav-pills .nav-link {
    border-radius: .25rem;
}
.nav-link {
    color: #4a5568;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {

    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.log{
			width: 200px;
		}
.info{
    margin-right: 0px;
    cursor: pointer;
}






@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}




img {
  max-width: 100%;
  display: block;
  object-fit: cover;
}

.card1 {
  display: flex;
  flex-direction: column;
  width: clamp(20rem, calc(20rem + 2vw), 22rem);
  overflow: hidden;
  box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
  border-radius: 1em;
  background: #ECE9E6;
background: linear-gradient(to right, #FFFFFF, #ECE9E6);

}



.card1__body {
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: .5rem;
}


.tag {
  align-self: flex-start;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
}

.tag + .tag {
  margin-left: .5em;
}

.tag-blue {
  background: #56CCF2;
background: linear-gradient(to bottom, #2F80ED, #56CCF2);
  color: #fafafa;
}

.tag-brown {
  background: #D1913C;
background: linear-gradient(to bottom, #FFD194, #D1913C);
  color: #fafafa;
}

.tag-red {
  background: #cb2d3e;
background: linear-gradient(to bottom, #ef473a, #cb2d3e);
  color: #fafafa;
}

.card1__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card1__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
  gap: .5rem;
}

.user__image {
  border-radius: 50%;
  width: 50px;
}

.user__info > small {
  color: #666;
}



.mod{
    width: 0px;
    overflow: auto;
    height:55px;
  }


.mod::-webkit-scrollbar {
  display: none;
}
.esp{
    margin-left: 20px;

}






.formu{
    margin-top: 50px;
}
.formi{
    padding: 50px;
}
    .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

.button-54 {
    font-family: 'Bebas Neue', sans-serif;
  font-size: 12px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 200px;
  cursor:default;
  margin-left: 70px;
  
}





p {
    margin: 0 0 1em;
}

.comment {
    overflow: hidden;
    padding: 0 0 1em;
    border-bottom: 1px solid #ddd;
    margin: 0 0 1em;
    zoom: 1;
}

.comment-img {
    float: left;
    margin-right: 33px;
    border-radius: 5px;
    overflow: hidden;
}

.comment-img img {
    display: block;
}

.comment-body {
    overflow: hidden;
}

.comment .text {
    padding: 10px;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    background: #fff;
}

.comment .text p:last-child {
    margin: 0;
}

.comment .attribution {
    margin: 0.5em 0 0;
    font-size: 14px;
    color: #666;
}

/* Decoration */

.comments,
.comment {
    position: relative;
}

.comments:before,
.comment:before,
.comment .text:before {
    content: "";
    position: absolute;
    top: 0;
    left: 65px;
}

.comments:before {
    width: 3px;
    top: -20px;
    bottom: -20px;
    background: rgba(0,0,0,0.1);
}

.comment:before {
    width: 9px;
    height: 9px;
    border: 3px solid #fff;
    border-radius: 100px;
    margin: 16px 0 0 -6px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(0,0,0,0.1);
    background: #ccc;
}

.comment:hover:before {
    background: orange;
}

.comment .text:before {
    top: 18px;
    left: 78px;
    width: 9px;
    height: 9px;
    border-width: 0 0 1px 1px;
    border-style: solid;
    border-color: #e5e5e5;
    background: #fff;
}

.pad{
  padding: 10px;
}



.button-34 {
  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 13px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding-left: 10px;
  padding-right: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  height: 30px;
  margin-left: 170px;
}



    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator"> 
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    


    @include('navbar')

    <br>
    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
<div class="container">
<div class="main-body p-0">
<div class="inner-wrapper">

<div class="inner-sidebar">

@if(session('user_table') == 'formateurs' || session('user_table') == 'admins' )
    <div class="inner-sidebar-header justify-content-center but">
        <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
            <i class="icofont-plus-circle"></i>
            Ajout Formation
        </button>
    </div>
@endif


<div>
<div class="p-3 h-100" data-simplebar="init">
<div class="simplebar-wrapper" style="margin: -16px;">
<div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
<div class="simplebar-mask">
<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
<div class="simplebar-content-wrapper" style="height: 100%;">
<div class="simplebar-content" style="padding: 16px;">
<nav class="nav nav-pills nav-gap-y-1 flex-column">

<a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">Toutes les formations</a>
<hr>
@foreach ($combinedData['clubs'] as $club)
    <span>{{ $club->nom }}</span>
@endforeach





</nav>
</div>
</div>
</div>
</div>
<div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
</div>
<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
<div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
</div>
</div>

</div>


<div class="inner-main">

    <div class="inner-main-header">
    <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
    </select>
    <span class="input-icon input-icon-sm ml-auto w-auto">
    <input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search forum" />
    </span>
    </div>
    
    
    @foreach ($combinedData['formations'] as $f)
<div class="p-2 p-sm-3 collapse forum-content show">
    <div class="card mb-2">
        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" />
                <div class="media-body">
                    <h6>{{$f->title}}</h6>
                    <p class="text-secondary" style="width: 700px;">
                        {{$f->content}}
                    </p>
                    <p class="text-muted"><span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                </div>
                <i class="icofont-info-circle info"  type="button" data-toggle="modal" data-target="#postmodal" onclick="enregistrerDansLocalStorage('{{$f->poster}}')"></i>
            </div>
        </div>
    </div>
</div>
@endforeach







<div class="modal fade mod" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="card1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">FERME</button>
        <div class="card1__header">
          <img src="image/cont.jpg" alt="card__image" class="card__image" width="600">
        </div>
        <div class="card1__body">
          <h4>Hackathon </h4>
          <p>Un Hackathon annuel où l'innovation rencontre la créativité! Rejoignez-nous pour coder, collaborer et résoudre ensemble des défis passionnants.</p>
        </div>
        <hr>
        <button class="button-54" role="button">intéressé(e) 10/15</button><br>
        <div>
        <button class="esp"><i class="icofont-like"></i>&nbsp;  J'aime</button>
        <span class="esp"><i class="icofont-comment"></i>&nbsp; Commentaire</span>
        <span data-target="#formmodal" style="cursor: pointer;" class="esp"  data-toggle="modal" data-dismiss="modal" data-target="#formmodal"><span><i class="icofont-ui-add" ></i>&nbsp;Participer</span></span>
    </div>
        <div class="card1__footer">
          <div class="user">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user__image" class="user__image">
            <div class="user__info">
              <h5>Jane Doe</h5>
              <small>2h ago</small>
            </div>
          </div>
        </div>

        <hr>


        <section class="comments pad">
          <article class="comment">
            <a class="comment-img" href="#non">
              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" width="50" height="50">
            </a>
            <div class="comment-body">
              <div class="text">
                <p>Hello, this is an example from me</p>
              </div>
              <p class="attribution">by <a href="#non">Besnik Hetemi</a> at 14:23pm, 4 Dec 2015</p>
            </div>
          </article>
            <article class="comment">
            <a class="comment-img" href="#non">
              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" width="50" height="50">
            </a>
            <div class="comment-body">
              <div class="text">
                <p>if you are interested for  more about me visited my profile on social page</p>
              </div>
              <p class="attribution">by <a href="#non">Besnik Hetemi</a> at 14:23pm, 4 Dec 2015</p>
            </div>
          </article>


          <article class="comment">
            <a class="comment-img" href="#non">
              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" width="50" height="50">
            </a>
            <div class="comment-body">
              <textarea></textarea>
              <button class="button-34" role="button">envoyé</button>
            </div>
            
          </article>

        </section>






      </div>
      </div>
</div>

















<div class="inner-main-body p-2 p-sm-3 collapse forum-content">
<a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
<div class="card mb-2">
<div class="card-body">
<div class="media forum-item">
<a href="javascript:void(0)" class="card-link">
<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
<small class="d-block text-center text-muted">Newbie</small>
</a>
<div class="media-body ml-3">
<a href="javascript:void(0)" class="text-secondary">Mokrani</a>
<small class="text-muted ml-2">1 hour ago</small>
<h5 class="mt-1">Realtime fetching data</h5>
<div class="mt-3 font-size-sm">
<p>Hellooo :)</p>
<p>
I'm newbie with laravel and i want to fetch data from database in realtime for my dashboard anaytics and i found a solution with ajax but it dosen't work if any one have a simple solution it will be
helpful
</p>
<p>Thank</p>
</div>
</div>
<div class="text-muted small text-center">
<span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
<span><i class="far fa-comment ml-2"></i> 3</span>
</div>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-body">
<div class="media forum-item">
<a href="javascript:void(0)" class="card-link">
<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
<small class="d-block text-center text-muted">Pro</small>
</a>
<div class="media-body ml-3">
<a href="javascript:void(0)" class="text-secondary">drewdan</a>
<small class="text-muted ml-2">1 hour ago</small>
<div class="mt-3 font-size-sm">
<p>What exactly doesn't work with your ajax calls?</p>
<p>Also, WebSockets are a great solution for realtime data on a dashboard. Laravel offers this out of the box using broadcasting</p>
</div>
<button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
<a href="javascript:void(0)" class="text-muted small">Reply</a>
</div>
</div>
</div>
</div>
</div>


</div>

</div>











<div class="modal formu" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
  
  <form method="POST" action="{{ route('formations.store') }}" class="formi">
    @csrf
    <div class="formbold-form-title">
        <h2>Publier Formation</h2>
    </div>

    <div class="formbold-input-flex">
        <div>
            <label for="title" class="formbold-form-label">Nom formation</label>
            <input
                type="text"
                name="title"
                id="title"
                class="formbold-form-input"
                required
            />
        </div>
    </div>

    <label for="date" class="formbold-form-label">Date formation</label>
    <input
        type="datetime-local"
        name="date"
        id="date"
        class="formbold-form-input"
        value="2023-01-01T12:00"
        required
    />
    <br>
    <br>

    <label for="content" class="formbold-form-label">Content</label>
    <textarea
        name="content"
        id="content"
        class="formbold-form-input"
        required
    ></textarea>
    <br>
    <br>

    <button type="submit" class="formbold-btn">Publier</button>
</form>

  </div>
  </div>
  </div>
  </div>
</div>

















        <!--/  formulaire -->
        <div class="modal fade formu" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            
                <form action="https://formbold.com/s/FORM_ID" method="POST" class="formi">
                    <div class="formbold-form-title">
                      <h2 class="">Inscription a une formation</h2>
                    </div>
              
                    <div class="formbold-input-flex">
                      <div>
                        <label for="lastname" class="formbold-form-label"> Numero </label>
                        <input
                          type="text"
                          name="lastname"
                          id="lastname"
                          class="formbold-form-input"
                        />
                      </div>
                    </div>
                    <label for="lastname" class="formbold-form-label"> Date de naissance </label>
                    <input type="date" value="2024-01-01T12:00" />
                    <br>
                    <br>
                    <div>
                      <input type="file" accept="image/jpeg,image/jpg,image/png,image/gif,image/svg+xml,image/bmp,image/tiff">
                    </div>
              
                    <button class="formbold-btn">Inscription</button>
                  </form>
            </div>
            </div>
            </div>
            </div>
            </div>
        <!--/ End formulaire -->














<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
<script src="js/main.js"></script>



<script>
function enregistrerDansLocalStorage(posterValue) {
    localStorage.setItem("posterV", posterValue);
    console.log("La valeur a été enregistrée dans le localStorage.");
}
</script>



</body>
</html>