<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <title>Teakwondo Klub Sloga PRODA-MONT Doboj</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image"
        content="https://lh3.googleusercontent.com/pw/AP1GczNq04MSq4zsUBq0ELlX9ulGGSgjoKgSLoZ1jfbDNOYQnhd-9Kdl2-lQoLS1PSeXHg7Z3FPgGEsiQwRVevaVId0YOA1cairjOIC_2IkQ9HrgNW-uR8CnnR6gjArZsFevzC9J8CbLXFPHfEjydaFUrX9e=w673-h512-s-no-gm?authuser=0">

</head>

<body class="example">
    <div id="loading-screen">
        <div id="loading-animation">
        </div>
    </div>

    <section id="header">
        <header>
            <nav class="navbar ">
                <div class="complete-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'container_class' => 'main-menu'
                    ));
                    ?>

                    <div class="languages">
                        <div class="lang-cont language-switcher">
                            <?php
                            if (function_exists('pll_the_languages')) {
                                echo '<nav class="language-nav">';
                                echo '<ul class="language-switcher">';
                                pll_the_languages(array(
                                    'dropdown' => 0,      // 0 for list, 1 for dropdown
                                    'show_flags' => 0,    // 1 to show flags
                                    'show_names' => 0,    // 1 to show language names
                                    'hide_if_empty' => 1, // Hide switcher if no translation available
                                ));
                                echo '</ul>';
                                echo '</nav>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
    </section>