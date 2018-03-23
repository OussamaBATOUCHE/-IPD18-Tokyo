@include('layouts.header')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>TOK</b>YO</a> Store
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Inscrivez-vous</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nom du store">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="file" class="form-control" accept="image/jpeg" >
        <span class="form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8" style="left: 20px;">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> J'accepte les  <a href="#">Contrats</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="addStore()">Enregistrer</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OU -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> S'insrire via
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> S'insrire via
        Google+</a>
    </div>

    <a href="login.html" class="text-center">J'ai déja un compte</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
</body>
@include('layouts.footer')
