<?php
declare(strict_types = 1);

class HomepageController
{
    public function render(array $GET)
    {
        $pageName = 'Guides & Articles';
        require 'View/homepage.php';
    }
}