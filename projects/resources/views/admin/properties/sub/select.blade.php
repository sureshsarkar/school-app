

<div class="row">
	

	<div class="col-md-2">
		<div class="form-group">
			{!! Form::label("is_trending") !!}
			{!! Form::select("is_trending",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			{!! Form::label("is_top") !!}
			{!! Form::select("is_top",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			{!! Form::label("is_feature") !!}
			{!! Form::select("is_feature",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			{!! Form::label("is_bestseller") !!}
			{!! Form::select("is_bestseller",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
		</div>
	</div>

	<div class="col-md-2">
		<div class="form-group">
			{!! Form::label("is_hot") !!}
			{!! Form::select("is_hot",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
		</div>
	</div>
	
</div>