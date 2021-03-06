<?php
/**
 * WP Backend System - Theme - Interface
 *
 * @since       02.08.2017
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright   
 */

namespace App\Theme\Themes;

/***************************/
/********** THEME **********/
/***************************/

interface Theme
{
    public function getSettings(): array;
}