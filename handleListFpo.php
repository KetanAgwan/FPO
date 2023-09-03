<?php include "partials/_dbconnect.php" ?>

<?php

if (isset($_POST['submit'])) {
    if ($_POST['nature'] == NULL || $_POST['industry'] == NULL || $_POST['sector'] == NULL || $_POST['category'] == NULL ||
    $_POST['incnumber'] == NULL || $_POST['name'] == NULL || $_POST['registration'] == NULL || $_POST['pan'] == NULL ||
    $_POST['addr_1'] == NULL || $_POST['addr_2'] == NULL || $_POST['addr_3'] == NULL || $_POST['city'] == NULL ||
    $_POST['state'] == NULL || $_POST['pincode'] == NULL || $_POST['district'] == NULL || $_POST['subdistrict'] == NULL ||
    !is_uploaded_file($_FILES['reg_cert']['tmp_name']) || !is_uploaded_file($_FILES['auth_letter']['tmp_name'])){
        header("location:/project/newListFpo.php?status=notdone");
    }
    else{
    $nature = $_POST['nature'];
    $industry  = $_POST['industry'];
    $sector = $_POST['sector'];
    $category = $_POST['category'];
    $incNumber  = $_POST['incnumber'];
    $name  = $_POST['name'];
    $registration  = $_POST['registration'];
    $pan = $_POST['pan'];
    $addr1 = $_POST['addr_1'];
    $addr2 = $_POST['addr_2'];
    $addr3 = $_POST['addr_3'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $district = $_POST['district'];
    $subDistrict = $_POST['subdistrict'];
    $regCertificate = rand(1000,100000).'-'.$_FILES['reg_cert']['name'];
    $authLetter = rand(1000,100000).'-'.$_FILES['auth_letter']['name'];
    $tRegCert = $_FILES['reg_cert']['tmp_name'];
    $tAuthLetter = $_FILES['auth_letter']['tmp_name'];
    $dirOfCert = 'certificates';
    $dirOfLetter = 'auth_letters';

    move_uploaded_file($tRegCert,$dirOfCert.'/'.$regCertificate);
    move_uploaded_file($tAuthLetter,$dirOfLetter.'/'.$authLetter);

    $sql = "INSERT INTO `fpo`.`fpolist` (
        `fpo_id` ,
        `entity_nature` ,
        `industry` ,
        `sector` ,
        `categories` ,
        `inc_number` ,
        `entity_name` ,
        `registration` ,
        `pan` ,
        `addr_1` ,
        `addr_2` ,
        `addr_3` ,
        `city` ,
        `state` ,
        `pin_code` ,
        `district` ,
        `sub_district`,
        `reg_certificate`,
        `auth_letter`
        )
        VALUES (NULL, '$nature', '$industry', '$sector', '$category', '$incNumber', '$name', '$registration', ' $pan', '$addr1', '$addr2', '$addr3', '$city', '$state', '$pincode', '$district', '$subDistrict','$regCertificate','$authLetter'
        );
        ";

        if (mysqli_query($connection,$sql)) {
            header("location:/project/index.php?status=done");
        }else{
            header("location:/project/newListFpo.php?status=notdone");
        }

    }
}

?>