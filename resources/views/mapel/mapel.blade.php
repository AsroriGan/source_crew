
<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

    @include('layout.navbar')

    @include('layout.sidebar')

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" style="cursor: pointer;">Data</a></li>
						<li class="breadcrumb-item active"><a href="/mapel">Data Mapel</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="/tambahmapel"
                                class="btn btn-outline-info btn-sm mb-1">Tambah Data Mapel</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Mapel</th>
                                                <th>Aksi</th>
                                               
                                            </tr>
                                        </thead>
                                        @php
                                                $no = 1;
                                            @endphp
                                        <tbody>
                                            @foreach ($data as $row)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$row->idkelass->kelas}}</td>
                                                <td>{{$row->idjurusan->jurusan}}</td>
                                                <td>{{$row->mapel}}
                                                <td>   <a href="editmapel/{{$row->id}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            @endforeach 
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   @include('layout.script')

</body>
</html>