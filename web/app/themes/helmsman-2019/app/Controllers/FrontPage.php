<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public function data()
    {
        $data['intro_title'] = get_field('intro_title');
        $data['intro_paragraph'] = get_field('intro_paragraph');
        $data['intro_image'] = get_field('intro_image');
        $data['about'] = get_field('about');
        $data['image_text'] = get_field('image_text');
        $data['banner'] = get_field('banner');
        $data['services'] = get_field('services');
        $data['services_about'] = get_field('services_about');
        $data['blue_banner'] = get_field('blue_banner');
        $data['clients'] = get_field('clients');

        return $data;
    }

}
