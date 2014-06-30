   	</div>
		<footer>
			<?php wp_footer(); ?>			
		   <div class='wrap'>
		        <div class='fila'>
		            <div class='col-lg-4 col-md-4 col-sm-7 col-xs-12 escuela'>
		                <p><a class='marca'href='#'>e[ad]
		                Escuela de Arquitectura y Diseño</a></p>
		                <p class='gris'>Pontificia Universidad Católica de Valparaíso</p>
		            </div>
		            <div class='col-lg-4 col-md-4 col-xs-12 escuela'>
		                <p class='gris'>Sitio web diseñado con:</p>
		                <p class='rojo'><a href='http://eadpucv.github.io/pyxis/'><span class='pyxis gruesa rojo-claro'>Pyxis</span> <span class='pyxis fino gris-oscuro'>framework</span></a> & <a href='http://eadpucv.github.io/stampa/'><span class='pyxis naranja-opuesto grues'>Stampa</span></a></p>
		            </div>
		            <div class='col-lg-4 col-md-4 col-sm-5 escuela'>
		                <p class='direccion gris'>
		                <a href='#'><i class='icn icn-email icn-md'></i>Contacto</a><br> Matta 12, Recreo, Viña del Mar, Chile.
		                <br>Cód. Postal: 2580129, Casilla 4170 V2 Valparaíso</p>
		            </div>
		        </div>
		    </div>        
		    <div class='container-lg'>
		        <div class=' mapa'>
		            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-71.5964412689209%2C-33.0347331645319%2C-71.56811714172363%2C-33.018919564096834&amp;layer=mapnik&amp;marker=-33.02683571419531%2C-71.58227920532227" style="border: none"></iframe><br/><small></small>
		        </div>
		    </div>
		    <div class='wrap'>
		        <div class='fila'>
		            <div class='col-lg-8 col-md-9 col-sm-7 col-xs-12'>
		                <p class='gris'>sitios relacionados</p>
		                <div class='sitio-relacionado'>
		                    <p><a href=''><i class="icn icn-archivo icn-lg"></i> Archivo Histórico José Vial Armstrong</a></p>
		                </div>
		                <div class='sitio-relacionado'>
		                    <p><a href=''><i class="icn icn-casiopea icn-lg"></i> Wiki Casiopea</a></p>
		                </div>
		                <div class='sitio-relacionado'>
		                    <p><a href=''><i class="icn icn-travesia icn-lg"></i> Travesía</a></p>
		                </div>
		                <div class='sitio-relacionado'>
		                    <p><a href=''><i class="icn icn-estorninos icn-lg"></i>  Estorninos</a></p>
		                </div>
		                <div class='sitio-relacionado'>
		                    <p><a href=''><i class="icn icn-ampolleta icn-lg"></i>  Madlab</a></p>
		                </div>
		            </div>
		            <div class='col-lg-4 col-md-3 col-sm-5 col-xs-12'>
		                <p class='gris'>redes sociales</p>
		                <div class='redes-sociales'>
		                    <a href='https://twitter.com/eadpucv'><i class="icn icn-twitter icn-lg icn-inverse"></i> </a>
		                </div>
		                <div class='redes-sociales'>
		                    <a href='https://www.facebook.com/ead.pucv'><i class="icn icn-facebook icn-lg icn-inverse"></i></a></p>
		                </div>
		                <div class='redes-sociales'>
		                    <a href='https://www.flickr.com/photos/archivo-escuela/'><i class="icn icn-jekyll icn-lg icn-inverse"></i></a>
		                </div>
		                <div class='redes-sociales'>
		                    <a href='http://vimeo.com/escuela'><i class="icn icn-vimeo icn-lg icn-inverse"></i></a>
		                </div>
		                <div class='redes-sociales'>
		                    <a href='https://soundcloud.com/archivo-jose-vial-a'><i class="icn icn-soundcloud icn-lg icn-inverse"></i></a>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class='licencia'>
		        <div class='wrap'>
		            <div class='fila'>
		                <div class='col-lg-12'>
		                    <p class='gris centrado'>1998 - 2014 | <a href='http://www.ead.pucv.cl/feed/'>Suscripción (RSS)</a> | <a href='http://www.ead.pucv.cl/feeds/'>Cómo Suscribirse</a> | <a href='http://www.ead.pucv.cl/colofon/'>Colofón</a> | Optimizado para <a href='https://www.mozilla.org/es-ES/firefox/new/'>Firefox</a></p>
		                    <p class='gris centrado'>e[ad] de la Escuela de Arquitectura y Diseño PUCV está licenciado bajo <a href='http://creativecommons.org/licenses/by-nc-sa/2.0/cl/'>Creative Commons Atribución-No Comercial-Licenciar Igual 2.0 Chile License</a><a href="http://creativecommons.org/licenses/by-nc-sa/2.0/cl/" rel="license"><img src="http://i.creativecommons.org/l/by-nc-sa/2.0/cl/80x15.png" style="border-width:0" alt="Creative Commons License"></p>
		                    </a>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		<?php get_user_extra_attributes(); ?>
		<script type="text/javascript">

			$(document).ready(function(){ $( "body" ).load_ead_bar({
				id: "<?php echo $_SESSION['cas_id']; ?>",
				mail: "<?php echo $_SESSION['cas_mail']; ?>",
				name: "<?php echo $_SESSION['cas_name']; ?>",
				lastname: "<?php echo $_SESSION['cas_lastname']; ?>",
				wikipage: "<?php echo $_SESSION['cas_wikipage']; ?>",			
				admin: "<?php echo $_SESSION['cas_admin']; ?>",							
				path_js: "<?php bloginfo('template_directory') ?>/js/ead-bar/",
				site_name: "ead", // ead, wiki, metasearch, estorninos, archivo, travesias
				site_login_url: "<?php echo wp_login_url( get_permalink() ); ?>",
				site_logout_url: "<?php echo wp_logout_url( get_permalink() ); ?>"
				})
			});
		</script>
	</body>
</html>