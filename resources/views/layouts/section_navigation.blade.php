<?php $current_section_url = Request::segment(2);
$current_section_id = $sections->where('slug', $current_section_url)->first()['order'];
$previous_section_id = $sections->where('order', '<', $current_section_id)->max('order');
$next_section_id = $sections->where('order', '>', $current_section_id)->min('order'); 
$previous_section_url = $sections->where('id', $previous_section_id)->first()['slug'];
$next_section_url = $sections->where('id', $next_section_id)->first()['slug'];
?>
<div class="row clearfix">
    <div class="text-center">
        <div class="btn-group" role="group">
            {{-- <button type="button" class="btn btn-default waves-effect" onclick="event.preventDefault(); document.getElementById('back').submit();">
                <i class="material-icons">arrow_back</i>
                <span>{{$sections->where('order', $previous_section_id)->first()['title']?:'Requirements'}}</span>
            </button> --}}
            <div class="btn-group" role="group">
                <button class="btn btn-primary waves-effect" type="submit">
                    <i class="material-icons">input</i>
                    <span>Save & Continue</span>
                </button>
                {{-- <button type="submit" class="btn btn-default waves-effect" onclick="event.preventDefault(); document.getElementById('next').submit();">
                    <span>{{$sections->where('order', $next_section_id)->first()['title']?:'Review Information'}}</span>
                    <i class="material-icons">arrow_forward</i>
                </button> --}}
            </div>
        </div>
    </div>
    {{-- <form id="next" action="{{$current_section_id < $next_section_id?route('apply.show', $next_section_url):route('review.index')}}" method="GET" style="display: none;">
    </form>
    <form id="back" action="{{$previous_section_id > 0?route('apply.show', $previous_section_url):route('apply.index')}}" method="GET" style="display: none;">
    </form> --}}