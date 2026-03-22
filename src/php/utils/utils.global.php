<?php

function doLoginCheck() {
    if (getPageName() != "Login" || !empty(session_id())) {
        if (empty($_SESSION['user_id']) || empty($_SESSION['username'])) {
            header("Location: index.php?action=Login");
            exit;
        }
    }
}