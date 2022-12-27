
<!DOCTYPE html>
<html lang="en">

@include('layout.head')
<link href="../../asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="../../asset/css/style.css" rel="stylesheet">
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
                        <li class="breadcrumb-item active"><a href="/jurusan">Data Jurusan</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                               <h4> Data Jurusan </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>jurusan</th>
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
                                                <td>{{$row->kelas}}</td>
                                                <td>{{$row->jurusan}}</td>
                                                <td>   </td>
                                                
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
<script src="../asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../asset/js/plugins-init/datatables.init.js"></script>
</body>
</html>