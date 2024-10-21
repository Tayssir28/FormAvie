@include('navbar')


<title>Profil</title>
    <div>
        <div>
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar" class="rounded-circle img-fluid pic" style="width: 150px;">
                                    @if(isset($combinedData['user']->name))
                                        <h5 class="my-3">{{ $combinedData['user']->name }}</h5>
                                    @else
                                      <h5 class="my-3"> {{ $combinedData['user']->nom }}  {{ $combinedData['user']->prenom }} </h5>
                                    @endif
                                    <p class="text-muted mb-1">Etudiant</p>
                                    <p class="text-muted mb-4">Tunis, Tunisie</p>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nom et Prenom</p>
                                        </div>
                                        <div class="col-sm-9">

                                        @if(isset($combinedData['user']->name))
                                         <p class="text-muted mb-0">{{ $combinedData['user']->name }}</p>
                                        @else
                                         <p class="text-muted mb-0"> {{ $combinedData['user']->nom }}  {{ $combinedData['user']->prenom }} </p>
                                        @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $combinedData['user']->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Tunis, Tunisie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




@foreach ($combinedData['formations'] as $f)
                            <div class="p-2 p-sm-3 collapse forum-content show">
                                <div class="card mb-2">
                                    <div class="card-body inf">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media pad">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" />
                                                <div class="media-body">
                                                    <h6>{{$f->title}}</h6>
                                                    <p class="text-secondary">{{$f->content}}</p>
                                                </div>
                                            </div>
                                        <div class="inf">
                                            <div class="rec">
                                                <span class="icon-btn info me-1" data-toggle="modal" data-target="#postmodal" onclick="add()" data-publication-id="{{ $f->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                                    </svg>
                                                </span>
                                                <form action="{{ route('formation.delete', ['id' => $f->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="icon-btn danger me-1" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                            </svg>
                                                        </button>
                                                    </form>


                                                <span class="icon-btn warning"  data-toggle="modal" data-target="#edit" id="$f->id">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-collection rec1" viewBox="0 0 16 16" style="margin-left: 15px;cursor: pointer;" data-toggle="modal" data-target="#participe">
                                                <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
                                              </svg>
                                        </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>









    <div class="modal fade mod" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="card1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">FERME</button>
            <div class="card1__header">
              <img src="image/cont.jpg" alt="card__image" class="card__image" width="600" class="img">
            </div>
            <div class="card1__body">
              <h4>Hackathon </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
            </div>
            <hr>
            <div class="react">
            <span><i class="icofont-like"></i>  J'aime</span>
            <span><i class="icofont-comment"></i> Commentaire</span>
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
          </div>
          </div>
    </div>
    </div>

















    <div class="modal fade formu" id="participe" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="container mt-5">
            <div class="card mb-5">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <center><h2>Liste des participents</h2></center>
                        <br> <br>
                        <br>
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom et prenom</th>
                                <th>Numero</th>
                                <th>Profil</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Falten Falteni</td>
                                <td>12345678</td>
                                <td><a href="#" style="color: blue;">voir profil</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
      </div>








      <div class="modal formu" id="edit" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
  
  <form method="POST" action="{{ route('formations.edit') }}" class="formi">
    @csrf
    <div class="formbold-form-title">
        <h2>Modifier Formation</h2>
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


      





</body>
</html>

<style>



    .pad{
        padding-right: 40px;
    }


    .rec {
    display: flex;
    align-items: center;
    }

    .rec button{
        margin-left: 5px;
    }


    .icon-btn {
    cursor: pointer;
    color: #000; /* Set your desired icon color */
    font-size: 20px; /* Adjust the icon size as needed */
}

.icon-btn:hover {
    color: #333; /* Change color on hover */
}


.icon-btn.info {
    color: #17a2b8; /* Info color */
}

.icon-btn.danger {
    color: #dc3545; /* Danger color */
}

.icon-btn.warning {
    color: #ffc107; /* Warning color */
}





@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


.img {
  max-width: 100%;
  display: block;
  object-fit: cover;
}

.card1 {
  display: flex;
  flex-direction: column;
  width: 400px;
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
    margin-left: 550px;
    margin-top: 30px;
    width: 400px;
    height:600px;
}

.mod::-webkit-scrollbar {
  display: none;
}

.react{
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-left: 40px;
    }
.cent{
    width: 1200px;
    margin-left: 200px;
}
.log{
			width: 200px;
}
header{
    height: 50px;
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

</style>
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

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
<script>
    function add(){
            sessionStorage.setItem('posterV', '{{ session('poster') }}');
        }
</script>
<script>
    $(document).ready(function(){
        $('.icon-btn.warning').click(function(){
            var publicationId = $(this).closest('.inf').find('.icon-btn.warning').data('publication-id');
            $('#edit').data('publication-id', publicationId);
        });

        $('#edit').on('show.bs.modal', function () {
            var publicationId = $(this).data('publication-id');
            // Use the publication ID as needed in your modal
            console.log('Publication ID:', publicationId);
        });
    });
</script>


<script src="js/main.js"></script>