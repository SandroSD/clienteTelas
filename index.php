<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3MpC8XaUJMEy2r-uGvD4zIm4Zhl3-b4I"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
  <script src="js/index.js"></script>
  <style>
  
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;      
    }


    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
    .container{
        margin-top:7em;
    }
    #noticias{
        //height:300px;
        overflow-y: scroll;
    }
    #partner{
        margin-bottom:7em;
    }
    #googleMap{
        cursor:pointer;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="menuTop">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SEGUPLAST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#partner">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>      
    </div>
        <div class="col-md-6">
            <h3>What We Do</h3>
            <div class="col-sm-6">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Current Project</p>
            </div>
            <div class="col-sm-6"> 
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Project 2</p>    
            </div>
        </div>
        <div class="col-md-6">
            <h3>Ubicación</h3>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="img/maps.jpg" width=150 id="googleMap"/>
            </div>
        </div>     
  </div>
  <div class="col-sm-4" id="noticias">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis totam laudantium commodi nesciunt pariatur dolore doloribus inventore itaque vitae neque harum voluptas enim natus nobis, ea, nemo nostrum illo cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis totam laudantium commodi nesciunt pariatur dolore doloribus inventore itaque vitae neque harum voluptas enim natus nobis, ea, nemo nostrum illo cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis totam laudantium commodi nesciunt pariatur dolore doloribus inventore itaque vitae neque harum voluptas enim natus nobis, ea, nemo nostrum illo cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis totam laudantium commodi nesciunt pariatur dolore doloribus inventore itaque vitae neque harum voluptas enim natus nobis, ea, nemo nostrum illo cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis totam laudantium commodi nesciunt pariatur dolore doloribus inventore itaque vitae neque harum voluptas enim natus nobis, ea, nemo nostrum illo cumque!</p>
  </div>
  </div>
</div>
<hr>
</div>

<!--div class="container text-center">    
  
  <div class="row">
    
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div-->

<div class="container text-center" id="partner">    
  <h3>Distribuidor Oficial</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 6</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center navbar-fixed-bottom" id="footContacto">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <h4>Venta al público  Los Pozos 150 - Ituzaingo Sur</h4>
            <h6>LU-VI de 9:00 a 13:00 y 15:00 a 19:00 / SA de 9:00 a 13:00</h6>
            
        </div>
        <div class="col-md-4">
            <h4>Atención al cliente  15 3167 9893</h4>
            <h5>contacto@seguplast.com.ar</h5>
        </div>
    </div>
</footer>

</body>
</html>
