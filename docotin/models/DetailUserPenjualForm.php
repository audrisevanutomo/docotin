<?php

namespace app\models;

use Yii;
use yii\base\Model;

class DetailUserPenjualForm extends Model
{
    public $namaLengkap;
    public $noHp;
    public $alamat;
    public $noNpwp;
    public $fotoKtp;

    public function attributeLabels()
    {
        return [
            'namaLengkap' => 'Nama Lengkap',
            'noHp' => 'No. HP',
            'alamat' => 'Alamat',
            'noNpwp' => 'No. NPWP',
            'fotoKtp' => '',
        ];
    }

    public function rules()
    {
        return [
            [['namaLengkap', 'noHp', 'alamat', 'noNpwp',], 'required'],
            [['noHp', 'noNpwp'], 'number'],
            ['noNpwp', 'string', 'length' => [15,15]],
            [['fotoKtp'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function upload($oldKtp=null)
    {
        if ($this->validate()){
            if($this->fotoKtp !== null) {
                $filename = Yii::$app->security->generateRandomString();
                $this->fotoKtp->saveAs(Yii::getAlias('@webroot') . '/uploads/' .$filename .'.' .$this->fotoKtp->extension);
                $this->fotoKtp->name=$filename .'.' . $this->fotoKtp->extension;
            } else {
                $this->fotoKtp = $oldKtp;
            }
            return true;
        } else {
            return false;
        }
    }
}