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
        <div class="bg-warning">
            <h3 class="text-center py-5">Личности кои ја пополниле формата за вработување на студенти од академиите на Brainster</h3>
            <table class="d-flex justify-content-center p-3">
                <tr class="bg-dark">
                    <th class="data-custom text-center border text-white">ID</th>
                    <th class="data-custom border text-white">Name</th>
                    <th class="data-custom border text-white">Email</th>
                    <th class="data-custom border text-white">Company</th>
                    <th class="data-custom border text-white">Phone</th>
                    <th class="data-custom border text-white">Student</th>
                </tr>
                <?php
                require 'connect.php';
                $sql = "SELECT id, name, email, company, phone, student from clients";
                $result = $conn-> query($sql);

                if ($result-> num_rows > 0 ) {
                    while ($row = $result-> fetch_assoc()) {
                        echo "<tr class='row-custom'><td class='text-center data-custom'>". $row["id"] ."</td><td class='data-custom'>". $row["name"] . "</td><td class='data-custom'>" . $row["email"] . "</td><td class='data-custom'>" .$row["company"] ."</td><td class='data-custom'>" .$row["phone"] . "</td><td class='data-custom'>" . $row["student"] . "</td></tr>"; 
                    } 
                }
                ?>
            </table>
        </div>
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