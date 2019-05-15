<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "park".
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property string $user
 * @property string $carNum
 * @property string $timeStart
 * @property string $timeEnd
 * @property string $timeBook
 */
class Park extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'park';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'status', 'user', 'carNum', 'timeStart', 'timeEnd', 'timeBook'], 'required'],
            [['timeStart', 'timeEnd', 'timeBook'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['status', 'user', 'carNum'], 'string', 'max' => 16],
            [['name'], 'unique'],
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
            'status' => 'Status',
            'user' => 'User',
            'carNum' => 'Car Num',
            'timeStart' => 'Time Start',
            'timeEnd' => 'Time End',
            'timeBook' => 'Time Book',
        ];
    }
}
