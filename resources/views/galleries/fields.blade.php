<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img') !!}
</div>

<div class="clearfix"></div>

<!-- Select directory -->
<div class="form-group col-sm-6">
    {!! Form::label('directory_id', 'Directory:') !!}
    {!! Form::select('directory_id', $arrDirs, null, ['class' => 'form-control', 'placeholder' => 'Выбор директории']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('galleries.index') !!}" class="btn btn-default">Cancel</a>
</div>
