<?php
require_once "./database/controller.php";

$controller = new Controller();

if(isset($_POST['btn_edit_contractor'])) {
    $contractor_id = $_GET['id'];

    $data = array(
        'nip' => isset($_POST['nip']) ? $_POST['nip'] : null,
        'regon' => isset($_POST['regon']) ? $_POST['regon'] : null,
        'name' => isset($_POST['name']) ? $_POST['name'] : null,
        'vat' => isset($_POST['vat_payer']) ? $_POST['vat_payer'] : false,
        'street'=> isset($_POST['street']) ? $_POST['street'] : null,
        'house_number'=> isset($_POST['house_number']) ? $_POST['house_number'] : null,
        'apartment_number'=> isset($_POST['apartment_number']) ? $_POST['apartment_number'] : null
    );

    $controller->editContractorById($contractor_id, $data);

    header('Location: contractors.php?edited=1');
}

if (isset($_POST['contractor_delete'])) {
    $contractor_id = $_GET['id'];

    $controller->deleteContractorById($contractor_id);

    header('Location: contractors.php?deleted=1');
}

if (isset($_POST['btn_create_contractor'])) {
    $data = array(
        'nip' => isset($_POST['nip']) ? $_POST['nip'] : null,
        'regon' => isset($_POST['regon']) ? $_POST['regon'] : null,
        'name' => isset($_POST['name']) ? $_POST['name'] : null,
        'vat_payer' => isset($_POST['vat_payer']) ? $_POST['vat_payer'] : false,
        'street'=> isset($_POST['street']) ? $_POST['street'] : null,
        'house_number'=> isset($_POST['house_number']) ? $_POST['house_number'] : null,
        'apartment_number'=> isset($_POST['apartment_number']) ? $_POST['apartment_number'] : null
    );

    $controller->createContractor($data);

    header('Location: contractors.php?created=1');
}

if(isset($_POST['btn_edit_delegation'])) {
    $delegation_id = $_GET['id'];

    $data = array(
        'fullname' => isset($_POST['fullname']) ? $_POST['fullname'] : null,
        'date_from' => isset($_POST['date_from']) ? $_POST['date_from'] : null,
        'date_to' => isset($_POST['date_to']) ? $_POST['date_to'] : null,
        'departure' => isset($_POST['departure']) ? $_POST['departure'] : null,
        'arrival'=> isset($_POST['arrival']) ? $_POST['arrival'] : null,
    );

    $controller->editDelegationById($delegation_id, $data);

    header('Location: delegation.php?edited=1');
}

if (isset($_POST['btn_create_delegation'])) {
    $data = array(
        'fullname' => isset($_POST['fullname']) ? $_POST['fullname'] : null,
        'date_from' => isset($_POST['date_from']) ? $_POST['date_from'] : null,
        'date_to' => isset($_POST['date_to']) ? $_POST['date_to'] : null,
        'departure' => isset($_POST['departure']) ? $_POST['departure'] : null,
        'street'=> isset($_POST['street']) ? $_POST['street'] : null,
        'arrival'=> isset($_POST['arrival']) ? $_POST['arrival'] : null,
    );

    $controller->createDelegation($data);

    header('Location: delegation.php?created=1');
}

if (isset($_POST['delegation_delete'])) {
    $delegation_id = $_GET['id'];

    $controller->deleteDelegationById($delegation_id);

    header('Location: delegation.php?deleted=1');
}

// EDYCJA EMPLOJSÓW
if(isset($_POST['btn_edit_employee'])) {

}

?>