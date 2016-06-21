# blazebase
A starting point Wordpress theme with SASS Bootstrap set up, Grunt modules and a few basic templates.

Theme URI on Github: [Theme on Github](https://github.com/endymion1818/blazebase)

## This theme also contains:

**wp-config-sample**
A few settings to avoid overwriting the config file when using different development / production and live environments

**htaccess-sample.txt**
A few server settings such as enabling gZip (if possible), SVG support and maintenance mode settings when required.

**dummycontent.xml**
Some basic pages and posts to get you started

## A Few Notes

This theme is meant to be very basic. It's a good starting point if you want the convenience of the following setup in a Wordpress theme:

- Bootstrap SASS files (so you can pick and choose components instead of loading everything, improving performance
- Bootstrap Javascript (uncompressed and un minified - so that you can include only the files you need and let Grunt do the rest)
- An established root for all assets
- A gruntfile with some starter modules
- A template for wp-config.php so that you can work on seperate versions without having to worry about rewrites deleting your database information
- A template for htaccess (Apache server config file) that enables gZip by default and adds server support for svg files

Enjoy :-)
