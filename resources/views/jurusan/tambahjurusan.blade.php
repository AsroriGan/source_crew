
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
                        <li class="breadcrumb-item active"><a href="/jurusan">Data Jurusan</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Data Jurusan</h4>
                            </div>
                            <div class="card-body">
                                 <div class="basic-form">
                                    <form action="/tambahjurusanpost" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label col-form-label-lg">Kelas</label>
                                            <div class="col-sm-10">
                                               <select class="form-control @error('kelas') is-invalid @enderror" name="kelas" aria-label="Default select example" >
                                                <option value="" disabled selected>Pilih kelas </option>
                                                @foreach ($idkelas as $kelas)
                                                    <option value="{{ $kelas->id }}">
                                                        {{ $kelas->kelas }}</option>
                                                @endforeach
                                                </select>
                                            @error('kelas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label col-form-label-lg">Jurusan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="jurusan" class="form-control form-control-lg">
                                            </div>
                                        </div>    
                                        
                                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <!--**********************************
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