

@extends('layouts.main')

@section('container')
<h1>Data Buku</h1>



	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>idbuku</th>
			<th>isbn</th>
			<th>judul</th>
			<th>idkategori</th>
			<th>pengarang</th>
                        <th>penerbit</th>
			<th>kota_terbit</th>
			<th>editor</th>
			<th>file_gambar</th>
			<th>tgl_insert</th>
			<th>tgl_update</th>
			<th>stok</th>
			<th>stok_tersedia</th>

		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->idbuku }}</td>
			<td>{{ $b->isbn }}</td>
			<td>{{ $b->judul }}</td>
			<td>{{ $b->idkategori }}</td>
                        <td>{{ $b->pengarang }}</td>
			<td>{{ $b->penerbit }}</td>
			<td>{{ $b->kota_terbit }}</td>
			<td>{{ $b->editor }}</td>
			<td>{{ $b->file_gambar }}</td>
			<td>{{ $b->tgl_insert }}</td>
			<td>{{ $b->tgl_update }}</td>
			<td>{{ $b->stok }}</td>
                        <td>{{ $b->stok_tersedia }}</td>


			<td>
				<a href="/buku/edit/{{ $b->idbuku }}">Edit</a>
				|
				<a href="/buku/hapus/{{ $b->idbuku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
@endsection
