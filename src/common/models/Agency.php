<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * User model
 */
class Agency extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%agency}}';
    }

    const ACTIVE_STATUS = 1;
}
