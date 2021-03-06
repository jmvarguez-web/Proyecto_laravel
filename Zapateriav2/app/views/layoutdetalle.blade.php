<!DOCTYPE HTML>
<html>
	<head>
	<title>Zapatería Yovanna | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  
  {{-- Bootstrap --}}
	    {{ HTML::style('assets/css/bootstrap/bootstrap.css', array('media' => 'screen')) }}
		{{ HTML::style('assets/css/fonts-icons/style.css', array('media' => 'screen')) }}
 {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	    <!--[if lt IE 9]>
	        {{ HTML::script('assets/js/html5shiv.js') }}
	        {{ HTML::script('assets/js/respond.min.js') }}
	    <![endif]-->
	    @yield("css","")
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<!-- start details -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/productviewgallery.css') }}" media="all" />
<script type="text/javascript" src="{{ URL::asset('assets/js/cloud-zoom.1.0.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/productviewgallery.js') }}"></script>
<!--- start-mmmenu-script---->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/jquery.mmenu.all.css') }}" />
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.mmenu.js') }}"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start top_js_button -->
<script type="text/javascript" src="{{ URL::asset('assets/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/move-top.js') }}"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
  {{-- Bootstrap --}}
	    {{ HTML::style('assets/css/bootstrap/bootstrap.css', array('media' => 'screen')) }}
		{{ HTML::style('assets/css/fonts-icons/style.css', array('media' => 'screen')) }}

	    

	    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	    <!--[if lt IE 9]>
	        {{ HTML::script('assets/js/html5shiv.js') }}
	        {{ HTML::script('assets/js/respond.min.js') }}
	    <![endif]-->
	    @yield("css","")
	<!--- start-mmmenu-script---->
	
	</head>
	<body>
    	<input id="root" type="hidden" value="{{route('index')}}">
  		<input id="cartPush" type="hidden" value="{{route('cartPush')}}">
  		<input id="cartPop" type="hidden" value="{{route('cartPop')}}">
  		<input id="cartUpdate" type="hidden" value="{{route('cartUpdate')}}">
  		<input id="_token" type="hidden">
    <!-- start header -->
<div class="top_bg">
      <div class="wrap">
    <div class="header">
          <div class="logo"> <a href="{{route('index')}}"><img src="{{ asset('assets/images/logo.png') }}" alt=""/></a> </div>
          <div class="log_reg">
        <ul>
               @if(Session::has('datosCliente'))
							        <li><a href="{{route('pedidos.index')}}">Mis Pedidos</a></li>
							        <li><a href="{{route('editarCuenta')}}">Mi Cuenta</a></li>
							        <li><a href="{{route('logout')}}">Logout</a></li>
							        @else
							        <li><a href="{{route('loginCliente')}}">Login</a></li>
							       
              <span class="log"> o </span>
              <li><a href="{{route('registrarCliente')}}">Registrate</a> </li>
              <div class="clear"></div>

							        @endif
            </ul>
      </div>
          <div class="web_search">
        <form>
              <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
              <input type="submit" value=" " />
            </form>
      </div>
          <div class="clear"></div>
        </div>
  </div>
    </div>
<!-- start header_btm -->
<div class="wrap">
      <div class="header_btm">
    <div class="menu">
          <ul>
        <li class="active"><a href="{{route('index')}}">Inicio</a></li>
        <li><a href="{{route('catalogo')}}">Productos</a></li>
        <li><a href="{{route('servicios')}}">¿Quiénes Somos?</a></li>
        <!--<li><a href="index.html">Páginas</a></li>
        <li><a href="blog.html">Blog</a></li>-->
        <li><a href="{{route('contacto')}}">Contacto</a></li>
        <div class="clear"></div>
      </ul>
        </div>
    <div id="smart_nav"> <a class="navicon" href="#menu-left"> </a> </div>
    <nav id="menu-left">
          <ul>
        <li ><a href="{{route('index')}}">Inicio</a></li>
        <li><a href="{{route('catalogo')}}">Productos</a></li>
        <li><a href="{{route('servicios')}}">¿Quiénes Somos?</a></li>
        <!--<li><a href="index.html">Páginas</a></li>
        <li><a href="blog.html">Blog</a></li>-->
        <li><a href="{{route('contacto')}}">Contacto</a></li>
        <div class="clear"></div>
      </ul>
        </nav>
    <div class="header_right">
          <ul>
        <li id="liCart" style="width: auto;"  class="cart">
							        	<?php $tp = sizeof($cart);
							        	$total = 0;
							        	$items = 0;
							        	if(!empty($cart)){
							        		foreach ($cart as $producto) {
							        			$total += ($producto['cantidad']*$producto['precio']);
							        			$items += $producto['cantidad'];
							        		}
							        	}
								        	
							        	?>

							        	<a href="{{route('confirmPay')}} "><i class="icon-cart2" style="font-size: 15px;" ></i>&nbsp;Carrito[<span id="items"> <?php if($tp < 1){ echo "vacio";}else{echo $items. " item(s) - $".$total;} ?></span>]
							        	</a>
							        	<div id="cart" class="fondogris" style="display: none; width:300px; background-color:rgb(192,192,192); background-color:rgba(192,192,192,0.8);">
								        	@if(!empty($cart))
								        		<table id="cartTable" class="tableCar">
								        			<tbody id="cartTableBody">
								        				@foreach ($cart as $producto  )
								        					<tr class="fondogris prod">
								        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
								        						<td>{{$producto['cantidad']}} x {{$producto['producto']}}</td>
								        						<td>${{$producto['precio']}}</td>
								        						<td class="deletProd"> <i class="icon-close removeProducto"><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
								        					</tr>

								        				@endforeach

								        			</tbody>

												</table>
												
												<div id="total">Total $ {{$total}}</div>
												<a id="btnpagarcarrito" href="{{route('pay')}}" class="btn btn-primary pagar">Pagar</a>

								        	@else
												<table id="cartTable" class="tableCar">
													<tbody id="cartTableBody">
										        		<tr>
										        			<td colspan="4" >Vacio	</td>
										        		</tr>
								        			</tbody>
							        			</table>
							        			<div id="total">Total $</div>
							        			<a id="btnpagarcarrito" href="{{route('pay')}}" class="btn btn-primary pagar hide">Pagar</a>
											@endif
							        		
							        	</div>
							        </li>
      </ul>
        </div>
    <div class="clear"></div>
  </div>
    </div>

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">@yield('titulo')</h2>
</div>
</div>
</div>

<!-- start main -->
@yield('content')


<div class="footer_bg">
      <div class="wrap">
    <div class="footer"> 
          <!-- scroll_top_btn --> 
          <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script> 
          <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a> 
          <!--end scroll_top_btn -->
          <div class="f_nav1">
        <ul>
              <li><a href="#">Inicio /</a></li>
              <li><a href="#">soporte /</a></li>
              <li><a href="#">Terminos y condiciones /</a></li>
              <li><a href="#">Preguntas frecuentes /</a></li>
              <li><a href="#">Contactanos</a></li>
            </ul>
      </div>
          <div class="copy">
        <p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
      </div>
          <div class="clear"></div>
        </div>
  </div>
    </div>

       {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    
	   

	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	   
	    {{ HTML::script('assets/js/scriptJS/scriptIndex.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptCart.js') }}
	    {{ HTML::script('https://www.google.com/recaptcha/api.js')}}
	    @yield("js","")
</body>


</html>