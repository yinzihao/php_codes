<?php
/**
 * 策略模式
 * Created by PhpStorm.
 * User: yinjingjing
 * Date: 2018/3/19
 * Time: 10:20
 */

/**
 * 广告市场播放流程
 * 制作、审核
 * Interface Advert
 */
interface Advert {
    public function make();
    public function check();
}

class AudiAdvert implements Advert {
    public function make()
    {
        // TODO: Implement make() method.
        echo "Audi advert making ...\n";
    }
    public function check()
    {
        // TODO: Implement check() method.
        echo "Audi advert checking ... \n";
    }
}

class StrategryAdvert {
    private $advert = null;
    function __construct(Advert $advert)
    {
        $this->advert = $advert;
    }

    public function putin(){
        $this->advert->make();
        $this->advert->check();
    }
}

class Tv {
    public function play(){
        (new StrategryAdvert(new AudiAdvert()))->putin();
    }
}

(new Tv())->play();
