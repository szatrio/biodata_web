<html>
<head>
	<title>List Penduduk</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container m-4">
    <h3 class="mb-4">List penduduk</h3>
 
	<a href="/people/add" class="btn btn-primary mb-4">Tambah Data Penduduk</a>

	<form action="/employee/search" method="GET">
		<input type="text" name="search" placeholder="Cari Penduduk" value="{{ old('search') }}">
		<input type="submit" value="CARI">
	</form>


	<br/>
		<table border="1">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="/">Edit</a>
					|
					<a href="/">Hapus</a>
				</td>
			</tr>
		</table>
    </div>
</body>
</html>