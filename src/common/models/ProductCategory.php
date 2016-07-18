<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * User model
 */
class ProductCategory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_category}}';
    }

    public static function getListCategories() {
        $list_category_raw = self::find()->all();

        $response = array();
        foreach ($list_category_raw as $cat) {
            $response[] = $cat->toArray();
        }

        return $response;
    }
}
