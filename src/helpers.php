<?php

/**
 * Reload current page
 *
 * @return string
 */
function reloadWindow(): string {
    return 'window.location.reload()';
}

/**
 * Return a JavaScript alert with a message
 * @param $msg
 * @return string
 */
function jsAlert($msg): string {
    return 'alert("' . $msg . '");';
}


/**
 * Open a $url in a new tab
 *
 * @param string $url
 * @return string
 */
function jsOpenInNewTab(string $url): string
{
    return "window.open('{$url}', '_blank');";
}


/**
 * Log a message to the client side Javascript console
 *
 * @param string $message
 * @return string
 */
function consoleLog(string $message): string {
    return "console.log('$message');";
}
