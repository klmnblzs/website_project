<?php
namespace View;
use Config;
class Site{
    
    public static function PageBegin(){
        $html = '<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">';
        for($i=0; $i<sizeof(Config::$css);$i++){
            $html .= '<link rel="stylesheet" href'.Config::$css[$i].'>';
        }
        $html .= '<title>'.Config::$title.'</title>';
        $html .= '</head><body>';
        return $html;
    }
    static function PageEnd(){
        $html ='</body>';
        for($i=0;$i<sizeof(Config::$js);$i++){
            $html .='<script src='.Config::$js[$i].'></script>';
        }
        $html .= '</html>';
        return $html;
    }
    static function PageContent(){

        return "<h1>ASD</h1>";
    }
    static function Site(){
        echo self::PageBegin();
        echo self::PageContent();
        echo self::PageEnd();
    }

}