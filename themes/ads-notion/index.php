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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540.19 449.1">
            <defs>
                <style>.cls-1{fill:hsl(50deg 100% 74%);}.cls-2{fill:hsl(160deg 99% 43%);}.cls-3{fill:hsl(219deg 100% 55%);}.cls-4{fill:hsl(341deg 100% 86%);}</style>
            </defs>
            <g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1">
                <circle class="cls cls-1" cx="406.84" cy="133.36" r="133.36"/>
                <path class="cls cls-2" d="M440.58,266.71a2.5,2.5,0,0,1,2.5,2.51C441.73,368.79,360.6,449.1,260.71,449.1s-181-80.31-182.37-179.88a2.49,2.49,0,0,1,2.49-2.51h77.08a2.47,2.47,0,0,1,2.48,2.4,100.35,100.35,0,0,0,200.64,0,2.47,2.47,0,0,1,2.48-2.4Z"/>
                <rect class="cls cls-3" x="117.37" y="40.94" width="111.32" height="111.32" rx="2.83" transform="translate(84.2 -80.54) rotate(34.2)"/>
                <rect class="cls cls-4" x="7.18" y="152.15" width="182.87" height="95.51" rx="3.01" transform="translate(42.13 -15.73) rotate(11.58)"/>
                </g>
            </g>
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
                <img src="<?php echo get_template_directory_uri()."/img/e9533651-6e20-4962-9251-7321412a3cbd.gif"?>" alt="">
            </div>

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

    <section id="aws">
        <div class="aws__container">
            <div class="aws__header">
                <h2 class="h2 text-center">Scale smartly.</h2>
                <div class="aws__circle-outer"></div>
            </div>
            <div class="aws__content">
                <div class="aws__list">
                    <div class="aws__list-item item-1">
                        <p class="aws__item-healding">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit pariatur reiciendis temporibus debitis praesentium neque vero
                </p>
                    </div>
                    <div class="aws__list-item item-2">
                        <h5>Serverless</h5>
                        <p class="aws__list-description">Cloud-native development.</p>
                    </div>
                    <div class="aws__list-item fake-item">
                    </div>
                    <div class="aws__list-item item-3">
                        <h5>Appsync</h5>
                        <p class="aws__list-description">Scalable APIs with GraphQL</p>
                    </div>
                    <div class="aws__list-item fake-item">
                    </div>
                    <div class="aws__list-item item-4">
                        <h5>GraphQL</h5>
                        <p class="aws__list-description">Data query and manipulation language for APIs.</p>
                    </div>
                    <div class="aws__list-item item-4">
                        <h5>Stepfunctions</h5>
                        <p class="aws__list-description">Low-code, visual workflow for distributed applications.</p>
                    </div>
                    <div class="aws__list-item item-4">
                        <h5>IAM</h5>
                        <p class="aws__list-description">Fine-grained Identity and Access Mangement across all AWS.</p>
                    </div>
                    <div class="aws__list-item item-4">
                        <h5>EventBridge</h5>
                        <p class="aws__list-description">Serverless, event-driven applications at scale.</p>
                    </div>
                    <div class="aws__list-item fake-item">
                    </div>
                    <div class="aws__list-item fake-item">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="product">
        <div class="product__container">
            <div class="product__header">
                <h2 class="h2 text-center">Discover your north star.</h2>
                <div class="product__circle-outer"></div>
            </div>
            <div class="product__content">
                <div class="product__list">
                    <div class="product__list-item item-1">
                        <p class="product__item-healding">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit pariatur reiciendis temporibus debitis praesentium neque vero
                </p>
                    </div>
                    <div class="product__list-item item-2">
                        <h5>Discovery</h5>
                        <p class="product__list-description">Analyzing the target market, defining your product-market fit and gathering the project requirements and goals.</p>
                    </div>
                    <div class="product__list-item fake-item">
                    </div>
                    <div class="product__list-item item-3">
                        <h5>Strategy</h5>
                        <p class="aws__list-description">Outlining the goals and actions to reach your desired business objectives.</p>
                    </div>
                    <div class="product__list-item fake-item">
                    </div>
                    <div class="product__list-item fake-item">
                    </div>
                    <div class="product__list-item item-4">
                        <h5>User Story Mapping</h5>
                        <p class="product__list-description">Capturing the journey your customers take with the product including activities and tasks they perform with the system.</p>
                    </div>   
                </div>
            </div>

        </div>
    </section>
    <section id='approach'>
        <div class="approach-text-top">
            <h5 class="h5">How we work</h5>
        </div>
        <div class="approach__container">
            <div class="approach__wrapper">
                <div class="approach__list-block">
                    <div class="approach__item-block">
                        <h3 class="approach__item-title">Identify the problem</h3>
                        <p class="approach__item-description">
                        We’ll talk about your products, ideas and create a space for us to understand your goals and for you to spar with us about the problems you’re trying to solve. From this foundation we will present suggestions on how we can be of service to bring your ideas to life.
                        </p>
                    </div>
                    <div class="approach__item-block">
                        <h3 class="approach__item-title">Define the process</h3>
                        <p class="approach__item-description">
                        We’ll talk about your products, ideas and create a space for us to understand your goals and for you to spar with us about the problems you’re trying to solve. From this foundation we will present suggestions on how we can be of service to bring your ideas to life.
                        </p>
                    </div>
                    <div class="approach__item-block">
                        <h3 class="approach__item-title">Kickoff</h3>
                        <p class="approach__item-description">
                        We’ll talk about your products, ideas and create a space for us to understand your goals and for you to spar with us about the problems you’re trying to solve. From this foundation we will present suggestions on how we can be of service to bring your ideas to life.
                        </p>
                    </div>
                    <div class="approach__item-block">
                        <h3 class="approach__item-title">Collaborate</h3>
                        <p class="approach__item-description">
                        We’ll talk about your products, ideas and create a space for us to understand your goals and for you to spar with us about the problems you’re trying to solve. From this foundation we will present suggestions on how we can be of service to bring your ideas to life.
                        </p>
                    </div>
                    <div class="approach__item-block">
                        <h3 class="approach__item-title">Iterate</h3>
                        <p class="approach__item-description">
                        We’ll talk about your products, ideas and create a space for us to understand your goals and for you to spar with us about the problems you’re trying to solve. From this foundation we will present suggestions on how we can be of service to bring your ideas to life.
                        </p>
                    </div>
                    <div id="set-height"></div>
                </div>
                <div class="approach__element-animation">
                    <div class="approach__element-anim-number">
                        <div class="approach__number-item">
                            <div class="approach__number">
                                01
                            </div>
                        </div>
                        <div class="approach__number-item">
                            <div class="approach__number">
                                02
                            </div>
                        </div>
                        <div class="approach__number-item">
                            <div class="approach__number">
                                03
                            </div>
                        </div>
                        <div class="approach__number-item">
                            <div class="approach__number">
                                04
                            </div>
                        </div>
                        <div class="approach__number-item">
                            <div class="approach__number">
                                05
                            </div>
                        </div>
                    </div>
                    <div id="approach__lottie-con" class="approach__lottie-con">
                        <video id="v0">
                            <source src="<?php echo get_template_directory_uri()."/img/animation.mp4"?>" type="video/mp4">
                            <p class="vjs-no-js">Javascript was disabled or not supported</p>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='cta'>
        <div class='cta__container'>
            <h1 class='h1'>
            Let's build
something
together.
            </h1>
            <div class='cta__btn text-center mt-5'>
                    <button class='btn btn-btn-primary '>Say hello</button>
            </div>
        </div>
    </section>
    
<?php get_footer()?>