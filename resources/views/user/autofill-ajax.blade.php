@php
    $id_paket = $_GET['id_paket'];
    $sql = mysqli_query($koneksi, "select * from mahasiswa where id_paket='$id_paket'");
    $paket = mysqli_fetch_array($sql);

    $data = array(
        'id_paket' => $paket['id_paket'],
        'harga' => $paket['harga']
    );

echo json_encode($data);
@endphp
