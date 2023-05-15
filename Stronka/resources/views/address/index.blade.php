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
                                            <input name="voivodeship" id="voivodeship" type="text" class="form-control"
                                                   placeholder="Województwo" aria-label="Województwo">
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
