<?php


use CornCodeCreations\LineDumper;
use PHPUnit\Framework\TestCase;

class LineDumperTest extends TestCase
{
    public function testLineDumper(): void
    {
        $stringA  = "This is a line.\nAnother line.";
        $stringB  = "This is a line.\nAnother different line.";
        $expected = "\nLine   1|   ok| This is a line.\n\033[93mLine   2|to-be| Another line.\033[0m\n\033[91mLine   2|as-is| Another different line.\033[0m\n";

        $comp = LineDumper::compareLines($stringA, $stringB);

        $this->assertSame($expected, $comp);
    }
}