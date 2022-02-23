<?php declare(strict_types=1);


class Singlton
{
    private $increment = 2;
    private static ?Singlton $singlton = null;

    public static function getObject(){
        if(!static::$singlton) {
            self::$singlton = new Singlton();
        }
        return self::$singlton;
    }
    private function __construct(){
        echo 'inited!';
    }

    public function getInc(){
        $this->increment *= $this->increment;
        return $this->increment;
    }
}