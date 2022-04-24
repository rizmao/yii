<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $kode_barang
 * @property string $nama_barang
 * @property int $harga
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $image
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file_upload;
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'nama_barang', 'harga'], 'required'],
            [['harga', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['kode_barang', 'nama_barang'], 'string', 'max' => 100],
            [['file_upload'], 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
            'image' => 'Image',
        ];
    }
}
