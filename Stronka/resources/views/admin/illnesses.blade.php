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


<div class="container">
    <h2>Choroby</h2>
    <table class="table-striped table">
        <thead>
            <tr>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($illnesses as $illness)
            <tr>
                <td>{{$illness->name}}</td>
                <td>{{$illness->description}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary editBtn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{ $illness->id }}" data-name="{{ $illness->name }}" data-description="{{ $illness->description }}">Edytuj</button>
                    <form action="{{ route('illnesses.destroy', ['illness' => $illness]) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń</button>
                    </form>
                </td>
            </tr>

            @endforeach
            <tr>
                <td colspan="5" class="text-center">
                    <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalIllnesses">
                        Dodaj chorobe
                    </button>
                    <div class="modal fade" id="ModalIllnesses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dodaj Chorobe</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="illnessForm" action="{{ route('illnesses.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Nazwa" aria-label="Nazwa">
                                            <textarea class="form-control mb-3" rows="3" name="description" id="description" placeholder="Opis"></textarea>
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
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edytuj Chorobę</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="editForm" action="{{ route('illnesses.update',['illness'=>$illness]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="illnessId">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-3" name="name" id="illnessName" placeholder="Nazwa" aria-label="Nazwa">
                                            <textarea class="form-control mb-3" rows="3" name="description" id="illnessDescription" placeholder="Opis"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="saveButton">Zapisz zmiany</button>
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
