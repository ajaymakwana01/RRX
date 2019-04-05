<?php include('header.php'); ?>

<div class="home_image mb-3">
  <h1 class="text_on_header">Rent Ride & Xtreme</h1>
</div>


<div class="d-flex justify-content-center home_container" style="position: absolute; top: 63%; left:0; right: 0;">
  <div class="bg-white p-5 border" style="width: 700px; border-radius: 20px;">
    <form>
      <h2 class="font_color" style="margin-left: 19px;">Is Your Vehicle Idle ?</h2>
      <p style="color: #197d62; font-size: 16px; text-align: center;">If your answer is yes, Then tack a photo of your vehicle and post it on our site to earn some money through your vehicle...</p>
      <div class="d-flex justify-content-center">
        <a href = "form_for_post_vehicle.php" class="btn btn-danger btn_post" style="padding: 5px 16px; font-size: 18px; margin: 32px 0px 0px 0px;">Post Your Vehicle</a>
      </div>
    </form>
  </div>
</div>


<div class="home_container" style="margin-top: 170px;">
  <h1 class="font_color">Search Your Vehicle</h1>

  <form id="home_search_form">
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label class="font_size">Category :</label>
      <select class="custom_dropdown">
        <option selected>Select Category</option>
        <option value="">Car</option>
        <option value="">Bike</option>
        <option value="">Bicycle</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label class="font_size">City :</label>
      <select class="custom_dropdown">
        <option selected>Choose City</option>
        <option>Ahmedabad</option>
        <option>Bhavnagar</option>
        <option>Rajkot</option>
        <option>Surat</option>
        <option>Vadodara</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label class="font_size">Start Date :</label>
      <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="datepicker"/>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-5 mb-3">
    <label class="font_size"></label>
    <input type="submit" name="submit" value="Search" class="btn btn-danger btn_button1" style="padding: 8px 16px; font-size: 18px;" />
  </div>
  </form>
</div>

<div class="home_container">
  <h1 class="font_color">Vehicle Availabity</h1>

  <form id="home_search_form">
    <div class="form-row">
    
      <div class="form-group col-md-5">
        <label class="font_size">City :</label>
        <input type="text" class="form-control" placeholder="Enter City Name"/>
      </div>

      <div class="col-md-7">
        <input type="submit" name="submit" value="Go" class="btn btn-danger btn_button1" style="padding: 5px 16px; font-size: 18px; margin: 32px 0px 0px 60px;" />
      </div>
    </div>
  </form>

  <div id="vehicl_availabity">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/bvn_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_car.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Total : <span style="color:#197d62">348 Cars</span></h3>
            <h3 class="text-danger">In Area : <span style="color:#197d62">Bhavnagar</span></h3>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/ahm_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/ahm_bike.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Total : <span style="color:#197d62">537 Bikess</span></h3>
            <h3 class="text-danger">In Area : <span style="color:#197d62">Bhavnagar</span></h3>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/raj_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_cycle.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Total : <span style="color:#197d62">847 Bicycles</span></h3>
            <h3 class="text-danger">In Area : <span style="color:#197d62">Bhavnagar</span></h3>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <!-- <div class="carousel-inner">
    <div class="item image-gradient active">
      <img src="img/bikes.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Always Fun With Us</h3>
        <p></p>
      </div>
    </div>

    <div class="item image-gradient">
      <img src="img/first.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>We Make It Easy</h3>
        <p>Thank you!</p>
      </div>
    </div>

    <div class="item image-gradient">
      <img src="img/1.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Enjoy YourSelf</h3>
        <p>We love Your Happiness!</p>
      </div>
    </div>
  </div>

  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<div id="home_work">
<div class="home_container mt-5">
  <h1 class="font_color mb-5">How It Works</h1>

  <div class="row" style="box-shadow: 5px 10px 8px 5px #bbb;">
    <div class="col-md-3">
      <img src="./images/how_signup.png" alt="Lights" class="img-circle" style="width:100%">
      <div class="caption">
        <p>First of all, SignUp or Login on our site!</p>
      </div>
    </div>

    <div class="col-md-3">
      <img src="./images/search.jpg" alt="Nature" class="img-circle" style="width:90%; height: 73%;">
      <div class="caption">
        <p>Search for vehicle and post your vehicle on our site!</p>
      </div>
    </div>

    <div class="col-md-3">
      <img src="./images/book_car.jpg" alt="Fjords" class="img-circle" style="width:100%; height: 73%;">
      <div class="caption">
        <p>Choose your vehicle and communicate with owner!</p>
      </div>
    </div>

    <div class="col-md-3">
      <img src="./images/deal.jpg" alt="Fjords" class="img-circle" style="width:100%; height: 73%;">
      <div class="caption">
        <p>May comfirm the deal or not and give feedback!</p>
      </div>
    </div>

  </div>

</div>	
</div>


<div class="home_container" style="margin-top: 80px;">
  <div class="row">
    <div class="col-md-4">
      <img src="./images/user.jpg" alt="Lights" class="img-circle d-block mx-auto" style="width:50%">
      <div class="caption">
        <h2 class="text-center">458+<br/><span class="text-center text-highlight">Happy Users</span></h2>
      </div>
    </div>

    <div class="col-md-4">
      <img src="./images/num_car.jpg" alt="Nature" class="img-circle d-block mx-auto" style="width:75%;">
      <div class="caption">
        <h2 class="text-center">749+<br/><span class="text-center text-highlight">Number of Cars</span></h2>
      </div>
    </div>

    <div class="col-md-4">
      <img src="./images/num_bike.jpg" alt="Fjords" class="img-circle d-block mx-auto" style="width:50%;">
      <div class="caption">
        <h2 class="text-center">963+<br/><span class="text-center text-highlight">Numbers of Bikes</span></h2>
      </div>
    </div>

  </div>
</div> 
<?php include('footer.php'); ?>