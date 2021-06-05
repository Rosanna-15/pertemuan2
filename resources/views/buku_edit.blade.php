<form action="{{ url('buku/' . $buku->id) }}" method="post">
    <input type="hidden" nama="_method" value="patch">
    Tahun : <input type="text" name="tahun" value="{{ $buku->tahun }}">
    Nama Penerbit : <input type="text" name="nama_penerbit" value="{{ $buku->nama_penerbit }}">
    <button type="submit">Simpan</button>
</form>