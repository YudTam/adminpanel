<form method="post" action="addid.php" enctype="multipart/form-data">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <!-- <h4 class="modal-title w-100 font-weight-bold">Sign in</h4> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="number" name="school_id" class="form-control validate" value="" placeholder='Enter ID'>
          <br>
          <br>
          <input type="password" name="schoolpass" class="form-control validate" value="" placeholder='Enter password'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="text" name="name" class="form-control validate" value="" placeholder='Enter School Name'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="email" name="schoolmail" class="form-control validate" value="" placeholder='Enter Email'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="number" name="schoolcontact" class="form-control validate" value="" placeholder='Enter Contact'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="text" name="schooladdr" class="form-control validate" value="" placeholder='Enter Address'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="text" name="schoolprincipal" class="form-control validate" value="" placeholder='Enter Principal Name'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="date" name="schoolregdate" class="form-control validate" value="" placeholder='Enter Registration date'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="number" name="schoolstatus" class="form-control validate" value="" placeholder='Enter School Status'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          <br>
          <br>
          <input type="number" name="license_duration" class="form-control validate" value="" placeholder='Enter License'>
          <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
          
        </div>

        <!-- <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div> -->

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" value="submit" type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a> -->
</div>
</form>