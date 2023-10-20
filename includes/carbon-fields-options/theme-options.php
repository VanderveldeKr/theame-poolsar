<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки сайта' )
->add_tab( 'Общие настройки', [
    Field::make( 'text', 'crb_text', 'Text Field' ),
]);