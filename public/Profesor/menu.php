<link rel="stylesheet" href="../assets/css/slidebar.css">

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.alert = function () {
    };
    var defaultCSS = document.getElementById('bootstrap-css');
    function changeCSS(css) {
        if (css)
            $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
        else
            $('head > link').filter(':first').replaceWith(defaultCSS);
    }
    $(document).ready(function () {
        var iframe_height = parseInt($('html').height());
        window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
    });
</script>
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!--Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="http://www.eia.edu.co">
                <img src="../assets/images/logo.png" style="width: 150px;height: 110px;" ></a>
        </div>
<!--        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="courses.php">Acerca de...</a></li>
                <li><a href="videos.html">Videos</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                        <li><a href="#">Dummy Link1</a></li>
                                        <li><a href="#">Dummy Link2</a></li>
                                        <li><a href="#">Dummy Link3</a></li>
                                    </ul>
                                </li>
                <li><a href="contact.html">Contacto</a></li>

            </ul>
        </div>-->
        <!--/.nav-collapse -->
    </div>
</div>
<header id="head" class="secondary">
    <div class="container">
        <h1>Bienvenido </h1>
    </div>
</header>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>      
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span style="font-size:16px;"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
                        <li><a href="#">Modificar</a></li>
                        <li><a href="#">Reportar</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Informes</a></li>
                    </ul>
                </li>          
                <li ><a href="#">Libros<span style="font-size:16px;" ></span></a></li>        
                <li ><a href="#">Tags<span style="font-size:16px;"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript">

</script>