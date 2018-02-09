# Drupal 8 Boilerplate

We use this basic boilerplate to set up our Drupal 8 projects.

## Installation / Setup

We are using composer for installing drupal.

### Get your packages
Install Drupal via composer:

    $ composer install 

### Create drupal-specific files
You can find our small library with some basic files for your setup in the folder `./examples`.
You can copy them to its original location. Probably you have to adapt its content first.

| Example File | Target Location | Enable? |
| --- | --- | --- |
| `./examples/settings.local.php` | `./web/sites/default/settings.local.php` | **YES**, in `./web/sites/default/settings.php` |
| `./examples/development.services.yml` | `./web/sites/development.services.yml` (file exists already) | **YES**, in `./web/sites/default/settings.php` |

### Connect the database
Create database, setup the default drupal-installation, add the database-connection to the `./web/sites/default/settings.local.php`.

### Drupal installation
Install and uninstall (not) required modules directly with `drush`.

    $ cd ./web
    $ drush st

Deinstallation of unused modules

    $ drush pmu field_layout -y
    $ drush pmu layout_discovery -y

Installation of new modules

    $ drush en admin_toolbar -y
    $ drush en admin_toolbar_tools -y
    $ drush en environment_indicator -y
    $ drush en field_group -y
    $ drush en metatag -y
    $ drush en redirect -y
    $ drush en twig_field_value -y
    
## Coding standards

We follow the [Drupal Coding standards](https://www.drupal.org/docs/develop/standards/coding-standards) and we check this in
our projects by using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) in connection with the Drupal Module
[drupal_coder](https://www.drupal.org/project/coder).

But we deregulated the guidelines a little bit and created our own guidelines. You can find everything here in the `phpcs.xml.dist`.

After the installation via composer you will be able to check your project by running:

    $ ./vendor/bin/phpcs

## Optional Addons
Based on your project, you can use some default addons.

### Paragraphs
[Paragraphs module]([Drupal Composer](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal))

A module to add a new possibility to create content. 

    $ composer require drupal/paragraphs
    $ composer require drupal/paragraphs_edit
    
    $ cd ./web
    
    $ drush en paragraphs -y
    $ drush en paragraphs_edit -y