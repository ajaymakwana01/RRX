<div id="SignUp" class="modal fade" role="dialog">
  <div class="modal-dialog bg-white">

    <!-- Modal content-->
    <div class="modal-content bg-transparent" style="margin-top : 50px;">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color: red; font-size : 22px;">&times;</button>
      </div>

      <div class="modal-body">

        <form id="login_form">
          <h1 class="login_header text-white text-center p-2">SignUp Form</h1>

          <div class="form-group">
            <label style="font-size: 14px;">Enter Full Name :</label>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
              <input id="username" type="text" class="form-control" name="name"/>
            </div>
          </div>

          <div class="form-group">
            <label style="font-size: 14px;">Enter Email :</label>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="username" type="text" class="form-control" name="email"/>
            </div>
          </div>

          <div class="form-group">
            <label style="font-size: 14px;">Set Password :</label>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="username" type="text" class="form-control" name="password"/>
            </div>
          </div>

          <div class="form-group">
            <label style="font-size: 14px;">Enter Mobile Number :</label>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-mobile"></i></span>
              <input id="username" type="text" class="form-control" name="phone"/>
            </div>
          </div>

          <div class="checkbox">
            <label style="font-size: 14px;"><input type="checkbox" value="" style="margin-top: -7px;" checked="cheched">I agree with <a href="#" style="color:#197d62;">Term and Conditions.</a></label>
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-block btn_button" value="Submit"/>
          </div>

          <p class="float-right mr-2" style="font-size: 14px;">Already Registered?  <a href="login.php" style="color:#197d62;">Login</a></p>

        </form>
      </div>
    </div>

  </div>
</div>
