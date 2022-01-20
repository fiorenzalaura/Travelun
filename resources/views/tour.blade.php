@extends('component.main')
@section('content')
    <div class="text-center mb-3">
        <h2>Tour Package</h2>
        <div class="container mt-3 col-sm-10 mb-3">
            <input type="text" class="form-control" placeholder="Search...">
            <br>
            <div class="list-card-group">
                <a href="/all" class="list-card-group-item text-dark col-md-3">All</a>
                <a href="/music" class="list-card-group-item text-dark col-md-3">Music</a>
                <a href="/culinary" class="list-card-group-item text-dark col-md-3">Culinary</a>
                <a href="/outdoor" class="list-card-group-item text-dark col-md-3">Outdoor</a>
                <a href="/fun" class="list-card-group-item text-dark col-md-3">Fun</a>
                <a href="/history" class="list-card-group-item text-dark col-md-3">History</a>
                <a href="/relaxation" class="list-card-group-item text-dark col-md-3">Relaxation</a>
                <a href="/family" class="list-card-group-item text-dark col-md-3">Family</a>
            </div>
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
@endsection
