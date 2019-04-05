<?php include'header.php'; ?>

<div class="container-fluid" style="background-color: #ccc;">
<div class="home_container" id="search_page" style="margin-top: 90px;">
	<form class="form-row">
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
    <div class="form-group col-md-3">
      <label class="font_size">Start Date :</label>
      <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="datepicker" style="height: 40px; font-size: 16px;" />
    </div>

    <div class="form-group col-md-1 d-flex justify-content-center mt-5 mb-3">
    	<label class="font_size"></label>
    	<p id="filter_panel" class="btn btn-outline-danger btn_button1 btn_filter">Filter</p>
  	</div>
	</form>

<div id="filter_modal">

  <form id="home_search_form">
  <div class="form-row">

    <div class="form-group col-md-4">
      <label class="font_size">End Date :</label>
      <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="datepicker1"/>
    </div>

    <div class="form-group col-md-4">
      <label class="font_size">Vehicle Type :</label>
      <select class="custom_dropdown">
        <option selected>Select Type</option>
        <option value="">Petrol</option>
        <option value="">Diesel</option>
        <option value="">CNG</option>
      </select>
    </div>

  	<div class="form-group col-md-4 d-flex justify-content-center mt-5 mb-3">
    	<label class="font_size"></label>
    	<input type="submit" name="submit" value="Result" class="btn btn-danger btn_button1" style="padding: 8px 16px; margin-top: 3px;" />
  	</div>

  </div>
  </form>
</div>
</div>
</div>
<div class="home_container">
<div class="row mt-5">
	<div class="col-md-9"></div>
	<div class="col-md-3">
	<div class="d-flex justify-content-end">
		<label class="font_size" style="white-space: nowrap; padding: 7px;">Sort by: </label>
		<select class="custom_dropdown">
			<option value="relevancy">Relevancy</option>
			<option value="date">Date</option>
			<option value="lowest">Low to High</option>
			<option value="Highest">High to Low</option>
		</select>
	</div>
</div>
</div>
</div>

<div class="home_container" style="margin-top: 27px;">
  <div id="vehicl_availabity">
  <div class="row" id="search_result">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/bvn_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_car.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"/> 2000/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Toyota Fortuner</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">VijayRaj, Bhavnagar</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">22/01/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 800/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Yamaha FZ</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">RiverFront, Ahmedabad</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">11/03/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 200/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Hero Razerback</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">Varasa, Surat</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">08/12/2018</span>
        	</p> 
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/bvn_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_car.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"/> 2000/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Toyota Fortuner</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">VijayRaj, Bhavnagar</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">22/01/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 800/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Yamaha FZ</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">RiverFront, Ahmedabad</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">11/03/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 200/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Hero Razerback</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">Varasa, Surat</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">08/12/2018</span>
        	</p> 
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/bvn_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_car.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"/> 2000/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Toyota Fortuner</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">VijayRaj, Bhavnagar</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">22/01/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 800/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Yamaha FZ</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">RiverFront, Ahmedabad</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">11/03/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 200/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Hero Razerback</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">Varasa, Surat</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">08/12/2018</span>
        	</p> 
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./images/bvn_car.jpg" target="_blank">
          <div class="image_height">
            <img src="./images/bvn_car.jpg" alt="Nature" style="width:100%; height: 100%;">
          </div>
          <div class="caption">
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"/> 2000/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Toyota Fortuner</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">VijayRaj, Bhavnagar</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">22/01/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 800/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Yamaha FZ</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">RiverFront, Ahmedabad</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">11/03/2019</span>
        	</p> 
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
            <h3 class="text-danger">Fare : <span class="fare_model"><img src="./images/rupee.jpg"> 200/Day</span></h3>
            <h3 class="text-danger">Model : <span class="fare_model">Hero Razerback</span></h3>
            <p style="padding-bottom: 5px;">
            	<span class="float-left" style="color:#000; font-size: 14px;">Varasa, Surat</span>
            	<span class="float-right" style="color:#000; font-size: 14px;">08/12/2018</span>
        	</p> 
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>

<?php include'footer.php'; ?>