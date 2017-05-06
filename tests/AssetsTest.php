<?php

use PHPUnit\Framework\TestCase;

class AssetsTest extends TestCase
{
    /** @test */
    public function it_render_css_link()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="fake.css" >', css('fake.css'));
    }

    /** @test */
    public function it_render_css_with_attributes()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="fake.css" media="all" >', css('fake.css', ['media' => 'all']));
    }

    /** @test */
    public function it_render_js_link()
    {
        $this->assertEquals('<script type="text/javascript" src="fake.js"></script>', js('fake.js'));
    }

    /** @test */
    public function it_render_less_link()
    {
        $this->assertEquals('<link rel="stylesheet/less" type="text/css" href="fake.less">', less('fake.less'));
    }

    /** @test */
    public function it_render_img_ta()
    {
        $this->assertEquals('<img src="fake.png" />', img('fake.png'));
    }

    /** @test */
    public function it_render_img_with_attr()
    {
        $this->assertEquals('<img src="fake.png" class="rounded" id="profile" />', img('fake.png', ['class' => 'rounded', 'id' => 'profile']));
    }

    /** @test */
    public function it_render_font_awesome_css_link_with_last_version()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">', fontawesome());
    }

    /** @test */
    public function it_render_font_awesome_list_with_specified_version()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome.min.css">', fontawesome('3.0.0'));
    }

    /** @test */
    public function it_render_font_awsome_local_file()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="fake_fontawesome.css">', fontawesome(null, 'fake_fontawesome.css'));
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="fake_fontawesome.css">', fontawesome('3.0.0', 'fake_fontawesome.css'));
    }

    /** @test */
    public function it_render_jquery_link()
    {
        $this->assertEquals('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>', jquery());
    }

    /** @test */
    public function it_render_jquery_with_another_version()
    {
        $this->assertEquals('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>', jquery('2.0.0'));
    }

    /** @test */
    public function it_render_jquery_local_file()
    {
        $this->assertEquals('<script type="text/javascript" src="jquery.min.js"></script>', jquery(null, 'jquery.min.js'));
        $this->assertEquals('<script type="text/javascript" src="jquery.min.js"></script>', jquery('2.0.0', 'jquery.min.js'));
    }

    /** @test */
    public function it_render_bootstrap_css()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">', bootstrap_css());
    }

    /** @test */
    public function it_render_bootstrap_with_another_version()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css">', bootstrap_css('3.0.0'));
    }

    /** @test */
    public function it_render_bootstrap_local_file()
    {
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="bootstrap.min.js">', bootstrap_css(null, 'bootstrap.min.js'));
        $this->assertEquals('<link rel="stylesheet" type="text/css" href="bootstrap.min.js">', bootstrap_css('3.0.0', 'bootstrap.min.js'));
    }

    /** @test */
    public function it_render_bootstrap_js()
    {
        $this->assertEquals('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>', bootstrap_js());
    }

    /** @test */
    public function it_render_specific_version_of_bootrap()
    {
        $this->assertEquals('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js"></script>', bootstrap_js('3.0.0'));
    }

    /** @test */
    public function it_render_bootsrap_local_js_file()
    {
        $this->assertEquals('<script type="text/javascript" src="bootstrap.min.js"></script>', bootstrap_js(null, 'bootstrap.min.js'));
        $this->assertEquals('<script type="text/javascript" src="bootstrap.min.js"></script>', bootstrap_js('3.0.0', 'bootstrap.min.js'));
    }
}
