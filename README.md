## Yii 2 UUID
Yii 2 UUID Extension with ramsey/uuid.


## Installation
The preferred way to install this extensions is through [composer](https://getcomposer.org/download/).

Either run
```
composer require redzjovi/yii2-uuid
```
or add
```
"redzjovi/yii2-uuid": "dev-master"
```
to the `require` section of your `composer.json` file.

## Usage
```php
use \redzjovi\yii2\uuid\behaviors\UuidBehavior;

public function behaviors()
{
    return [
        [
            'class' => UuidBehavior::className(),
            'uuidAttribute' => 'id',
        ],
        ...
    ];
}
...
```
