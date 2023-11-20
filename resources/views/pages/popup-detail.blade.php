<!-- Template CSS File -->
<link href="{{ asset('assets/css/popup.css') }}" rel="stylesheet">

<div class="popup_content">
    <div class="popup_title">
        <p>{{ $wisata->nama }}</p>
    </div>
    <div class="popup_desc">
        <ul>
            <li>Harga : Rp {{ number_format($wisata->harga, 0, ',', '.') }}</li>
            <li>Semarang, Jawa Tengah</li>
        </ul>
        @if($wisata->sosmed)
            <a href="{{ $wisata->sosmed }}" target="_blank" class="more_info"><i class="bi bi-link"></i> Kunjungi</a>
        @endif
    </div>
</div>