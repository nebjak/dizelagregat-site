<?php

/**
 * This function is checking is request AJAX
 * @return bool
 */
function is_ajax() {
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest");
} 