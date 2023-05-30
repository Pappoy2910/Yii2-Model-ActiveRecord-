<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa052".
 *
 * @property int $id
 * @property string $NomorIndukMahasiswa
 * @property string $NamaMahasiswa
 * @property string $Kelas
 * @property int $Status
 */
class Mahasiswa052 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa052';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NomorIndukMahasiswa', 'NamaMahasiswa', 'Kelas', 'Status'], 'required'],
            [['Status'], 'string', 'max' =>10],
            [['NomorIndukMahasiswa'], 'string', 'max' => 12],
            [['NamaMahasiswa'], 'string', 'max' => 30],
            [['Kelas'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NomorIndukMahasiswa' => 'Nomor Induk Mahasiswa',
            'NamaMahasiswa' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Status' => 'Status',
        ];
    }
}
