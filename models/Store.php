<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property int $id
 * @property string $name
 * @property int $score
 * @property string $activity
 * @property string $address
 * @property int $phone
 * @property string $imgUrl
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'score', 'activity', 'address', 'phone', 'imgUrl'], 'required'],
            [['score', 'phone'], 'integer'],
            [['name', 'activity', 'imgUrl'], 'string', 'max' => 32],
            [['address'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'score' => 'Score',
            'activity' => 'Activity',
            'address' => 'Address',
            'phone' => 'Phone',
            'imgUrl' => 'Img Url',
        ];
    }
}
