@extends('layouts.scaffold')

@section('main')

<h1>Edit Item</h1>
{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('items.show', 'Cancel', $item->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
