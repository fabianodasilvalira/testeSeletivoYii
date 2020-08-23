<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $colegio
 * @property string $serie
 */
class Alunos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome','email', 'colegio','serie'], 'required'],
            [['nome'], 'string', 'min'=> 5, 'max' => 100],
            [['email'], 'email'],
            [['colegio'], 'string', 'max' => 50],
            
            [['serie'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'colegio' => 'Colégio',
            'serie' => 'Série',
        ];
    }
}
