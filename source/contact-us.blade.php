@extends('_layouts.master')

@section('body')

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/contact.jpg',
        'title'     => 'Stay  Connect  with  Us',
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
                            <div id="alert_success" class="alert alert-success mb-m hidden" role="alert">
                                <button type="button" class="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>                            
                                <strong>Thank You!</strong> We will follow up your message soon.
                            </div>   
                            <div id="alert_fail" class="alert alert-danger mb-m hidden" role="alert">
                                <button type="button" class="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>                            
                                <strong>Sorry, </strong> an error occured when processing your message. Please try again or contact us directly.
                            </div>                                                      
                            <div class="mb-l">
                                <h5>Hubungi  kami  kapapun </h5>
                                <p>
                                    Kami  berkomitmen  dalam  memberikan  layanan  yang  terbaik  dan  professional  untuk  Anda.  Thunderlabs  memastikan  bahwa  apapun  yang  Anda  butuhkan  akan  segera  terlayani  dengan  menghubungi  kami.
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
                    	<h5>Office  Location</h5>
                    	<p>
                    		Vernon  Building<br>
                            Jl.  Letjen  Sutoyo  102,  Blimbing,  Malang
                            65141
                    	</p>
                    	{{-- <h5>Postal Code</h5>
                    	<p>
                    		65126
                    	</p> --}}
                    	<h5>Phone</h5>
                    	<p>
                    		0341  -  4377502
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
                $('#alert_success').removeClass('hidden');

                // clear inputs
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');

                // reset to initial state
                $('#gform').find('button').removeClass('btn-loading');
                $('#gform').find('button').find('.fa').removeClass('fa-circle-o-notch fa-spin');        
                $('#gform').find('button').find('.fa').addClass('fa-paper-plane');
             },
             error: function(response){
                $('#alert_fail').removeClass('hidden');
             }
        });
        
        return false;
    });
    $('.close').on('click', function(e) {
        $(this).parent().addClass('hidden');
    });
@stop