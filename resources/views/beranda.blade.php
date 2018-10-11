@extends('layouts.default')

@section('judul', 'Beranda')

@section('konten')

	<h1>Laporan Pengeluaran</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Nominal</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
				<tr>
					<td>{{ $d->tanggal }}</td>
					<td>Rp {{ number_format($d->nominal, 0, ',', '.') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<center>
		{{ $data->links() }}	
	</center>

@endsection