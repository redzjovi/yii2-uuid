<?php

namespace redzjovi\yii2\uuid\behaviors;

use Ramsey\Uuid\Uuid;
use yii\behaviors\AttributeBehavior;
use yii\db\BaseActiveRecord;

class UuidBehavior extends AttributeBehavior
{
    public $uuidAttribute = 'id';

    public function init()
    {
        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_BEFORE_INSERT => [$this->uuidAttribute],
            ];
        }
    }

    protected function getValue($event)
    {
        return Uuid::uuid4()->toString();
    }
}
