<?php get_header(); ?>

<div class="hero">
  <h2>Transporte Profesional y Seguro</h2>
  <p>Flotilla moderna para todo tipo de necesidades logísticas y de transporte.</p>
  <a href="#contacto" class="btn">Solicita una Cotización</a>
</div>

<section id="servicios">
  <h3>Nuestros Servicios</h3>
  <div class="services">
    <div class="card">
      <h4>Transporte Ejecutivo</h4>
      <p>Viajes cómodos, seguros y puntuales para tus clientes o ejecutivos.</p>
    </div>
    <div class="card">
      <h4>Logística Empresarial</h4>
      <p>Optimización de rutas y control de entregas a nivel nacional.</p>
    </div>
    <div class="card">
      <h4>Servicio de Mudanzas</h4>
      <p>Soluciones confiables para mudanzas residenciales y de oficinas.</p>
    </div>
  </div>
</section>

<section id="flotilla">
  <h3>Nuestra Flotilla</h3>
  <div class="fleet">
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Camioneta_Nissan_2022.jpg" alt="Camioneta Nissan 2022" style="width:100%; border-radius:8px;">      
      <h4>Camioneta Nissan 2022</h4>
      <p>Capacidad de 1 tonelada. Ideal para entregas rápidas.</p>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Camion_de_3.5_Ton.jpg" alt="Camión de 3.5 Ton" style="width:100%; border-radius:8px;">
      <h4>Camión de 3.5 Ton</h4>
      <p>Para mudanzas o carga pesada a cualquier parte del país.</p>
    </div>
    <div class="card">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Sedan_Ejecutivo.jpg" alt="Sedan Ejecutivo" style="width:100%; border-radius:8px;">
      <h4>Sedan Ejecutivo</h4>
      <p>Traslados cómodos y seguros con chófer incluido.</p>
    </div>
  </div>
</section>

<section id="contacto">
  <h3>Contáctanos</h3>
  <p>Solicita más información sobre nuestros servicios.</p>
  <?php echo do_shortcode('[contact-form-7 id="123" title="Formulario de Contacto"]'); ?>
</section>

<?php get_footer(); ?>
