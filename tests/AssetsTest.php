<?php

use PHPUnit\Framework\TestCase;

class AssetsTest extends TestCase
{
    /** @test */
    public function it_render_css_link()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="fake.css">', css('fake.css'));
    }
}
