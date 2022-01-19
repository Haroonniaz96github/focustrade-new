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
                    <h4 class="page-title">FINANCE Dashboard</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Users / Verify Deposit</a></li>
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
                    <div class="">
                        <div class="row row-in">
                            <!--<table>-->
                            <!--  <tr>-->
                            <!--    <th>Id</th>-->
                            <!--    <th>New Deposit</th>-->
                            <!--    <th>Active Deposit</th>-->
                            <!--    <th>Matured Deposit</th>-->
                            <!--    <th>released</th>-->
                            <!--    <th>slip</th>-->
                            <!--    <th>Approve Payment</th>-->
                               
                            <!--  </tr>-->
                              
                            <!--  <tr>-->
                            <!--    <td> {{ $user->id }} </td>-->
                            <!--    <td>{{ $user->new_deposit }}</td>-->
                            <!--    <td>{{ $user->active_deposit }}</td>-->
                            <!--    <td>{{ $user->matured_deposit }}</td>-->
                            <!--    <td>{{ $user->released_deposit }}</td>-->
                            <!--    <td>{{ $user->slip }}</td>-->
                            <!--    <td><a href={{"approve/".$user->id}} class="btn btn-rounded btn-danger" style="width:100%">Approve</a></td>-->
                               
                            <!--  </tr>-->
                               
                            <!--</table>-->
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
            <!-- /.row -->
                            <form class="form-horizontal" method="post" action="{{ route ('update_user') }}">
                                @csrf
                                @if($user->slip!=NULL)
                                <img src="{{ $user->slip }}">
                                @endif
                                
                                <input type="hidden" name="id" value="{{ $user->id }}"/>
                                <div class="form-group">
                                    <label for="active_deposit" class="col-sm-3 control-label">Active Deposit</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="active_deposit"
                                               class="form-control @error('active_deposit') is-invalid @enderror"
                                               required autocomplete="active_deposit" value="{{ $user->active_deposit }}" autofocus
                                               id="active_deposit" readonly>
                                        @error('sponser_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="new_deposit" class="col-sm-3 control-label">New Deposit</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="new_deposit"
                                               class="form-control @error('sponser_id') is-invalid @enderror"
                                               required autocomplete="new_deposit" value="{{ $user->new_deposit }}" autofocus
                                               id="new_deposit" readonly>
                                        @error('new_deposit')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-4 text-center">
                                        <a href="{{ route('finance.verify_users') }}" class="btn btn-info waves-effect waves-light
                                         m-t-10"><i class="fa fa-backward"></i> Back</a>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">Approve
                                        </button>
                                    </div>
                                </div>
                            </form>
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
 