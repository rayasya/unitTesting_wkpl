<?php
use PHPUnit\Framework\TestCase;


require_once "WordCount.php";

class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $wc = new WordCount();
        $testSentence = "Nama Saya Rayasya";
        $wordCount = $wc->countWords($testSentence);

        $this->assertEquals(3, $wordCount);
    }
}
?>