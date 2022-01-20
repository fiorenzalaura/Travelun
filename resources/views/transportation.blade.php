@extends('component.main')
@section('content')
    <div class="text-center mb-3">
        <h2>Transportation</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-mt-3 mb-3">
                <div class="card-columns">
                    <a href="/train">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Train.png')}}" width="259" height="140">
                                <p class="card-text">Train</p>
                            </div>
                        </div>
                    </a>
                    <a href="/plane">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Plane.png')}}" width="259" height="140">
                                <p class="card-text">Plane</p>
                            </div>
                        </div>
                    </a>
                    <a href="/cruiseShip">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Cruise_Ship.png')}}" width="259" height="140">
                                <p class="card-text">Cruise Ship</p>
                            </div>
                        </div>
                    </a>
                    <a href="/bus">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Bus.png')}}" width="259" height="140">
                                <p class="card-text">Bus</p>
                            </div>
                        </div>
                    </a>
                    <a href="/carRental">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('images/Car.png')}}" width="259" height="140">
                                <p class="card-text">Car Rental</p>
                            </div>
                        </div>
                    </a>
                    <a href="/bicycle">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('images/Bicycle.png')}}" width="259" height="140">
                                <p class="card-text">Bicycle</p>
                            </div>
                        </div>
                    </a>
                    <a href="/motorcycle">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('images/Motorcycle.png')}}" width="259" height="140">
                                <p class="card-text">Motorcycle</p>
                            </div>
                        </div>
                    </a>
                    <a href="/helicopter">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('images/Helicopter.jpg')}}" width="259" height="140">
                                <p class="card-text">Helicopter</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
