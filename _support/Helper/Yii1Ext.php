<?php
namespace Helper;

use Codeception\Module\Yii1;

class Yii1Ext extends Yii1
{
    public function _initialize()
    {
        $this->config['appPath'] = FRONTEND.'/'.$this->config['appPath'];
        parent::_initialize();
    }
}
