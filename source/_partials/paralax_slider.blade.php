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
    height: calc(500px - 81px);
  }
  .content-space-{{$name}} .cover{
    height: calc(500px - 81px);
    background-color: rgba(0,0,0,.75);
  }
  .content-space-{{$name}} h1{
    font-weight: 200;
    color: {{ $title_color }};
  }
  .content-space-{{$name}} h3{
    font-weight: 100;
    letter-spacing: 0.2rem;
    color: {{ $title_color }};
  } 
  @media screen and (min-width: 501px) and (max-width: 750px) {
    .content-space-{{$name}} {
      height: calc(500px + 25px - 81px);
    }
    .content-space-{{$name}} .cover{
      height: calc(500px + 25px - 81px);
    }    
  }  
  @media screen and (max-width: 500px) {
    .content-space-{{$name}} {
      height: calc(500px + 100px - 81px);
    }
    .content-space-{{$name}} .cover{
      height: calc(500px + 100px - 81px);
    }    
  }
  
  /*custom style   */
  .content-space-{{$name}} .quote{
    color: #FFFD56; 
    padding-top: 50px;
  }
  .content-space-{{$name}} .content{
    color:white; 
    padding: 15px 15%;
  }
  .content-space-{{$name}} .name{
    color: #FFFD56; 
    margin-bottom: 0px;
  }
  .content-space-{{$name}} .company{
    color:white;
  }  
</style>

<div class="content-space-{{$name}}">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        @foreach($content as $key => $data)
        <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
          <div class="text-xs-center cover">
            <div class="col-md-12 pt-xl">
              <h1 class="quote">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </h1>
              <p class="content">{{$data['content']}}</p>
              <h5 class="name">{{$data['name']}}</h5>
              <p class="company">{{$data['company']}}</p>
            </div>
          </div>
        </div>
        @endforeach
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>        
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>       


     