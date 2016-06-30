@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('dash.partials.errors')
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        @include('dash.partials.input', [
                            'name' => 'firstname',
                            'label' => 'First Name'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'lastname',
                            'label' => 'Last Name'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'email',
                            'type' => 'email'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'phone'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'username'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'password',
                            'label' => 'Password',
                            'type' => 'password'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'password_confirmation',
                            'label' => 'Confirm Password',
                            'type' => 'password'
                        ])

                        @include('dash.partials.input', [
                            'name' => 'adddress'
                        ])

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
