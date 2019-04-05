<?php include'header.php'; ?>

<!-- <div> -->
	<!-- <img src="./images/feedback1.jpg" class="feedback_image"/> -->
<!-- </div> -->

<div id="feedback_form_show" style="">
	<h1 class="text-center" style="color: #197d62; margin-top : 90px; font-size: 50px;">Your Feedback Matters!</h1>

	<div class="d-flex justify-content-center" style="margin-top: 30px;">
		<div class="btn-group">
  			<button type="button" id="feedback-btn1" class="btn my-btn" value="feedback" onclick="show_form(this.value)">Feedback</button>
  			<button type="button" id="complaint-btn1" class="btn my-btn" value="complaint" onclick="show_form(this.value)">Complaint</button>
		</div>
	</div>

	<div class="container p-5 feedback_form">
		<h1 class="login_header text-white text-center p-2">Feedback Form</h1>
		<form method="post" id="feedback_form" style="margin-top: 20px;">
			<div class="form-group">
				<label style="font-size: 14px;">Enter Name :</label>
				<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      				<input id="username" type="text" class="form-control" name="fullname">
    			</div>
			</div>

			<div class="form-group">
				<label style="font-size: 14px;">Enter Email :</label>
				<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      				<input id="email" type="text" class="form-control" name="email">
    			</div>
			</div>

			<div class="form-group">
				<label style="font-size: 14px;">Your Thought About Us :</label>
      			<textarea class="form-control" name="thought" rows="6" style="resize: none;"></textarea>
			</div>
		
    		<br/>
			<div class="d-flex justify-content-center">
				<input type="submit" value="Submit" name="login" class="btn btn_button"/>
			</div>
		</form>
	</div>
</div>

<div id="complaint_form_show" style="display: none;">
	<h1 class="text-center" style="color: #197d62; margin-top : 90px; font-size: 50px;">Complaint Box</h1>

	<div class="d-flex justify-content-center" style="margin-top: 30px;">
		<div class="btn-group">
  			<button type="button" id="feedback-btn2" class="btn my-btn" value="feedback" onclick="show_form(this.value)">Feedback</button>
  			<button type="button" id="complaint-btn2" class="btn my-btn" value="complaint" onclick="show_form(this.value)">Complaint</button>
		</div>
	</div>

	<div class="container p-5 feedback_form">
		<h1 class="login_header text-white text-center p-2">Complaint Form</h1>
		<form method="post" id="feedback_form" style="margin-top: 20px;">
			<div class="form-group">
				<label style="font-size: 14px;">Enter Name :</label>
				<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      				<input id="username" type="text" class="form-control" name="fullname">
    			</div>
			</div>

			<div class="form-group">
				<label style="font-size: 14px;">Enter Email :</label>
				<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      				<input id="email" type="text" class="form-control" name="email">
    			</div>
			</div>

			<div class="form-group">
				<label style="font-size: 14px;">Your Complaint :</label>
      			<textarea class="form-control" name="complaint" rows="6" style="resize: none;"></textarea>
			</div>
		
    		<br/>
			<div class="d-flex justify-content-center">
				<input type="submit" value="Submit" name="login" class="btn btn_button"/>
			</div>
		</form>
	</div>
</div>

<?php include'footer.php'; ?>