<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="{{route('admin')}}" class="navbar-brand">PsychikaGoBrrrrr</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="" class="nav-link">Start</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('patients.index')}}" class="nav-link">Pacjenci</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('wards.index')}}" class="nav-link">Oddziały</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('doctors.index')}}" class="nav-link">Lekarze</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('illnesses.index')}}" class="nav-link">Choroby</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('address.index')}}" class="nav-link">Adresy</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
