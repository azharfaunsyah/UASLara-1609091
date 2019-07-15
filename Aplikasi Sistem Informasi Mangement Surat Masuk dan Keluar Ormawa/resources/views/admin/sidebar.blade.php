<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        

        <div class="panel-body">
            <ul class="nav" role="tablist">
                
                @if (request()->user()->hak=='admin')
                <li role="presentation">
                    <a href="{{ url('/user') }}">Tambah Users/Admin</a>
                </li>
                @endif
                <li role="presentation">
                    <a href="{{ url('/surat') }}">Input Surat Masuk/Keluar</a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/surat/laporan') }}">Laporan Surat Masuk/Keluar</a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/disposisi') }}">Disposisi</a>
                </li>
            </ul>
        </div>
    </div>
</div>
