@extends('component.main')
@section('content')
    <div class="text-center mb-3">
        <h2>Promo</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-mt-3 mb-3">
                <div class="card-columns limit-9">
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/tiket_pesawat.jpg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/rental_mobil.jpg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/bus_promo.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/paket_tiket.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/promo_hotel.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/kereta_promo.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/hotel_luar_negeri.jpg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/rental_mobil.jpg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/bus_promo.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/promo_hotel.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                    <a href="/detail">
                        <div class="card bg-light">
                            <div class="card-body text-center text-dark">
                                <img src="{{url('/images/paket_tiket.jpeg')}}" width="259" height="140">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="/previous" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="/one">1</a></li>
                        <li class="page-item"><a class="page-link" href="/two">2</a></li>
                        <li class="page-item"><a class="page-link" href="/three">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="/next" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
