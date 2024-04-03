<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <!-----------------ajout de la video --------------------->
        <video class="banner__video" autoplay muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/video-koukaki.mp4'; ?>" type="video/mp4">
        </video>
        <!-------------------------ajout de la banniere en parallaxe------------->
        <div class="banner_parallax">
        <img id="banner_logo"  class="banner_logo" src="<?php echo get_theme_file_uri().'/assets/images/logo.png'; ?>"
        alt="Logo Fleurs d'oranger & chats errants" data-aos="fade-up" data-aos-duration="3000">
        </div>
        </section>
         <section id="#story" class="story" data-aos="fade-in" data-aos-duration="3000">
        <h2>
            <div class="animTitle">L'histoire</div> 
        </h2>
        <article id="sunflower" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>

        <article id="characters">
            <div class="main-character">
                <div  class="tittle-personnages">
                <h3>
                    <div class="animTitle1">Les personnages</div>
                </h3>
            </div>
            <!-- Ajout du Swiper -->
        <?php get_template_part('template-parts/characters-swiper'); ?>
        </div>
            </div>
        </article>
        
        <article id="place">
            <img class="big-cloud" src="<?php echo get_theme_file_uri().'/assets/images/big_cloud.png';?>" alt="gros nuage">
            <img class="little-cloud" src="<?php echo get_theme_file_uri().'/assets/images/little_cloud.png';?>" alt="petit nuage">
               <div> 
                <h3>
                   <div class="animTitle1">Le Lieu</div> 
                </h3>
                    
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>
    <section id="studio" data-aos="fade-in" data-aos-duration="3000">
        <h2>
            <div class="animTitle">Studio Koukaki</div>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    <section id="oscars" data-aos="fade-in" data-aos-duration="3000">
     <div class="personnages">
         <img src="<?php echo get_stylesheet_directory_uri() . './assets/images/oscars.png'; ?>" alt="Fleurs d'oranger & chats errants nominé aux oscars">
     </div>
 </section>
    <script src="\wp-content\themes\foce-child\index.js"></script>
    <script>
     AOS.init();
 </script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</main>
<!-- #main -->
<?php
get_footer();









