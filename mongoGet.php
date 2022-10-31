<?php
// This path should point to Composer's autoloader
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Students</title>
    </head>
    <body>
        <div class = "container">
            <div class = "row">
                <div class = "col-10">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Address</th>
                            <th scope="col">Program</th>
                            <th scope="col">Emergency Contact</th>
                        </tr>
                        <?php
                            foreach($result as $studentInf) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $studentInf['studentID']; ?></td>
                            <td><?php echo $studentInf['firstName']; ?></td>
                            <td><?php echo $studentInf['birthdate']; ?></td>
                            <td><?php echo $studentInf['address']; ?></td>
                            <td><?php echo $studentInf['program']; ?></td>
                            <td><?php echo $studentInf['contact Number']; ?></td>
                            <td><?php echo $studentInf['emergency Contact']; ?></td>
                        </tr>
                        
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
