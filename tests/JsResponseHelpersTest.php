<?php

namespace Sfneal\Helpers\Javascript\Tests;

use PHPUnit\Framework\TestCase;

class JsResponseHelpersTest extends TestCase
{
    /** @test */
    public function reloadWindow()
    {
        $response = reloadWindow();
        $expected = 'window.location.reload()';

        $this->assertIsString($response);
        $this->assertTrue($response === $expected);
    }

    /** @test */
    public function jsAlert()
    {
        $message = 'An error has occurred.';
        $response = jsAlert($message);
        $expected = 'alert("An error has occurred.");';

        $this->assertIsString($response);
        $this->assertTrue($response === $expected);
    }

    /** @test */
    public function jsOpenInNewTab()
    {
        $url = 'http:://google.com';
        $response = jsOpenInNewTab($url);
        $expected = "window.open('http:://google.com', '_blank');";

        $this->assertIsString($response);
        $this->assertTrue($response === $expected);
    }

    /** @test */
    public function consoleLog()
    {
        $message = "Here's a message that should appear in the JS console log.";
        $response = consoleLog($message);
        $expected = "console.log('Here's a message that should appear in the JS console log.');";

        $this->assertIsString($response);
        $this->assertTrue($response === $expected);
    }
}
