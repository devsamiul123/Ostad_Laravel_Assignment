<?php

$filename = fopen(dirname(__FILE__).'/users.csv', 'r');
$file = $filename;

$data = array();
while (($row = fgetcsv($file)) !== FALSE) {
    $data[] = $row;
}
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show info</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><img width="50px" src="./uploads/<?= $row[3] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

