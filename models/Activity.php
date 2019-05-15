<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property int $actId
 * @property string $store
 * @property string $activity
 * @property string $imgUrl
 * @property string $timeStart
 * @property string $timeEnd
 * @property string $activityDetail
 * @property int $activitySales
 * @property int $is_del
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['store', 'activity', 'imgUrl', 'timeStart', 'timeEnd', 'activityDetail', 'activitySales', 'is_del'], 'required'],
            [['timeStart', 'timeEnd'], 'safe'],
            [['activityDetail'], 'string'],
            [['activitySales', 'is_del'], 'integer'],
            [['store'], 'string', 'max' => 4],
            [['activity', 'imgUrl'], 'string', 'max' => 64],
            [['store'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'actId' => 'Act ID',
            'store' => 'Store',
            'activity' => 'Activity',
            'imgUrl' => 'Img Url',
            'timeStart' => 'Time Start',
            'timeEnd' => 'Time End',
            'activityDetail' => 'Activity Detail',
            'activitySales' => 'Activity Sales',
            'is_del' => 'Is Del',
        ];
    }
}
