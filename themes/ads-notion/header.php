<?php
wp_head();
?>
<header>
    <div class="header__container">
        <nav class="header__navigation">
            
                <div class="col-lg-2">
                    <div class="header__logo">logo</div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav-menu">
                        <?php 
                            wp_nav_menu([
                                'theme_location'=>'header',
                                'container'=> false
                            ])
                        ?>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__contact-btn">
                        contact
                    </div>
                </div>
           
        </nav>
    </div>
</header>
<main>
