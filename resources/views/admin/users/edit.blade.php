@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                    <li class="active">Edit User</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit User -> {{ $user->name }}</h3>
                    {{ Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id],'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label for="sponser_id" class="col-sm-3 control-label">Sponser Id</label>
                        <div class="col-sm-4">
                            <input type="text" name="sponser_id"
                                   class="form-control @error('sponser_id') is-invalid @enderror"
                                   required autocomplete="sponser_id" value="{{ $user->sponser_id }}" autofocus
                                   id="sponser_id">
                            @error('sponser_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="first_name" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="first_name"
                                   class="form-control @error('first_name') is-invalid @enderror"
                                   required autocomplete="first_name" value="{{ $user->first_name }}" autofocus
                                   id="first_name">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="last_name"
                                   class="form-control @error('last_name') is-invalid @enderror"
                                   required autocomplete="last_name" value="{{ $user->last_name }}" autofocus
                                   id="last_name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">User Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="user_name"
                                   class="form-control @error('user_name') is-invalid @enderror"
                                   required autocomplete="user_name" value="{{ $user->user_name }}" autofocus
                                   id="user_name">
                            @error('user_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ $user->email }}" required autocomplete="email" autofocus id="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="col-sm-3 control-label">Phone Number</label>
                        <div class="col-sm-4">
                            <input type="phone_number" name="phone_number"
                                   class="form-control @error('phone_number') is-invalid @enderror"
                                   value="{{ $user->phone_number }}" required autocomplete="phone_number" autofocus
                                   id="phone_number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   placeholder="if you won't change password, leave it empty.."
                                   autocomplete="current-password" id="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-4">
                            <input type="checkbox" class="js-switch" data-color="#99d683"
                                   name="active" value="1" {{ ($user->active) ?'checked':'' }} />
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('users.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit Deposit</h3>
                    {{ Form::model($user, ['method' => 'post','route' => ['admin-deposit', $user->id],'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label for="active_deposit" class="col-sm-3 control-label">Active Deposit</label>
                        <div class="col-sm-4">
                            <input type="text" name="active_deposit"
                                   class="form-control @error('active_deposit') is-invalid @enderror"
                                   required autocomplete="active_deposit" value="@if($deposit){{$deposit->active_deposit}}@endif" autofocus
                                   id="active_deposit">
                            @error('active_deposit')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_deposit" class="col-sm-3 control-label">New Deposit</label>
                        <div class="col-sm-4">
                            <input type="text" name="new_deposit"
                                   class="form-control @error('new_deposit') is-invalid @enderror"
                                   required autocomplete="new_deposit" value="@if($deposit){{$deposit->new_deposit}}@endif" autofocus
                                   id="new_deposit">
                            @error('new_deposit')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matured_deposit" class="col-sm-3 control-label">Matured Deposit</label>
                        <div class="col-sm-4">
                            <input type="text" name="matured_deposit"
                                   class="form-control @error('matured_deposit') is-invalid @enderror"
                                   required autocomplete="matured_deposit" value="@if($deposit){{$deposit->matured_deposit}}@endif" autofocus
                                   id="matured_deposit">
                            @error('matured_deposit')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="released_deposit" class="col-sm-3 control-label">Released Deposit</label>
                        <div class="col-sm-4">
                            <input type="text" name="released_deposit"
                                   class="form-control @error('released_deposit') is-invalid @enderror"
                                   required autocomplete="released_deposit" value="@if($deposit){{$deposit->released_deposit}}@endif" autofocus
                                   id="released_deposit">
                            @error('released_deposit')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('users.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>

        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit Payouts</h3>
                    {{ Form::model($user, ['method' => 'post','route' => ['admin-payout', $user->id],'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label for="total_payout" class="col-sm-3 control-label">Total Payouts</label>
                        <div class="col-sm-4">
                            <input type="text" name="total_payout"
                                   class="form-control @error('total_payout') is-invalid @enderror"
                                   required autocomplete="total_payout" value="@if($payout){{$payout->total_payout}}@endif" autofocus
                                   id="total_payout">
                            @error('total_payout')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_deposit" class="col-sm-3 control-label">Pending Payouts</label>
                        <div class="col-sm-4">
                            <input type="text" name="pending_payout"
                                   class="form-control @error('pending_payout') is-invalid @enderror"
                                   required autocomplete="pending_payout" value="@if($payout){{$payout->pending_payout}}@endif" autofocus
                                   id="pending_payout">
                            @error('pending_payout')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('users.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>

        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">My Refferal</h3>
                    {{ Form::model($user, ['method' => 'post','route' => ['admin-refferal', $user->id],'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label for="today_interest" class="col-sm-3 control-label">Interest Today</label>
                        <div class="col-sm-4">
                            <input type="text" name="today_interest"
                                   class="form-control @error('today_interest') is-invalid @enderror"
                                   required autocomplete="today_interest" value="@if($refferal){{$refferal->today_interest}}@endif" autofocus
                                   id="today_interest">
                            @error('today_interest')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weekly_interest" class="col-sm-3 control-label">Interest This Week</label>
                        <div class="col-sm-4">
                            <input type="text" name="weekly_interest"
                                   class="form-control @error('weekly_interest') is-invalid @enderror"
                                   required autocomplete="weekly_interest" value="@if($refferal){{$refferal->weekly_interest}}@endif" autofocus
                                   id="weekly_interest">
                            @error('weekly_interest')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('users.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>

        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Interest Earn</h3>
                    {{ Form::model($user, ['method' => 'post','route' => ['admin-interest', $user->id],'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label for="today_interest" class="col-sm-3 control-label">Interest Today</label>
                        <div class="col-sm-4">
                            <input type="text" name="today_interest"
                                   class="form-control @error('today_interest') is-invalid @enderror"
                                   required autocomplete="today_interest" value="@if($interest){{$interest->today_interest}}@endif" autofocus
                                   id="today_interest">
                            @error('today_interest')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weekly_interest" class="col-sm-3 control-label">Interest This Week</label>
                        <div class="col-sm-4">
                            <input type="text" name="weekly_interest"
                                   class="form-control @error('weekly_interest') is-invalid @enderror"
                                   required autocomplete="weekly_interest" value="@if($interest){{$interest->weekly_interest}}@endif" autofocus
                                   id="weekly_interest">
                            @error('weekly_interest')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="monthly_interest" class="col-sm-3 control-label">Interest This Month</label>
                        <div class="col-sm-4">
                            <input type="text" name="monthly_interest"
                                   class="form-control @error('monthly_interest') is-invalid @enderror"
                                   required autocomplete="monthly_interest" value="@if($interest){{$interest->monthly_interest}}@endif" autofocus
                                   id="monthly_interest">
                            @error('monthly_interest')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interest_earning" class="col-sm-3 control-label">Interest Earnings</label>
                        <div class="col-sm-4">
                            <input type="text" name="interest_earning"
                                   class="form-control @error('interest_earning') is-invalid @enderror"
                                   required autocomplete="interest_earning" value="@if($interest){{$interest->interest_earning}}@endif" autofocus
                                   id="interest_earning">
                            @error('interest_earning')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('users.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>
@stop

