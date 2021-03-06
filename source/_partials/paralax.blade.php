<style>
	.content-space-{{$name}} {
	  padding: 0px;
	  margin-bottom: 0px;
	  color: inherit;
	  background: url({!! $url !!}) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	  height: calc({!! $height !!} - 81px);
	}
	.content-space-{{$name}} .cover{
	  height: calc({!! $height !!} - 81px);
	  background-color: rgba(0,0,0,.8);
	  padding-top: calc({!! $top_text_spacer !!});
	}
	.content-space-{{$name}} h1{
		font-weight: 200;
		color: {{ $title_color }};
	}
	.content-space-{{$name}} h3{
		font-weight: 100;
		letter-spacing: 0.2rem;
		font-size: 1rem;
		color: {{ $title_color }};
	}	
</style>

<div class="content-space-{{$name}}">
    <div class="text-xs-center cover">
		<h1>{!! $title !!}</h1>
		<h3>{!! $subtitle !!}</h3>
    </div>
</div>