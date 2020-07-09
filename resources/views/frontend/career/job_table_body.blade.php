<table class="table">
  	<tbody class="text-center">
		@foreach($jobs as $job)
		<tr>
		  <td class="w-75"><a href="{{route('career.single', $job->slug)}}" target="_blank">{{$job->title}}</a></td>
		  <td class="text-white" style="background-color: #0072c2">
		      <a style="color:white" @if($job->url) href="{{$job->url}}" @else href="{{route('career.single', $job->slug)}}" @endif >Apply Online</a>
		  </td>
		  <td>{{date('M d, Y', strtotime($job->created_at))}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$jobs->appends($_GET)->links()}}



                      
