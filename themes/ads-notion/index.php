<?php get_header()?>
    <section id="hero">
        <div class="hero__container">
            <div class="hero__title">
                <?php $countItemTitle = 0; ?>
                <?php if(have_rows('hero_titre')): ?>
                    <?php while(have_rows('hero_titre')): the_row();?>
                        <?php $countItemTitle++?>
                        <h1 class='hero__titleItem-<?php echo $countItemTitle;?>'><?= the_sub_field('item_title') ?></h1>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="hero__paragraphs">
                    <div class="hero__paragraphs-item">
                        <p>
                        Combining iterative and agile workflows with a structured and pragmatic approach, Hejwa provides the tools to realize powerful ideas and scale smartly.
                        </p>
                    </div>
                    <div class="hero__paragraphs-item">
                        <p>
                        We helps teams of all shapes and sizes develop elegant products that attracts engagement and cultivates passionate users. </p>
                    </div>
            </div>
        </div>
        <div class="hero__image-animation">
            <svg xmlns="http://www.w3.org/2000/svg" class="image__hero-header" viewBox="0 0 570.24 541.2">
                <defs>
                <style>.cls-1{fill:#ffe87b;}.cls-2{fill:#53b685;}.cls-3{fill:#3864ae;}.cls-4{fill:#f5b5cd;}</style>
                </defs>
                <g id="Calque_2" data-name="Calque 2">
                <g id="Calque_1-2" data-name="Calque 1">
                <circle class="cls cls-1" cx="416.76" cy="153.48" r="153.48"/>
                <path class="cls cls-2" d="M495.81,312.88a3.12,3.12,0,0,1,3.12,3.14C497.25,440.67,395.68,541.2,270.63,541.2S44,440.67,42.33,316a3.12,3.12,0,0,1,3.12-3.14h96.49a3.1,3.1,0,0,1,3.11,3,125.62,125.62,0,0,0,251.17,0,3.1,3.1,0,0,1,3.1-3Z"/>
                <rect class="cls cls-3" x="127.29" y="77.98" width="111.32" height="111.32" rx="9.73" transform="matrix(0.83, 0.56, -0.56, 0.83, 106.74, -79.72)"/>
                <rect class="cls cls-4" x="6.86" y="190.05" width="203.37" height="106.21" rx="9.62" transform="translate(51.01 -16.84) rotate(11.58)"/></g></g>
            </svg>
        </div>
        <div class="hero_furniture-block">
            <div class="hero__furniture-block-item">
                <div class="hero__furniture-block-content">
                    <h4 class="hero__furniture-block-title">Based in Copenhagen</h4>
                    <p class="hero__furniture-block-description">Born in Tokyo</p>
                </div>
            </div>
            <div class="hero__furniture-block-item">
                <div class="hero__furniture-block-content">
                    <h4 class="hero__furniture-block-title">Status: Available for hire</h4>
                    <p class="hero__furniture-block-description">Don’t hesitate to get in touch</p>
                </div>
            </div>
        </div>        
    </section>
    <section id="services">
        <div class="services__container">
            <div class="services__text">
                   <h3 class="h3 services__title">Services</h3> 
                   <h2 class="h2 services__description">We supply the building blocks to shape the product you envision.</h2>
            </div>
            <div class="sercive__animation-image">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252 773" width="252" height="773" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_88"><rect width="252" height="773" x="0" y="0"></rect></clipPath><clipPath id="__lottie_element_90"><path d="M0,0 L1440,0 L1440,940 L0,940z"></path></clipPath></defs><g clip-path="url(#__lottie_element_88)"><g clip-path="url(#__lottie_element_90)" transform="matrix(1,0,0,1,-894.5,0.25)" opacity="1" style="display: block;"><g transform="matrix(0.9990700483322144,-0.0431169755756855,0.0431169755756855,0.9990700483322144,955.6279296875,652.7527465820312)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,60.78900146484375,60.547000885009766)"><path fill="rgb(255,232,122)" fill-opacity="1" d=" M0,-60.51599884033203 C33.422000885009766,-60.51599884033203 60.51599884033203,-33.42100143432617 60.51599884033203,0.0010000000474974513 C60.51599884033203,33.42300033569336 33.422000885009766,60.51599884033203 0,60.51599884033203 C-33.422000885009766,60.51599884033203 -60.51599884033203,33.42300033569336 -60.51599884033203,0.0010000000474974513 C-60.51599884033203,-33.42100143432617 -33.422000885009766,-60.51599884033203 0,-60.51599884033203z"></path></g></g><g transform="matrix(0.9990700483322144,-0.0431169755756855,0.0431169755756855,0.9990700483322144,900.6018676757812,577.0548706054688)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,112.5,39)"><path fill="rgb(1,218,144)" fill-opacity="1" d=" M112.5,-36 C112.5,-36 112.5,36 112.5,36 C112.5,37.65700149536133 111.15699768066406,39 109.5,39 C109.5,39 -109.5,39 -109.5,39 C-111.15699768066406,39 -112.5,37.65700149536133 -112.5,36 C-112.5,36 -112.5,-36 -112.5,-36 C-112.5,-37.65700149536133 -111.15699768066406,-39 -109.5,-39 C-109.5,-39 109.5,-39 109.5,-39 C111.15699768066406,-39 112.5,-37.65700149536133 112.5,-36z"></path></g></g><g transform="matrix(0.9990700483322144,-0.0431169755756855,0.0431169755756855,0.9990700483322144,925.087646484375,413.84735107421875)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,81.10099792480469,81.24600219726562)"><path fill="rgb(255,255,255)" fill-opacity="1" d=" M-79.64299774169922,-2.059999942779541 C-79.64299774169922,-2.059999942779541 -2.121000051498413,-79.58200073242188 -2.121000051498413,-79.58200073242188 C-0.9490000009536743,-80.75399780273438 0.949999988079071,-80.75399780273438 2.121999979019165,-79.58200073242188 C2.121999979019165,-79.58200073242188 79.64299774169922,-2.059999942779541 79.64299774169922,-2.059999942779541 C80.81500244140625,-0.8880000114440918 80.81500244140625,1.0110000371932983 79.64299774169922,2.183000087738037 C79.64299774169922,2.183000087738037 2.121999979019165,79.70500183105469 2.121999979019165,79.70500183105469 C0.949999988079071,80.8759994506836 -0.9490000009536743,80.8759994506836 -2.121000051498413,79.70500183105469 C-2.121000051498413,79.70500183105469 -79.64299774169922,2.183000087738037 -79.64299774169922,2.183000087738037 C-80.81500244140625,1.0110000371932983 -80.81500244140625,-0.8880000114440918 -79.64299774169922,-2.059999942779541z"></path></g></g><g transform="matrix(0.9990700483322144,-0.0431169755756855,0.0431169755756855,0.9990700483322144,911.4329223632812,325.8542785644531)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,90.8479995727539,45.042999267578125)"><path fill="rgb(255,183,206)" fill-opacity="1" d=" M-87.08699798583984,-45.04399871826172 C-88.74400329589844,-45.04399871826172 -90.09200286865234,-43.69300079345703 -90.03800201416016,-42.0369987487793 C-88.4520034790039,6.324999809265137 -48.749000549316406,45.04399871826172 -0.0010000000474974513,45.04399871826172 C48.74700164794922,45.04399871826172 88.4530029296875,6.324999809265137 90.03800201416016,-42.0369987487793 C90.09300231933594,-43.69300079345703 88.74400329589844,-45.04399871826172 87.08799743652344,-45.04399871826172 C87.08799743652344,-45.04399871826172 48.042999267578125,-45.04399871826172 48.042999267578125,-45.04399871826172 C46.38600158691406,-45.04399871826172 45.05400085449219,-43.69599914550781 44.94499969482422,-42.04199981689453 C43.4010009765625,-18.565000534057617 23.867000579833984,0.0010000000474974513 -0.0010000000474974513,0.0010000000474974513 C-23.8700008392334,0.0010000000474974513 -43.402000427246094,-18.56399917602539 -44.946998596191406,-42.04199981689453 C-45.05500030517578,-43.69599914550781 -46.387001037597656,-45.04399871826172 -48.04399871826172,-45.04399871826172 C-48.04399871826172,-45.04399871826172 -87.08699798583984,-45.04399871826172 -87.08699798583984,-45.04399871826172z"></path></g></g></g></g></svg>            </div>
        </div>
    </section>
    <section id="dev">
        <div class="dev__container">
            <div class="dev__header">
                <h2 class="h2 text-center">Bring ideas to life</h2>
                <div class="dev__circle-outer"></div>
                <div class="dev__circle-inner"></div>
            </div>
            <div class="dev__content">
                <div class="dev__list">
                    <div class="dev__list-item item-1">
                        <p class="dev__item-healding">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit pariatur reiciendis temporibus debitis praesentium neque vero
                </p>
                    </div>
                    <div class="dev__list-item item-2">
                        <h5>Frontend Development</h5>
                        <p class="dev__list-description">Implementation of graphic design and UI elements.</p>
                    </div>
                    <div class="dev__list-item item-3">
                        <h5>Headless Content Management</h5>
                        <p class="dev__list-description">Implementation of graphic design and UI elements.</p>
                    </div>
                    <div class="dev__list-item fake-item">
                    </div>
                    <div class="dev__list-item item-4">
                        <h5>Backend Development</h5>
                        <p class="dev__list-description">Implementation of graphic design and UI elements.</p>
                    </div>
                    <div class="dev__list-item fake-item">
                    </div>
                    <div class="dev__list-item item-5">
                        <h5>Testing and Automation</h5>
                        <p class="dev__list-description">Implementation of graphic design and UI elements.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php get_footer()?>