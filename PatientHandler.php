<?php
    session_start();
    require_once "Dao.php";
    

    $dao = new Dao();

    $first_name = $_POST["firstname"];
    $dao->log($first_name. " shared from Patient");
    $patient_in_the_database = $dao->getPatient($first_name);

    $fName = $patient_in_the_database['FirstName'];
    $lName = $patient_in_the_database['LastName'];
    $number = $patient_in_the_database['Phone'];
    
    $dao->log($fName. " was pulled from database");
    $_SESSION['firstname'] = $fName;
    $_SESSION['lastname'] = $lName;
    $_SESSION['phone'] = $number;
    header("Location: Patient.php");


    ?>