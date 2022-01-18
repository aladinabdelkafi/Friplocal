<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "fripe"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
$employeeData = mysqli_query($con, "select * from marque");

$response = array();
while ($row = mysqli_fetch_assoc($employeeData)) {
    $response[] = array(
        "id" => $row['id'],
        "nom_marq" => $row['nom_marq'],
    );
}

echo json_encode($response);
exit;
