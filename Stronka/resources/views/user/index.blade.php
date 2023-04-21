<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Szpital psychiatryczny</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
                        <a href="#Wards" class="nav-link">Oddziały</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Doctors" class="nav-link">Nasi lekarze</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Rejestracja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2>Nasi lekarze</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-3">
                    <img src="img/blank.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card_title">Bev Barham</h5>
                            <p class="card-text">Specjalizacja: Molds, Rusts and Smuts, Epicoccum nigrum
                                <br>Kontakt: Beviscool@gmail.com
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-3">
                    <img src="img/blank.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card_title">Joanna Cotta</h5>
                            <p class="card-text">Specjalizacja:CD DIORSKIN CITY DEFENSE Toxin Shield Pollution UV
                                Advanced Protection with sunscreen Broad Spectrum SPF50
                                <br>Kontakt: JoannaKrupa@nonemail.com
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-3">
                    <img src="img/blank.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card_title">Tripp Enevold</h5>
                            <p class="card-text">Specjalizacja: Gabapentin
                                <br>Kontakt: email@example.com
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-3">
                    <img src="img/blank.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card_title">Alla Hooper</h5>
                            <p class="card-text">Specjalizacja: PROVIGIL
                                <br>Kontakt: moc.elpmaxe@liame
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Pacjenci</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Kirk Wornum</td>
                            <td>63</td>
                            <td>791-622-6642</td>
                            <td>86097259953</td>
                            <td>Bev barham</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bradly Rosenbush</td>
                            <td>50</td>
                            <td>920-420-6987</td>
                            <td>83174770222</td>
                            <td>Joanna Cotta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>John Marnane</td>
                            <td>70</td>
                            <td>591-739-4369</td>
                            <td>84318991349</td>
                            <td>Tripp Enevold</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jerad Scrivin</td>
                            <td>48</td>
                            <td>868-865-2817</td>
                            <td>83787268570</td>
                            <td>Alla Hooper</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Oddział elegancki
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kirk Wornum</td>
                                        <td>63</td>
                                        <td>791-622-6642</td>
                                        <td>86097259953</td>
                                        <td>Bev barham</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bradly Rosenbush</td>
                                        <td>50</td>
                                        <td>920-420-6987</td>
                                        <td>83174770222</td>
                                        <td>Joanna Cotta</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John Marnane</td>
                                        <td>70</td>
                                        <td>591-739-4369</td>
                                        <td>84318991349</td>
                                        <td>Tripp Enevold</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jerad Scrivin</td>
                                        <td>48</td>
                                        <td>868-865-2817</td>
                                        <td>83787268570</td>
                                        <td>Alla Hooper</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Oddział tych nijakich
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kirk Wornum</td>
                                        <td>63</td>
                                        <td>791-622-6642</td>
                                        <td>86097259953</td>
                                        <td>Bev barham</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bradly Rosenbush</td>
                                        <td>50</td>
                                        <td>920-420-6987</td>
                                        <td>83174770222</td>
                                        <td>Joanna Cotta</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John Marnane</td>
                                        <td>70</td>
                                        <td>591-739-4369</td>
                                        <td>84318991349</td>
                                        <td>Tripp Enevold</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jerad Scrivin</td>
                                        <td>48</td>
                                        <td>868-865-2817</td>
                                        <td>83787268570</td>
                                        <td>Alla Hooper</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Oddział Marcina
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kirk Wornum</td>
                                        <td>63</td>
                                        <td>791-622-6642</td>
                                        <td>86097259953</td>
                                        <td>Bev barham</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bradly Rosenbush</td>
                                        <td>50</td>
                                        <td>920-420-6987</td>
                                        <td>83174770222</td>
                                        <td>Joanna Cotta</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John Marnane</td>
                                        <td>70</td>
                                        <td>591-739-4369</td>
                                        <td>84318991349</td>
                                        <td>Tripp Enevold</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jerad Scrivin</td>
                                        <td>48</td>
                                        <td>868-865-2817</td>
                                        <td>83787268570</td>
                                        <td>Alla Hooper</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>



      <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
