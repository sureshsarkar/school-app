<div class="row">
     <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('User') !!}
            {!! Form::select('user_id', ModelHelper::getUserSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose user',
            ]) !!}
            <span class="text-danger">{{ $errors->first('user_id') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Marks') !!}
            {!! Form::text('marks', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('marks') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Obtained Marks') !!}
            {!! Form::text('obtained_marks', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('obtained_marks') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Subject') !!}
            {!! Form::select('subject_id', ModelHelper::getSubjectSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose subject',
            ]) !!}
            <span class="text-danger">{{ $errors->first('subject_id') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Session') !!}
            {!! Form::select('session_id', ModelHelper::getSessionSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose session',
            ]) !!}
            <span class="text-danger">{{ $errors->first('session_id') }}</span>
        </div>
    </div>


    {{-- <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>

        </div>
    </div> --}}
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('Year') !!}
            {!! Form::text('year', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('year') }}</span>

        </div>
    </div>

    {{-- <div class="col-md-4">
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
    </div> --}}

</div>
