<?php
    /**
        Done by Bryan Pickering
    */
    require_once(__DIR__."/../../Business/Congregation/CongregationCoordinator.class.php");
    $CongregationCoordinator = new CongregationCoordinator();

    //Get all the congregation coordinator emails
    $emails = $CongregationCoordinator->getCoordinatorEmailAll();

    echo json_encode($emails);