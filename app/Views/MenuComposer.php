<?php

namespace App\Views;

class MenuComposer
{
    public function compose($view)
    {
        $menu = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact'
        ];

        $authenticated = true;

        if ($authenticated) {
            $menu = array_merge($menu, [
                'Logout' => '/logout',
                'Profile' => '/profile'
            ]);
        }

        $view->with('menus', $menu);
    }
}
