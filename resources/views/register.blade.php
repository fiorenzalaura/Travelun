@extends('component.main')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <div class="row g-3 align-items-center">
                    <div class="col-sm-3 text-end">
                        <label for="inputName" class="col-form-label">Name</label>
                    </div>
                    <div class="col-md-7">
                        <input type="name" id="inputName" class="form-control" aria-described="name">
                    </div>
                    <div class="col-sm-3 text-end">
                        <label for="inputEmail" class="col-form-label">E-Mail Address</label>
                    </div>
                    <div class="col-md-7">
                        <input type="email" id="inputEmail" class="form-control" aria-described="email">
                    </div>
                    <div class="col-sm-3 text-end">
                        <label for="inputPassword" class="col-form-label">Password</label>
                    </div>
                    <div class="col-md-7">
                        <input type="password" id="inputPassword" class="form-control" aria-describedby="password">
                    </div>
                    <div class="col-sm-3 text-end">
                        <label for="confirm" class="col-form-label">Confirm Password</label>
                    </div>
                    <div class="col-md-7">
                        <input type="confirm" id="inputConfirm" class="form-control" aria-described="confirm">
                    </div>
                    <div class="col-sm-3 text-end">
                        <label for="gender" class="col-form-label">Gender</label>
                    </div>
                    <div class="col-md-7">
                        <select name="gender" id="inputGender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7 mt-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
