<?php
declare(strict_types=1);
require 'Includes/header.php';
?>

    <main>
        <div class="jumbotron">
            <h1 class="display-4">Welcome to our website
                website</h1>
            <p class="lead">While you're here, please check out our awesome
                guides and very interesting articles!</p>
            <hr class="my-4">
            <p>Press one of those buttons to start exploring or use the navbar on
                top of this page. Your choice ;-)</p>
            <p class="lead">
                <a class="btn btn-outline-info btn-lg" href="?page=articles"
                   role="button">Articles</a>
                <a class="btn btn-info btn-lg" href="?page=products"
                   role="button">Guides</a>
            </p>
        </div>
    </main>

<?php
require 'Includes/footer.php';
