<!DOCTYPE html>
<html lang="en">
<head>
    @php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16"
          href="@isset($setting['favicon']) {{ asset('uploads/'.$setting['favicon']) }}@endisset">
    <title>@isset($setting['site_title']) {{ $setting['site_title'] }}@endisset</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/admin-dashboard.css') }}">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
@include('finance.partials._pre_loader')
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('finance.partials._nav_bar')
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('finance.partials._side_bar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Finance</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Different data widgets -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <table>
                              <tr>
                                <th>Id</th>
                                <!--<th>active</th>-->
                                <th>New Deposit</th>
                                <th>Active Deposit</th>
                                <!--<th>released</th>-->
                                <!--<th>slip</th>-->
                                <th>View Details</th>
                               
                              </tr>
                             @foreach ($deposit as $d)
                                <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->new_deposit }}</td>
                                <td>{{ $d->active_deposit }}</td>
                                <!--<td>{{ $d->released_deposit }}</td>-->
                                <!--<td><a href="uploads/{{ $d->slip }}" target="_blank"><img src="uploads/{{ $d->slip }}" width="50px"/></a></td>-->
                                <td><a href={{"user/".$d->id}} class="btn btn-rounded btn-danger" style="width:100%">View</a></td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center">{{ date('Y') }} &copy; @isset($setting['copy_right']){{ $setting['copy_right'] }}@endisset </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ mix('js/admin-dashboard.js') }}"></script>
@yield('scripts')
</body>

</html>
 