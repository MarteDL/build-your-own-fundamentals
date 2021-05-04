<?php declare(strict_types=1);

namespace test;
require_once("vendor/autoload.php");

use JetBrains\PhpStorm\Pure;
use Model\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    #[Pure] public function provideArticleTestData() : array
    {
        return [
            ['Test', new Article(3, 'Test', 'More testing')],
            ['Test 2', new Article(4, 'Test 2', 'There once was a foo lying in a field of foo')]
        ];
    }

    public function testIfTestingWorks()
    {
        self::assertTrue(true);
    }

//    /**
//     * @dataProvider  provideArticleTestData
//     */
//    public function testGetTitle(Article $article, $expectedResult)
//    {
//        $this->assertSame($expectedResult, $article->getTitle());
//    }
}