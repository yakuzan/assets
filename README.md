<h1 align="center">Assets is a php helper for working with static assets & embedding.</h1>

<p align="center">:package: This package helps you to add toastr.js notifications to your Laravel 5 project.</p>

<p align="center">
    <a href="https://travis-ci.org/yakuzan/assets"><img src="https://travis-ci.org/yakuzan/assets.svg?branch=master" alt="Build Status"></a>
    <a href="https://packagist.org/packages/yakuzan/assets"><img src="https://poser.pugx.org/yakuzan/assets/v/stable" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/yakuzan/assets"><img src="https://poser.pugx.org/yakuzan/assets/v/unstable" alt="Latest Unstable Version"></a>
    <a href="https://scrutinizer-ci.com/g/yakuzan/assets/build-status/master"><img src="https://scrutinizer-ci.com/g/yakuzan/assets/badges/build.png?b=master" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/yakuzan/assets/?branch=master"><img src="https://scrutinizer-ci.com/g/yakuzan/assets/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
    <a href="https://scrutinizer-ci.com/g/yakuzan/assets/?branch=master"><img src="https://scrutinizer-ci.com/g/yakuzan/assets/badges/coverage.png?b=master" alt="Code Coverage"></a>
    <a href="https://packagist.org/packages/yakuzan/assets"><img src="https://poser.pugx.org/yakuzan/assets/downloads" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/yakuzan/assets"><img src="https://poser.pugx.org/yakuzan/assets/license" alt="License"></a>
</p>


## Install

You can install the package using composer

```sh
$ composer require yakuzan/assets
```
    
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
