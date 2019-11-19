<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageServices extends Controller
{

    public function data() {

        $data['commercialization_steps'] = get_field('commercialization_steps');
        $data['product_development_steps'] = get_field('product_development_steps');
        $data['incubation_steps'] = get_field('incubation_steps');

        return $data;
    }
}
