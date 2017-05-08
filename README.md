assets
======

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
    
   ```php
   echo jquery();
   output => <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   ```
   
   you can overrite the jquery version like this:
   
   ```php
   echo jquery(2.0);
   output => <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0/jquery.min.js"></script>
   ```

