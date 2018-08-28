
<!-- divisi navigasi -->
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?hal=all_product" style="color: white;"><img src="img/img_default/logo_polyframe.png" alt="" width="200px" height="48px" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a  style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">Product <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu"  style="color: white;">
                  <li><a href="?hal=all_product">All Product</a></li>
                  <li><a href="?hal=small">Small Product</a></li>
                  <li><a href="?hal=medium">Medium Product</a></li>
                  <li><a href="?hal=large">Large Pproduct</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" method="post" action="?hal=cari">
              <div class="form-group">
                <input type="text" name="cari" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?hal=contact" style="color: white;"><b>Contact</b></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: white;"><b>Login</b> <span class="caret"></span></a>
      			<ul id="login-dp" class="dropdown-menu">
      				<li>
      					 <div class="row">
      							<div class="col-md-12">
      								Login
      								 <form class="form" role="form" method="post" action="proses_login.php" accept-charset="UTF-8" id="login-nav">
      										<div class="form-group">
      											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
      											 <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
      										</div>
      										<div class="form-group">
      											 <label class="sr-only" for="exampleInputPassword2">Password</label>
      											 <input name="password" type="password"  class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                   <div class="help-block text-right"><a href="">Lupa Password ?</a></div>
      										</div>
      										<div class="form-group">
      											 <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
      										</div>
      										
      								 </form>
      							</div>
      							<div class="bottom text-center">
      								Belum punya akun ? <a href="?hal=daftar" id="daftar" ><b>Daftar Disini</b></a>
      							</div>
      					 </div>
      				</li>
      			</ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
<!-- javascript -->
  <!-- <script src="assets/vendor/jquery/jquery.js"></script> -->
