@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row mb-5">
          <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Siswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">32 biji</div>
                                        </div>
                                        <div class="col-auto">
                                         <i class="fas fa-user-graduate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah hadir hari ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0 biji</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-user-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tidak hadir hari ini
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">32 biji</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fas fa-user-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                 kehadiran dalam satu minggu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0%</div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


    </div>
    <div class="container">
   <div class="row">
<!-- table -->
<div class="col-xl-8 float-right ">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white border-0">
            <h6 class="m-0 font-weight-bold text-primary">Siswa Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" cellspacing="0" id="dataTable">
        <thead>
                    <th>#</th>
                   <th>nis</th>
                   <th>Nama</th>
                   <th>Jenis Kelamin</th>
                   <th>keterangan</th>

                </thead>

               <tbody>
                   @foreach($siswa as $s)
                   <tr>
                    <td>#</td>
                       <td>{{$s->nis}}</td>
                       <td>{{$s->nama}}</td>
                       <td>{{$s->jenis_kelamin}}</td>
                       <td>{{$s->jurusan->name}}</td>

                   </tr>

                   @endforeach
               </tbody>


            </table>
                            </div>
            <div class=" border-0 float-right bg-white m-0 mt-2">  {{$siswa->links()}}</div>
                        </div>
        </div>
    </div>


       <!-- chart pie -->


            <div class="col-xl-4 col-lg-5 float-right">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 bg-white border-0">
                        <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie ">
                            <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-center text-center">
                                    <div class="col-sm-4">  <div class="btn btn-primary"></div><p>Masuk</p> <div class="card border-1">27</div></div>
                                    <div class="col-sm-4">  <div class="btn btn-info"></div><p>Izin</p><div class="card border-1">3</div></div>
                                    <div class="col-sm-4">  <div class="btn btn-danger"></div><p>Alpha</p><div class="card border-1">1</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                        </div>
                        <!-- end pie chart -->
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
@endsection
