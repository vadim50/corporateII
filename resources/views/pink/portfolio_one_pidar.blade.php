<div id="content-page" class="content group">
    <div class="clear"></div>
    <div class="posts">
        <div class="group portfolio-post internal-post">
@if(@portfolio)
            <div id="portfolio" class="portfolio-full-description">
                
                <div class="fulldescription_title gallery-filters">
                    <h1>{{ $portfolio->title }}</h1>
                </div>
                
                <div class="portfolios hentry work group">
                    <div class="work-thumbnail">
                        <a class="thumb"><img src="{{ asset(env('THEME')) }}/images/projects/{{$portfolio->img->max}}" alt="0081" title="0081" /></a>
                    </div>
                    <div class="work-description">
                        <p>{{ $portfolio->text }}</p>
                        <p>Sed <a href="http://yourinspirationweb.com/demo/sheeva/work/xmas-icons/#">porttitor eros </a>ut purus elementum a consectetur purus vulputate</p>
                        <div class="clear"></div>
                        <div class="work-skillsdate">
                            <p class="skills"><span class="label">Filter:</span> {{ $portfolio->filter->title }}</p>
                            <p class="workdate"><span class="label">Customer:</span> {{ $portfolio->customer }}</p>
                            <p class="workdate"><span class="label">Year:</span> 
                            	@if($portfolio->created_at)
                            	{{ $portfolio->created_at->format('Y') }}
                            	@else
                            	None
                            	@endif
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="clear"></div>
                
                <h3>Other Projects</h3>
                
                <div class="portfolio-full-description-related-projects">
@if(!$portfolios->isEmpty())

@foreach($portfolios as $item)                  
                    <div class="related_project">
                        <a class="related_proj related_img" href="{{ route('portfolios.show',['alias'=>$item->alias]) }}" title="Love"><img src="{{ asset(env('THEME')) }}/images/projects/{{ $item->img->mini }}" alt="0061" title="0061" /></a>
                        <h4><a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">{{ $item->title }}</a></h4>
                    </div>
@endforeach
@endif     
                </div>
            </div>
            <div class="clear"></div>
@endif
        </div>
    </div>
</div>
<!-- END CONTENT -->