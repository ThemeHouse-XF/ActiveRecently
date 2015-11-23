<?php

/**
 *
 * @see XenForo_Model_User
 */
class ThemeHouse_ActiveRecently_Extend_XenForo_Model_User extends XFCP_ThemeHouse_ActiveRecently_Extend_XenForo_Model_User
{

    public function prepareUserConditions(array $conditions, array &$fetchOptions)
    {
        $xenOptions = XenForo_Application::get('options');

        if (!empty($conditions['active_recently'])) {
            if ($conditions['active_recently'] === true) {
                $activeRecentlyMonths = $xenOptions->th_activeRecently_months;
                $conditions['active_recently'] = 30 * $activeRecentlyMonths * 86400;
            }
        }

        return parent::prepareUserConditions($conditions, $fetchOptions);
    } /* END prepareUserConditions */
}