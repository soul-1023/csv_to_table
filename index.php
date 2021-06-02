<?php
    header('Content-Type: text/html; charset=UTF-8');
    require_once("readCSV.php");
    $data = getData("users.csv");
?>

<!doctype html>
<html lang="ru">
<head>
    <title>Table</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Возраст</th>
                        <th scope="col">Место проживания</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $row) {?>
                        <tr>
                            <?foreach ($row as $val) {?>
                                <td><?echo $val;?></td>
                            <?}?>
                        </tr>
                    <?}?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
</html>



