
  <div class="container" style="padding:0px 250px;">
    <div class="register-logo" style="margin-top:40px">
      <a href="#">Nouvelle Annonce</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Publier une nouvelle annonce</p>

      <form action="uploadIMG" method="post" file='true' enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input id='title' name='title' type="text" class="form-control" placeholder="Titre">
          <span class="ion-edit form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <textarea  rows="8" cols="101" placeholder="Description ... " id="desc" name="desc"></textarea>
        </div>
        <div class="form-group has-feedback ">
          <select class="" name="tag" required="true">
            <option value="null" disabled selected="true">Tag</option>
            <option value="sport">Sport</option>
            <option value="musique">Musique</option>
            <option value="cinema">Cinema</option>
          </select>
        </div>
        <div class="form-group has-feedback  col-md alignC">
          <h4>Date de debut :</h4>
          <input id="dateD" name="dateD" type="date" value="">&nbsp;<input id="timeD" name="timeD" type="time" value="">
        </div>
        <div class="form-group has-feedback col-md alignC">
          <h4>Date de fin :</h4>
          <input id="dateF" name="dateF" type="date"  value="">&nbsp;<input id="timeF" name="timeF" type="time" value="">
        </div>
        <div class="form-group has-feedback">
          <input type="button" class="btn btn-info" name="top" value="Payer mon evennement ... ">
        </div>
        <div class="form-group has-feedback">
          <label for="">Vos images</label>
          <input type="file" class="form-control" id="img" name="imgs[]" accept="image/jpeg">
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="putEvnt(<?php if(isset($imgURL)) echo $imgURL ;?>)">Publier</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->

  </div>
