
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
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Event Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Event Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Description</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">Tambah</button>
                              
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Kelas</th>
                                                <th class="text-center">Aksi</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                            
                                                <td class="text-center">
                                                    <a href="/jurusans/{{$row->id}}"> {{$row->kelas}}</a></td>
                                                <td><center>
                                                        <button href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#edit{{$row->id}}"><i class="fa fa-pencil"></i></button>
                                                        <a href="#" 
                                                        class="btn btn-danger shadow btn-xs sharp delete"  data-id="{{ $row->id }}"
                                                                data-kategori="{{ $row->kelas }}"><i class="fa fa-trash"></i></a>
                                                     </center>   
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
        </div>

        @foreach ($data as $row)
            @include('kelas.modaleditkelas')
        @endforeach
        @include('kelas.modaltambahkelas')
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
   <!-- alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
     $('.delete').click(function() {
                        var mahasiswaid = $(this).attr('data-id');
                        var kategori = $(this).attr('data-kategori');
                        swal({
                                title: "YAKIN?",
                                text: "Akan Menghapus Data Kelas " + kategori + " ",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    window.location = "/hapuskelas/" + mahasiswaid + ""
                                    swal("Data Ini Berhasil Dihapus!", {
                                        icon: "success",
                                    });
                                } else {
                                    swal("Data Ini Tidak Jadi Dihapus!");
                                }
                            });
                  });

       const btnDetail = (e) => {
                        const data_id = e.getAttribute('data-id')
                        $.ajax({
                            url: "/detailmapel/" + data_id,
                            method: "GET",
                            success: function(datas) {
                                // console.log()
                                console.log("datanya adalah ", datas.datas)
                                let td = ''

                                datas.datas.forEach(val => {
                                    td += `
                        <div>
                            <td>${val.namabuku}</td>
                            <td>${val.kodebuku}</td>
                            <td>${val.jumlahlaporan}</td>
                        </div>
                        `
                                })

                                $('#tbody-cart').html(td)
                            }
                        })
                    }

        </script> 
</body>
</html>