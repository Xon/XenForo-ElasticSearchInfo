<?php

class SV_ElasticSearchInfo_Listener
{
    const AddonNameSpace = 'SV_ElasticSearchInfo_';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}