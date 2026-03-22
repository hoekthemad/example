<?php
/**
 * Main index.php file to act as a page passthrough
 * 
 * @author Hoek
 * @since Mar 22 2026
 * @revisions 0
 */
require 'src/php/config.php';
require_once 'src/php/utils/utils.index.php';
// Get the page name and check to see if we need to login
$currPage = getPageName();
if ($currPage != "Login" && $currPage != "Register") {
    doLoginCheck();
}

// Get header
require_once 'src/html/static/index.header.php';
// Get action page
require 'src/html/actions/'.$currPage.'.php';
// Get footer
require_once 'src/html/static/index.footer.php';

?>