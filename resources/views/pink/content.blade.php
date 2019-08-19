@if($portfolios && count($portfolios) > 0)

<div id="content-home" class="content group">
    <div class="hentry group">
        <div class="section portfolio">
 <h3 class="title">Latest projects</h3>

<div class="portfolio-projects">
@if($lastPortfolios)
        <div class="hentry work group portfolio-sticky portfolio-full-description">
        <div class="work-thumbnail">
            <a class="thumb"><img src="{{ asset(env('THEME')) }}/images/projects/{{ $lastPortfolios->img->path }}" alt="0081" title="0081" /></a>
            <div class="work-overlay">
                <h3><a href="{{ route('portfolios.show',['alias'=>$lastPortfolios->alias]) }}">{{ $lastPortfolios->title }}</a></h3>
                <p class="work-overlay-categories"><img src="{{ asset(env('THEME')) }}/images/categories.png" alt="Categories" /> in: <a href="#">{{ $lastPortfolios->filter->title }}</a></p>
            </div>
        </div>
        <div class="work-description">
            <h2><a href="{{ route('portfolios.show',['alias'=>$lastPortfolios->alias]) }}">{{ $lastPortfolios->title }}</a></h2>
            <p class="work-categories">in:  <a href="#">{{ $lastPortfolios->filter->title }}</a></p>
            <p><a href="#">{{ $lastPortfolios->filter->title }}</a>{{ str_limit($lastPortfolios->text,200) }}</p>
            <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus [...]</p>
                <a href="{{ route('portfolios.show',['alias'=>$lastPortfolios->alias]) }}" class="read-more">|| Read more</a>
        </div>
    </div>
    
    <div class="clear"></div>
 

@endif
@foreach($portfolios as $k=>$item)

	                <div class="related_project">
                    <div class="overlay_a related_img">
                        <div class="overlay_wrapper">
                            <img src="{{ asset(env('THEME')) }}/images/projects/{{ $item->img->mini }}" alt="0061" title="0061" />						
                            <div class="overlay">
                                <a class="overlay_img" href="{{ asset(env('THEME')) }}/images/projects/{{ $item->img->path }}" rel="lightbox" title=""></a>
                                <a class="overlay_project" href="{{ route('portfolios.show',['alias'=>$item->alias]) }}"></a>
                                <span class="overlay_title">{{ $item->title }}</span>
                            </div>
                        </div>
                    </div>
                    <h4><a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">{{ $item->title }}</a></h4>
                    <p>{{ str_limit($item->text,50) }}, <a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">[...]</a></p>
                </div>


@endforeach

<div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- START COMMENTS -->
    <div id="comments">
    </div>
    <!-- END COMMENTS -->
</div>
@else
<p>Нет работ для отображения на этой странице!</p>
@endif