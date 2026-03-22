<?php
/**
 * Functions required for the index page
 * 
 * @author Hoek
 * @since Mar 22 2026
 * @revisions 0
 */

/**
 * Get the current page name from the action
 * 
 * @author Hoek
 * @since Mar 22 2026
 * @revisions 0
 */
function getPageName() {
    $pName = "Logout";
    if (!empty($_REQUEST['action'])) {
        $pName = ucfirst($_REQUEST['action']);
    }
    return $pName;
}