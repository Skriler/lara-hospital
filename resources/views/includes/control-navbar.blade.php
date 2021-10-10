<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">

    <a class="navbar-brand" href="#">Control panel</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="surgeonDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surgeon
                </a>

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
                <a class="nav-link dropdown-toggle" id="tariffDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tariff
                </a>

                <div class="dropdown-menu" aria-labelledby="tariffDropdown">
                    <a class="dropdown-item" href="{{route('control-panel.tariff.add')}}">
                        Add
                    </a>

                    <a class="dropdown-item" href="{{route('control-panel.tariff.delete')}}">
                        Delete
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="patientDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Patient
                </a>

                <div class="dropdown-menu" aria-labelledby="patientDropdown">
                    <a class="dropdown-item" href="{{route('control-panel.patient.add')}}">
                        Add
                    </a>

                    <a class="dropdown-item" href="{{route('control-panel.patient.delete')}}">
                        Delete
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
