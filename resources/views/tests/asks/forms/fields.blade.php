<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="form-group">
            {!! Form::label('text', 'Text') !!}
            {!! Form::textarea('text', $ask->text ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('mark', 'Mark') !!}
            {!! Form::number('mark', $ask->mark ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('mark')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>