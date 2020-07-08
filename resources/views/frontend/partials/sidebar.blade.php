<div class="col-md-3">
	{{--
	<div class="side_bar1 text-center">
		<h4> Head Office</h4>
		<p>Lake View, House N0-12, Road No-137, Dhaka-1200, Bangladesh</p>
		<P>Phone: +88 09666-771313</P>
		<p>Email:  info@almostafagroupbd.com</p>
	</div>
	--}}
	<div class="side_bar1 text-center">
		{!! \CRUDBooster::getSetting('company_address')!!}
		<p>Phone: {{CRUDBooster::getSetting('contact_number')}}</p>
		<p>Email: {{CRUDBooster::getSetting('contact_email')}}</p>
	</div>
	<div class="side_bar2">
		<!--<iframe width="100%" height="250" src="https://www.youtube.com/embed/Dh76jet4D5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
	</div>
</div>