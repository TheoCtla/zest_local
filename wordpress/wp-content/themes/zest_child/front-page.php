<?php
get_header(); // Appelle le header.php
?>

<main id="main">

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Développez Votre <br><span>MARKETING</span></h1>
        <p>Boostez votre visibilité et atteignez vos objectifs<br>avec des stratégies sur mesure</p>
        <a href="#contact" class="cta-btn">Demandez un devis<br><strong>GRATUIT</strong></a>
      </div>

      <div class="hero-video">
        <!-- à remplacer par une iframe YouTube ou un <video> -->
        <div class="video-placeholder"></div>
      </div>

      <div class="hero-logos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/boite1.png" alt="Logo 1" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/boite2.png" alt="Logo 2" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/boite3.png" alt="Logo 3" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/boite4.png" alt="Logo 4" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/boite5.png" alt="Logo 5" />
      </div>
    </div>
  </section>

  <!-- Bénéfices -->
  <section class="benefits">
    <h2>Avantages / Bénéfices</h2>
    <div class="benefit-cards">
      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            Lorem Ipsum<br>Dolor Sit amet
          </div>
          <div class="card-back">
            Texte au dos 1
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            Lorem Ipsum<br>Dolor Sit amet
          </div>
          <div class="card-back">
            Texte au dos 2
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            Lorem Ipsum<br>Dolor Sit amet
          </div>
          <div class="card-back">
            Texte au dos 3
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Étapes -->
  <section class="steps">
    <h2>Comment ça marche ?</h2>
    <ol>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
    </ol>
    <a href="#contact" class="cta-btn">Prenez rendez-vous !</a>
  </section>

  <!-- Avis -->
  <section class="testimonials">
    <h2>Ils ont adoré !</h2>
    <div class="testimonial-cards">
      <div class="testimonial">
        <p>★★★★★</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      </div>
      <div class="testimonial">
        <p>★★★★★</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      </div>
      <div class="testimonial">
        <p>★★★★★</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      </div>
    </div>
  </section>

</main>

<?php
get_footer(); // Appelle le footer.php
?>
