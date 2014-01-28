@extends('layouts.scaffold')

@section('main')

<h1>All Items</h1>

<p>{{ link_to_route('items.create', 'Add new item') }}</p>

@if ($items->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Number</th>
				<th>Checked</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($items as $item)
				<tr>
					<td>{{{ $item->name }}}</td>
					<td>{{{ $item->number }}}</td>
					<td>{{{ $item->checked }}}</td>
                    <td>{{ link_to_route('items.edit', 'Edit', array($item->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('items.destroy', $item->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no items
@endif

@stop
