<?php
namespace Roots\Sage\Platform;

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function is_desktop() {

    global $user_agent;

    $is_desktop = true;

    $os_array = array(
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $is_desktop = false;
        }
    }

    return $is_desktop;
}
