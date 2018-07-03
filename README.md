# Drupal 8 Boilerplate

We use this basic boilerplate to set up our [Drupal 8](https://www.drupal.org/8) projects.

## Installation / Setup

We use [Drupal Composer](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal) for installing drupal.

### Prepare your project-folder

Create a new project-folder and copy the following files from this repository:

* composer.json
* scripts 
* .gitignore
* phpcs.xml.dist

Make sure to remove the indicated rules at the bottom of the `.gitignore` file. 

### Install PHP dependencies

Install Drupal and additional modules included in this repository via [Composer](https://getcomposer.org/):

```bash
cd PROJECT_DIRECTORY
composer install
```  

### Drupal configuration

The `./examples` folder contains some configuration files with recommended default values for the local development.
Copy them to the intended location and edit the files according to your needs. 

| Example File | Target Location | Enable? |
| --- | --- | --- |
| `./examples/settings.local.php` | `./web/sites/default/settings.local.php` | **YES**, in `./web/sites/default/settings.php` |
| `./examples/development.services.yml` | `./web/sites/development.services.yml` (file exists already) | **YES**, in `./web/sites/default/settings.php` |

### Setup database

* Create database and add the connection details and credentials to `./web/sites/default/settings.local.php`.
* Activate the commented-out `settings.local.php` in `./web/sites/default/settings.php` so that the local settings file gets included.  

### Drupal installation

Check if `drush` is running.

```bash
cd ./web
drush st
```
    
Install Drupal

```bash
drush site-install --account-name=gridonic --account-pass=PASSWORD --account-mail=EMAIL_ADDRESS --site-name=PROJECT_NAME --site-mail=EMAIL_ADDRESS
```

Uninstall unnecessary modules

```bash
drush pmu field_layout -y
drush pmu layout_discovery -y
drush pmu contact -y
drush pmu tour -y
drush pmu search -y
```

Install additional modules

```bash
drush en admin_toolbar -y
drush en admin_toolbar_tools -y
drush en environment_indicator -y
drush en field_group -y
drush en metatag -y
drush en redirect -y
drush en twig_field_value -y
drush en pathauto -y
drush en config_ignore -y
drush en simple_sitemap -y
drush en swiftmailer -y
```    

In case of multi-language support

```bash
drush en language -y
drush en locale -y
drush en content_translation -y
drush en config_translation -y
```

## Coding standards

We follow the [Drupal Coding standards](https://www.drupal.org/docs/develop/standards/coding-standards) and by using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) in connection with the Drupal Module
[drupal_coder](https://www.drupal.org/project/coder).
A deregulated set of rules can be found in the `phpcs.xml.dist` file included in this repository.

You can check the code style by executing

```bash
./vendor/bin/phpcs
```

## Optional modules

Based on the requirements of your project, we recommend to install the following Drupal modules.

### [Paragraphs](https://www.drupal.org/project/paragraphs)

> Paragraphs is the new way of content creation!
 It allows you — Site Builders — to make things cleaner so that you
 can give more editing power to your end-users.

```bash
composer require drupal/paragraphs
composer require drupal/paragraphs_edit
cd ./web
drush en paragraphs -y
drush en paragraphs_edit -y
```

### [Webform](https://www.drupal.org/project/webform)

> Webform is the module for making forms and surveys in Drupal. After
a submission customizable e-mails can be sent to administrators and/or
submitters. Results can be exported into Excel or other spreadsheet
applications.

```bash
composer require drupal/webform
cd ./web
drush en webform -y
drush en webform_ui -y
# optional
drush en webform_node -y
```

### [Video Embed Field](https://www.drupal.org/project/video_embed_field)

> Video Embed field creates a simple field type that allows you to embed videos 
from YouTube and Vimeo and show their thumbnail previews simply by entering 
the video's url. 

```bash
composer require drupal/video_embed_field
cd ./web
drush en video_embed_field -y
```
