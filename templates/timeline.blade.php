<div class="{{ $classes }}" {!! $attributes  !!}>
    @if (!$hideTitle && !empty($post_title))
    <h4>{!! apply_filters('the_title', $post_title) !!}</h4>
    @endif

	    <ul class="timeline">
	    	@foreach($events as $event)
		        <li class="timeline__event">
					{!! !empty($event['link']) ? '<a href="' . $event['link'] . '" alt="' . $event['title'] . '">' : '' !!}
						<div class="timeline__date hidden-xs hidden-sm">
							{!! \ModularityTimeline\Module::timelineDate($ID, $event['date']) !!}
						</div>
						<div class="timeline__marker">
							<div class="timeline__date hidden-md hidden-lg">
								{!! \ModularityTimeline\Module::timelineDate($ID, $event['date']) !!}
							</div>
						</div>
						<div class="timeline__content timeline__{{ $event['image_position'] }}">
							<div class="grid">
								@if(!empty($event['image']['ID']))
									<div class="{{ $event['image_grid'] }}">
										{!! $event['image_markup'] !!}
									</div>
								@endif
								<div class="{{ $event['content_grid'] }}">
									<div class="timeline__content__date">
										{!! \ModularityTimeline\Module::timelineDate($ID, $event['date']) !!}
									</div>
									<h3 class="timeline__title">{{ $event['title'] }}</h3>
									{!! $event['content'] !!}
								</div>
							</div>
						</div>
                    {!! !empty($event['link']) ? '</a>' : '' !!}
		        </li>
	        @endforeach
	    </ul>
</div>
