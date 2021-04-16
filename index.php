<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Ramson Engineers</title>
  <meta name="description" content="  ">
  <meta name="keywords" content="   ">
  <style>
    .about {
      text-align: center;
    }

    .readmore {
      background-color: green;
      color: white;
      border: green solid;
      border-radius: 4px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .readmore:hover {
      color: white;
      text-decoration: none;
    }

    .products {
      text-align: center;
    }

    .op {
      text-decoration: none;
      color: black;
    }

    .op:hover {
      color: black;
      text-decoration: none;
    }

    .viewall {
      background-color: green;
      color: white;
      border: green solid;
      border-radius: 4px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .viewall:hover {
      color: #fff;
      text-decoration: none;
    }

    .column {
      float: left;
      width: 50%;
      padding-right: 75px;
      height: 300px;
      text-align: right;
      /* Should be removed. Only for demonstration */
    }

    .columnmain {
      float: left;
      width: 50%;

      height: 300px;
      /* Should be removed. Only for demonstration */
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .con{
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=index.php>Ramson Engineers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link active" href=index.php>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=about.html>About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=procate.html id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu bg-light " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href=valves.html>Valves</a>
            <a class="dropdown-item" href=strainers.html>Strainers</a>
            <a class="dropdown-item" href=Guages.html>Guages</a>
            <a class="dropdown-item" href=steamtraps.html>Steam Traps</a>
            <a class="dropdown-item" href=procate.html>View All</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=https://www.emailmeform.com/builder/form/h4rfewj1Fk2uHf55>Enquiry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=contact.html>Contact Us</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- navbar ends here -->
  <!-- carosel starts here -->
  <div class="container-fluid mt-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cover.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="img/100.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="img/200.jpg" class="d-block w-100" alt="">
        </div>

        <div class="carousel-item">
          <img src="img/300.jpg" class="d-block w-100" alt="">
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- img carosel ends here -->
  <!-- about section starts from here -->
  <div class="container mt-2">
    <div class="about">
      <h1>About Us</h1>
    </div>

    <p>
      We are pleased to introduce us as RAMSON ENGINEERS, a newly formed engineering company in the field of design,
      manufacturing, supply, erection and commissioning of industrial boilers.</p>

    <p> Mentor of this company is a mechanical engineer having 22 years of experience in erection, project execution and
      purchase departments in leading boiler manufacturing companies in the field of boiler repairing, modification of
      boilers supply and erection of new multi-fuel smoke tube boilers and water tube boilers up to 150 TPH, 110 Kg/cm
      <sup>2</sup>
      and 540 <sup>o</sup>C.</p>

    <p> Now we have entered in to a engineering business to serve better services to sugar, power, chemical, food,
      textile
      and paper industries using our good engineering knowledge and field experience. Initially, we have started to
      undertake following major jobs in boilers and auxiliaries...
    </p>
    <a class="readmore" href=about.html>Read More...</a>
  </div>
  <hr>
  <!-- about section ends here -->
  <!-- Products section starts from here -->
  <div class="container">
    <div class="products">
      <h1>Our Products</h1>
    </div>
    <div class="row ml-1">
      <div class="col-md-3">
        <div class="column-ml-1">
          <div class="card">
            <a class="op" href=gatevalve.html><img src="img/gate-valves.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Gate Valve</h5>
            </a>
            <a href=gatevalve.html class="btn btn-primary">View</a>
            <a href=https://www.emailmeform.com/builder/form/ees5bCiKezv class="btn btn-primary">Get Quotes</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="column-ml-1">
        <div class="card">
          <a class="op" href=NRV.html></a><img src="img/NRV.jpg" style="height: 250px;" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">NRV</h5>
            <a href=NRV.html class="btn btn-primary">View</a>
            </a> <a href=https://www.emailmeform.com/builder/form/ees5bCiKezv class="btn btn-primary">Get
              Quotes</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="column-ml-1">
        <div class="card">
          <a class="op" href=safetyvalve.html> <img src="img/safety Valve.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Safety Valves</h5>
              <a href=safetyvalve.html class="btn btn-primary">View</a>
          </a><a href=https://www.emailmeform.com/builder/form/ees5bCiKezv class="btn btn-primary">Get Quotes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="column-ml-1">
      <div class="card">
        <a class="op" href=teestrainer.html><img src="img/tee strainer.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Tee Strainers</h5>
        </a>
        <a href=teestrainer.html class="btn btn-primary">View</a>
        <a href=https://www.emailmeform.com/builder/form/h4rfewj1Fk2uHf55 class="btn btn-primary">Get Quotes</a>
      </div>
    </div>
  </div>
  </div>
  <a class="viewall mt-3" href=allproducts.html>View All..</a>
  </div>
  </div>
  <hr>

  <!-- products section end here -->
  <!-- contact section starts here -->

  <div class="container ">
    <div class="con">
      <h1><b><u>Contact Us</u></b></h1><br>
    </div>    
    <div class="row">
      <div class="column">
   
        <b>
          Name :<br><br>
          Email :<br><br>
          phone :<br><br>
          Address :<br><br>
        </b>
      </div>
      <div class="columnmain">
        Aditya Aher <br><br>
        info@ramson.co.in <br><br>
        +91-8805778185 <br><br>
        A/306, Prime elegance, Talegaon Dabhade, Tal: Maval, Dist:Pune, Maharastra, India. <br>PIN:410 507.
      </div>
    </div>

  </div>
  <hr>

  <!-- contact section ends here -->
  <!-- footer section starts here -->
  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">© Copyright Ramson Engineers 2020. All right reserved! Developed by Ramson Developers</span>
    </div>
  </footer>
  <!-- footer section ends here -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>