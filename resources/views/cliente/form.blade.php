<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $cliente->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_apellido') }}
            {{ Form::text('segundo_apellido', $cliente->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_celular') }}
            {{ Form::text('numero_celular', $cliente->numero_celular, ['class' => 'form-control' . ($errors->has('numero_celular') ? ' is-invalid' : ''), 'placeholder' => 'Numero Celular']) }}
            {!! $errors->first('numero_celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_electronico') }}
            {{ Form::text('correo_electronico', $cliente->correo_electronico, ['class' => 'form-control' . ($errors->has('correo_electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $cliente->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $cliente->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>