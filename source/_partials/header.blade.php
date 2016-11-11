<nav class="navbar navbar-fixed-top navbar-dark">
	<div class="container-fluid">
	  <a class="navbar-brand" href="#">
	    <img src="/images/logo.png" alt="Thunderlab Indonesia">
	  </a>
	  <ul class="nav navbar-nav pull-xs-right" style="margin-right: -1.5rem;">
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
</nav>

<!-- spacer -->
<div style="background-color: black;height: 81px;"></div>