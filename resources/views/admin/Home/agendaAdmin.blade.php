@extends('layouts/adminLayout')
@section('title', 'Agenda')

@section('content')

<script type="text/javascript">
    document.getElementById('home').classList.add('active');
</script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agenda</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
    </div>


    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Agenda</h6>
        </div>

        <div class="d-sm-flex align-items-center m-3">
            <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#AgendaModal">+
                Add Agenda</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th> {{--Tolong buatkan script buat auto numbering--}}
                                <th>Nama Agenda</th>
                                <th>Deskripsi</th>
                                <th>Jam Agenda</th>
                                <th>Gambar</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="1%" align="center">1</td> {{--Tolong buatkan script buat auto numbering--}}
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>1</td>
                                <td>2</td>
                                <td align="center">
                                    <a href="#" data-toggle="modal" data-target="#editAgendaModal" style="font-size: 18pt; text-decoration: none;" class="mr-3">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#deleteAgendaModal" style="font-size: 18pt; text-decoration: none; color:red;">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End of Main Content -->


    <!-- Add Agenda Modal-->
    <div class="modal fade" id="AgendaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Agenda</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
                        @csrf


                        <label for="namaagenda">Nama agenda</label>
                        <input type="text" class="form-control" id="" name="">

                        <label for="deskripsi" class="mt-2">Deskripsi</label>
                        <textarea type="text" class="form-control" id="" name=""> </textarea>

                        <div class="form-group row mt-2" >
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="jamaagenda">Jam Mulai</label>
                                <input type="time" class="form-control" id="" name="">
                            </div>
                            <div class="col-sm-6">
                                <label for="jamaagenda">Jam Selesai</label>
                                <input type="time" class="form-control" id="" name="">
                            </div>
                        </div>

                        <label for="tanggalmulai" class="mt-2">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="" name="">


                        <label for="tanggalselesai" class="mt-2">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="" name="">

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

    <!-- Edit Agenda Modal-->
    <div class="modal fade" id="editAgendaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit agenda</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
                        @csrf

                        <label for="namaagenda">Nama agenda</label>
                        <input type="text" class="form-control" id="" name="">

                        <label for="deskripsi" class="mt-2">Deskripsi</label>
                        <textarea type="text" class="form-control" id="" name=""> </textarea>

                        <div class="form-group row mt-2" >
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="jamaagenda">Jam Mulai</label>
                                <input type="time" class="form-control" id="" name="">
                            </div>
                            <div class="col-sm-6">
                                <label for="jamaagenda">Jam Selesai</label>
                                <input type="time" class="form-control" id="" name="">
                            </div>
                        </div>

                        <label for="tanggalmulai" class="mt-2">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="" name="">


                        <label for="tanggalselesai" class="mt-2">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="" name="">

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

    <!-- Delete Agenda Modal-->
    <div class="modal fade" id="deleteAgendaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin menghapus agenda?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
