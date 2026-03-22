<?php

function getPageName() {
    $pName = "";
    if (!empty($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case "Login" : {
                $pName = 'Login';
                break;
            }
            default : {
                $pName = 'Login';
            }
        }
    }
    return $pName;
}