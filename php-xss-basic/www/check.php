<?php
require "index.php";
use PHPUnit\Framework\TestCase;

final class EscapeTest extends TestCase
{
    /**
     * @group gt-escape
     */
    public function testGtEscape()
    {
        // > to &gt;
        $this->assertEquals(
            "&gt;",
            safe_output(">")
        );
    }

    /**
     * @group lt-escape
     */
    public function testLtEscape()
    {
        // < to &lt;
        $this->assertEquals(
            "&lt;",
            safe_output("<")
        );
    }

    /**
     * @group quote-scape
     */
    public function testQuotEscape()
    {
        // " to &quot;
        $this->assertEquals(
            '&quot;',
            safe_output('"')
        );
    }
        
    /**
     * @group singlequote-escape
     */
    public function testSingleQuoteEscape()
    {
        // ' to &#039;
        $this->assertEquals(
            "&#039;",
            safe_output("'")
        );
    }

    /**
     * @group amp-escape
     */
    public function testAmpEscape()
    {
        // & to &amp;
        $this->assertEquals(
            "&amp;",
            safe_output("&")
        );

    }
}

/*
    function check() {
        assert('safe_output("\'") === "&#039;"', "'が安全にエスケープされていません");
        assert('safe_output("&") === "&amp;"', "&がエスケープされていません");
    }
    
    check();
 */
?>

