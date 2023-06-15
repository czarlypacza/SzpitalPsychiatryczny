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
    <h2>Adresy</h2>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                    Filtracja
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="{{route('filterAddresses')}}" method="get">
                        @csrf

                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="wojewodztwo" name="wojewodztwo" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Wojewodztwo</label>
                            </div>
                            <div class="col-8">
                                {{--                                <input type="text" class="form-control" name="height" id="height" placeholder="Dummy Value 3">--}}
                                <select class="form-select" name="voivodeship" id="voivodeship">
                                    <option value="Dolnośląskie">Dolnośląskie</option>
                                    <option value="Kujawsko-pomorskie">Kujawsko-Pomorskie</option>
                                    <option value="Lubelskie">Lubelskie</option>
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
                            </div>
                        </div>

                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="miasto" name="miasto" v>
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Miasto</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="city" id="city" >
                            </div>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="ulica" name="ulica" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Ulica</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="street" id="street" >
                            </div>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="numer" name="numer" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Numer domu</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="house_number" id="house_number" >
                            </div>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="mieszkania" name="mieszkania" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Numer mieszkania</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="flat_number" id="flat_number" >
                            </div>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-1">
                                <input class="form-check-input " type="checkbox" id="kod_pocztowy" name="kod_pocztowy" >
                            </div>
                            <div class="col-3">
                                <label class="form-check-label" for="filter3">Kod pocztowy</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="postal_code" id="postal_code" >
                            </div>
                        </div>
                        <div class="row inline-flex justify-content-evenly mt-3">
                            <button class="btn btn-outline-secondary mt-3" type="submit" id="button-addon2">
                                Filtruj
                            </button>
                            <a class="btn btn-outline-info" href="{{route('address.index')}}"> Wyczysc</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table-striped table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Województwo</th>
            <th scope="col">Miasto</th>
            <th scope="col">Ulica</th>
            <th scope="col">Nr domu</th>
            <th scope="col">Nr mieszkania</th>
            <th scope="col">Kod pocztowy</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($addresses as $address)
            <tr>
                <td>{{$address->id}}</td>
                <td>{{$address->voivodeship}}</td>
                <td>{{$address->city}}</td>
                <td>{{$address->street}}</td>
                <td>{{$address->house_number}}</td>
                <td>{{$address->flat_number}}</td>
                <td>{{$address->postal_code}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary editAddressBtn" data-bs-toggle="modal"
                            data-bs-target="#ModalEditAddress" data-id="{{$address->id}}"
                            data-voivodeship="{{$address->voivodeship}}" data-city="{{$address->city}}" data-street="{{$address->street}}"
                            data-house_number="{{$address->house_number}}" data-flat_number="{{$address->flat_number}}"
                            data-postal_code="{{$address->postal_code}}">Edytuj
                    </button>
                    <form action="{{route('address.destroy', $address->id)}}" class="d-inline" method="POST"
                          id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr class="mb-3">
            <td colspan="8" class="text-center">
                <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal"
                        data-bs-target="#ModalAddress">
                    Dodaj adres
                </button>
                <div class="modal fade" id="ModalAddress" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dodaj adres</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form id="DoctorsForm" action="{{route('address.store')}}" class="row g-3" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="col">
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
                                            <input name="city" id="city" type="text" class="form-control"
                                                   placeholder="Miasto" aria-label="Miasto">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="street" id="street" type="text" class="form-control"
                                                   placeholder="Ulica" aria-label="Ulica">
                                            <input name="postal_code" id="postal_code" type="text" class="form-control"
                                                   placeholder="Kod pocztowy" aria-label="Kod pocztowy">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="house_number" id="house_number" type="text"
                                                   class="form-control" placeholder="Nr. domu" aria-label="Nr. domu">
                                            <!--<input type="t" class="forontrol" placeholder="Oddział" aria-label="Oddział">-->
                                            <input name="flat_number" id="flat_number" type="text" class="form-control"
                                                   placeholder="Nr. mieszkania" aria-label="Nr. mieszkania">
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

                <div class="modal fade" id="ModalEditAddress" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edytuj adres</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form id="EditAddressForm" action="{{route('address.update',$address)}}" class="row g-3" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="col">
                                        <input name="e_id" id="e_id" type="hidden">
                                        <div class="input-group mb-3">
                                            <input name="e_voivodeship" id="e_voivodeship" type="text"
                                                   class="form-control" placeholder="Województwo"
                                                   aria-label="Województwo">
                                            <input name="e_city" id="e_city" type="text" class="form-control"
                                                   placeholder="Miasto" aria-label="Miasto">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="e_street" id="e_street" type="text" class="form-control"
                                                   placeholder="Ulica" aria-label="Ulica">
                                            <input name="e_postal_code" id="e_postal_code" type="text"
                                                   class="form-control" placeholder="Kod pocztowy"
                                                   aria-label="Kod pocztowy">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input name="e_house_number" id="e_house_number" type="text"
                                                   class="form-control" placeholder="Nr. domu" aria-label="Nr. domu">
                                            <!--<input type="t" class="forontrol" placeholder="Oddział" aria-label="Oddział">-->
                                            <input name="e_flat_number" id="e_flat_number" type="text"
                                                   class="form-control" placeholder="Nr. mieszkania"
                                                   aria-label="Nr. mieszkania">
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
            </td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mb-2">
        {{ $addresses->links() }}
    </div>
    <form action="{{route('exportAddresses')}}" method="post" class="d-flex justify-content-center">
        @csrf
        @foreach($Addresses as $address)
            <input name="{{$address->id}}" type="text" class="form-control" hidden value="{{$address->id}}">
        @endforeach
        <button class="btn btn-sm btn-warning" type="submit">Export to CSV</button>
    </form>

    <form action="{{ route('importAddresses') }}" method="post" enctype="multipart/form-data" class="d-flex justify-content-center mb-2">
        @csrf
        <input type="file" name="csv_file" class="form-control-file">
        <button class="btn btn-sm btn-primary" type="submit">Import CSV</button>
    </form>
</div>


<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.editAddressBtn').on('click', function () {
            var id = $(this).data('id');
            var voivodeship = $(this).data('voivodeship');
            var city = $(this).data('city');
            var street = $(this).data('street');
            var house_number = $(this).data('house_number');
            var flat_number = $(this).data('flat_number');
            var postal_code = $(this).data('postal_code');
            // $('#editForm').attr('action', '/admin/updateIllness/');
            $('#e_id').val(id);
            $('#e_voivodeship').val(voivodeship);
            $('#e_city').val(city);
            $('#e_street').val(street);
            $('#e_house_number').val(house_number);
            $('#e_flat_number').val(flat_number);
            $('#e_postal_code').val(postal_code);
        });



    });
</script>

</body>

</html>
