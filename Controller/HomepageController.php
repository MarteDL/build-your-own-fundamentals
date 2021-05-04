<?php

declare(strict_types=1);

class HomepageController
{
    public function render()
    {
        $pageName = 'Guides & Articles';
        require 'View/homepage.php';
    }
}
