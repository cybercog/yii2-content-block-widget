Content block widget for Yii2
=============================
Widget for rendering custom table data to some block.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist platx/yii2-content-block-widget "*"
```

or add

```
"platx/yii2-content-block-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \platx\contentblock\Widget::widget(); ?>```