@extends('component.main')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <div class="row g-3 align-items-center">
                    <div class="col-sm-3">
                        <label for="inputEmail" class="col-form-label">E-Mail Address</label>
                    </div>
                    <div class="col-md-7">
                        <input type="email" id="inputEmail" class="form-control" aria-described="email">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPassword" class="col-form-label">Password</label>
                    </div>
                    <div class="col-md-7">
                        <input type="password" id="inputPassword" class="form-control" aria-describedby="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7 mt-3">
                        <a href="/register">Do you have account?</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7 mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/changePassword" class="text-derocation-none">Forgot your password?</a>
                </div>
            </div>
            <div class="text-center">
                <h6>OR</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7 mt-3">
                        <img src="{{url('/images/Google_logo.jpg')}}" width="30" height="30">
                        <button type="submit" class="btn btn-light">Google</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7 mt-3">
                        <img src="{{url('/images/Facebook_logo.png')}}" width="30" height="30">
                        <button type="submit" class="btn btn-light">Facebook</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
