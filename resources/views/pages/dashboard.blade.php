@extends('admin.layout')
@section('main')

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row">
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-map-marker"></i> Jumlah Wisata</span>
              <div class="count green">{{ $jumlah_wisata }}</div>
              <span class="count_bottom"><i class="green">Wisata </i> Semarang</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-location-arrow"></i> Jumlah Kecamatan</span>
              <div class="count">{{ $jumlah_kecamatan_kota }}</div>
              <span class="count_bottom"><i class="green">Kota </i> Semarang</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-location-arrow"></i> Jumlah Kecamatan</span>
              <div class="count">{{ $jumlah_kecamatan_kab }}</div>
              <span class="count_bottom"><i class="green">Kabupaten </i> Semarang</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Jumlah Admin</span>
              <div class="count green">{{ $jumlah_user }}</div>
              <span class="count_bottom"><i class="green">Admin </i> Sistem</span>
            </div>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-12">
                  <h3>Destinasi Wisata <small>Kota Semarang dan Kabupaten Semarang</small></h3>
                </div>
              </div>

              <div class="col-md-9 col-sm-9">
                <div id="map" class="demo-placeholder"></div>
              </div>

              <div class="col-md-3 col-sm-3 bg-white">
                <div class="x_title layers">
                  <h2 style="color: #fff;"><i class="fa fa-sliders"></i> Layers</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 legend-filter">
                  <h4 class="filter-title">Region</h4>
                  <ul class="legend-list">
                    <li>
                        <div class="color-name"><span class="color-code stairs"></span>
                          <p class="legend-name">Kabupaten Semarang</p>
                        </div>
                        <div class="filter-check"><input type="checkbox" id="checkbox_region_1"></div>
                    </li>
                    <li>
                        <div class="color-name"><span class="color-code generic-models"></span>
                          <p class="legend-name">Kota Semarang</p>
                        </div>
                        <div class="filter-check"><input type="checkbox" id="checkbox_region_2"></div>
                    </li>
                  </ul>
                </div>

                <div class="col-md-12 col-sm-12 legend-filter">
                  <h4 class="filter-title">Kategori</h4>
                  <ul class="legend-list">
                    <li>
                        <div class="color-name">
                            <span class="color-code air-terminals"></span>
                            <p class="legend-name">Alam</p>
                        </div>
                        <div class="filter-check"><input type="checkbox" id="checkbox_jenis_1"></div>
                    </li>
                    <li>
                        <div class="color-name">
                            <span class="color-code plumbing-fixtures"></span>
                            <p class="legend-name">Sejarah/Budaya</p>
                        </div>
                        <div class="filter-check"><input type="checkbox" id="checkbox_jenis_2"></div>
                    </li>
                    <li>
                        <div class="color-name">
                            <span class="color-code roofs"></span>
                            <p class="legend-name">Hiburan</p>
                        </div>
                        <div class="filter-check"><input type="checkbox" id="checkbox_jenis_3"></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="clearfix"></div>
            </div>
          </div>

        </div>
        <br />

        <div class="row">
          <div class="col-md-6 col-sm-6  ">
            <div class="x_panel fixed_height_350">
              <div class="x_title">
                <h2>Wisata by Region</h2>
                <div class="nav navbar-right panel_toolbox">
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4>Jumlah Wisata berdasarkan Region</h4>
                <div id="wisata_region" style="height:250px;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 ">
            <div class="x_panel tile fixed_height_350 overflow_hidden">
              <div class="x_title">
                <h2>Kategori Wisata</h2>
                <div class="nav navbar-right panel_toolbox">
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4>Jumlah Wisata berdasarkan Kategori</h4>
                <div id="wisata_kategori" style="height:250px;"></div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-8 col-sm-8 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar Administrator <small>Sessions</small></h2>
                <div class="nav navbar-right panel_toolbox">
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="dashboard-widget-content">
                  <div class="table-responsive">
                    <table class="table no-wrap mb-0">
                        <thead>
                            <tr>
                                <th class="table-head text-muted">Nama</th>
                                <th class="table-head text-muted">Role</th>
                                <th class="table-head text-muted popover-icon">Team</th>
                                <th class="table-head text-muted">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $item)
                          <tr>
                              <td class="border-right py-4">
                                <div class="d-flex no-block align-items-center">
                                    <div style="margin-right: 10px;"><img src="{{ asset('assets/images/dashboard/user.png') }}"
                                          alt="user" class="rounded-circle" width="45"
                                          height="45" />
                                    </div>
                                    <div class="">
                                        <h5 class="table-name mb-0">{{ $item->name }}</h5>
                                        <span class="table-email text-muted">{{ $item->email }}</span>
                                    </div>
                                </div>
                              </td>
                              <td class="border-right text-muted py-4" style="font-size: 14px">Admin</td>
                              <td class="border-right pl-4 py-4 popover-icon">
                                  <a class="btn btn-primary rounded-circle btn-circle font-12 popover-item"
                                      href="javascript:void(0)">DS</a>
                                  <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                      href="javascript:void(0)">SS</a>
                                  <a class="btn btn-warning rounded-circle btn-circle font-12 popover-item"
                                      href="javascript:void(0)">RP</a>
                              </td>
                              <td class="status text-center py-4">
                                <div class="button-wrap">
                                  <div class="button-bg">
                                    <div class="button-switch"></div>
                                  </div>
                                </div>
                              </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </div>
                  {{-- <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $item)
                            <tr>
                                <td class="table-col">{{ $item->name }}</td>
                                <td class="table-col"></td>
                                <td class="table-col"></td>
                                {{-- <td>
                                  <a href="{{route('wisata.detail', $item->id)}}" class="btn btn-rounded btn-primary"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <!-- start of weather widget -->
          <div class="col-md-4 col-sm-4 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Cuaca Harian <small>Sessions</small></h2>
                <div class="nav navbar-right panel_toolbox">
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="temperature"><b>Monday</b>, 07:30 AM</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="weather-icon">
                      <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="weather-text">
                      <h2>Semarang <br><i>Partly Cloudy Day</i></h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="weather-text pull-right">
                    <h3 class="degrees">23</h3>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="row weather-days">
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Mon</h2>
                      <h3 class="degrees">25</h3>
                      <canvas id="clear-day" width="32" height="32"></canvas>
                      <h5>15 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Tue</h2>
                      <h3 class="degrees">25</h3>
                      <canvas height="32" width="32" id="rain"></canvas>
                      <h5>12 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Wed</h2>
                      <h3 class="degrees">27</h3>
                      <canvas height="32" width="32" id="snow"></canvas>
                      <h5>14 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Thu</h2>
                      <h3 class="degrees">28</h3>
                      <canvas height="32" width="32" id="sleet"></canvas>
                      <h5>15 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Fri</h2>
                      <h3 class="degrees">28</h3>
                      <canvas height="32" width="32" id="wind"></canvas>
                      <h5>11 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Sat</h2>
                      <h3 class="degrees">26</h3>
                      <canvas height="32" width="32" id="cloudy"></canvas>
                      <h5>10 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of weather widget -->
        </div>
    </div>
    <!-- /page content -->

@endsection

@push('scripts')
<script>
  function initializeMap() {
      var map = L.map('map').setView([-7.08777, 110.36230], 10);
    
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '© OpenStreetMap'
      }).addTo(map);
  
      var filteredMarkers = [];
      var polygon;
  
      function clearFilteredMarkers() {
          // Hapus semua marker yang ada di filteredMarkers
          filteredMarkers.forEach(function (marker) {
              map.removeLayer(marker);
          });
  
          // Kosongkan array filteredMarkers
          filteredMarkers = [];
      }
  
      function toggleMarkers() {
           // Hapus polygon jika sudah ada sebelumnya
          if (polygon) {
              map.removeLayer(polygon);
          }
      
          clearFilteredMarkers();
  
          var filteredLatLngs = [];
  
          if (
              !document.getElementById('checkbox_jenis_1').checked &&
              !document.getElementById('checkbox_jenis_2').checked &&
              !document.getElementById('checkbox_jenis_3').checked &&
              !document.getElementById('checkbox_region_1').checked &&
              !document.getElementById('checkbox_region_2').checked
          ) {
              // Jika tidak ada filter yang aktif, tampilkan semua marker
              @foreach($wisata as $item)
                  var popupContent = @json(view('pages.popup', ['wisata' => $item])->render());
                  var marker = L.marker([{{ $item->latitude }}, {{ $item->longitude }}])
                      .addTo(map)
                      .bindPopup(popupContent);
                  filteredMarkers.push(marker);
              @endforeach
  
          } else {
              // Jika ada filter yang aktif, terapkan filter dan tampilkan marker sesuai kondisi
              @foreach($wisata as $item)
                  var showMarker = true;
  
                  // Jenis
                  var jenis1Checked = document.getElementById('checkbox_jenis_1').checked;
                  var jenis2Checked = document.getElementById('checkbox_jenis_2').checked;
                  var jenis3Checked = document.getElementById('checkbox_jenis_3').checked;
                  // Region
                  var region1Checked = document.getElementById('checkbox_region_1').checked;
                  var region2Checked = document.getElementById('checkbox_region_2').checked;
  
                  // Cek apakah jenis sesuai
                  var jenisSesuai = false;
  
                  @foreach($alam as $jenis)
                      if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis1Checked) {
                          jenisSesuai = true;
                          fillColor = '#e58c8c';
                          borderColor = '#e58c8c';
                      }
                  @endforeach
  
                  @foreach($sejarah as $jenis)
                      if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis2Checked) {
                          jenisSesuai = true;
                          fillColor = '#936e6e';
                          borderColor = '#936e6e';
                      }
                  @endforeach
                  
                  @foreach($hiburan as $jenis)
                      if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis3Checked) {
                          jenisSesuai = true;
                          fillColor = '#cdd13c';
                          borderColor = '#cdd13c';
                      }
                  @endforeach
                  
                  // Cek apakah region sesuai
                  var regionSesuai = false;
                  
                  if ({{ $item->id_region }} == 1 && region1Checked) {
                      regionSesuai = true;
                      fillColor = '#3bb6f8';
                      borderColor = '#3bb6f8';
                  }
  
                  if ({{ $item->id_region }} == 2 && region2Checked) {
                      regionSesuai = true;
                      fillColor = '#1e5e81';
                      borderColor = '#1e5e81';
                  }
              
                  // Tambahkan marker sesuai kondisi
                  if (
                      (jenis1Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                      (jenis2Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                      (jenis3Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                      (region1Checked && regionSesuai && !jenis1Checked && !jenis2Checked && !jenis3Checked) ||
                      (region2Checked && regionSesuai && !jenis1Checked && !jenis2Checked && !jenis3Checked) ||
                      (region1Checked && jenis1Checked && jenisSesuai && regionSesuai) ||
                      (region1Checked && jenis2Checked && jenisSesuai && regionSesuai) ||
                      (region1Checked && jenis3Checked && jenisSesuai && regionSesuai) ||
                      (region2Checked && jenis1Checked && jenisSesuai && regionSesuai) ||
                      (region2Checked && jenis2Checked && jenisSesuai && regionSesuai) ||
                      (region2Checked && jenis3Checked && jenisSesuai && regionSesuai)
                  ) {
                      var latlng = [{{ $item->latitude }}, {{ $item->longitude }}];
                      var popupContent = @json(view('pages.popup', ['wisata' => $item])->render());
                      
                      var marker = L.marker(latlng)
                          .addTo(map)
                          .bindPopup(popupContent);
                      filteredMarkers.push(marker);
                      filteredLatLngs.push(latlng);
                  }
  
              @endforeach
  
              // Polygon
              if (filteredLatLngs.length > 0) {
                  polygon = L.polygon(filteredLatLngs, { fillColor: fillColor, color: borderColor }).addTo(map);
                  // map.fitBounds(polygon.getBounds());
              }
  
          }
      }
  
      document.getElementById('checkbox_jenis_1').addEventListener('change', toggleMarkers);
      document.getElementById('checkbox_jenis_2').addEventListener('change', toggleMarkers);
      document.getElementById('checkbox_jenis_3').addEventListener('change', toggleMarkers);
      document.getElementById('checkbox_region_1').addEventListener('change', toggleMarkers);
      document.getElementById('checkbox_region_2').addEventListener('change', toggleMarkers);
  
      toggleMarkers();
  
      map.addControl(new L.Control.Fullscreen());
  }
  
  document.addEventListener('DOMContentLoaded', initializeMap);
</script>

<script>
  var echartBar = echarts.init(document.getElementById('wisata_region'));
  echartBar.setOption({
      // title: {
      //     text: 'Graph title',
      //     subtext: 'Graph Sub-text'
      // },
      tooltip: {
          trigger: 'axis'
      },
      legend: {
          data: ['Kabupaten Semarang', 'Kota Semarang'],
          orient: 'horizontal',
          bottom: 10,
      },
      toolbox: {
          show: true,
          feature: {
              restore: {
                  show: true,
                  title: "Restore"
              },
              saveAsImage: {
                  show: true,
                  title: "Save Image"
              }
          }
      },
      calculable: false,
      xAxis: {
        type: 'category',
        data: [],
      },
      yAxis: [{
          type: 'value',
          name: 'Jumlah Wisata',
          min: 0,
          position: 'left',
          axisLabel: {
              formatter: '{value}',
          },
      }],
      color: ['#26B99A', '#374A5E'],
      series: [
          {
              name: 'Kabupaten Semarang',
              type: 'bar',
              barWidth: 30,
              data: [{{ $jumlah_wisata_kab }}],
              markPoint: {
                data: [
                  {
                      // name: 'Kabupaten Semarang',
                      value: {{ $jumlah_wisata_kab }},
                      xAxis: 0,
                      yAxis: {{ $jumlah_wisata_kab }},
                  },
                ],
              },
          },
          {
              name: 'Kota Semarang',
              type: 'bar',
              barWidth: 30,
              data: [{{ $jumlah_wisata_kota }}],
              markPoint: {
                data: [
                  {
                      // name: 'Kota Semarang',
                      value: {{ $jumlah_wisata_kota }},
                      xAxis: 0,
                      yAxis: {{ $jumlah_wisata_kota }},
                  },
                ],
              },
          },
      ]
  });

  var echartDonut = echarts.init(document.getElementById('wisata_kategori'));
  echartDonut.setOption({
      color: ['#26B99A', '#374A5E', '#479BDB'],
      tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      calculable: true,
      legend: {
          x: 'center',
          y: 'bottom',
          data: ['Alam', 'Sejarah/Budaya', 'Hiburan']
      },
      toolbox: {
          show: true,
          feature: {
              magicType: {
                  show: true,
                  type: ['pie', 'funnel'],
                  option: {
                      funnel: {
                          x: '25%',
                          width: '50%',
                          funnelAlign: 'center',
                          max: 1548
                      }
                  }
              },
              restore: {
                  show: true,
                  title: "Restore"
              },
              saveAsImage: {
                  show: true,
                  title: "Save Image"
              }
          }
      },
      series: [{
          name: 'Kategori',
          type: 'pie',
          radius: ['35%', '55%'],
          itemStyle: {
              normal: {
                  label: {
                      show: true
                  },
                  labelLine: {
                      show: true
                  }
              },
              emphasis: {
                  label: {
                      show: true,
                      position: 'center',
                      textStyle: {
                          fontSize: '14',
                          fontWeight: 'normal'
                      }
                  }
              }
          },
          data: [
            { value: {{ $wisata_alam }}, name: 'Alam' },
            { value: {{ $wisata_sejarah }}, name: 'Sejarah/Budaya' },
            { value: {{ $wisata_hiburan }}, name: 'Hiburan' }
          ]
      }]
  });
</script>
@endpush