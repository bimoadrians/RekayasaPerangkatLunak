<?php

namespace app\controllers;

use Yii;
use yii\db\Query;
use yii\data\SqlDataProvider;

class KeuanganController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $count = Yii::$app->db->createCommand('
            SELECT COUNT(*) FROM keuangan')->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT * FROM keuangan',
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}
