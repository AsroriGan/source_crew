 <div class="modal fade" id="edit{{$row->id}}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>

                                                <form action="/editkelas/{{$row->id}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                            <div class="mb-3">
                                                                <div class="example">
                                                                    <center><p  class="mb-1">Kelas </p></center>
                                                                    <input class="form-control text-center" type="text" name="kelas" value="{{$row->kelas}}" >
                                                                
                                                                </div>
                                                            </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>