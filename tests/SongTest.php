<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Song;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class SongTest extends TestCase {

    #[Test]
    public function ninty_nine_bottles_verse(){

        $expected = <<<EOT
                    99 bottles of beer on the wall
                    99 bottles of beer
                    Take one down and pass it around
                    98 bottles of beer on the wall

                    EOT;
        
        $result = (new Song)->verse(99);

        $this->assertSame($expected, $result);

    }

    #[Test]
    public function two_bottles_verse(){

        $expected = <<<EOT
                    2 bottles of beer on the wall
                    2 bottles of beer
                    Take one down and pass it around
                    1 bottle of beer on the wall

                    EOT;
        
        $result = (new Song)->verse(2);

        $this->assertSame($expected, $result);

    }


    #[Test]
    public function one_bottles_verse(){

        $expected = <<<EOT
                    1 bottle of beer on the wall
                    1 bottle of beer
                    Take one down and pass it around
                    No more bottles of beer on the wall

                    EOT;
        
        $result = (new Song)->verse(1);

        $this->assertSame($expected, $result);

    }

    #[Test]
    public function no_more_bottles_verse(){

        $expected = <<<EOT
                    No more bottles of beer on the wall
                    No more bottles of beer
                    Go to the store and buy some more
                    99 bottles of beer on the wall

                    EOT;
        
        $result = (new Song)->verse(0);

        $this->assertSame($expected, $result);

    }







    // #[Test]
    // public function it_gets_the_lyrics()  {

    //     $expected = file_get_contents(__DIR__ . '/stubs/lyrics.stub');
    //     $result = (new Song)->verse(99);

    //     $this->assertSame($expected, $result);
    // }

 



}