<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Szpital psychiatryczny</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
@include('shared/admin_nav')
<div class="container mb-5">
    <h2>Pacjeci</h2>
    <form action="{{route('filterPatients')}}" method="get">
        <div class="input-group mb-3">
            <input name="filter" type="text" class="form-control" aria-label="email"
                   aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                Filtruj
            </button>
        </div>
    </form>

    <table class="table-striped table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imie i Nazwisko</th>
            <th scope="col">Wiek</th>
            <th scope="col">Tel.</th>
            <th scope="col">Pesel</th>
            <th scope="col">Przypisany doktor</th>
            <th scope="col">Adres</th>
            <th scope="col">Choroby</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
        <tr>
            <th scope="row">{{ $patient->id }}</th>
            <td>{{$patient->first_name}} {{$patient->last_name}}</td>
            <td>{{$patient->age}}</td>
            <td>{{$patient->phone_number}}</td>
            <td>{{$patient->pesel}}</td>
            <td>{{$patient->doctor->first_name}} {{$patient->doctor->last_name}}</td>
            <td><button type="button" class="btn btn-info btn-sm ms-3 me-3"
                        data-bs-toggle="modal"
                        data-bs-target="#ModalAddress{{ $patient->id }}">
                    Info
                </button></td>
            <td>
                <button type="button" class="btn btn-outline-dark btn-sm ms-3 me-3"
                        data-bs-toggle="modal"
                        data-bs-target="#ModalPatient{{ $patient->id }}">
                    Info
                </button>
                <div class="modal fade" id="ModalPatient{{ $patient->id }}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Informacje o chorobach</h5>
                                <button type="button" class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$patient->first_name}} {{$patient->last_name}}</h5>
                                        <ul class="list-group list-group-flush">
                                            @foreach($patient->illnesses as $illness)
                                            <li class="list-group-item d-flex align-items-center justify-content-between">{{$illness->name}}
                                                <form action="{{route('destroy_illness_patient',['patient'=>$patient,'illness'=>$illness]) }}" method="POST" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń
                                                    </button>
                                                </form>   </li>
                                            @endforeach
                                                <li class="list-group-item">
                                                    <form method="POST" action="{{ route('insert_illness_patient') }}" class="d-flex align-items-center justify-content-between row">
                                                        @csrf
                                                        <input name="patient_id" value="{{$patient->id}}" hidden>
                                                        <select name="illness_id" class="form-select w-75" aria-label="Choroba">
                                                            @foreach($illnesses as $illness)
                                                                @if($patient->illnesses->contains($illness))
                                                                    @continue
                                                                @endif
                                                                <option value="{{ $illness->id }}">{{ $illness->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button type="submit" class="w-25 btn btn-sm btn-success">Dodaj</button>
                                                    </form>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="button" class="btn btn-primary">Save
                                    changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn btn-sm btn-primary editDoctorBtn" data-bs-toggle="modal"
                        data-bs-target="#ModalEditPatients{{ $patient->id }}"> Edytuj
                </button>
                <form action="{{route('destroy_illness_patient', ['patient' => $patient->id, 'illness' => $illness->id]) }}" method="POST" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń</button>
                </form>

            </td>

            <div class="modal fade" id="ModalEditPatients{{$patient->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edytuj pacjeta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <form id="EditDoctorsForm" action="{{route('patients.update',['patient'=>$patient])}}"
                              class="row g-3" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input value="{{$patient->first_name}}" name="first_name" type="text" class="form-control"
                                               placeholder="Imie" aria-label="Imie">
                                        <input value="{{$patient->last_name}}" name="last_name" type="text" class="form-control"
                                               placeholder="Nazwisko"
                                               aria-label="Nazwisko">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input value="{{$patient->age}}" name="age" type="number" class="form-control"
                                               placeholder="Wiek" aria-label="Wiek">
                                        <input value="{{$patient->phone_number}}" name="phone_number" type="text" class="form-control"
                                               placeholder="Tel." aria-label="Tel.">
                                    </div>
                                    <input value="{{$patient->pesel}}" name="pesel" type="text" class="form-control mb-3"
                                           id="pesel" placeholder="PESEL"
                                           aria-label="PESEL">
                                    <div class="input-group mb-3">
                                        <input value="{{$patient->height}}" name="height" type="number" class="form-control"
                                               placeholder="Wzrost"
                                               aria-label="Wzrost">
                                        <input value="{{$patient->weight}}" name="weight" type="number" class="form-control"
                                               placeholder="Waga" aria-label="Waga">
                                    </div>
                                    <div class="input-group mb-3">
                                        {{--TODO: zrobic ze jak sie pojawia modal edycji to jest ustawiana wartosc wojewodztwa--}}
                                        <select name="voivodeship" class="form-select" aria-label="Województwo">
                                            <option value="dolnośląskie">Dolnośląskie</option>
                                            <option value="kujawsko-pomorskie">Kujawsko-Pomorskie</option>
                                            <option value="lubelskie">Lubelskie</option>
                                            <option value="lubuskie">Lubuskie</option>
                                            <option value="łódzkie">Łódzkie</option>
                                            <option value="małopolskie">Małopolskie</option>
                                            <option value="mazowieckie">Mazowieckie</option>
                                            <option value="opolskie">Opolskie</option>
                                            <option value="podkarpackie">Podkarpackie</option>
                                            <option value="podlaskie">Podlaskie</option>
                                            <option value="pomorskie">Pomorskie</option>
                                            <option value="śląskie">Śląskie</option>
                                            <option value="świętokrzyskie">Świętokrzyskie</option>
                                            <option value="warmińsko-mazurskie">Warmińsko-Mazurskie</option>
                                            <option value="wielkopolskie">Wielkopolskie</option>
                                            <option value="zachodniopomorskie">Zachodniopomorskie</option>
                                        </select>

                                        <input value="{{$patient->address->city}}" name="city" type="text" class="form-control"
                                               placeholder="Miasto"
                                               aria-label="Miasto">
                                        <input value="{{$patient->address->street}}" name="street" type="text" class="form-control"
                                               placeholder="Ulica"
                                               aria-label="Ulica">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input value="{{$patient->address->house_number}}" name="house_number" type="number" class="form-control"
                                               placeholder="Nr. domu"
                                               aria-label="Nr. domu">
                                        <span class="input-group-text">/</span>
                                        <input value="{{$patient->address->flat_number}}" name="flat_number" type="number" class="form-control"
                                               placeholder="Nr. Mieszkania"
                                               aria-label="Nr. Mieszkania">
                                        <input value="{{$patient->address->postal_code}}" name="postal_code" type="text" class="form-control mb-3"
                                               id="postcode"
                                               placeholder="Kod pocztowy"
                                               aria-label="Kod pocztowy">
                                    </div>
                                    <div class="input-group mb-3">
                                        <select name="doctor_id" class="form-select"
                                                aria-label="Doktor">
                                            @foreach($doctors as $doctor)
                                                <option value="{{ $doctor->id }}">{{$doctor->first_name}} {{$doctor->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ModalAddress{{ $patient->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adres</h5>
                                <button type="button" class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <input name="e_id" id="e_id" type="hidden">
                                    <div class="input-group mb-3">
                                        <input disabled name="e_voivodeship" id="e_voivodeship" type="text"
                                               class="form-control" placeholder="Województwo"
                                               aria-label="Województwo" value="{{$patient->address->voivodeship}}">
                                        <input disabled name="e_city" id="e_city" type="text" class="form-control"
                                               placeholder="Miasto" aria-label="Miasto" value="{{$patient->address->city}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input disabled name="e_street" id="e_street" type="text" class="form-control"
                                               placeholder="Ulica" aria-label="Ulica" value="{{$patient->address->street}}">
                                        <input disabled name="e_postal_code" id="e_postal_code" type="text"
                                               class="form-control" placeholder="Kod pocztowy"
                                               aria-label="Kod pocztowy" value="{{$patient->address->postal_code}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input disabled name="e_house_number" id="e_house_number" type="text"
                                               class="form-control" placeholder="Nr. domu" aria-label="Nr. domu" value="{{$patient->address->house_number}}">
                                        <!--<input type="t" class="forontrol" placeholder="Oddział" aria-label="Oddział">-->
                                        <input disabled name="e_flat_number" id="e_flat_number" type="text"
                                               class="form-control" placeholder="Nr. mieszkania"
                                               aria-label="Nr. mieszkania" value="{{$patient->address->flat_number}}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save
                                    changes
                                </button>
                            </div>

                    </div>
                </div>
            </div>
        </tr>
        @endforeach


        <tr class="mb-3">
            <td colspan="9" class="text-center">
                <button type="button" class="btn btn-primary ms-3 me-3"
                        data-bs-toggle="modal"
                        data-bs-target="#ModalPatients">
                    Dodaj pacjenta
                </button>
                <div class="modal fade" id="ModalPatients" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('patients.store')}}" method="POST" class="row g-3">
                                @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dodaj
                                    pacjenta</h5>
                                <button type="button" class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input name="first_name" type="text" class="form-control"
                                                   placeholder="Imie" aria-label="Imie">
                                            <input name="last_name" type="text" class="form-control"
                                                   placeholder="Nazwisko"
                                                   aria-label="Nazwisko">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="age" type="number" class="form-control"
                                                   placeholder="Wiek" aria-label="Wiek">
                                            <input name="phone_number" type="text" class="form-control"
                                                   placeholder="Tel." aria-label="Tel.">
                                        </div>
                                        <input name="pesel" type="text" class="form-control mb-3"
                                               id="pesel" placeholder="PESEL"
                                               aria-label="PESEL">
                                        <div class="input-group mb-3">
                                            <input name="height" type="number" class="form-control"
                                                   placeholder="Wzrost"
                                                   aria-label="Wzrost">
                                            <input name="weight" type="number" class="form-control"
                                                   placeholder="Waga" aria-label="Waga">
                                        </div>
                                        <div class="input-group mb-3">
                                            <select name="voivodeship" class="form-select" aria-label="Województwo">
                                                <option value="dolnośląskie">Dolnośląskie</option>
                                                <option value="kujawsko-pomorskie">Kujawsko-Pomorskie</option>
                                                <option value="lubelskie">Lubelskie</option>
                                                <option value="lubuskie">Lubuskie</option>
                                                <option value="łódzkie">Łódzkie</option>
                                                <option value="małopolskie">Małopolskie</option>
                                                <option value="mazowieckie">Mazowieckie</option>
                                                <option value="opolskie">Opolskie</option>
                                                <option value="podkarpackie" selected>Podkarpackie</option>
                                                <option value="podlaskie">Podlaskie</option>
                                                <option value="pomorskie">Pomorskie</option>
                                                <option value="śląskie">Śląskie</option>
                                                <option value="świętokrzyskie">Świętokrzyskie</option>
                                                <option value="warmińsko-mazurskie">Warmińsko-Mazurskie</option>
                                                <option value="wielkopolskie">Wielkopolskie</option>
                                                <option value="zachodniopomorskie">Zachodniopomorskie</option>
                                            </select>

                                            <input name="city" type="text" class="form-control"
                                                   placeholder="Miasto"
                                                   aria-label="Miasto">
                                            <input name="street" type="text" class="form-control"
                                                   placeholder="Ulica"
                                                   aria-label="Ulica">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="house_number" type="number" class="form-control"
                                                   placeholder="Nr. domu"
                                                   aria-label="Nr. domu">
                                            <span class="input-group-text">/</span>
                                            <input name="flat_number" type="number" class="form-control"
                                                   placeholder="Nr. Mieszkania"
                                                   aria-label="Nr. Mieszkania">
                                            <input name="postal_code" type="text" class="form-control mb-3"
                                                   id="postcode"
                                                   placeholder="Kod pocztowy"
                                                   aria-label="Kod pocztowy">
                                        </div>
                                        <div class="input-group mb-3">
                                            <select name="doctor_id" class="form-select"
                                                    aria-label="Doktor">
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{$doctor->first_name}} {{$doctor->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save
                                    changes
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mb-2">
        {{ $patients->links() }}
    </div>
    <form action="{{route('exportPatients')}}" method="get" class="d-flex justify-content-center mb-2">
        <button class="btn btn-sm btn-warning" type="submit">Export to CSV</button>
    </form>
</div>


<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>


</body>

</html>
