
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Simple Tables</title>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/solid.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/light.css') }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>


    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/flooop.png"  class="brand-image img-rectangle"
           style="opacity:1">
      <span class="brand-text font-weight-light"><h3>Flooop</h3></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/boy.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-tasks"></i>
              <p>Management</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fa fa-lock"></i>
                  <p>Permissions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/roles') }}" class="nav-link">
                <i class="nav-icon fa fa-key"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Role Management</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 30%">Name</th>
                      <th>Role</th>
                      <th style="width: 15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <!-- 1st Row -->
                    <tr>
                      <td>1.</td>
                      <td>Seng Longfhy</td>
                      <td>
                          Admin
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>
                    <!-- 2nd Row -->
                    <tr>
                      <td>2.</td>
                      <td>Ny SreyLen</td>
                      <td>
                          Editor
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>
                    <!-- 3rd Row -->
                    <tr>
                      <td>3.</td>
                      <td>Loep Tinun</td>
                      <td>
                          Editor
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>
                    <!-- 4th Row -->
                    <tr>
                      <td>4.</td>
                      <td>Phorn Sovanrath</td>
                      <td>
                          Editor
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td>5.</td>
                      <td>Sath Panhasometh</td>
                      <td>
                          Editor
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td>6.</td>
                      <td>Hak Tong</td>
                      <td>
                          Editor
                      </td>
                      <td>
                        <a class="btn btn-primary" >Create</a>
                        <a class="btn btn-warning" >Edit</a>
                        <a class="btn btn-danger" >Delete</a>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">

    </div>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>

</body>
</html>
