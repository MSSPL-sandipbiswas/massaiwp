<?php
/**
 * Template Name: Home Template
 *  Template for home-template.php
 */
get_header();
?>
<article id="top-notch-dezigns-post-<?php the_ID(); ?>" <?php post_class('tnd-home-wrp'); ?>>


<section class="video-banner-section">
  <div class="video-banner-bg">
    <video autoplay muted loop playsinline>
      <source src="assets/your-video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
  </div>
  <div class="region-slider swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="region-box" tabindex="0">
        <div class="region-box-front">
          <img src="assets/west-africa-icon.svg" alt="" class="region-icon" />
          <span class="region-title">West Africa</span>
        </div>
        <div class="region-box-hover">
          <img src="assets/west-africa-map.svg" alt="" class="region-map" />
          <p>Description for West Africa.</p>
          <a href="#" class="region-btn">Explore Now</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="region-box" tabindex="0">
        <div class="region-box-front">
          <img src="assets/east-africa-icon.svg" alt="" class="region-icon" />
          <span class="region-title">East Africa</span>
        </div>
        <div class="region-box-hover">
          <img src="assets/east-africa-map.svg" alt="" class="region-map" />
          <p>An office in Nairobi (Kenya) with 3 resources for this country, Ethiopia, Tanzania, Uganda and Rwanda.</p>
          <a href="#" class="region-btn">Explore Now</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="region-box" tabindex="0">
        <div class="region-box-front">
          <img src="assets/central-africa-icon.svg" alt="" class="region-icon" />
          <span class="region-title">Central Africa</span>
        </div>
        <div class="region-box-hover">
          <img src="assets/central-africa-map.svg" alt="" class="region-map" />
          <p>Description for Central Africa.</p>
          <a href="#" class="region-btn">Explore Now</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="region-box" tabindex="0">
        <div class="region-box-front">
          <img src="assets/north-africa-icon.svg" alt="" class="region-icon" />
          <span class="region-title">North Africa</span>
        </div>
        <div class="region-box-hover">
          <img src="assets/north-africa-map.svg" alt="" class="region-map" />
          <p>Description for North Africa.</p>
          <a href="#" class="region-btn">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Swiper navigation -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <!-- Swiper pagination -->
  <div class="swiper-pagination"></div>
</div>
</section>


<section class="hero-section">
    <div class="hero-content">
        <?php $hero_content = get_field('hero_content'); ?>
        <header>
            <h1>
                <span class="hero-main">
                    <?php if (!empty($hero_content['hero_title'])): ?>
                        <?php echo esc_html($hero_content['hero_title']); ?>
                    <?php endif; ?>
                    <?php if (!empty($hero_content['hero_title_highlight'])): ?>
                        <br>in <span class="hero-africa"><?php echo esc_html($hero_content['hero_title_highlight']); ?></span>
                    <?php endif; ?>
                </span>
            </h1>
            <?php if (!empty($hero_content['hero_subtitle']) || !empty($hero_content['hero_market'])): ?>
                <h2 class="hero-subtitle">
                    <?php if (!empty($hero_content['hero_subtitle'])): ?>
                        <span class="hero-unlock"><?php echo esc_html($hero_content['hero_subtitle']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($hero_content['hero_market'])): ?>
                        <span class="hero-market"><strong><?php echo esc_html($hero_content['hero_market']); ?></strong></span>
                    <?php endif; ?>
                </h2>
            <?php endif; ?>
        </header>
        <main>
            <?php if (!empty($hero_content['hero_paragraph'])): ?>
                <p><?php echo esc_html($hero_content['hero_paragraph']); ?></p>
            <?php endif; ?>
            <?php if (!empty($hero_content['hero_button_url']) && !empty($hero_content['hero_button_text'])): ?>
                <a href="<?php echo esc_url($hero_content['hero_button_url']); ?>" class="hero-btn">
                    <?php echo esc_html($hero_content['hero_button_text']); ?> <span aria-hidden="true">&rarr;</span>
                </a>
            <?php endif; ?>
        </main>
    </div>
    <div class="hero-images">
        <?php if( have_rows('hero_images') ): ?>
            <?php while( have_rows('hero_images') ): the_row(); 
                $img = get_sub_field('image');
                $alt = isset($img['alt']) ? $img['alt'] : '';
                $class = get_sub_field('custom_class') ? esc_attr(get_sub_field('custom_class')) : '';
            ?>
                <?php if ($img): ?>
                    <?php
                        echo wp_get_attachment_image(
                            $img['ID'],
                            'full',
                            false,
                            array(
                                'class' => $class,
                                'alt'   => $alt
                            )
                        );
                    ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>




</article>
<?php
get_footer();
?>