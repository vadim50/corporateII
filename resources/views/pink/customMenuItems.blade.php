@foreach($items as $item)

 <li class="{{ (URL::current() == $item->url()) ? 'active' : '' }}">
 	<a href="{{ $item->url() }}">{{ $item->title }}</a>
 	@if($item->hasChildren())
 		<ul class="sub-menu">
 			@include(env('THEME').'.customMenuItems',['items'=>$item->children()])
 		</ul>
 	@endif

 </li>

@endforeach