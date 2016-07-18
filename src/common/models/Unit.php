<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * User model
 */
class Unit extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%unit}}';
    }

    public static function getListAvailableUnits() {
        $list_unit_raw = self::find()->all();

        $response = array();
        foreach ($list_unit_raw as $unit) {
            $response[] = $unit->toArray();
        }

        return $response;
    }
}
