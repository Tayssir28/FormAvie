<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
@include('navbar')
<div class="side" >
        <div class="first">
            <!--  Body Wrapper -->
            <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
                data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
                <!-- Sidebar Start -->



                <!--  Sidebar End -->
                <!--  Main wrapper -->
                <div class="body-wrapper">
                    <!--  Header Start -->
                    <header class="app-header">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <div class="list ">
                            <ul>
                                <li><span><router-link to="/">home</router-link></span></li>
                                <li><span><router-link to="/stats">clients</router-link></span></li>
                                <li><span><router-link to="/responsable">responsable</router-link></span></li>
                                <li><span><router-link to="/service">mangement service</router-link></span></li>
                                <li><span><router-link to="/reports">report mangement</router-link></span></li>
                                <li><span><router-link to="/accept">accept metier</router-link></span></li>
                                <li><span><router-link to="/profil">my profile</router-link></span></li>
                                <li><span><router-link to="/list">my list</router-link></span></li>
                            </ul>
                        </div>





                            <ul class="navbar-nav">
                                
                                <li class="nav-item d-block d-xl-none">
                                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                        href="javascript:void(0)">
                                        <i class="ti ti-menu-2"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                        <i class="ti ti-bell-ringing"></i>
                                        <div class="notification bg-primary rounded-circle"></div>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </header>
                </div>
            </div>
        </div>
        <!--  Header End -->
        <br>
        <br>
        <br>
        <br>


    </div>
</template>

<style scoped>

.hiha{
    background-color: blueviolet;
}



.yoyo{
    border: 1px solid black;
    width: 200px;
    height:100%;
}
.side {
    position:absolute;

    background-image: url('@/assets/back.jpg'); 
    background-size: cover;
width: 100%;
  height: 100%;

    display: grid;
    grid:
        "sidebar body third" 1fr / auto 1fr 1fr;

}



.first {
    grid-area: sidebar;
    width: 20%;
    

}




@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
.list {
  position: relative;
}
.list h2 {
  color: #fff;
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 10px;
}
.list ul {
  position: relative;
}
.list ul li {
  position: relative;
  left: 0;
  color: #fce4ec;
  list-style: none;
  margin: 4px 0;
  border-left: 2px solid #f50057;
  transition: 0.5s;
  cursor: pointer;
}
.list ul li:hover {
  left: 10px;
}
.list ul li span {
  position: relative;
  padding: 8px;
  padding-left: 12px;
  display: inline-block;
  z-index: 1;
  transition: 0.5s;
}
.list ul li:hover span {
  color: #111;
}
.list ul li:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #f50057;
  transform: scaleX(0);
  transform-origin: left;
  transition: 0.5s;
}
.list ul li:hover:before {
  transform: scaleX(1);
}
a{
    text-decoration: none;
}

ul{
    width:120px;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
<script src="js/main.js"></script>
</body>
</html>