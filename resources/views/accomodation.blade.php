@extends('component.main')
@section('content')
    <div class="text-center mb-3">
        <h2>Accomodation</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-mt-3 mb-3">
                <div class="card-columns">
                    <a href="/hotels">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Hotels.png')}}" width="259" height="140">
                                <p class="card-text">Hotels</p>
                            </div>
                        </div>
                    </a>
                    <a href="/apartments">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Apartments.png')}}" width="259" height="140">
                                <p class="card-text">Apartments</p>
                            </div>
                        </div>
                    </a>
                    <a href="/villas">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/Villas.jpg')}}" width="259" height="140">
                                <p class="card-text">Villas</p>
                            </div>
                        </div>
                    </a>
                    <a href="/studios">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/studios.jpg')}}" width="259" height="140">
                                <p class="card-text">Studios</p>
                            </div>
                        </div>
                    </a>
                    <a href="/homes">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('images/Homes.png')}}" width="259" height="140">
                                <p class="card-text">Homes</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
