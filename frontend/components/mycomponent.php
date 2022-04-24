<?php
namespace frontend\components;
use Yii;
use backend\models\Statistic;
use yii\base\Component;
use yii\web\Request;

class mycomponent extends Component
{
    const EVENT_STAT = 'even-stat';
    public function actionStat(){
        
        $statistic = new Statistic();
        $statistic->user_ip = Yii::$app->request->UserIP;
        $statistic->user_host= Yii::$app->request->pathInfo;
        $statistic->path_info = Yii::$app->request->UserIP;
        $statistic->query_string = Yii::$app->request->queryString;

        $statistic->save();

    }
}
?>