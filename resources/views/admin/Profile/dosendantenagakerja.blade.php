@extends('layouts/adminLayout')
@section('title', 'Profile')

@section('content')

<script type="text/javascript">
  document.getElementById('profile').classList.add('active');
</script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dosen</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>

          
          

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Dosen</h6>
            </div>

            <div class="d-sm-flex align-items-center m-3">
                <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#dosenModal">+ Add Dosen</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Dosen</th>
                      <th>Bidang Keahlian</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Dosen</th>
                      <th>Bidang Keahlian</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#editdosenModal" class="badge badge-success">Edit</a>
                        <a href="#" data-toggle="modal" data-target="#deletedosenModal" class="badge badge-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tenaga Kerja</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>

          
          

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Tenaga Kerja</h6>
            </div>

            <div class="d-sm-flex align-items-center m-3">
                <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#tenagaModal">+ Add Tenaga Kerja</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Tenaga Kerja</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Jabatan</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Tenaga Kerja</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Jabatan</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#edittenagaModal" class="badge badge-success">Edit</a>
                        <a href="#" data-toggle="modal" data-target="#deletetenagaModal" class="badge badge-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>

       
      <!-- End of Main Content -->


      <!-- Add Dosen Modal-->
      <div class="modal fade" id="dosenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">


            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
            @csrf

                    <label for="namadosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="" name="">

                    <div class="form-group">
                    <label for="bk">Bidang Keahlian</label>
                      <select class="form-control" id="" name="">
                          <option value="" hidden> -- Pilih Bidang Keahlian -- </option>
    
                              <option value=""></option>
                      </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="file">Gambar</label>
                        <input input id="file-upload" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                    </div>

            </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="#">Submit</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Edit Dosen Modal-->
      <div class="modal fade" id="editdosenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit dosen</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">


            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
            @csrf

                    <label for="namadosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="" name="">

                    <div class="form-group">
                    <label for="bk">Bidang Keahlian</label>
                      <select class="form-control" id="" name="">
                          <option value="" hidden> -- Pilih Bidang Keahlian -- </option>
    
                              <option value=""></option>
                      </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="file">Gambar</label>
                        <input input id="file-upload" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                    </div>
                    
            </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="#">Submit</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Dosen Modal-->
      <div class="modal fade" id="deletedosenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>
      






























            <!-- Add Tenaga Kerja Modal-->
            <div class="modal fade" id="tenagaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tenaga Kerja</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">


                    <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
                    @csrf

                            <label for="namatenaga">Nama Tenaga Kerja</label>
                            <input type="text" class="form-control" id="" name="">

                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="" name="">

                            <label for="Telepon">Telepon</label>
                            <input type="text" class="form-control" id="" name="">

                            <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control" id="" name="">
                                <option value="" hidden> -- Pilih Jabatan -- </option>
            
                                    <option value=""></option>
                            </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file">Gambar</label>
                                <input input id="file-upload" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                            </div>

                    </form>

                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Submit</a>
                    </div>
                </div>
                </div>
            </div>


            <!-- Edit Tenaga Kerja Modal-->
            <div class="modal fade" id="edittenagaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tenaga Kerja</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">


                    <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
                    @csrf

                    <label for="namatenaga">Nama Tenaga Kerja</label>
                            <input type="text" class="form-control" id="" name="">

                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="" name="">

                            <label for="Telepon">Telepon</label>
                            <input type="text" class="form-control" id="" name="">

                            <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control" id="" name="">
                                <option value="" hidden> -- Pilih Jabatan -- </option>
            
                                    <option value=""></option>
                            </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file">Gambar</label>
                                <input input id="file-upload" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                            </div>

                            
                    </form>

                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Submit</a>
                    </div>
                </div>
                </div>
            </div>

            <!-- Delete Tenaga Kerja Modal-->
            <div class="modal fade" id="deletetenagaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="#">Delete</a>
                    </div>
                </div>
                </div>
            </div>





      @endsection