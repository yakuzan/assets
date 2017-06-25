assets
======

[![Join the chat at https://gitter.im/yakuzan/boiler](https://badges.gitter.im/yakuzan/boiler.svg)](https://gitter.im/yakuzan/boiler?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Latest Stable Version](https://poser.pugx.org/yakuzan/assets/v/stable)](https://packagist.org/packages/yakuzan/assets)
[![Latest Unstable Version](https://poser.pugx.org/yakuzan/assets/v/unstable)](https://packagist.org/packages/yakuzan/assets)
[![Build Status](https://scrutinizer-ci.com/g/yakuzan/assets/badges/build.png?b=master)](https://scrutinizer-ci.com/g/yakuzan/assets/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/yakuzan/assets/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yakuzan/assets/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yakuzan/assets/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yakuzan/assets/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/yakuzan/assets.svg)](https://packagist.org/packages/yakuzan/assets)
[![StyleCI](https://styleci.io/repos/90417312/shield?style=flat)](https://styleci.io/repos/90417312/shield?style=flat)
[![License](https://poser.pugx.org/yakuzan/assets/license)](https://packagist.org/packages/yakuzan/assets)
[![composer.lock](https://poser.pugx.org/yakuzan/assets/composerlock)](https://packagist.org/packages/yakuzan/assets)

a php helper for working with static assets & embedding.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require-dev": {
        "yakuzan/assets": "^0.0.2"
    }
}
```

And then run `composer install` from the terminal.

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require yakuzan/assets
    
### alternative instalation :
  if you don't want to use composer you can still use assets, just download the file ``assets.php`` put in a subfolder and just include it like 
  
  ```php
    include 'path/to/your/subfolder/assets.php';
  ```
  
  
  ## Usage
  display jquery link
  `jquery($version = '3.2.1', $src = null)`
    
   ```php
   echo jquery();
   output => <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   ```
   
   you can overrite the jquery version like this:
   
   ```php
   echo jquery(2.0);
   output => <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0/jquery.min.js"></script>
   ```
   
   or even a local version of jquery by providing a second parameter, the source of the file :
   ```php
   echo jquery(null, 'path/to/jquery.min.js');
   output => <script src="path/to/jquery.min.js"></script>
   
   ```
  similar function  
  * `fontawesome($version = '4.7.0', $href = null)` 
  * `bootstrap_js($version = '4.0.0-alpha.6', $src = null)` 
  * `bootstrap_css($version = '4.0.0-alpha.6', $href = null)`
  
  
  to include a font-awesome tag very easily just use this helper function :
  ```php
  echo icon('edit);
  // output : <i class="fa fa-edit"></i>
  
  echo icon('edit', 'span'); // to switch from 'i' tag to a 'span'
  // output : <span class="fa fa-edit"></span>
  ```

 to insert a image tag it's super easy `img($src = null, $attrs = [])`
 ```php
 echo img('profile.png');
 // output : <img stc="profile.png" />
 
 echo img('profile.png', ["class" => "rounded small", "id" => "profile"]);// if you want to add custom attributs
 // <img src="profile.png" class="rounded small" id="profile" />
 ```
 
 similar methods 
 * css($href = '', $attrs = [])
 * less($href = '', $attrs = [])
 * js($src = null, $default = '', $attrs = [])
