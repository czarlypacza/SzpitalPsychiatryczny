@php
    use App\Models\Doctor;
@endphp
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

<div class="container mb-3">
    <h2>Oddziały</h2>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                    Filtracja
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="{{route('filterWards')}}" method="get">
                        @csrf
                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="oddzial" name="oddzial" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Oddział</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="ward_name" id="ward_name" >
                            </div>
                        </div>
                        <div class="row inline-flex justify-content-evenly mt-3">
                            <button class="btn btn-outline-secondary mt-3" type="submit" id="button-addon2">
                                Filtruj
                            </button>
                            <a class="btn btn-outline-info" href="{{route('wards.index')}}"> Wyczysc</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion accordion-flush" id="accordionFlushExample">

        @if(count($wards)>0)
        @foreach ($wards as $ward)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{$ward->id}}" aria-expanded="false"
                            aria-controls="flush-collapse{{$ward->id}}">
                        {{$ward->ward_name}}
                    </button>
                </h2>
                <div id="flush-collapse{{$ward->id}}" class="accordion-collapse collapse"
                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <table class="table-striped table ">
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

                                        @php
                                            $doctorIds = Doctor::where('ward_id', $ward->id)->pluck('id')->toArray();
                                        @endphp

                                        @foreach($patients->whereIn('doctor_id',$doctorIds)->all() as $patient)
                                        <tr>
                                            <th scope="row">{{$patient->id}}</th>
                                            <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                                            <td>{{$patient->age}}</td>
                                            <td>{{$patient->phone_number}}</td>
                                            <td>{{$patient->pesel}}</td>
                                            <td>{{$patient->doctor->first_name}} {{$patient->doctor->last_name}}</td>
                                            <td><button type="button" class="btn btn-info btn-sm "
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#ModalAddress{{ $patient->id }}">
                                                    Info
                                                </button></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-dark btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#ModalPatient1{{$patient->id}}">
                                                    Info
                                                </button>
                                                <div class="modal fade" id="ModalPatient1{{ $patient->id }}" tabindex="-1"
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
                                            <td colspan="8" class="text-center">
                                                <button type="button" class="btn btn-primary ms-3 me-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#ModalPatients{{$ward->id}}">
                                                    Dodaj pacjenta
                                                </button>
                                                <div class="modal fade" id="ModalPatients{{$ward->id}}" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Dodaj
                                                                    pacjenta</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" class="row g-3">
                                                                    <div class="col">
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Imie" aria-label="Imie">
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Nazwisko"
                                                                                   aria-label="Nazwisko">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <input type="number" class="form-control"
                                                                                   placeholder="Wiek" aria-label="Wiek">
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Tel." aria-label="Tel.">
                                                                        </div>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="pesel" placeholder="PESEL"
                                                                               aria-label="PESEL">
                                                                        <div class="input-group mb-3">
                                                                            <input type="number" class="form-control"
                                                                                   placeholder="Wzrost"
                                                                                   aria-label="Wzrost">
                                                                            <input type="number" class="form-control"
                                                                                   placeholder="Waga" aria-label="Waga">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select"
                                                                                    aria-label="Wojewodztwo">
                                                                                <option selected>Wojewodztwo</option>
                                                                            </select>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Miasto"
                                                                                   aria-label="Miasto">
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Ulica"
                                                                                   aria-label="Ulica">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <input type="number" class="form-control"
                                                                                   placeholder="Nr. domu"
                                                                                   aria-label="Nr. domu">
                                                                            <span class="input-group-text">/</span>
                                                                            <input type="number" class="form-control"
                                                                                   placeholder="Nr. Mieszkania"
                                                                                   aria-label="Nr. Mieszkania">
                                                                            <input type="text" class="form-control mb-3"
                                                                                   id="postcode"
                                                                                   placeholder="Kod pocztowy"
                                                                                   aria-label="Kod pocztowy">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select"
                                                                                    aria-label="Doktor">
                                                                                <option selected>Doktor</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </form>
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
                                        </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <button type="button" class="btn btn-lg btn-primary WardEdtBtn"
                                            data-bs-toggle="modal" data-bs-target="#EditWard"
                                            data-ward_id="{{ $ward->id }}" data-ward_name="{{ $ward->ward_name }}">
                                        Edytuj nazwe
                                    </button>
                                </div>
                                <div class="col text-center">
                                    <form action="{{ route('wards.destroy', ['ward' => $ward]) }}" method="POST"
                                          id="delete-ward-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-lg btn-danger"
                                                onclick="return confirm('Czy na pewno chcesz usunąć oddiał?' )">Usuń
                                            oddzial
                                        </button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="modal fade" id="EditWard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edytuj oddział</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="WardForm" action="{{ route('wards.update',['ward'=>$ward])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <input type="hidden" name="wardId" id="wardId">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="ward_name" id="ward_name"
                                       placeholder="nazwa oddziału">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="saveButton">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        <div class="container mb-4 mt-2">
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Dodaj oddział
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dodaj oddział</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <form id="WardForm" action="{{ route('wards.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="ward_name" id="ward_name"
                                                   placeholder="nazwa oddziału">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary" id="saveButton">Save changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('exportWards')}}" method="get" class="d-flex justify-content-center mb-2">
            <button class="btn btn-sm btn-warning" type="submit">Export to CSV</button>
        </form>
    </div>
</div>

        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <script>
            $(document).ready(function () {
                // Handle edit button click
                $('.editBtn').on('click', function () {
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var description = $(this).data('description');
                    // $('#editForm').attr('action', '/admin/updateIllness/');
                    $('#illnessId').val(id);
                    $('#illnessName').val(name);
                    $('#illnessDescription').val(description);
                });

                $('.WardEdtBtn').on('click', function () {
                    var ward_id = $(this).data('ward_id');
                    var ward_name = $(this).data('ward_name');

                    $('#wardId').val(ward_id);
                    $('#ward_name').val(ward_name);
                })

            });
        </script>

</body>

</html>
