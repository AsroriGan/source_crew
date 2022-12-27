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
                    <li class="breadcrumb-item active"><a href="/datarekap">Rekap</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form>
                                <div class="form-group">
                                    <select class="form-control default-select" id="sel1">
                                        <option>Bulan</option>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                    </select>
                                </div>

                            </form>
                            <a data-bs-toggle="modal" style="margin-right: 695px; margin-top: 14px;"
                                data-bs-target="#importexcel" class="btn btn-outline-success btn-sm mb-3">Import Excel
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari/Tanggal</th>
                                            <th>Nisn</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Senin/24 maret 2022</td>
                                            <td>87483279</td>
                                            <td>Edinburgh</td>
                                            <td>XII RPL 2</td>
                                            <td>L</td>
                                            <td><a href="/detailrekap"><span class="badge badge-success">Detail</span></a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Rabu/31 Februari 2022</td>
                                            <td>87483279</td>
                                            <td>Edinburgh</td>
                                            <td>XII RPL 2</td>
                                            <td>L</td>
                                            <td><a href="#"><span class="badge badge-success">Detail</span></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
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
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a>
                2021</p>
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
