<h5 class="text-warning">JS/CSS Version</h5>

<div class="row">
	<div class="col-md-3"><strong>Version</strong></div>
	<div class="col-md-9">
		<div class="form-group">
			<input type="text" class="form-control" name="input['version_css_js']" value="{{ ModelHelper::getDataFromSetting('version_css_js') }}" placeholder="Version">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3"><strong>Website</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['website']" placeholder="website without http and www" value="{{ ModelHelper::getDataFromSetting('website') }}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3"><strong>favicon</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['favicon']" type="file">
			@if(ModelHelper::getDataFromSetting('favicon'))
				<img src="{{ asset(ModelHelper::getDataFromSetting('favicon')) }}" width="100px" />
			@endif

		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3"><strong>Header logo</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['header_logo']" type="file">
			@if(ModelHelper::getDataFromSetting('header_logo'))
				<img src="{{ asset(ModelHelper::getDataFromSetting('header_logo')) }}" width="200px" />
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3"><strong>Footer logo</strong></div>
	<div class="col-md-9">
		<div class="form-group" style="background: black;">

			<input class="form-control" name="input['footer_logo']" type="file">
			@if(ModelHelper::getDataFromSetting('footer_logo'))
				<img src="{{ asset(ModelHelper::getDataFromSetting('footer_logo')) }}" width="200px" />
			@endif
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-3"><strong><h2>Counter</h2></strong></div>
	<div class="col-md-9">
		&nbsp;&nbsp;
	</div>
</div>
<div class="row">
	<div class="col-md-3"><strong>Day</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['project completed']" placeholder="project completed" value="{{ ModelHelper::getDataFromSetting('project completed') }}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3"><strong>Hours</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['Working hours']" placeholder="Working hours" value="{{ ModelHelper::getDataFromSetting('Working hours') }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3"><strong>Minutes</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['Experienced Staff']" placeholder="Experienced Staff" value="{{ ModelHelper::getDataFromSetting('Experienced Staff') }}">
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-3"><strong>Seconds</strong></div>
	<div class="col-md-9">
		<div class="form-group">

			<input class="form-control" name="input['Happy Clients']" placeholder="Happy Clients" value="{{ ModelHelper::getDataFromSetting('Happy Clients') }}">
		</div>
	</div>
</div>
