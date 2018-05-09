<nav class="navbar navbar-fixed-top navbar-dark">
	<div class="container-fluid">
	  	<a class="navbar-brand" href="/">
	    	<img src="/images/logo.png" alt="Thunderlab Indonesia">
	  	</a>
		<button class="navbar-toggler custom-navbar-breakpoint float-xs-right" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>

		<div class="navbar-desktop">
		  <ul class="nav navbar-nav float-xs-right" style="margin-right: -0.9rem;">
		    <li id="home" class="nav-item @yield(header_home)">
		      <a class="nav-link" href="/">
		      	HOME
		      </a>
		    </li>
		    <li id="about" class="nav-item @yield(header_about)">
		      <a class="nav-link" href="/about">
			      ABOUT
		      </a>
		    </li>
		    <li id="portofolio" class="nav-item @yield(header_portofolio)">
		      <a class="nav-link" href="/portofolio">
			      PORTOFOLIO
		      </a>
		    </li>
		    <li id="career" class="nav-item @yield(header_career)">
		      <a class="nav-link" href="/career">
			      CAREER
		      </a>
		    </li>    
		    <li id="contact" class="nav-item @yield(header_contact)">
		      <a class="nav-link" href="/contact-us">
			      CONTACT US
		      </a>
		    </li>    	    
		  </ul>
		</div>

		<div class="navbar-mobile">
		  <ul class="nav navbar-nav">
		    <li id="home" class="nav-item nav-mobile-item @yield(header_home)">
		      <a class="nav-link" href="/">
		      	HOME
		      </a>
		    </li>
		    <li id="about" class="nav-item nav-mobile-item @yield(header_about)">
		      <a class="nav-link" href="/about">
			      ABOUT
		      </a>
		    </li>
		    <li id="portofolio" class="nav-item nav-mobile-item @yield(header_portofolio)">
		      <a class="nav-link" href="/portofolio">
			      PORTOFOLIO
		      </a>
		    </li>
		    <li id="career" class="nav-item nav-mobile-item @yield(header_career)">
		      <a class="nav-link" href="/career">
			      CAREER
		      </a>
		    </li>    
		    <li id="contact" class="nav-item nav-mobile-item @yield(header_contact)">
		      <a class="nav-link" href="/contact-us">
			      CONTACT US
		      </a>
		    </li>    	    
		  </ul>
		</div>		

	</div>
</nav>

@section('scripts')
	$( ".navbar-toggler" ).click(function() {
	  $( ".navbar-mobile" ).slideToggle( "slow" );
	  	if($( ".navbar-toggler" ).hasClass( "active" )){
	  		$( ".navbar-toggler" ).removeClass( "active" );
	  	}else{
	  		$( ".navbar-toggler" ).addClass( "active" );
	  	}
	});
@append