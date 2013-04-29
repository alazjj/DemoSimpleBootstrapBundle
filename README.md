DemoSimpleBootstrapBundle
=====================

## Installation

Add AlazjjSimpleBootstrapBundle and AlazjjDemoSimpleBootstrapBundle in your composer.json:

```js
"require": {
    "alazjj/jquery": "1.9.1",
    "alazjj/jquery/form": "3.28.0",
    "alazjj/bootstrap/twitter": "2.3.1",
    "alazjj/bootstrap/datepicker": "dev-master",
    "alazjj/bootstrap/colorpicker": "dev-master",
    "alazjj/simple-bootstrap-bundle": "0.1.1",
    "alazjj/DemoSimpleBootstrapBundle": "dev-master"
},

"repositories": [
    {
        "type": "vcs",
        "url": "git://github.com/alazjj/DemoSimpleBootstrapBundle.git"
    },
    {
        "type": "package",
        "package": {
            "name": "alazjj/jquery",
            "version": "1.9.1",
            "dist": {
                "url": "http://code.jquery.com/jquery-1.9.1.min.js",
                "type": "file"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "name": "alazjj/jquery/form",
            "version": "3.28.0",
            "dist": {
                "url": "http://malsup.github.com/jquery.form.js",
                "type": "file"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "name": "alazjj/bootstrap/twitter",
            "version": "2.3.1",
            "dist": {
                "url": "http://twitter.github.com/bootstrap/assets/bootstrap.zip",
                "type": "zip"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "name": "alazjj/bootstrap/datepicker",
            "version": "dev-master",
            "dist": {
                "url": "http://www.eyecon.ro/bootstrap-datepicker/datepicker.zip",
                "type": "zip"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "name": "alazjj/bootstrap/colorpicker",
            "version": "dev-master",
            "dist": {
                "url": "http://www.eyecon.ro/bootstrap-colorpicker/colorpicker.zip",
                "type": "zip"
            }
        }
    }
]
```


Add the post install scripts in your composer.json:
```js
    {
        "scripts": {
            "post-install-cmd": [
                "Alazjj\\SimpleBootstrapBundle\\Composer\\ScriptHandler::installAssets"
            ],
            "post-update-cmd": [
                "Alazjj\\SimpleBootstrapBundle\\Composer\\ScriptHandler::installAssets"
            ]
        }
    }
```

## Configuration

Register the bundles in the kernel :
```php
    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Alazjj\DemoSimpleBootstrapBundle\AlazjjDemoSimpleBootstrapBundle(),
            new Alazjj\SimpleBootstrapBundle\AlazjjSimpleBootstrapBundle(),
        );
    }
```
Import or copy the assets configuration :
```yaml
    # app/config/config.yml
    imports:
        - { resource: @AlazjjSimpleBootstrapBundle/Resources/config/assetic.yml }
```

Use the AlazjjSimpleBootstrapBundle template to display forms and fields :
```yaml
    # app/config/config.yml
    twig:
        form:
            resources:
                - 'AlazjjSimpleBootstrapBundle:Form:fields.html.twig'
```

Import the routing configuration :
```yaml
    # app/config/routing.yml
   _alazjj_demosimplebootstrap_bundle:
       resource: "@AlazjjDemoSimpleBootstrapBundle/Resources/config/routing.yml"
       prefix:   /demosimplebootstrap
```
