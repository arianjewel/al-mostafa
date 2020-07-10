<table class="table">
  	<tbody class="text-center">
  		@if(count($jobs)>0)
		@foreach($jobs as $job)
		<tr>
		  <td class="w-75"><a href="{{route('career.single', $job->slug)}}" target="_blank">{{$job->title}}</a></td>
		  <td class="text-white" style="background-color: #0072c2">
		      <a style="color:white" @if($job->url) href="{{$job->url}}" @else href="{{route('career.single', $job->slug)}}" @endif >Apply Online</a>
		  </td>
		  <td>{{date('M d, Y', strtotime($job->created_at))}}</td>
		</tr>
		@endforeach
		@else
		<tr>
			<td>No Job found!</td>
		</tr>
		@endif
	</tbody>
</table>
<div class="d-flex justify-content-center" style="margin-bottom: 20px;">{{$jobs->appends($_GET)->links()}}</div>




                      
