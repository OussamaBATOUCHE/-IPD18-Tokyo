<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('a/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Oussama BATOUCHE</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Enligne</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Recherche...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN DE NAVIGATION</li>
      <li class="active treeview" onclick="loadDash()">
        <a href="#" >
          <i class="fa fa-dashboard"></i> <span>Menu principale</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Evennements</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#" onclick="loadaddEvnt()"><i class="fa fa-circle-o"></i> Ajouter</a></li>
          <li><a href="#" onclick="loadlistEvnt()"><i class="fa fa-circle-o"></i> Liste des evennements</a></li>
        </ul>
      </li>
      <li>
        <a href="#" onclick="loadlistCmt()">
          <i class="fa fa-envelope"></i> <span>Commentaires</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li>

      <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">Autres</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
