<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="navbar-brand">Control panel</div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#controlPanelNavbar" aria-controls="controlPanelNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="controlPanelNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <div class="nav-link dropdown-toggle {!! (Route::is('control-panel.surgeon.add', 'control-panel.surgeon.delete') ? "active" : '') !!}"
                     id="surgeonDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surgeon
                </div>

                <div class="dropdown-menu" aria-labelledby="surgeonDropdown">
                    <a class="dropdown-item" href="{{route('control-panel.surgeon.add')}}">
                        Add
                    </a>

                    <a class="dropdown-item" href="{{route('control-panel.surgeon.delete')}}">
                        Delete
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <div class="nav-link dropdown-toggle {!! (Route::is('control-panel.tariff.add', 'control-panel.tariff.delete') ? "active" : '') !!}"
                     id="tariffDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tariff
                </div>

                <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="tariffDropdown">
                    <a class="dropdown-item" href="{{route('control-panel.tariff.add')}}">
                        Add
                    </a>

                    <a class="dropdown-item" href="{{route('control-panel.tariff.delete')}}">
                        Delete
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <div class="nav-link dropdown-toggle {!! (Route::is('control-panel.patient.add', 'control-panel.patient.delete') ? "active" : '') !!}"
                     id="patientDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Patient
                </div>

                <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="patientDropdown">
                    <a class="dropdown-item" href="{{route('control-panel.patient.add')}}">
                        Add
                    </a>

                    <a class="dropdown-item" href="{{route('control-panel.patient.delete')}}">
                        Delete
                    </a>
                </div>
            </li>
        </ul>

        <div class="switch-side-button-wrapper">
            @if(Auth::check())
                <a class="btn btn-dark navbar-btn" href="{{route('user-side.auth.logout')}}">
                    Logout
                </a>
            @endif

            <a class="btn btn-dark navbar-btn" href="{{route('user-side.main-page')}}">
                User side
            </a>
        </div>
    </div>
</nav>
