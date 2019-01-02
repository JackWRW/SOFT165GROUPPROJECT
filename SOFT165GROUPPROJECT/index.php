<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<title>Room Booking Portal - Home</title>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/CSS/index.css"
        <title></title>
    </head>
    <body>
        <div class="body bg-light">   
        <nav class="navbar navbar-expand-md navbar-light bg-secondary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand display-1" href="/index.php">Hall's Booking Portal<img src="/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item-active">
                        <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/About.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bg-secondary" href="/php/Halls.php" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Halls
                        </a>
                        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/php/TheOldDairy.php">The Old Dairy</a>
                            <a class="dropdown-item" href="/php/Robbins.php">Robbins</a>
                            <a class="dropdown-item" href="/php/FrobisherHouse.php">Frobisher House</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/Profile/Profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        
        <div id="carouselMain" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
                <li data-target="#carouselMain" data-slide-to="1"></li>
                <li data-target="#carouselMain" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img border="0" class="d-block w-100 h-50" src="/img/FBHOutside2.png" alt="First">
                    <div class="carousel-caption">
                        <h2 class="display-2">Frobisher House</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="/img/FBHOutside.jpg" alt="Second" >
                    <div class="carousel-caption">
                        <h2 class="display-2">Robbins</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="/img/FBHRoom.jpg" alt="Third">
                    <div class="carousel-caption">
                        <h2 class="display-2">The Old Dairy</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
                <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            
            <div class="container-fluid">
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead">Want to just log in to your account. Please click the button!</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                        <a href="/php/LogIn.php"><button type="button" class="btn btn-outline-primary btn-lg">Log In</button></a>
                    </div>
                </div>    
            </div>
          
            <div class="container-fluid padding">
                <div class="welcome text-center row padding">
                    <div class="col-12">
                        <h1 class="display-2" >A company you can trust.</h1>
                        <hr>
                    </div>
                    
                    <div class="col-12 padding">
                        <p class="lead padding">Welcome to the halls booking portal. 
                                        From here you can view examples of the rooms from across 3 different halls.
                                        You can also book a room for the next academic year. And signed in members
                                        can view existing bookings.</p>
                        <hr>
                    </div>    
                </div>
            </div>
                
                <div class="container-fluid padding">
                    <div class="text-center row padding">
                        <div class="col-xs-12 col-sm-6 col-lg-4 bg-light">
                            <i class="fas fa-shield-alt fa-5x padding"></i>
                            <h3>PRIVACY</H3>
                            <p>At HB we value your privacy and strive to keep your data safe</p>                           
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 bg-light">
                            <i class="fas fa-file-invoice-dollar fa-5x padding"></i>
                            <h3>Honest Prices</H3>
                            <p>At HB there are no hidden prices. All bills are included in the prices. All prices are shown before checkout. 
                                And thats all you will have to pay.</p>                           
                        </div>
                        <div class="col-xs-12 col-lg-4 bg-light">
                            <i class="fas fa-wifi fa-5x padding"></i>
                            <h3>Superfast Fibre</H3>
                            <p>We insure that every room has access to at least 100Mb/s download speeds.</p>                           
                        </div>                       
                    </div>
                </div>
                
                <div class='container-fluid padding'>
                    <div class='row padding'>
                        <div class='mx-auto text-center'>
                            <h3>About us...</h3>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                            <a href="/php/About.php"><button type="button" class="btn btn-outline-primary btn-lg padding">About us</button></a>
                            <hr>
                        </div>
                        <span class="mx-auto"> 
                        <div id="carouselAncilary" class="carousel slide padding d-flex justify-content-around" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselAncilary" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselAncilary" data-slide-to="1"></li>
                                <li data-target="#carouselAncilary" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" width="600" height="600">
                                <div class="carousel-item active">
                                    <img class="smallImg" src="/img/PlymouthBabbage.jpg" alt="First" width="600" height="400">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" >
                                    <img class="smallImg" src="/img/plymouthHoeLightHouse.jpg" alt="Second" width="600" height="400" >
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="smallImg" src="/img/plymouthUniLogo.jpg" alt="Third" width="600" height="600">
                                    <div class="carousel-caption">                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </span>    
                    </div>
                </div>
               
                <footer>
                    <div class="container-fluid padding">
                        <div class="text-center row padding">
                            <div class="col-12 bg-secondary">
                                <img src="/img/logo.png"></a>
                                <p><a href="/index.php">Halls Booking Application</a></p>
                                <hr>
                                <a href="/index.php">Home</a>
                                <a href="/php/About.php">About</a>
                                <a href="/php/Halls.php">Halls</a>
                                <a href="/php/Profile/Profile.php">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>        
    </body>
</html>
