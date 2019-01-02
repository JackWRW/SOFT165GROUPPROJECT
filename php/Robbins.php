<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<title>Room Booking Portal - Robbins</title>
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
            
            <div class="container-fluid padding">
                <div class="welcome text-center row padding">
                    <div class="col-12">
                        <h1 class="display-2" >Robbins</h1>
                        <hr>
                    </div>
                    
                    <div class="col-12 padding">
                        <p class="lead padding">Welcome to the halls booking page for Robbins. Robbins is a shared accomadation. Robbins is a budget oriented but social halls. Towards the bottom of the page is where you can apply for your new room!</p>
                        <hr>
                    </div>    
                </div>
            </div>
                
        <div id="carouselRobbins" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselRobbins" data-slide-to="0" class="active"></li>
                <li data-target="#carouselRobbins" data-slide-to="1"></li>
                <li data-target="#carouselRobbins" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img border="0" class="d-block w-100" src="/img/FBHOutside2.png" alt="First">
                    <div class="carousel-caption">
                        <h2 class="display-2">Robbins</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/FBHOutside.jpg" alt="Second" >
                    <div class="carousel-caption">
                        <h2 class="display-2">Single - Shared Bathroom</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/FBHRoom.jpg" alt="Third">
                    <div class="carousel-caption">
                        <h2 class="display-2">Double - Shared Bathroom</h2>
                        <h3>Click to view me!</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselRobbins" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
                <a class="carousel-control-next" href="#carouselRobbins" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
            <div class="container-fluid padding">
                <div class="text-center row padding">
                    <div class="col-xs-12 col-sm-6 col-lg-3 bg-light">
                        <i class="fas fa-pound-sign fa-5x padding"></i>
                        <h3>Price Guide</H3>
                        <a data-toggle="modal" data-target="#PriceGModal"><u>Click here</u> to view the price guide</a>
                        <div class="modal fade" id="PriceGModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Price Guide</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/img/PriceGuide.PNG" alt="Price Guide" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 bg-light">
                        <i class="fas fa-sign-in-alt fa-5x padding"></i>
                        <h3>Apply</H3>
                        <p>To reserve your room please scroll to the bottom of the page and you will be able to pick a room to apply for.</p>                           
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 bg-light">
                        <i class="fas fa-wifi fa-5x padding"></i>
                        <h3>Superfast Fibre</H3>
                        <p>We insure that every room has access to at least 100Mb/s download speeds.</p>                           
                    </div>
                    <div class='col-xs-12 col-sm-6 col-lg-3 bg-light'>
                        <i class='fas fa-map-marker-alt fa-5x padding'></i>
                        <h3>Distances</h3>
                        <a data-toggle="modal" data-target="#DistanceModal"><u>Click here</u> to view the distances</a>
                        <div class="modal fade" id="DistanceModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Distances</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                        <li>3 Minutes Walk from University of Plymouth</li>
                                        <li>5 Minutes Walk from Town Center</li>
                                        <li>2 Minute walk from Nearest Shop (COOP)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <hr>
            </div>        
            
            <div class='container-fluid'>
                <div class='text-center row padding'>
                    <div class='col-12'>
                        <h3 class="">Room Types</h3>
                        <div class="ml-auto">
                            <li>A Single bed shared toilet suite</li>
                            <li>A Double bed shared toilet (Larger Room)</li>
                        </div>               
                    </div>
                    <div class="col-12 padding">
                        <h3>Facilities</h3>
                        <div>
                            <li>Fully fitted kitchens:  Electric Hob, Oven, Kettle, toaster, Microwave and cupboards for everyones cooking utensils.</li>
                            <li>Every room has  desk for students to study at. Every desk also has a chair.</li>
                            <li>There are 10 washing machines and 10 Tumble Dryers for resident's to use.</li>
                            <li>The whole building is fitted with super fast 100Mb/s internet. Wifi all over the building and one ethernet connection in every room.</li>
                        </div>
                    </div>
                    <div class="col-12 padding">
                        <h3>Location</h3>
                        <div>
                            <li>3 Minutes Walk from University of Plymouth</li>
                            <li>5 Minutes Walk from Town Center</li>
                            <li>2 Minute walk from Nearest Shop (COOP)</li>
                        </div>
                    </div>
                    <div class="col-12 padding">
                        <h3>Security</h3>
                        <div>
                            <li>24/7 Security Team with CCTV monitoring of the site.</li>
                            <li>24/7 Locked Out Service</li>
                            <li>Key Card system for getting into the building. Individual Keys for every room.</li>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            
            
            <div class="container-fluid padding">
                <div class="row padding">
                    <div class='col-xs-12 col-sm-12 col-md-6'> 
                        <h2>Single - Shared Bathroom</h2>
                        <p>Stylish room with shared bathroom shared with 5 other flat mates.</p>
                        <div class="card img-fluid">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                            <div class="card-img">
                                <h4 class="card-title">Single - Shared Bathroom</h4>
                                <p class="card-text">Single Bed room with bathroom shared with 5 people from within the same flat. Under bed storage, desk and chair.
                                                      With 8 Meter squared of floor space.</p>
                                <a href="#" class="btn btn-primary">Click to reserve me!</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-12 col-md-6'>
                        <h2>Single - En Suite</h2>
                        <p>Stylish Double bed room with shared bathroom shared with 5 other flat mates.</p>
                        <div class="card img-fluid">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                            <div class="card-img">
                                <h4 class="card-title">Single - En Suite</h4>
                                <p class="card-text">Single bed room with En Suite bathroom. Under Bed storage, desk, chair. With 10 meter squared of floor space. </p>
                                <a href="#" class="btn btn-primary">Click to reserve me!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="container-fluid">
                <div class="jumbotron row">
                    <div class="col-sm-12 col-lg-6 padding">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead">Want to view The Old Dairy? Please click the button!</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                        <a href="/php/TheOldDairy.php"><button type="button" class="btn btn-outline-primary btn-lg">The Old Dairy</button></a>
                    </div>                        
                    </div>
                    <div class="col-sm-12 col-lg-6 padding">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead">Want to view Frobisher House? Please click the button!</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                        <a href="/php/FrobisherHouse.php"><button type="button" class="btn btn-outline-primary btn-lg">Frobisher House</button></a>
                    </div>                        
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
                    </div>
                </footer>
        </div>        
    </body>
</html>