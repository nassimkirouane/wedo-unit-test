<?php
namespace Wedo;
use PHPUnit\Framework\TestCase;

class RendererTest extends TestCase
{
    public function renderProvider()
    {
        return [
            [
                [0, 1],
                "•\n" .
                " •\n"
            ],
            [
                [0, 1, 3],
                "•\n" .
                " •\n" .
                "   •\n"
            ]
        ];
    }

    /**
     * @test
     * @dataProvider renderProvider
     */
    public function render($points, $output)
    {
        $renderer = new Renderer();
        self::assertSame($output, $renderer->render($points));
    }
}