<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood Bank System | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="dist/img/logo.png" alt="Blood Bank System" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blood Bank System</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-5">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </nav>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
	<form action ="login.php">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
					
					  <img class="profile-user-img img-fluid img-circle"
						   src="dist/img/logo.png"
						   alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">
					 <?php 
					echo $_SESSION['user_Email'];
				?>
				</h3>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Blood Type</strong>

                <p class="text-muted" name ="blood_type">
                  <?php 
					echo $_SESSION['blood_type'];
				?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">
					<?php 
					echo $_SESSION['user_address'];
					?>
                </p>
				</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#donate" data-toggle="tab">Donate</a></li>
                  <li class="nav-item"><a class="nav-link" href="#request" data-toggle="tab">Request</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="donate">
                    <h1>Pleas Answer the following question :</h1>
                    <form action="login.php" method="post">
                      <div class="input-group mb-3">
                        <div class="form-check">
                          <label class="mr-lg-5">Do You Carry any blood-born disease ?</label>
                          <input class="form-check-input mr-3" type="radio" name="radio1">
                          <label class="form-check-label mr-lg-5">Yes</label>
                          <input class="form-check-input mr-3" type="radio" name="radio1" checked>
                          <label class="form-check-label mr-3">No</label>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <div class="form-check">
                          <label class="mr-lg-5">Has it been six months since your last donation ?</label>
                          <input class="form-check-input mr-3" type="radio" name="radio2">
                          <label class="form-check-label mr-lg-5">Yes</label>
                          <input class="form-check-input mr-3" type="radio" name="radio2" checked>
                          <label class="form-check-label mr-3">No</label>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <div class="form-check">
                          <label class="mr-lg-5">Do You Smoke ?</label>
                          <input class="form-check-input mr-3" type="radio" name="radio3">
                          <label class="form-check-label mr-lg-5">Yes</label>
                          <input class="form-check-input mr-3" type="radio" name="radio3" checked>
                          <label class="form-check-label mr-3">No</label>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <label>please write the reasons for what you want to donate blood :</label>
                        <input type="text" class="form-control os-textarea" placeholder="">
                      </div>
                      <div class="col-4">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                          Submit
                        </button>
                      </div>
					  
                    </form>
					
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="request">
                    <h1>Please fill in the following information  :</h1>
                    <form action="request.php" method="post">
                      <div class="input-group mb-3">
                        <label>Determine the number of blood units (we can provide you with maximum 10 units) </label>
                        <input type="text" class="form-control os-textarea" placeholder="">
                      </div>
                      <div class="input-group mb-3">
                        <label>The cause of the injured person: </label>
                        <input type="text" class="form-control os-textarea" placeholder="">
                      </div>
                      <div class="col-4">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info2">
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action ="login.php">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputName" placeholder="Name" name="name">
						  <?php
								echo $_SESSION['user_name'];
								?>
							</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <textarea type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
							<?php
								echo $_SESSION['user_Email'];
								?>
							</textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Location" name="location">
							<?php
								echo $_SESSION['user_address'];
								?>
						  </textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputSkills" placeholder="Phone" name="phone">
							<?php
								echo $_SESSION['user_mobile'];
								?>
						  </textarea>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Blood Type</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="blood_type" placeholder="Location" name="blood_type">
							<?php
								echo $_SESSION['blood_type'];
								?>
						  </textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
	  </form>
    </section>
    <!-- /.content -->
  </div>
</div>

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
		
        <h4 class="modal-title">Successfully For Donat</h4>
		<?php
			echo '<br><br><br>';
			echo 'Blood Bank Name: ';
			echo $banks_name;
			echo '<br>';
			echo 'Blood Bank Address: ';
			echo $banks_address;
			echo '<br>';
			echo 'Blood Bank Phone: ';
			echo $banks_phone;
			?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Thanks For Using Our Application , <br> pleas wait for our letter to inform you the date of the donation and the location .</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-info2">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
		
        <h4 class="modal-title">Successfully</h4>
		<?php
			echo '<br><br><br>';
			echo 'Blood Bank Name: ';
			echo $banks_name;
			echo '<br>';
			echo 'Blood Bank Address: ';
			echo $banks_address;
			echo '<br>';
			echo 'Blood Bank Phone: ';
			echo $banks_phone;
			?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Thanks For Using Our Application , <br> We will try to provide you with your request as soon as possible .</p>
      </div>
	  
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- /.modal -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
