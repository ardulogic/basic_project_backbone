<?php

/**
 * Generates HTML attributes
 * @param array $attributes
 * @return string
 */
function html_attr($attributes) {
    $html_attr_arr = [];
    var_dump($attributes);
    foreach ($attributes as $attribute_key => $attribute_value) {
        $html_attr_arr[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
    }

    var_dump($html_attr_arr);
    
    return implode(' ', $html_attr_arr);
}
