<form action="{{ url('buku/' . $buku->id) }}" method="post">
    @csrf
    <input type="hidden" nama="_method" value="patch">
    Tahun : <input type="text" name="tahun" value= "{{ $buku->tahun }}" >
    Nama Penerbit : <input type="text" name="nama_penerbit" value= "{{ $buku->tahun }}">
    <button type="submit">Simpan</button>
</form>