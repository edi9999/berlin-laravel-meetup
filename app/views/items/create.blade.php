@extends('layouts.scaffold')

@section('main')

<h1>Create Item</h1>

{{ Form::open(array('route' => 'items.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('number', 'Number:') }}
            {{ Form::text('number') }}
        </li>

        <li>
            {{ Form::label('checked', 'Checked:') }}
            {{ Form::checkbox('checked') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


