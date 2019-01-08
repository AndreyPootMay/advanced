<?php

namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class MyComponent extends Component
{
	public function welcome()
	{
		echo Yii::t('app', 'Bienvenido al componente');
	}
}