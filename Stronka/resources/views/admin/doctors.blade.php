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
    <h2>Lekarze</h2>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                        Filtracja
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{route('filterDoctors')}}" method="get">
                            @csrf
                            <div class="row align-items-center mt-2">
                                <div class="col-1">
                                    <input class="form-check-input " type="checkbox" id="imie" name="imie" >
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="filter3">Imie</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="first_name" id="first_name" >
                                </div>
                            </div>
                            <div class="row align-items-center mt-2">
                                <div class="col-1">
                                    <input class="form-check-input " type="checkbox" id="nazwisko" name="nazwisko" >
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="filter3">Nazwisko</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="last_name" id="last_name" >
                                </div>
                            </div>
                            <div class="row align-items-center mt-2">
                                <div class="col-1">
                                    <input class="form-check-input " type="checkbox" id="specjalizacja" name="specjalizacja" >
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="filter3">Specjalizacja</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="specialization" id="specialization" >
                                </div>
                            </div>
                            <div class="row align-items-center mt-2">
                                <div class="col-1">
                                    <input class="form-check-input " type="checkbox" id="telefon" name="telefon" >
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="filter3">Numer telefonu</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="phone_number" id="phone_number" >
                                </div>
                            </div>
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
                                <a class="btn btn-outline-info" href="{{route('doctors.index')}}"> Wyczysc</a>
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
            <th scope="col">Imie i Nazwisko</th>
            <th scope="col">Specjalizacja</th>
            <th scope="col">Tel.</th>
            <th scope="col">Oddział</th>
            <th scope="col">Akcja</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <th scope="row">{{$doctor->id}}</th>
                <td>{{$doctor->first_name}} {{$doctor->last_name}}</td>
                <td>{{$doctor->specialization}}</td>
                <td>{{$doctor->phone_number}}</td>
                <td>{{$doctor->ward->ward_name}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary editDoctorBtn" data-bs-toggle="modal"
                            data-bs-target="#ModalEditDoctors{{$doctor->id}}" data-id="{{$doctor->id}}"
                            data-first_name="{{$doctor->first_name}}" data-last_name="{{$doctor->last_name}}"
                            data-specialization="{{$doctor->specialization}}" data-tel="{{$doctor->phone_number}}"
                            data-ward_id="{{$doctor->ward->id}}" data-ward_name="{{$doctor->ward->ward_name}}">Edytuj
                    </button>

                    <div class="modal fade" id="ModalEditDoctors{{$doctor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edytuj Lekarza</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <form id="EditDoctorsForm" action="{{route('doctors.update',['doctor'=>$doctor])}}"
                                      class="row g-3" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="col">
                                            <input name="id" id="id" type="hidden">
                                            <div class="input-group mb-3">
                                                <input name="first_name" id="first_name" type="text" class="form-control"
                                                       placeholder="Imie" aria-label="Imie" value="{{$doctor->first_name}}">
                                                <input name="last_name" id="last_name" type="text" class="form-control"
                                                       placeholder="Nazwisko" aria-label="Nazwisko" value="{{$doctor->last_name}}">
                                            </div>
                                            <input type="text" class="form-control mb-3" name="specialization"
                                                   id="specialization" placeholder="Specjalizacja"
                                                   aria-label="Specjalizacja" value="{{$doctor->specialization}}">
                                            <div class="input-group mb-3">
                                                <input name="phone_number" id="phone_number" type="text"
                                                       class="form-control" placeholder="Tel." aria-label="Tel." value="{{$doctor->phone_number}}">
                                                <!--<input type="text" class="form-control" placeholder="Oddział" aria-label="Oddział">-->
                                                {{--                                                <input name="ward_id" id="ward_id" type="hidden">--}}
                                                <select name="ward_id" id="ward_name" class="form-select"
                                                        aria-label="Oddzial" aria-placeholder="Oddzial" value="{{$doctor->ward_id}}">

                                                    @forelse ($wards as $ward)
                                                        @if($ward->id == $doctor->ward->id)
                                                            <option selected value="{{$ward->id}}">{{$ward->ward_name}}</option>
                                                        @else
                                                            <option value="{{$ward->id}}">{{$ward->ward_name}}</option>
                                                        @endif
                                                    @empty

                                                    @endforelse
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

                    <form action="{{route('doctors.destroy',['doctor'=>$doctor]) }}" method="POST" id="delete-form">
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
            <td colspan="6" class="text-center">
                <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal"
                        data-bs-target="#ModalDoctors">
                    Dodaj lekarza
                </button>
                <div class="modal fade" id="ModalDoctors" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dodaj Lekarza</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form id="DoctorsForm" action="{{route('doctors.store')}}" class="row g-3" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input name="d_first_name" id="d_first_name" type="text"
                                                   class="form-control" placeholder="Imie" aria-label="Imie">
                                            <input name="d_last_name" id="d_last_name" type="text" class="form-control"
                                                   placeholder="Nazwisko" aria-label="Nazwisko">
                                        </div>
                                        <input type="text" class="form-control mb-3" name="d_specialization"
                                               id="d_specialization" placeholder="Specjalizacja"
                                               aria-label="Specjalizacja">
                                        <div class="input-group mb-3">
                                            <input name="d_tel" id="d_tel" type="text" class="form-control"
                                                   placeholder="Tel." aria-label="Tel.">
                                            <!--<input type="t" class="forontrol" placeholder="Oddział" aria-label="Oddział">-->
                                            <select name="d_ward" id="d_ward" class="form-select" aria-label="Oddzial"
                                                    aria-placeholder="Oddzial">
                                                @forelse ($wards as $ward)
                                                    <option>{{$ward->ward_name}}</option>
                                                @empty
                                                    <option selected>Oddzial</option>
                                                @endforelse
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


            </td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mb-2">
        {{ $doctors->links() }}
    </div>
    <form action="{{route('exportDoctors')}}" method="post" class="d-flex justify-content-center mb-2">
        @csrf
        @foreach($Doctors as $doctor)
        <input name="{{$doctor->id}}" type="text" class="form-control" hidden value="{{$doctor->id}}">
        @endforeach
        <button class="btn btn-sm btn-warning" type="submit">Export to CSV</button>
    </form>

    <form action="{{ route('importDoctors') }}" method="post" enctype="multipart/form-data" class="d-flex justify-content-center mb-2">
        @csrf
        <input type="file" name="csv_file" class="form-control-file">
        <button class="btn btn-sm btn-primary" type="submit">Import CSV</button>
    </form>
</div>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
{{--<script>
    $(document).ready(function () {
        $('.editDoctorBtn').on('click', function () {
            var id = $(this).data('id');
            var first_name = $(this).data('first_name');
            var last_name = $(this).data('last_name');
            var specialization = $(this).data('specialization');
            var phone = $(this).data('tel');
            var ward_name = $(this).data('ward_name');
            var ward_id = $(this).data('ward_id');
            // $('#editForm').attr('action', '/admin/updateIllness/');
            $('#id').val(id);
            $('#first_name').val(first_name);
            $('#last_name').val(last_name);
            $('#specialization').val(specialization);
            $('#phone_number').val(phone);
            $('#ward_name').val(ward_id);
            $('#ward_id').val(ward_id);
        });

        $('.WardEdtBtn').on('click', function () {
            //var ward_id = $(this).data('ward_id');
            var ward_name = $(this).data('ward_name');

            $('#wardId').val(ward_id);
            $('#ward_name').val(ward_name);
        })

    });
</script>--}}

</body>

</html>
