<?php

namespace App\Controllers;

use Sober\Controller\Controller;

use WP_Query;

class PageCompany extends Controller
{

    public function teamLoop() {

        $args = array(
	    	'post_type' => 'team',
	    	'posts_per_page' => -1,
        );
        
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }

    public function data() {

        $data['clients'] = get_field('clients');
        $data['clients_title'] = get_field('clients_title');

        return $data;
    }
}
