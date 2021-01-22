<?php


namespace Sfneal\Helpers\Javascript;


class JsResponses
{
    /**
     * Reload current page.
     *
     * @return string
     */
    public static function reloadWindow(): string
    {
        return 'window.location.reload()';
    }

    /**
     * Return a JavaScript alert with a message.
     *
     * @param string $msg
     * @return string
     */
    public static function jsAlert(string $msg): string
    {
        return 'alert("'.$msg.'");';
    }

    /**
     * Open a $url in a new tab.
     *
     * @param string $url
     * @return string
     */
    public static function jsOpenInNewTab(string $url): string
    {
        return "window.open('{$url}', '_blank');";
    }

    /**
     * Log a message to the client side Javascript console.
     *
     * @param string $message
     * @return string
     */
    public static function consoleLog(string $message): string
    {
        return "console.log('$message');";
    }
}
