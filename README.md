# Drupal 8 Boilerplate

We use this basic boilerplate to set up our [Drupal 8](https://www.drupal.org/8) projects.

## Installation / Setup

We are using [Drupal Composer](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal) for installing drupal.

### Prepare your project-folder

Create a new project-folder and add there the important documents:

    $ cp composer.json PROJECT_DIRECTORY
    $ cp -R scripts PROJECT_DIRECTORY/scripts

### Get your packages

Install Drupal via [Composer](https://getcomposer.org/):

    $ cd PROJECT_DIRECTORY
    $ composer install 

### Create drupal-specific files

You can find our small library with some basic files for your setup in the folder `./examples`.
You can copy them to its original location. Probably you have to adapt its content first.

| Example File | Target Location | Enable? |
| --- | --- | --- |
| `./examples/settings.local.php` | `./web/sites/default/settings.local.php` | **YES**, in `./web/sites/default/settings.php` |
| `./examples/development.services.yml` | `./web/sites/development.services.yml` (file exists already) | **YES**, in `./web/sites/default/settings.php` |

### Connect the database

Create database and add the database-connection to the `./web/sites/default/settings.local.php`.

Activate the out-commented `settings.local.php` in `./web/sites/default/settings.php` as included file.  

### Drupal installation

Check if `drush` is running.

    $ cd ./web
    $ drush st
    
Install drupal

    $ drush site-install --account-mail=EMAIL_ADDRESS --account-pass=PASSWORD --site-name=PROJECT_NAME --site-mail=EMAIL_ADDRESS

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
    
## Optional Addons

Based on your project, you can use some default addons.

### [Paragraphs](https://www.drupal.org/project/paragraphs)

> Paragraphs is the new way of content creation!
 It allows you — Site Builders — to make things cleaner so that you
 can give more editing power to your end-users.

    $ composer require drupal/paragraphs
    $ composer require drupal/paragraphs_edit
    
    $ cd ./web
    
    $ drush en paragraphs -y
    $ drush en paragraphs_edit -y

### [Webform](https://www.drupal.org/project/webform)

> Webform is the module for making forms and surveys in Drupal. After
a submission customizable e-mails can be sent to administrators and/or
submitters. Results can be exported into Excel or other spreadsheet
applications.

    $ composer require drupal/webform
    
    $ cd ./web
    
    $ drush en webform -y
    $ drush en webform_ui -y
    $ (optional) drush en webform_node -y
