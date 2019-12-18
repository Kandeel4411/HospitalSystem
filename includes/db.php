<?php
try {
    // Database connection var
    $db = new PDO("mysql:host=localhost;port=3306;dbname=hospital", "root", "");
} catch (Throwable $e) {
    echo "$e";
}

// Checking which form was submitted
if (isset($_POST['register'])) {

    $data = [
        "patientId",
        "patientName",
        "patientDateOfEntry",
        "patientMedicalHistory",
        "patientPhysician",
        "patientLastVisit"
    ];
    foreach ($data as $id) {
        if (empty($_POST[$id])) {
            echo "<script> emptyAlert('register') </script>";
            return;
        }
    }


    //Inserting data into database
    $sql = "INSERT INTO `patients`(`ID`, `Name`, `Date-Of-Entry`, `Medical-History`, `Physician`, `Last-Visit`) VALUES (:id,:name,:doe,:mh,:p,:lv)";

    $statement = $db->prepare($sql);
    $statement->execute(array(
        ":id" => $_POST[$data[0]],
        ":name" => $_POST[$data[1]],
        ":doe" => $_POST[$data[2]],
        ":mh" => $_POST[$data[3]],
        ":p" => $_POST[$data[4]],
        ":lv" => $_POST[$data[5]],

    ));

    echo "<script> successAlert() </script>";
} else if (isset($_POST['search'])) {

    if (empty($_POST["patientId"])) {
        echo "<script> emptyAlert('search') </script>";
        return;
    }

    // Querying database for search
    $sql = "SELECT * FROM patients WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->execute(array(
        ":id" => $_POST["patientId"],
    ));

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // encoding to JSON to pass to Javascript
    echo "<script> displayTable(" . json_encode($result, JSON_PRETTY_PRINT) . ") </script>";
} else if (isset($_POST['report'])) {

    if (empty($_POST["patientLastVisit"])) {
        echo "<script> emptyAlert('report') </script>";
        return;
    }

    // Querying database for search to report
    $sql = "SELECT * FROM `patients` WHERE `Last-Visit` = :lvisit";

    $statement = $db->prepare($sql);
    $statement->execute(array(
        ":lvisit" => $_POST["patientLastVisit"],
    ));

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // encoding to JSON to pass to Javascript
    echo "<script> displayReport(" . json_encode($result, JSON_PRETTY_PRINT) . ") </script>";

    // Checks if display is the current page
} else if ($_SERVER["SCRIPT_NAME"] == "/HospitalSystem/includes/display.php") {

    $sql = "SELECT * FROM patients";

    $statement = $db->prepare($sql);
    $statement->execute(array());

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // encoding to JSON to pass to Javascript
    echo "<script> displayTable(" . json_encode($result, JSON_PRETTY_PRINT) . ") </script>";
}
