<?php

use Sfneal\Helpers\Javascript\JsResponses;

/**
 * Reload current page.
 *
 * @return string
 */
function reloadWindow(): string
{
    return JsResponses::reloadWindow();
}

/**
 * Return a JavaScript alert with a message.
 * @param string $msg
 * @return string
 */
function jsAlert(string $msg): string
{
    return JsResponses::jsAlert($msg);
}

/**
 * Open a $url in a new tab.
 *
 * @param string $url
 * @return string
 */
function jsOpenInNewTab(string $url): string
{
    return JsResponses::jsOpenInNewTab($url);
}

/**
 * Log a message to the client side Javascript console.
 *
 * @param string $message
 * @return string
 */
function consoleLog(string $message): string
{
    return JsResponses::consoleLog($message);
}
