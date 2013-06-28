Cuckoo
======

What is Cuckoo?
---------------

Cuckoo is a micro PHP framework.

Inspired by O'REILLY.

![Cuckoo Logo](http://akamaicovers.oreilly.com/images/0636920012443/cat.gif)

Requirements
------------

You need **PHP >= 5.3.0**.

Configuration
-------------

### Apache

Ensure the `.htaccess` and `index.php` files are in the same `public` directory. The `.htaccess` file should contain this code:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]

### Nginx

Your nginx configuration file should contain this code (along with other settings you may need) in your `server` block:

    root /your/site/public;
    if (!-e $request_filename){
        rewrite ^/(.*)$ /index.php?/$1 last;
        break;
    }

This assumes that Cuckoo's `index.php` is in the `public` folder of your project.

License
-------

Cuckoo is licensed under the MIT license.

