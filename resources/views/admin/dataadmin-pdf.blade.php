<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Admin</h1>

<table id="customers">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">No Telpon</th>
    <th scope="col">Email</th>
  </tr>

  @php
      $no=1;
  @endphp

  @foreach ($data as $admin)
  <tr>
    <th>{{ $no++ }}</th>
    <td>{{ $admin->nama }}</td>
    <td>{{ $admin->jeniskelamin }}</td>
    <td>0{{ $admin->notelpon }}</td>
    <td>{{ $admin->email }}</td>
  </tr>
  @endforeach

</table>

</body>
</html>


