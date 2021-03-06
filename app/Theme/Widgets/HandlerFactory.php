<?php
/**
 * WP Backend System - Handler Factory - Interface
 *
 * @since       16.08.2017
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright   
 */

namespace App\Theme\Widgets;

use App\Theme\Posts\PostGetter as PostGetter;

/*************************************/
/********** HANDLER FACTORY **********/
/*************************************/

interface HandlerFactory
{
    public function create(PostGetter $postGetter): Handler;
}