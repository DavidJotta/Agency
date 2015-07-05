#jPHP-Framework

jPHP-Framework is a tiny, ready-to-go PHP framework built with fast-deployment in mind. It can be runned in top of a LAMP or LEMP stack (as long as you convert .htaccess to nginx rules), and the Installation process is minimal!

Here you have some features about it:

* Ready-to-go, deploy and use
* Simple MVC architecture
* Clear and minimal class-structure
* Secure as hell!

## Requirements

* PHP version 5.4 or newer is HIGHLY RECOMMENDED
* MySQL 5.1 or newer
* A recent version of Apache with:
  * mod_rewrite enabled
  * .htaccess support enabled

## Installation

* Download jPHP-Framework and extract it to your web root.
Make sure that your DocumentRoot directive points to the public/ directory. You can achieve that by just moving the other directories up or modifying your Apache configuration file.
* Navigate to `application/config/Config.php` and tweak it to fit your needs.
* You are ready to rock! Point your browser to your `Config::$base_url` and hopefully see a beautiful "Hello world!" screen ^^.

## License

jPHP-Framework is released under the GNU GPLv3 license. See LICENSE file for more information.

TL;DR: Basically you can do whatever(see LICENSE file, don't misunderstand me) you want with the code as long as you:
* make the modified source code available under the same license,
* attach a LICENSE file and put a Copyright notice in any additional file and
* indicate significant changes you make to the code.
