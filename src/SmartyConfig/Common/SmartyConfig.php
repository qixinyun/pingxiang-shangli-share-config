<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-shangli-share-config/src/SmartyConfig/Sl',
            S_ROOT.'vendor/qixinyun/pingxiang-shangli-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-shangli-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
