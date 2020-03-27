<!-- Menu -->
 <div class="menu">
     <ul class="list">
         <li class="header">MAIN NAVIGATION</li>
         <li @if(Request::segment(1)=='') class='active' @endif>
             <a href="{{route('apply.index')}}">
                 <i class="material-icons">assignment</i>
                 <span>Requirements</span>
             </a>
         </li>
         @foreach($sections as $section)
         <?php
            $details = $section->fields->where('required', 'Yes')->where('status', 'Active');
            $required_fields_count =  $details->count();
            $response_count = 0;
            foreach ($details as $detail) {
                $response_count += $detail->responses->where('institution_id', $institution->id)->count();
            }
            $is_section_completed = true;
            if ($response_count < $required_fields_count) {
                $is_section_completed = false;
            }
            ?>
         <li @if(Request::segment(2)==$section->slug) class='active' @endif>
             <a href="{{route('apply.show', $section->slug)}}">
                 <i class="material-icons">{{!$is_section_completed?'edit':'done_outline'}}</i>
                 <span>{{$section->title}}</span>
                {{-- <span class="label-count col-white">{{$response_count.'/'.$required_fields_count}}</span> --}}
             </a>
         </li>
         @endforeach
         <li @if(Request::segment(1)=='review') class ='active' @endif>
             <a href="{{route('review.index')}}">
                 <i class="material-icons">save</i>
                 <span>Submit Application</span>
             </a>
         </li>
     </ul>
 </div>
 <!-- #Menu -->
 <!-- Footer -->
 <div class="legal">
     <div class="copyright">
         &copy; {{now()->year}}
         <a href="https://www.aau.org" target="_blank">Association Of African Universities</a>.
     </div>
     <div class="version">
         <b>Version: </b> 2.0.0.6
     </div>
 </div>