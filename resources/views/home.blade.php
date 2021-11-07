@extends('base')

@section('conteudo')
	<table>
		<tr>
			@foreach($inscritos[1] as $keyInscrito => $valueInscrito)
				<th>{{ $keyInscrito }}</th>
			@endforeach
		</tr>
		@foreach($inscritos as $inscrito)
		<tr>
			@foreach($inscrito as $key => $value)
				<td>{{$value}}</td>
			@endforeach
		</tr>
		@endforeach

	</table>
@endsection