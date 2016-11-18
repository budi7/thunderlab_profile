@extends('_layouts.master')

@section('body')

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/contact.jpg',
        'title'     => 'CONTACT US',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section panel-wrap">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <form id="gform" method="POST" action="https://script.google.com/macros/s/AKfycbzpXoJgF5H7q0vfD-hB-JfQLEgyr633ah44qfqVnSlopgEJioCD/exec">
                            <div class="mb-l">
                            	<h5>Get in Touch</h5>
                            	<p>
                            		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            	</p>
                            </div>
    	                    <div class="form-group">
                                <input type="text" class="form-control" name="name" required id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" value="" required placeholder="Email" class="form-control"/>                            
                            </div>      
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" required rows="7" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-xs-right pt-s">
                                <button class="btn btn-primary submit">
                                    SEND MESSAGE &nbsp;
                                    <i class="fa fa-paper-plane"></i>
                                </button>                                
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<h5 class="mb-m">Contact Info</h5>
                    	<h5>Address</h5>
                    	<p>
                    		Pondok Belimbing indah tengah V</br>
                    		Blok B8 No 05, Araya - Malang
                    	</p>
                    	<h5>Postal Code</h5>
                    	<p>
                    		65126
                    	</p>
                    	<h5>Phone</h5>
                    	<p>
                    		+62 341 1888
                    	</p>                    	
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('header_contact')
	active
@stop

@section('scripts')
    $('#gform').on('submit', function(e) {
        if($(this).find('button').hasClass('btn-loading')){
            return false;
        }

        // ui
        $(this).find('button').addClass('btn-loading');
        $(this).find('button').find('.fa').removeClass('fa-paper-plane');
        $(this).find('button').find('.fa').addClass('fa-circle-o-notch fa-spin');

        // ajax 
        var form = $(this);
        $.ajax({ 
             url   : form.attr('action'),
             type  : form.attr('method'),
             data  : form.serialize(),
             success: function(response){
                // show message


                // clear inputs
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');

                // reset to initial state
                $('#gform').find('button').removeClass('btn-loading');
                $('#gform').find('button').find('.fa').removeClass('fa-circle-o-notch fa-spin');        
                $('#gform').find('button').find('.fa').addClass('fa-paper-plane');
             }
        });
        
        return false;
     });
@stop