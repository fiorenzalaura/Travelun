<!--
    Nama : Fiorenza Fransisca Laura
    NIM : 2301853943
    Kelas : LE01
 -->
@extends('component.main')
@section('content')
    <div class="container">
        <div class="card mt-4 mb-4">
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="font-weight-bold">From</label>
                            <select id="inputFrom" class="form-control form-control-sm"></select>
                            <span id="txtErrInputFrom" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="font-weight-bold">To</label>
                            <select id="inputTo" class="form-control form-control-sm"></select>
                            <span id="txtErrInputTo" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="font-weight-bold">Depart</label>
                            <input type="date" id="inputDepart" class="form-control form-control-sm">
                            <span id="txtErrInputDepart" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="font-weight-bold">Return</label>
                            <input type="date" id="inputReturn" class="form-control form-control-sm">
                            <span id="txtErrInputReturn" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <button class="btn btn-sm btn-primary" onclick="search()">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-mt-5">
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <h3>Partner Travelun</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p>Kami bekerja sama dengan berbagai penyedia jasa transportasi, akomodasi, tour, dan penyedia lainnya
                            yang terbaik dan ternyaman dengan harga terjangkau untuk Anda.</p>
                    </div>
                    <!-- xs sm md lg xl-->
                    <div class="col-md-7">
                        <img src="{{url('/images/Partner.png')}}" class="rounded float-right" width="512" height="156">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <a href="/detailPartner">Detail Partner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer')
    <script type="application/javascript">
        function search()
        {
            resetErrorMessage();
            validate();
        }

        function validate()
        {
            var from = $('#inputFrom').val();
            var to = $('#inputTo').val();
            var depart = $('#inputDepart').val();
            var return = $('#inputReturn').val();

            if(from == '')
                $('#txtErrInputFrom').html('<small>Must be filled</small>');

            if(to == '')
                $('#txtErrInputTo').html('<small>Must be filled</small>');

            if(depart == '')
                $('#txtErrInputDepart').html('<small>Must be filled</small>');

            if(return == '')
                $('#txtErrInputReturn').html('<small>Must be filled</small>');
        }

        function resetErrorMessage()
        {
            $('#txtErrInputFrom').html('');
            $('#txtErrInputTo').html('');
            $('#txtErrInputDepart').html('');
            $('#txtErrInputReturn').html('');
        }
    </script>
@endsection
