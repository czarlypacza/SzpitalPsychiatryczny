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
                        <button type="button" class="btn btn-sm btn-primary editBtn" data-bs-toggle="" data-bs-target="#" >Edytuj</button>
                        <form action="{{route('doctors.destroy',['doctor'=>$doctor])}}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                <tr class="mb-3">
                    <td colspan="6" class="text-center">
                        <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalDoctors">
                            Dodaj lekarza
                        </button>
                        <div class="modal fade" id="ModalDoctors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Dodaj Lekarza</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="DoctorsForm" action="{{route('doctors.store')}}" class="row g-3" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input name="d_first_name" id="d_first_name" type="text" class="form-control" placeholder="Imie" aria-label="Imie">
                                                <input name="d_last_name" id="d_last_name" type="text" class="form-control" placeholder="Nazwisko" aria-label="Nazwisko">
                                            </div>
                                            <input type="text" class="form-control mb-3" name="d_specialization" id="d_specialization" placeholder="Specjalizacja" aria-label="Specjalizacja">
                                            <div class="input-group mb-3">
                                                <input name="d_tel" id="d_tel" type="text" class="form-control" placeholder="Tel." aria-label="Tel.">
                                                <!--<input type="text" class="form-control" placeholder="Oddział" aria-label="Oddział">-->
                                                <select name="d_ward" id="d_ward" class="form-select" aria-label="Oddzial" aria-placeholder="Oddzial">

                                                    @forelse ($wards as $ward)
                                                        <option >{{$ward->ward_name}}</option>
                                                    @empty
                                                        <option selected>Oddzial</option>
                                                    @endforelse
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        $(document).ready(function() {
            // Handle edit button click
            $('.editBtn').on('click', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var description = $(this).data('description');
                // $('#editForm').attr('action', '/admin/updateIllness/');
                $('#illnessId').val(id);
                $('#illnessName').val(name);
                $('#illnessDescription').val(description);
            });

            $('.WardEdtBtn').on('click',function(){
                var ward_id = $(this).data('ward_id');
                var ward_name = $(this).data('ward_name');

                $('#wardId').val(ward_id);
                $('#ward_name').val(ward_name);
            })

        });
    </script>

</body>

</html>