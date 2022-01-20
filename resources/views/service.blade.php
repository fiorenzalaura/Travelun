@extends('component.main')
@section('content')
    <div class="text-center mb-3">
        <h2>Service</h2>
        <div class="container">
            <div class="card-deck">
                <a href="/contact">
                    <div class="card">
                        <img class="card-img-top" src="{{url('/images/contact.png')}}" width="459" height="240">
                        <div class="card-body text-center text-dark">
                            <p class="card-text">Contacts</p>
                        </div>
                    </div>
                </a>
                <a href="/liveContact">
                    <div class="card">
                        <div class="card-body text-center text-dark">
                            <iframe src="https://tokbox.com/embed/embed/ot-embed.js?embedId=[YOUR EMBED ID]&iframe=true&room=DEFAULT" allow="microphone; camera" width="459" height="240"></iframe>
                            <p class="card-text">Live Contact</p>
                        </div>
                    </div>
                </a>
                <a href="/robotContact">
                    <div class="card">
                        <div class="card-body text-center text-dark">
                            <img src="{{url('/images/robot_contact.jpg')}}" width="209" height="240">
                            <p class="card-text">Robot</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="otEmbedContainer" style="width:[YOUR EMBED WIDTH]; height:[YOUR EMBED HEIGHT]"></div>
    <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=[YOUR EMBED ID]&room=DEFAULT"></script>
@endsection
