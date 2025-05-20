<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>  
  
   

    {{-- <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label('image') !!}
            {!! Form::file('image', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @isset($data)
                @if ($data->image != '')
                    <img src="{{ asset($data->image) }}" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes"
                            type="checkbox" id="remove_image">
                        <label for="remove_image" class="custom-control-label">Remove Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('Address') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '2']) !!}
                <span class="text-danger">{{ $errors->first('address') }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('City') !!}
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('city') }}</span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('Country') !!}
            {!! Form::text('country', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('country') }}</span>

        </div>
    </div> --}}

</div>
