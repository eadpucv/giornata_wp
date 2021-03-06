<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
  </div>
</div>

<div class='fondo-gris'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-9 col-md-9 col-sm-12'>
        <div class='fila'>
          <div class='col-lg-3 col-md-3 oculto-sm oculto-xs'>
            <div class='menu-affix' id='menu-fixed'>
              <div data-spy="affix" data-offset-top="270" data-offset-bottom='500'>
                <ul class="nav" id="title_list"></ul>
              </div>
            </div>
          </div>
          <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
            <div class='bloque'>
              <article class="h-entry enunciado">
                <div class="e-content p-summary p-name enunciado">
                  <div class='bloque' id="bloque_texto">
                    <?php the_content();  ?>
                    
                    <h2>Teléfono</h2>
                    <p>Teléfono +56 32 2274401<br>
                    Fax +56 32 2274421</p>
                    <h2>Ubicación</h2>
                    <h4>Escuela de Arquitectura y Diseño</h4>
                    <h6>Pontificia Universidad Católica de Valparaíso</h6>
                    <p>Matta 12, Recreo, Viña del Mar, Chile.<br>
                    <iframe width="100%" height="450px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=calle%20matta%2012%2C%20recreo&key=AIzaSyCZiilPUQ_vIqpLmZk_H_2sCcihjCBdwwE"></iframe> 
                  </div>
                </div>
              </article> 
            </div>
          </div>
        </div>
      </div>    
      <?php get_sidebar(); ?>
  </div>
</div>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<script>
  // busco todos los titulos dentro de #bloque_texto
  $( "#bloque_texto" ).find( "h3:not(:has(*)),h2:not(:has(*))" ).each(function() {
      id = "title_"+randomNumberRange(1111, 9999);
      $(this).addClass("rojo-claro");
      $(this).attr("id",id);
      $("#title_list").append("<li><a class='ancla-fixed' data-scroll href='#"+id+"'>"+$(this).html()+"</a></li>")
  });

  function randomNumberRange(min, max)
  {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }
  $('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>

<script>
$('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>


<?php get_footer(); ?>