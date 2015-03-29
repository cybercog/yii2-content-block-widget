<?php

namespace platx\contentblock;
use yii\db\ActiveQuery;
use yii\helpers\Html;

/**
 * This is just an example.
 */
class Widget extends \yii\base\Widget
{
    public $listTag = 'ul';

    public $listOptions = ['class' => 'content-block'];

    public $itemTag = 'li';

    public $itemOptions = ['class' => 'item'];

    public $query = null;


    public function run()
    {
        /** @var ActiveQuery $query */
        $query = $this->query;
        $models = $query->all();

        $items = [];

        foreach($models as $model) {
            $items[] = Html::tag($this->itemTag, $model->name, $this->itemOptions);
        }

        $content = implode('', $items);

        return Html::tag($this->listTag, $content, $this->listOptions);
    }
}
