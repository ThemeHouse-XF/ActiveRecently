<?php

class ThemeHouse_ActiveRecently_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ActiveRecently' => array(
                'model' => array(
                    'XenForo_Model_User'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_ActiveRecently' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_ActiveRecently_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */
}