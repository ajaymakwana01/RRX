<?php include'header.php'; ?>

<div class="container" id="post_vehicle_form" style="margin-top: 130px;">
	<div style="box-shadow: 0 0 5px 3px #bbb;">
		<form class="p-5">
			<div class="form-group">
				<h1 style="color: #197d62; font-size: 30px; margin-bottom: 20px;">Enter Below Details</h1>
			</div>
			<div class="row">
				
				<div class="form-group col-md-6">
					<label class="font_size">Select Category :<sup class="text-danger">*</sup></label>
      				<select class="custom_dropdown" name="category">
        				<option selected>Choose Category</option>
        				<option value="">Car</option>
        				<option value="">Bike</option>
        				<option value="">Bicycle</option>
      				</select>
				</div>

				<div class="form-group col-md-6">
					<label class="font_size">Brand Name:<sup class="text-danger">*</sup></label>
					<input id="username" type="text" class="form-control" placeholder="Enter Brand Name" name="brand_name" autocomplete="off"/>
				</div>

				<div class="form-group col-md-6">
					<label class="font_size">Model Name:<sup class="text-danger">*</sup></label>
					<input id="username" type="text" class="form-control" placeholder="Enter Model" name="model_name" autocomplete="off"/>
				</div>

				<div class="form-group col-md-6">
					<label class="font_size">Model Year:<sup class="text-danger">*</sup></label>
					<select class="custom_dropdown" name="category">
        				<option selected>Choose Year</option>
        				<option value="">2010</option>
        				<option value="">2011</option>
        				<option value="">2012</option>
        				<option value="">2013</option>
        				<option value="">2014</option>
        				<option value="">2015</option>
        				<option value="">2016</option>
        				<option value="">2017</option>
        				<option value="">2018</option>
        				<option value="">2019</option>
      				</select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Price Type:<sup class="text-danger">*</sup></label>
                    <select class="custom_dropdown" name="category">
					    <option value="" disable>Choose Price Type</option>
        				<option value="">Daily</option>
        				<option value="">Hourly</option>
                    </select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size"> Enter Fare:<sup class="text-danger">*</sup></label>
					<input id="username" type="text" class="form-control" placeholder="Enter Fare" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Upload Images:<sup class="text-danger">*</sup></label>
					<input type="file" class="form-control" placeholder="Enter Color" name="model_name" autocomplete="off"/>
				</div>

				<div class="form-group col-md-12">
					<h1 style="color: #197d62; font-size: 30px; margin-bottom: 30px 0px;">Address Details</h1>
				</div>

				<div class="form-group col-md-6">
					<label class="font_size">House Number:</label>
					<input id="username" type="text" class="form-control" placeholder="Enter House Number" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Street:</label>
					<input id="username" type="text" class="form-control" placeholder="Enter Street" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Area Name:</label>
					<input id="username" type="text" class="form-control" placeholder="Enter Area Name" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">City Name:</label>
					<input id="username" type="text" class="form-control" placeholder="Enter City Name" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-12">
					<h1 style="color: #197d62; font-size: 30px; margin-bottom: 30px 0px;">Additional Details</h1>
				</div>

				<div class="form-group col-md-6">
					<label class="font_size">Mention KM Driven:</label>
					<input id="username" type="text" class="form-control" placeholder="Enter KiloMeter" name="model_name" autocomplete="off"/>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Fuel Type :<sup class="text-danger">*</sup></label>
      				<select class="custom_dropdown" name="category">
        				<option selected>Choose Type</option>
        				<option value="">Petrol</option>
        				<option value="">Diesel</option>
        				<option value="">CNG</option>
      				</select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Has Vehicle Insuarance ? :</label>
      				<select class="custom_dropdown" name="category">
      					<option selected>Choose...</option>
        				<option value="">Yes</option>
        				<option value="">No</option>
      				</select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Transmission Type :<sup class="text-danger">*</sup></label>
      				<select class="custom_dropdown" name="category">
        				<option selected>Choose Transmission</option>
        				<option value="">Automatic</option>
        				<option value="">Manual</option>
      				</select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Is Vehicle Certified ? :</label>
      				<select class="custom_dropdown" name="category">
      					<option selected>Choose...</option>
        				<option value="">Yes</option>
        				<option value="">No</option>
      				</select>
				</div>
				<div class="form-group col-md-6">
					<label class="font_size">Is Vehicle Accidental ? :</label>
      				<select class="custom_dropdown" name="category">
      					<option selected>Choose...</option>
        				<option value="">Yes</option>
        				<option value="">No</option>
      				</select>
				</div>
				<div class="form-group col-md-12">
					<p class="text-danger" style="font-size: 16px;"><strong>Note : </strong>* Fields are madetory.</p>
				</div>
				
				<div class="d-flex justify-content-center form-group col-md-12">
					<input type="submit" name="submit" value="Submit" class="btn btn-danger btn-button1"/>
					<input type="submit" name="submit" value="Cancel" class="btn btn-danger btn-button1 ml-2"/>
				</div>
				
			</div>
			
		</form>
	</div>

</div>

<?php include'footer.php'; ?>