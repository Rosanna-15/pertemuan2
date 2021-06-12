<form action="{{ route ('buku.store') }}" method="post">
    @csrf 
    Tahun : <input type="text" nama="tahun">
    Nama Penerbit : <input type="text" nama="nama_penerbit">
    <button type="submit">Simpan</button>
</form>