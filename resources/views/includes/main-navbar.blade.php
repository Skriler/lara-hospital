<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">

    <a class="navbar-brand" href="#">Hospital navigation</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {!! (Route::is('user-side.main-page') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.main-page')}}">Main page</a>
            </li>

            <li class="nav-item {!! (Route::is('user-side.list.surgeon') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.list.table', ['table' => 'surgeons'])}}">
                    Surgeons
                </a>
            </li>

            <li class="nav-item {!! (Route::is('user-side.list.tariff') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.list.table', ['table' => 'tariffs'])}}">
                    Tariffs
                </a>
            </li>

            <li class="nav-item {!! (Route::is('user-side.list.patient') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.list.table', ['table' => 'patients'])}}">
                    Patients
                </a>
            </li>

            <li class="nav-item {!! (Route::is('user-side.contacts') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.contacts')}}">
                    Contacts
                </a>
            </li>

            <li class="nav-item {!! (Route::is('user-side.contacts.email-us') ? "active" : '') !!}">
                <a class="nav-link" href="{{route('user-side.contacts.email-us')}}">
                    Email us
                </a>
            </li>
        </ul>
        <div class="switch-side-button-wrapper">
            @if(Auth::check())
                <a class="btn btn-dark navbar-btn" href="{{route('user-side.auth.logout')}}">
                    Logout
                </a>
            @endif

            <a class="btn btn-dark navbar-btn" href="{{route('control-panel.surgeon.add')}}">
                Control panel
            </a>
        </div>
    </div>
</nav>
