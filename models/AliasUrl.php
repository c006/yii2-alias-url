<?php

namespace c006\url\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "alias_url".
 *
 * @property string $id
 * @property string $private
 * @property string $public
 * @property integer $is_frontend
 */
class AliasUrl extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {

        return 'alias_url';
    }


    /**
     * @return array primary key of the table
     **/
    static public function primaryKey()
    {

        return ['id'];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
            [['private', 'public', 'is_frontend'], 'required'],
            [['private', 'public'], 'string', 'max' => 140],
            [['public'], 'unique']
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {

        return [
            'id'          => 'ID',
            'private'     => 'Private',
            'public'      => 'Public',
            'is_frontend' => 'Is Frontend',
        ];
    }
}
