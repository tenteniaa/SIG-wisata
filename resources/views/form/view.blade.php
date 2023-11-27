@extends('admin.layout')
@section('main')

<div class="right_col" role="main">   
  <div class="row content">
      <div class="col-md-12 col-sm-12">
          <div class="x_panel" data-aos="fade-up">
              <div class="x_title">
                <h2 style="font-size: 25px">Daftar Tempat Wisata</h2>
                <div style="float: right;">
                  <a class="btn btn-success" href="{{ route('wisata.create') }}"><i class="fa fa-pencil"></i> Data Baru</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="table-responsive">

                    @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                    @endif

                      <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                          <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>Jenis</th>
                                  <th>Harga</th>
                                  <th>Alamat</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($wisata as $item)
                              <tr>
                                  <td class="table-names">{{ $item->nama }}</td>
                                  <td class="table-act">
                                    @foreach($item->jenis_wisata as $me)
                                    {{ $me->jenis->nama_jenis }}@if (!$loop->last), @endif
                                    @endforeach
                                  </td>
                                  <td class="table-act">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                  <td class="table-names">{{ $item->alamat }}</td>                                    
                                  <td class="table-col">
                                    <a href="{{route('wisata.detail', $item->id)}}" class="btn btn-rounded btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('wisata.edit', $item->id)}}" class="btn btn-rounded btn-warning"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-rounded btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $item->id }}"><i class="fa fa-trash"></i></button>
                                  </td>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Modal Delete -->
@foreach ($wisata as $item)
<div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">Yakin ingin menghapus data wisata?</div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
              <form action="{{ route('wisata.destroy', $item->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary border-0">Ya</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endforeach

@endsection