<?php

function attrs($attrs) {
    $str = '';

    foreach ($attrs as $key => $value) {
        $str .= $key.'="'.$value.'" ';
    }

    return $str;
}

if (! function_exists('css')) {
    function css($href = '', $attrs = [])
    {
        echo '<link rel="stylesheet" type="text/css" href="'.$href.'"'.attrs($attrs).'>';
    }
}

if (! function_exists('less')) {
    function less($href = '', $attrs = [])
    {
        echo '<link rel="stylesheet/less" type="text/css" href="'.$href.'"'.attrs($attrs).'>';
    }
}

if (! function_exists('js')) {
    function js($src = null, $default ='', $attrs = [])
    {
        echo '<script type="text/javascript" src="'.$src.'"'.attrs($attrs).'>'.$default.'</script>';
    }
}

if (! function_exists('img')) {
    function img($src = null, $attrs = [])
    {
        echo '<img src="'.$src.'" '.attrs($attrs).' />';
    }
}

if (! function_exists('fontawesome')) {
    function fontawesome($version = '4.7.0', $href = null)
    {
        if (null === $href) {
            $href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/'.$version.'/css/font-awesome.min.css';
        }

        echo '<link rel="stylesheet" type="text/css" href="'.$href.'">';
    }
}

if (! function_exists('jquery')) {
    function jquery($version = '3.2.1', $src = null)
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/'.$version.'/jquery.min.js';
        }

        echo '<script type="text/javascript" src="'.$src.'"></script>';
    }
}

if (! function_exists('bootstrap_js')) {
    function bootstrap_js($version = '4.0.0-alpha.6', $src = null)
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$version.'/js/bootstrap.min.js';
        }

        echo '<script type="text/javascript" src="'.$src.'"></script>';
    }
}

if (! function_exists('bootstrap_css')) {
    function bootstrap_css($version = '4.0.0-alpha.6', $href = null)
    {
        if (null === $href) {
            $href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$version.'/css/bootstrap.min.css';
        }

        echo '<link rel="stylesheet" type="text/css" href="'.$href.'">';
    }
}

if (! function_exists('icon')) {
    function icon($icon = '', $tag = 'i')
    {
        echo '<'.$tag.' class="fa fa-'.$icon.'"></'.$tag.'>';
    }
}

if (! function_exists('google_analytics'))
{
    function google_analytics($ua='')
    {
        // Change UA-XXXXX-X to be your site's ID
        $out = "<!-- Google Webmaster Tools & Analytics -->\n";
        $out .='<script type="text/javascript">';
        $out .='	var _gaq = _gaq || [];';
        $out .="    _gaq.push(['_setAccount', '$ua']);";
        $out .="    _gaq.push(['_trackPageview']);";
        $out .='    (function() {';
        $out .="      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
        $out .="      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
        $out .="      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
        $out .="    })();";
        $out .="</script>";
        return $out;
    }
}
