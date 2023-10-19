<?php
//menggunakan library TestCase yang tersedia pada PHPunit
use PHPUnit\Framework\TestCase;

//menggunakan class yang akan kita test
require_once "WordCount.php";

//membuat class yang inherit dari class TestCase PHPunit
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        //instansiasi class WordCount menjadi objek berupa $wc
        $wc = new WordCount();

        //membuat variable $testSentence dengan isian string yang nantinya akan diuji
        $testSentence = "Nama Saya Rayasya"; // 3 kata

        /*membuat variable $wordCount yang isinya adalah return hasil hitungan (count) dari function countWords pada class WordCount dengan memasukkan value pada parameter berupa string yang telah dibuat diatas*/
        $wordCount = $wc->countWords($testSentence);

        /*memanggil function assertEquals yang berfungsi untuk mengecek apakah value pada parameter pertama sama dengan value pada parameter kedua, yang dimana value dari parameter kedua adalah hasil count dari function countWords pada class WordCount*/
        $this->assertEquals(3, $wordCount);
    }
}
?>