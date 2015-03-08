<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>
<nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
    <ul class="nav navbar-nav menu">
        <li <?php
        if (($pageName == 'index.php')) {
            echo 'class="active"';
        }
        ?> >
            <a class="menu" href="index.php">Home</a>
        </li>
        <li <?php
        if (($pageName == 'about_us.php')) {
            echo 'class="active"';
        }
        ?> >
            <a class="menu" href="about_us.php">About us</a>
        </li>
        <li <?php
        if (($pageName == 'contact_us.php')) {
            echo 'class="active"';
        }
        ?> >
            <a class="menu" href="contact_us.php">Contact us</a>
        </li>
    </ul>
</nav>