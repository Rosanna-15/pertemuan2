<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x:auto;">

        <a class="tambah" href="{{route( 'buku.create')}}">Tambah Data </a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($buku as $data)

                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->tahun}}</td>
                    <td>{{$data->nama_penerbit}}</td>
                    <td>
                        <a href="{{ url('buku/' . $data->id . "/edit") }} ">Edit </a>
|
                        <form action="{{ url('buku/' .$data->id) }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit"></button>
    
                        </form>
                    </td>
                </tr>

                @endforeach
        </tbody>
    </table>
</div>
</body>