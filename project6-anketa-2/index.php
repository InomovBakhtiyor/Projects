<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html>
    <head>
        <title>ANKETA</title>
	    <link rel="stylesheet" href="style.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid row">
            <div class="container-1 col-6">
              <h1 class="text-center text-danger p-3"> ANKETA</h1>
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-6">
                  <label for="validationCustom01" class="form-label">Familiyangiz:</label>
                  <input type="text" class="form-control" id="validationCustom01" name="fam" value="Palonchiyev" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-6">
                  <label for="validationCustom02" class="form-label">Ismingiz:</label>
                  <input type="text" class="form-control" id="validationCustom02" name="ism" value="Pistonchi" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-6">
                  <label for="validationCustom03" class="form-label">Yashash shahringiz:</label>
                  <input type="text" class="form-control" id="validationCustom03" name="shahar" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-6">
                  <label for="validationCustom04" class="form-label">Til:</label>
                  <select class="form-select" id="validationCustom04" name="language" required>
                    <option value="uz">Uzbek</option>
                    <option value="kr">Korean</option>
                    <option value="en">English</option>
                    <option value="ru">Russian</option>
                  </select>
                </div>
                <div class="col-6">
                    <label for="inputEmail3" class="col-form-label">Email</label>
                    <div class="col-sm-12">
                      <input type="email" class="form-control" name="pochta" id="inputEmail3">
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputPassword3" class="col-form-label">Password</label>
                    <div class="col-sm-12">
                      <input type="password" class="form-control" name="password" id="inputPassword3">
                    </div>
                </div>
                <span>Uylanganmisiz?</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isMarried" id="exampleRadios1" value="yes">
                    <label class="form-check-label" for="exampleRadios1">
                      Ha
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isMarried" id="exampleRadios2" value="no">
                    <label class="form-check-label" for="exampleRadios2" value="no">
                      Yo'q
                    </label>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Jo'natish</button>
                <button class="btn btn-primary" type="reset">Qaytarish</button>
                <button class="btn btn-primary" type="button">Oddiy tugmacha</button>
                </div>
              </form>
            </div>
            <div class="container-2 col-3">
                <?php 
                    echo "Siz haqingizda!" . '<br />' . '<br />';
                    if(isset($_GET['fam'], $_GET['ism']))
                    {
                        echo 'Ismingiz: ' . $_GET['ism'] . '<br/>';
                        echo 'Familiyangiz: ' . $_GET['fam'] . '<br/>';

                        if(isset($_GET['shahar']))
                        {
                            echo $_GET['shahar'] . ' naqadar go\'zal joydir!' . '<br/>';
                        }
                        if(isset($_GET['language']))
                        {
                            echo 'Siz tanlagan tilning qisqartmasi ' . $_GET['language'] . ' dir!' . '<br/>';
                        }
                        if(isset($_GET['pochta']))
                        {
                            echo 'Sizning email ingiz: ' . $_GET['pochta'] . '<br/>';
                        }
                        if(isset($_GET['isMarried'])) {
                            if($_GET['isMarried'] === 'yes') {
                                print 'Siz turmush qurgansiz!' . '<br/>';
                            } else {
                                print 'Siz haliham bo\'ydoqsiz' . '<br/>';
                            }
                        }
                    } else {
                        echo 'So\'rovnomani to\'ldiring';
                    }
                ?>
            </div>
        </div>
    </body>
</html>