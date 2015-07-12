#Agency

Agency is a tiny, ready-to-go PHP framework built with fast-deployment in mind. It can be run in top of a LAMP or LEMP stack (as long as you deal with rewrite rules), and the Installation process is minimal!

Here you have some features about it:

* Ready to deploy and use
* Simple MVC architecture
* Clear and minimal structure
* Secure as hell!
* Free, in the broadest sense of the word (see UNLICENSE)

## Requirements

* PHP version 5.4 or newer is HIGHLY RECOMMENDED
* MySQL 5.1 or newer
* In case of LAMP, a recent version of Apache with:
  * mod_rewrite enabled
  * .htaccess support enabled
* In case of LEMP, a recent version of nginx

## Installation

* Download Agency and extract it to your web root*.
Make sure that your "web root" is set to be the public/ directory, the one which contains the index.php file. You can achieve that by just moving the other directories up or modifying your web server configuration file.
* Navigate to `application/config/Config.php` and tweak it to fit your needs.
* You are ready to rock! Point your browser to your `Config::$base_url` and hopefully see a beautiful "Hello world!" screen ^^.

## Donation!

If you are reading this, you probably appreciate my work and are kind enough to buy me a coffee so I can be 2 and a half more hours coding to make this even more awesome! Any amount is really helpful ^^

> 1B2jdJ5zwE98xrEEWLZYGgh3tKBjQZ345p

![Donate Address](https://github.com/DavidJotta/Agency/blob/master/donate_address.png)

## License

Agency is released free and unencumbered into the public domain. See UNLICENSE file for more information.

TL;DR: Basically you can copy, modify, publish, use, compile, sell or distribute Agency for any purpose and by any means.

## Happy coding! ;)
