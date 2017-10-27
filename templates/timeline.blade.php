<div class="{{ $classes }}">
    @if (!$hideTitle && !empty($post_title))
    <h4 class="box-title">{!! apply_filters('the_title', $post_title) !!}</h4>
    @endif
    <div class="box-content">
	    <ul class="timeline">
	    	@foreach($events as $event)
		        <li class="timeline-event">
					<div class="timeline-date hidden-xs hidden-sm">
		            	{!! \ModularityTimeline\Module::timelineDate($ID, $event['date']) !!}
					</div>
		            <div class="timeline-marker">
		            	<div class="timeline-date hidden-md hidden-lg">
			            	{!! \ModularityTimeline\Module::timelineDate($ID, $event['date']) !!}
						</div>
		            </div>
		            <div class="timeline-content timeline-{{ $event['image_position'] }}">
						<div class="grid">
							@if(!empty($event['image']['ID']))
								<div class="{{ $event['image_grid'] }}">
									{!! $event['image_markup'] !!}
		                		</div>
		                	@endif
							<div class="{{ $event['content_grid'] }}">
								<h3>{{ $event['title'] }}</h3>
		                		{!! $event['content'] !!}
		                	</div>
						</div>
		            </div>
		        </li>
	        @endforeach
	    </ul>
    </div>
</div>
