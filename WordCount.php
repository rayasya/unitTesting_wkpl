<?php
class WordCount
{
    //membuat function countWords dengan parameter
    public function countWords($sentence)
    {
        return count(explode(" ", $sentence));
        /* mengembalikan hasil function countWords berupa hasil hitung explode, fungsi explode adalah
        function yang dimana akan memisah string.pada kasus kali ini yang di explode adalah pada
        $sentence setiap bertemu karakter spasi */
    }
}
?>