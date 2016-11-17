@foreach($jobs as $key => $job)
    <div class="container-title">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row panel-wrap"> 
                    <div class="col-md-6 col-sm-6 col-xs-12 pb-s pt-s pb-xs-hide">
                        <h5>
                            {{ $job['title'] }}
                        </h5>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 pb-s pt-s pt-xs-hide text-xs-left text-sm-right">
                        <h5 class="responsive-subtitle">
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            {{ $job['location'] }}
                            <span class="span-show float-xs-right toggler">
                                <a class="colapse_career" href="#" data-toggle="collapse" data-target="#collapseCareer{{$key}}" aria-expanded="false" aria-controls="collapseCareer{{$key}}">
                                    <i class="fa fa-angle-down {{ $key == 0 ? 'active' : '' }}" aria-hidden="true"></i>
                                </a>
                            </span>
                        </h5>                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="collapse {{ $key == 0 ? 'in' : '' }}" id="collapseCareer{{$key}}">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="pb-l pt-l panel-wrap">
                    <div class="pb-s">
                        <h5>{{ $job['title'] }}</h5>
                        <p>
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            {{ $job['location'] }}                    
                        </p>
                    </div>
                    @foreach($job['contents'] as $i => $content)
                        <div class="pb-s">
                            <p class="mb-none job-sub-title">{{ ucfirst(str_replace('_', ' ', $i)) }}:</p>
                            <p>
                                {!! $content !!}
                            </p>
                        </div>
                    @endforeach                                        
                </div>
            </div>
        </div>
    </div>
@endforeach