@extends ('layout')

@section ('title')
Contacto 
@stop 
 @section ('titulo')
Contáctenos
@stop
@section ('content')
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Encuentranos Aquí</h3>
			    	 		<div class="map">
                            
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14924.863778743516!2d-89.47516664999998!3d20.742039750000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f566733774d03a1%3A0x70d9138e8404cc8f!2sTecoh%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1435294424063"></iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14924.863778743516!2d-89.47516664999998!3d20.742039750000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f566733774d03a1%3A0x70d9138e8404cc8f!2sTecoh%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1435294424063" style="color:#242424;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Información De La Empresa:</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Contáctenos</h3>
                    {{form::open(array('role'=>'form','action' => 'IndexController@postContact' ))}}
					  <!--  <form method="post" action="contact-post.html">-->
					    	<div>
						    	<span>{{ Form::label('nombre', 'NOMBRE') }}</span>
						    	<span>{{ Form::text('nombre', null, array('placeholder' => 'Nombre', 'class' => 'form-control','required'=>'1')) }}</span>
						    </div>
						    <div>
						    	<span>{{ Form::label('email', 'E-MAIL') }}</span>
						    	<span>
                                {{ Form::text('email', null, array('placeholder' => 'Correo', 'class' => 'form-control','required'=>'1')) }}
                                </span>
						    </div>
						    <div>
						     	<span>{{ Form::label('telefono', 'TELEFONO') }}></span>
						    	<span>
                                {{ Form::text('telefono', null, array('placeholder' => 'Teléfono', 'class' => 'form-control','required'=>'1')) }}					
                                </span>
						    </div>
						    <div>
						    	<span>{{ Form::label('comments', 'ASUNTO') }}</span>
						    	<span>
					
							{{ Form::textarea('comments', null, array('placeholder' => 'Comentarios', 'class' => 'form-control','required'=>'1')) }}	
                                
                                </span>
						    </div>
						   <div><label>
									<input type="checkbox"> Suscribirme al boletín semanal
								</label>
						   		<span>{{form::submit('Enviar', array('class'=>'btn btn-primary','id'=>'submitContacto'))}}</span>
						  </div>
					   <!-- </form>-->
                        
                        {{Form::close();}}
		
			@include ('errores', array('errores' => $errors ))
				    </div>
  				</div>		
  				<div class="clear"></div>	
                
                <div class="row">
  <div class="col-md-8">
<div class="row "> <div class="col-md-12">  
          
        <form class="custom"   action="#">
 
  <input type="text" id="start" placeholder="De:" value="Merida" />
<input type="text" name="end" id="end" placeholder="A:" value="Techoh" />
 
  <?php /*?><select name="end" id="end"  onChange="calcRoute()" >
  <option value="">A</option>  
    <option value="Real de Asientos, Ags">Real de Asientos, Ags</option>
<option value="Todos Santos, B.C.S.">Todos Santos, B.C.S.</option>
<option value="Palizada, Camp.">Palizada, Camp.</option>
<option value="Parras de la Fuente, Coah.">Parras de la Fuente, Coah.</option>
<option value="San Cristóbal de las Casas, Chis.">San Cristóbal de las Casas, Chis.</option>
<option value="Creel, Chih.">Creel, Chih.</option>
<option value="Dolores Hidalgo, Gto.">Dolores Hidalgo, Gto.</option>
<option value="Taxco, Gro.">Taxco, Gro.</option>
<option value="Real del Monte, Hgo.">Real del Monte, Hgo</option>
<option value="Huasca de Ocampo, Hgo."> Huasca de Ocampo, Hgo</option>
<option value="Mazamitla, Jal.">Mazamitla, Jal.</option>
<option value="Tapalpa, Jal.">Tapalpa, Jal.</option>
<option value="Tequila, Jal.">Tequila, Jal.</option>
<option value="Malinalco, Méx.">Malinalco, Méx.</option>
<option value="Tepotzotlán, Méx.">Tepotzotlán, Méx.</option>
<option value="Valle de Bravo, Méx.">Valle de Bravo, Méx.</option>
<option value="Cuitzeo, Mich.">Cuitzeo, Mich.</option>
<option value="Tlalpujahua, Mich.">Tlalpujahua, Mich.</option>
<option value="Tepoztlán, Mor.">Tepoztlán, Mor.</option>
<option value="Santiago, N. L.">Santiago, N. L.</option>
<option value="Capulálpam de Méndez, Oax.">Capulálpam de Méndez, Oax.</option>
<option value="Cuetzalan del Progreso, Pue.">Cuetzalan del Progreso, Pue.</option>
<option value="Zacatlán, Pue.">Zacatlán, Pue.</option>
<option value="Bernal, Qro."> Bernal, Qro.</option>
<option value="Jalpan de Serra, Qro.">Jalpan de Serra, Qro.</option>
<option value="Bacalar, Q. Roo">Bacalar, Q. Roo</option>
<option value="Real de Catorce, S.L.P.">Real de Catorce, S.L.P.</option>
<option value="Cosalá, Sin.">Cosalá, Sin.</option>
<option value="El Fuerte, Sin.">El Fuerte, Sin.</option>
<option value="Álamos, Son.">Álamos, Son.</option>
<option value="Tapijulapa, Tab.">Tapijulapa, Tab.</option>
<option value="Mier, Tamps.">Mier, Tamps.</option>
<option value="Huamantla, Tlax.">Huamantla, Tlax.</option>
<option value="Coatepec, Ver.">Coatepec, Ver.</option>
<option value="Izamal, Yuc.">Izamal, Yuc.</option>
<option value="Jeréz de García Salinas, Zac.">Jeréz de García Salinas, Zac.</option>
<option value="Teúl de González Ortega, Zac.">Teúl de González Ortega, Zac.</option>
<option value="Mineral del Chico, Hgo.">Mineral del Chico, Hgo.</option>
<option value="Tlayacapan, Morelos">Tlayacapan, Morelos</option>
<option value="Cadereyta de Montes, Qro.">Cadereyta de Montes, Qro.</option>
<option value="Tula, Tamaulipas">Tula, Tamaulipas</option>
<option value="El Oro, Edomex">El Oro, Edomex</option>
<option value="Xico, Veracruz">Xico, Veracruz</option>
<option value="San Sebastián del Oeste, Jalisco">San Sebastián del Oeste, Jalisco</option>
<option value="Xilitla, San Luis Potosí">Xilitla, San Luis Potosí</option>
<option value="Mineral de Pozos, Guanajuato">Mineral de Pozos, Guanajuato</option>
<option value="Sombrerete, Zacatecas">Sombrerete, Zacatecas</option>
<option value="Mineral de Angangueo, Mich.">Mineral de Angangueo, Mich</option>
<option value="Cuatro Ciénegas, Coah.">Cuatro Ciénegas, Coah</option>
<option value="Magdalena de Kino, Son.">Magdalena de Kino, Son</option>
<option value="Pahuatlán, Pue."> Pahuatlán, Pue</option>
<option value="Loreto, B.C.S.">Loreto, B.C.S.</option>
<option value="Valladolid, Yucatán">Valladolid, Yucatán</option>
<option value="Metepec, Edomex">Metepec, Edomex</option>
<option value="Comitán, Chiapas">Comitán, Chiapas</option>
<option value="Chiapa de Corzo, Chiapas">Chiapa de Corzo, Chiapas</option>
<option value="Huichapan, Hidalgo">Huichapan, Hidalgo</option>
<option value="Tequisquiapan, Querétaro">Tequisquiapan, Querétaro</option>
<option value="Batopilas, Chihuahua">Batopilas, Chihuahua</option>
<option value="Chignahuapan, Puebla">Chignahuapan, Puebla</option>
<option value="Cholula, Puebla">Cholula, Pueblas</option>
<option value="Pino, Zacatecas">Pino, Zacatecas</option>
<option value="Lagos de Moreno, Jalisco">Lagos de Moreno, Jalisco</option>
<option value="Tacámbaro, Michoacán">acámbaro, Michoacán</option> 
<option value="Calvillo, Aguascalientes">Calvillo, Aguascalientes</option>
<option value="Nochistlán, Zacatecas">Nochistlán, Zacatecas</option>
<option value="Jiquilpan, Michoacán">Jiquilpan, Michoacán</option>
<option value="Tlatlauquitepec, Puebla">Tlatlauquitepec, Puebla</option>
<option value="Tzintzuntzan, Michoacán">Tzintzuntzan, Michoacán</option>
<option value="Mapimí, Durango">Mapimí, Durango</option>
<option value="Papantla, Veracruz">Papantla, Veracruz</option>
<option value="Tecate, Baja California">Tecate, Baja California</option>
<option value="Arteaga, Coahuila">Arteaga, Coahuila</option>
<option value="Viesca, Coahuila">Viesca, Coahuila</option>
<option value="Jalpa, Guanajuato">Jalpa, Guanajuato</option>
<option value="Salvatierra, Guanajuato">Salvatierra, Guanajuato</option>
<option value="Yuriria, Guanajuato">Yuriria, Guanajuato</option>
<option value="Xicotepec, Puebla">Xicotepec, Puebla</option>
<option value="Jala, Nayarit">Jala, Nayarit</option>
<option value="El Rosario, Sinaloa">El Rosario, Sinaloa</option>
  </select><?php */?>
   <!-- <input type="text" id="end" placeholder="A:" />-->
 
  
    <a class="button expand postfix" onclick="calcRoute()">Buscar</a>
  </form>

 <div id="map-canvas"></div>
	   
  </div></div>
  
  
  
  
  
  </div>
  <div class="col-md-4">
  <div class="four columns   " id="directions" style=" max-height:600px; overflow:auto; border:1px solid #FFF227;">
    <div id="directions-panel" style="min-height:700px;" ></div></div>
  
  
  </div>
</div>

                	
		  </div>
</div>
</div>



</div>




@stop
@section('js')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
    
	<script src='https://www.google.com/recaptcha/api.js'></script>
    
    <script src="javascripts/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
		(function($){
			$(window).load(function(){
				$("#directions").mCustomScrollbar({
					theme:"dark-thick",
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
	
	
	
	
	
var rendererOptions = {
  draggable: true
};
var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);;
var directionsService = new google.maps.DirectionsService();
var map;


function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom:15,
    center: new google.maps.LatLng(20.9728118,-89.5220536)
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directions-panel'));
calcRoute()
  //var control = document.getElementById('control');
 // control.style.display = 'block';
//  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}

function calcRoute() {
	
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);


$('#star').keypress(function(event){  
       var keycode = (event.keyCode ? event.keyCode : event.which);  
      if(keycode == '13'){  
          calcRoute();
		   return false;  
      }   
 });  
    </script>
@stop
@section('css')
{{ HTML::style('assets/javascripts/jquery.mCustomScrollbar.css', array('media' => 'screen')) }}

@stop