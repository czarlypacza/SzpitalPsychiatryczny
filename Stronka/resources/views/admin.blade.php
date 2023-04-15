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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">PsychikaGoBrrrrr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#Login" class="nav-link">Konto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-3">
        <h2>Zapisani pacjenci</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">


       @foreach ($wards as $ward)
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$ward->id}}" aria-expanded="false" aria-controls="flush-collapse{{$ward->id}}">
              {{$ward->ward_name}}
            </button>
          </h2>
          <div id="flush-collapse{{$ward->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="" method="get">
                                <div class="input-group mb-3">
                                    <input name="filter" type="text" class="form-control" aria-label="email" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Filtruj</button>
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
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                  >
                                        <th scope="row">1</th>
                                        <td>Kirk Wornum</td>
                                        <td>63</td>
                                        <td>791-622-6642</td>
                                        <td>86097259953</td>
                                        <td>Bev barham</td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark btn-sm ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalPatient1">
                                                Info
                                            </button>
                                            <div class="modal fade" id="ModalPatient1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Informacje o chorobach</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                              <h5 class="card-title">Kirk Wornum</h5>
                                                              <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Albuterol Sulfate</li>
                                                                <li class="list-group-item">COLESTIPOL HYDROCHLORIDE</li>
                                                                <li class="list-group-item">Magnesium citrate</li>
                                                                <li class="list-group-item">
                                                                    <form action="" class="row g-3">
                                                                        <select class="form-select" aria-label="Choroba">
                                                                            <option selected>Choroba</option>

                                                                          </select>
                                                                    </form>
                                                                </li>
                                                              </ul>

                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bradly Rosenbush</td>
                                        <td>50</td>
                                        <td>920-420-6987</td>
                                        <td>83174770222</td>
                                        <td>Joanna Cotta</td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark btn-sm ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalPatient2">
                                                Info
                                            </button>
                                            <div class="modal fade" id="ModalPatient2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Informacje o chorobach</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                              <h5 class="card-title">Bradly Rosenbush</h5>
                                                              <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Albuterol Sulfate</li>
                                                                <li class="list-group-item">COLESTIPOL HYDROCHLORIDE</li>
                                                                <li class="list-group-item">Magnesium citrate</li>
                                                                <li class="list-group-item">
                                                                    <form action="" class="row g-3">
                                                                        <select class="form-select" aria-label="Choroba">
                                                                            <option selected>Choroba</option>

                                                                          </select>
                                                                    </form>
                                                                </li>
                                                              </ul>

                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John Marnane</td>
                                        <td>70</td>
                                        <td>591-739-4369</td>
                                        <td>84318991349</td>
                                        <td>Tripp Enevold</td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark btn-sm ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalPatient3">
                                                Info
                                            </button>
                                            <div class="modal fade" id="ModalPatient3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Informacje o chorobach</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                              <h5 class="card-title">John Marnane</h5>
                                                              <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Albuterol Sulfate</li>
                                                                <li class="list-group-item">COLESTIPOL HYDROCHLORIDE</li>
                                                                <li class="list-group-item">Magnesium citrate</li>
                                                                <li class="list-group-item">
                                                                    <form action="" class="row g-3">
                                                                        <select class="form-select" aria-label="Choroba">
                                                                            <option selected>Choroba</option>

                                                                          </select>
                                                                    </form>
                                                                </li>
                                                              </ul>

                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jerad Scrivin</td>
                                        <td>48</td>
                                        <td>868-865-2817</td>
                                        <td>83787268570</td>
                                        <td>Alla Hooper</td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark btn-sm ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalPatient4">
                                                Info
                                            </button>
                                            <div class="modal fade" id="ModalPatient4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Informacje o chorobach</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                              <h5 class="card-title">Jerad Scrivin</h5>
                                                              <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Albuterol Sulfate</li>
                                                                <li class="list-group-item">COLESTIPOL HYDROCHLORIDE</li>
                                                                <li class="list-group-item">Magnesium citrate</li>
                                                                <li class="list-group-item">
                                                                    <form action="" class="row g-3">
                                                                        <select class="form-select" aria-label="Choroba">
                                                                            <option selected>Choroba</option>

                                                                          </select>
                                                                    </form>
                                                                </li>
                                                              </ul>

                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="mb-3">
                                        <td colspan="8" class="text-center">
                                            <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal" data-bs-target="#ModalPatients1">
                                                Dodaj pacjenta
                                            </button>
                                            <div class="modal fade" id="ModalPatients1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Dodaj pacjenta</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" class="row g-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" placeholder="Imie" aria-label="Imie">
                                                                    <input type="text" class="form-control" placeholder="Nazwisko" aria-label="Nazwisko">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form-control" placeholder="Wiek" aria-label="Wiek">
                                                                    <input type="text" class="form-control" placeholder="Tel." aria-label="Tel.">
                                                                </div>
                                                                <input type="text" class="form-control mb-3" id="pesel" placeholder="PESEL" aria-label="PESEL">
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form-control" placeholder="Wzrost" aria-label="Wzrost">
                                                                    <input type="number" class="form-control" placeholder="Waga" aria-label="Waga">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <select class="form-select" aria-label="Wojewodztwo">
                                                                        <option selected>Wojewodztwo</option>
                                                                      </select>
                                                                    <input type="text" class="form-control" placeholder="Miasto" aria-label="Miasto">
                                                                    <input type="text" class="form-control" placeholder="Ulica" aria-label="Ulica">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form-control" placeholder="Nr. domu" aria-label="Nr. domu">
                                                                    <span class="input-group-text">/</span>
                                                                    <input type="number" class="form-control" placeholder="Nr. Mieszkania" aria-label="Nr. Mieszkania">
                                                                    <input type="text" class="form-control mb-3" id="postcode" placeholder="Kod pocztowy" aria-label="Kod pocztowy">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <select class="form-select" aria-label="Doktor">
                                                                        <option selected>Doktor</option>

                                                                      </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
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
                </div>
            </div>
          </div>
        </div>
        @endforeach




    <div class="container mb-4 mt-2">
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <button type="button" class="btn btn-primary ms-3 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Dodaj oddział
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Dodaj oddział</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="WardForm" action="{{ url('/admin/storeWard') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="ward_name" id="ward_name" placeholder="nazwa oddziału">
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
            </div>
        </div>
    </div>

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

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Alla Hooper</td>
                    <td>PROVIGIL</td>
                    <td>390-165-0329</td>
                    <td></td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bev Barham</td>
                    <td>Molds, Rusts and Smuts, Epicoccum nigrum</td>
                    <td>513-249-8833</td>
                    <td></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Joanna Cotta</td>
                    <td>CD DIORSKIN CITY DEFENSE Toxin Shield Pollution UV Advanced Protection with sunscreen Broad Spectrum SPF50</td>
                    <td>881-689-2873</td>
                    <td></td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Tripp Enevold</td>
                    <td>Gabapentin</td>
                    <td>828-846-4763</td>
                    <td></td>

                </tr>
                <tr class="mb-3">
                    <td colspan="5" class="text-center">
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
                                <div class="modal-body">
                                    <form action="" class="row g-3">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Imie" aria-label="Imie">
                                                <input type="text" class="form-control" placeholder="Nazwisko" aria-label="Nazwisko">
                                            </div>
                                            <input type="text" class="form-control mb-3" id="wardname" placeholder="Specjalizacja" aria-label="Specjalizacja">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Tel." aria-label="Tel.">
                                                <!--<input type="text" class="form-control" placeholder="Oddział" aria-label="Oddział">-->
                                                <select class="form-select" aria-label="Oddzial">
                                                    <option selected>Oddzial</option>

                                                  </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


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
                        <button type="button" class="btn btn-primary editBtn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{ $illness->id }}" data-name="{{ $illness->name }}" data-description="{{ $illness->description }}">Edytuj</button>
                        <form action="{{ route('illnesses.destroy', ['id' => $illness->id]) }}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno usunąć wpis?')">Usuń</button>
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
                                    <form id="illnessForm" action="{{ url('/admin/storeIllness') }}" method="POST">
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
                                    <form id="editForm" action="{{ url('/admin/updateIllness') }}" method="POST">
                                        @csrf

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
                console.log();
                // $('#editForm').attr('action', '/admin/updateIllness/');
                $('#illnessId').val(id);
                $('#illnessName').val(name);
                $('#illnessDescription').val(description);
            });
        });
    </script>

</body>

</html>
