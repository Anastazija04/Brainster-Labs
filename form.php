<?php
require 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $student = $_POST['student'];
    $query = "INSERT INTO clients (name, company, email, phone, student) VALUES ('$name','$company','$email','$phone','$student')";
    if ($conn->query($query) === TRUE) {
        header('location: success.html');
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Brainster Labs!</title>
  </head>

  <body>
    
    <!-- start NAVBAR -->
    <nav class="bg-warning p-2">
      <div
        class="d-flex justify-content-between align-items-center margin-2 px-4"
      >
        <div class="margin-right">
          <a href="index.html" class="text-decoration-none">
            <div class="w-50">
              <img src="img/logo.png" alt="" class="w-100" />
              <p class="text-dark font-weight-bold">BRAINSTER</p>
            </div>
          </a>
        </div>
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-button-container" for="menu-toggle">
          <div class="menu-button"></div>
        </label>
        <ul
          class="menu d-flex justify-content-around flex-grow-1 align-items-center list-unstyled"
        >
          <li class="grow">
            <a
              href="https://brainster.co/marketing/"
              target="_blank"
              class="text-dark font-weight-bold text-decoration-none"
              >Академија за маркетинг</a
            >
          </li>
          <li class="grow">
            <a
              href="https://brainster.co/full-stack/"
              target="_blank"
              class="text-dark font-weight-bold text-decoration-none"
              >Академија за програмирање</a
            >
          </li>
          <li class="grow">
            <a
              href="https://brainster.co/data-science/"
              target="_blank"
              class="text-dark font-weight-bold text-decoration-none"
              >Академија за data science</a
            >
          </li>
          <li class="grow">
            <a
              href="https://brainster.co/graphic-design/"
              target="_blank"
              class="text-dark font-weight-bold text-decoration-none"
              >Академија за дизајн</a
            >
          </li>
          <li class="grow">
            <a
              class="nav-link text-white rounded-sm button-red font-weight-bold"
              href="form.php"
              >Вработи наш студент</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <!-- end NAVBAR -->

    <!-- start FORM -->
    <div class="bg-warning py-5">
      <h1 class="font-weight-bold font-size-big text-center m-0 py-5">
        Вработи студенти
      </h1>
      <div class="container">
        <form action="" method="post" class="py-custom">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <label for="name" class="font-weight-bold">Име и презиме</label>
                <input
                  type="text"
                  class="form-control p-4 rounded-custom"
                  id="name"
                  name="name"
                  placeholder="Вашето име и презиме"
                  required
                />
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <label for="company" class="font-weight-bold"
                  >Име на компанија</label
                >
                <input
                  type="text"
                  class="form-control p-4 rounded-custom"
                  id="company"
                  name="company"
                  placeholder="Име на вашата компанија"
                  required
                />
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <label for="email" class="font-weight-bold"
                  >Контакт емајл</label
                >
                <input
                  type="email"
                  class="form-control p-4 rounded-custom"
                  id="email"
                  name="email"
                  placeholder="Контакт емајл на вашата компанија"
                  required
                />
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <label for="phone" class="font-weight-bold"
                  >Контакт телефон</label
                >
                <input
                  type="tel"
                  class="form-control p-4 rounded-custom"
                  id="phone"
                  name="phone"

                  placeholder="Контакт телефон на вашата компанија"
                  required
                />
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group d-flex flex-column">
                <label for="student" class="font-weight-bold"
                  >Тип на студент</label
                >
                <!-- PHP FOR TYPE OF STUDENT -->
                <?php

                 $sql = "SELECT id, marketing, design, programming, data FROM academies";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                  echo "<select required class='p-2 rounded-custom mobile-margin'
                  id='student'
                  name='student'><option value selected hidden>Изберете тип на студент</option>";
                  while($row = $result->fetch_assoc()) {
                    echo "<option>".$row["marketing"]."</option><option>".$row["design"]."</option><option>".$row["programming"]."</option><option>".$row["data"]."</option>";
                  }
                  echo "</select>";
                }
                  ?>
                <!-- PHP FOR TYPE OF STUDENT -->
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              
              <button
                type="submit"
                class="btn btn-danger btn-block p-1 mt-btn rounded-custom font-weight-bold"
              >
                ИСПРАТИ
              </button>
              
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- end FORM -->

    <!-- start FOOTER -->
    <footer>
      <div class="bg-dark py-5 text-center">
        <p class="text-light">
          Изработено со <i class="fa-solid fa-heart text-danger"></i> од
          студентите на Brainster
        </p>
      </div>
    </footer>
    <!--end FOOTER -->
    
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
