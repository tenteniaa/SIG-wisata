<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>
        .popup_content {
            background: #ffffff;
            color: #333333;
            padding: 3px;
            border-radius: 5px;
        }

        .popup_title {
            border-bottom: 2px solid #E6E9ED;
            padding: 5px 0;
            padding-bottom: 5px;
            margin-bottom: 10px; 
            text-align: center;
        }

        .popup_title p {
            font-size: 12px;
            font-weight: bold;
        }

        .popup_desc {
            font-size: 10px;
        }

        .more_info {
            display: block;
            width: 100%;
            border-radius: 3px;
            border: 1px solid #3498db;
            padding: 3px 10px;
            cursor: pointer;
        }

        .more_info {
            color: #3498db;
            background: #fff;
            text-align: center;
        }

        .more_info:hover {
            color: #fff;
            background: #3498db;
        }

        .leaflet-popup .leaflet-popup-close-button {
            margin-right: 7px;
            margin-right: 3px;
        }
    </style>
</head>
<body>
    <div class="popup_content">
        <div class="popup_title">
            <p>{{ $wisata->nama }}</p>
        </div>
        <div class="popup_desc">
            <ul>
                <li>Harga : Rp {{ number_format($wisata->harga, 0, ',', '.') }}</li>
                <li>{{ $wisata->region->nama_region }}, Jawa Tengah</li>
            </ul>
            @if(request()->is('/') || request()->is('dashboard'))
                <a href="{{ route('wisata.detail', $wisata->id) }}" class="more_info"><i class="bi bi-link"></i> More Info</a>
            @else
                {{-- @if($wisata->sosmed)
                    <a href="{{ $wisata->sosmed }}" target="_blank" class="more_info"><i class="bi bi-link"></i> Kunjungi</a>
                @endif --}}
                <a href="#" class="more_info" onclick="navigateToCurrentLocation()"><i class="bi bi-geo-alt"></i> Navigasi</a>
            @endif
        </div>
    </div>
</body>
</html>
