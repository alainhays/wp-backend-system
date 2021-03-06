<?php
/**
 * WP Backend System - Taxonomy Handler Factory
 *
 * @since       03.08.2017
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright   
 */

namespace App\Theme\Taxonomies;

/**********************************************/
/********** TAXONOMY HANDLER FACTORY **********/
/**********************************************/

class TaxonomyHandlerFactory implements HandlerFactory
{

    /*******************************/
    /********** ATTRIBUTS **********/
    /*******************************/

    /*********************************************************************************/
    /*********************************************************************************/

    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    public function __construct()
    {
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /****************************/
    /********** CREATE **********/
    /****************************/

    public function create(): Handler
    {
        return new TaxonomyHandler(new MainTaxonomyGetter(), new MainTaxonomyCreator());
    }

    /*********************************************************************************/
    /*********************************************************************************/

}