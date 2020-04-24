[![Maintenance](https://img.shields.io/badge/Maintained%3F-no-red.svg)](https://bitbucket.org/lbesson/ansi-colors)
[![Generic badge](https://img.shields.io/badge/Status-Deprecated-orange.svg)](https://shields.io/)
[![GPLv3 license](https://img.shields.io/badge/License-GPLv3-blue.svg)](http://perso.crans.org/besson/LICENSE.html)

# Small PHP Router

The Small PHP Router is a project to give the developer the base resources for routing URLs, like in most common frameworks.
So, the developer can start a project just using the `public` and `app` folders.

This project covers the routing by expecting the first parameter to be the controller of your project and the second as your action in the controller.

Also, it supports views to be rendered automatically together with the actions.

## How does it work
### URL
The Small PHP Router URL is interpreted by the htaccess file as:
```html
http://[path/to/your/server]/[controller]/[action]
```

### Folders
The project is structured as the following:
* The App folder, your core files should be placed. This folder will not be published to users:
  * /app
  * /app/controllers
  * /app/includes
  * /app/models
  * /app/views

* The public files, where users should have access. Th developer can create any kind of structure on the public folder:  
  * /public
  * /public/css
  * /public/img
  * /public/js

### Base Files
The Small PHP Router is composed by the following base files:
* /public/index.php *(The main router service)*
* /public/autoload.php
* /public/.htaccess
* /app/models/BaseController.php *(Basic structure for the controllers)*
* /app/controllers/Home.php
* /app/views/Home/index.php

## How to use
Put the files on your project folder, and access the `/public` to see the magic working.
The public folder should be setup to be the default user access of your website.
