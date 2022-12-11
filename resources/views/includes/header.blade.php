<header>
	<div class="header">
	    <div class="container">
	        <div class="header_block">

	            <div class="header_logo">
	            	<a href="{{ asset('/') }}" title="На главную">
	            		<img src="{{ asset('img/brado_logo.jpg') }}">
	            	</a>
	            </div>

@include('includes.main_menu')

	        </div>        
	    </div>
	</div>

@include('includes.main_menu_mobile')

</header>
