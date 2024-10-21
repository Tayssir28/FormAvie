<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "../image/btlogo.png" type = "image/x-icon" >
    <title>Formavie</title>
</head>
<body>
    
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In Formateur</label>
            <div class="login-form">
                <div class="sign-up-htm">
                <form name="f" method="POST" action="{{ route('formateurs.store') }}">
    @csrf
    <div class="group">
        <label for="nom" class="label">Nom</label>
        <input name="nom" type="text" class="input">
    </div>
    <div class="group">
        <label for="prenom" class="label">Prenom</label>
        <input name="prenom" type="text" class="input">
    </div>
    <div class="group">
        <label for="club_id" class="label">Club</label>
        <div class="tak">
		<input name="club" type="number" class="input">
        </div>
    </div>
    <div class="group">
        <label for="email" class="label">Adresse mail</label>
        <input name="email" type="email" class="input">
    </div>
    <div class="group">
        <label for="password" class="label">Mot de passe</label>
        <input name="password" type="password" class="input">
    </div>
    <div class="group">
        <label for="password_confirmation" class="label">Confirmer mot de passe</label>
        <input name="password_confirmation" type="password" class="input">
    </div>
    <br>
    <div class="group">
        <input type="submit" class="button" value="Sign In">
    </div>
</form>



                    <div class="foot-lnk">
                        <label for="tab-1" onclick="location.href='signIn.html'">Already Member?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<style>
.tak{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
select{
    border-radius: 10px;
    text-align: center;
    font-size: 17px;
    background-color: #b0b4c6b4;
}


.bit{
	margin: 100px;
}



button {
 outline: none;
 cursor: pointer;
 border: none;
 padding: 0.9rem 2rem;
 margin: 0;
 font-family: inherit;
 font-size: inherit;
 position: relative;
 display: inline-block;
 letter-spacing: 0.05rem;
 font-weight: 700;
 font-size: 17px;
 border-radius: 500px;
 overflow: hidden;
 background: #9fae9f79;
 color: ghostwhite;
}

button span {
 position: relative;
 z-index: 10;
 transition: color 0.4s;
}

button:hover span {
 color: black;
}

button::before,
button::after {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 z-index: 0;
}

button::before {
 content: "";
 background: #1c189cdf;
 width: 120%;
 left: -10%;
 transform: skew(30deg);
 transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
}

button:hover::before {
 transform: translate3d(100%, 0, 0);
}
























    body{
	margin:0;
	color:#6a6f8c;
	background:url(image/iset11.jpg) no-repeat;
    backdrop-filter: blur(5px);
    background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
    height: 750px;
	margin:auto;
	margin-top: 13px;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(image/dep11.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
    margin-bottom: 30px;
}
.login-html{
	width:100%;
	height:750px;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40, 57, 101, 0.663);
}
.login-html .sign-in-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,

.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}


.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
    color: rgba(255, 255, 255, 0.727);

}
</style>
</body>
</html>
