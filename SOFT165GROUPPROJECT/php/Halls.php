<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<title>Room Booking Portal - About</title>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/CSS/index.css"        
    </head>
    <body>
        <div class="body bg-light">   
        <nav class="navbar navbar-expand-md navbar-light bg-secondary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">Hall's Booking Portal<img src="/img/logo.png"></a>
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
                        <div class="dropdown-menu bg-secondary" href="/php/Halls.php" aria-labelledby="navbarDropdown">
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
            
        <div class="container-fluid padding">
            <div class="welcome text-center row padding">
                <div class="col-12">
                    <h1 class="display-2" >Welcome to the Halls</h1>
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

        <div id="carouselHalls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHalls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHalls" data-slide-to="1"></li>
                <li data-target="#carouselHalls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img border="0" class="d-block w-100" src="/img/FBHOutside2.png" alt="First">
                    <div class="carousel-caption">
                        <h2 class="display-2">Frobisher House</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100"  src="/img/FBHOutside.jpg" alt="Second" >
                    <div class="carousel-caption">
                        <h2 class="display-2">Robbins</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100"  src="/img/FBHRoom.jpg" alt="Third">
                    <div class="carousel-caption">
                        <h2 class="display-2">The Old Dairy</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHalls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
                <a class="carousel-control-next" href="#carouselHalls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>   
            
            <div class='container-fluid'>
                <div class='row padding'>
                    <div class='col-xs-12 col-sm-12 col-md-6 col-lg-4'>
                        <h2>About: Robbins</h2>
                        <p>Robbins is a cheap but social halls experience</p>
                        <div class="card img-fluid" style="width:500px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                            <div class="card-img">
                                <h4 class="card-title">Robbins</h4>
                                <p class="card-text">Robbins features two different room types, single and double bed both with shared bathrooms. Close distance to amenities. </p>
                                <a href="/php/Robbins.php" class="btn btn-primary">Click to view Robbins</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-12 col-md-6 col-lg-4'>
                        <h2>About: Frobisher House</h2>
                        <p>A more expensive halls; but does have the biggest rooms.</p>
                        <div class="card img-fluid" style="width:500px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                            <div class="card-img">
                                <h4 class="card-title">Frobisher House</h4>
                                <p class="card-text">A modern halls with large lovely fitted rooms.(Single, Double and Apartments Available).</p>
                                <a href="/php/FrobisherHouse.php" class="btn btn-primary">Click to view Frobisher House</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-mx-auto col-sm-mx-auto col-lg-4'>
                        <h2>About: The Old Dairy</h2>
                        <p>Cheapest single room non shared experience. Priced fairly as well.</p>
                        <div class="card img-fluid" style="width:500px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                            <div class="card-img bg-light">
                                <h4 class="card-title">The Old Dairy</h4>
                                <p class="card-text">As modern as Frobisher House, slightly smaller rooms, much better prices.</p>
                                <a href="/php/TheOldDairy.php" class="btn btn-primary">Click to view The Old Dairy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead">Looking for your profile?</p>
                    </div>
                    <div class="mx-auto">
                        <a href="/php/Profile/Profile.php"><button type="button" class="btn btn-lg btn-outline-primary">Profile</button></a>
                    </div>
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
                </footer>
        </div>
    </body>
</html>