@extends('layouts.main-layout')

@section('title', 'Contacts')

@section('content')
    @include('includes.main-navbar')

    <div class="container">
        <div class="card-form">
            <div class="card-title">
                <h2>Hospital №282</h2>
            </div>

            <div class="card-content">
                <p>Phone: +380686511775, +380956856271</p>
                <p>Email: hospital282@gmail.com</p>
                <p>City: Zaporizhzhia</p>
                <p>Address: Oleksandrivska 88</p>
            </div>

            <div class="card-iframe">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5357.673062829132!2d35.16892146588922!3d47.82338526784886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5e0781a0f659%3A0x5357119b3f7448a5!2z0JDQvNCx0LDRgA!5e0!3m2!1sru!2sua!4v1631786900025!5m2!1sru!2sua"
                    width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

@endsection

