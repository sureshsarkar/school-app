<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Username') !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('username') }}</span>
        </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Father Name') !!}
            {!! Form::text('father_name', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('father_name') }}</span>
        </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Mother Name') !!}
            {!! Form::text('mother_name', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('mother_name') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Roll Number') !!}
            {!! Form::text('roll_no', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('roll_no') }}</span>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('Mobile') !!}
            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('mobile') }}</span>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('password') }}</span>

        </div>
    </div>
    <div class="col-md-4  ">
        <div class="form-group">
            {!! Form::label('status') !!}
            {!! Form::select('status', ['1' => 'active', '0' => 'deactive'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]) !!}
            <span class="text-danger">{{ $errors->first('status') }}</span>
        </div>
    </div>

    <div class="col-md-3 ">
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
    </div>

</div>
