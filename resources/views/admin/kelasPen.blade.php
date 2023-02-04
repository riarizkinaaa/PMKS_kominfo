@extends('layout.template')
@section('content')
@include('partials.navbar')
    <!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Data Anak Yatim Piatu</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        {{-- modal-start --}}
                        <div class="card-body btn-showcase">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat" data-whatever="@mdo"><i class="icofont icofont-ui-add"></i>&ensp; Tambah</button>
                            <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">kelas pendidikan</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('kelasPen.store') }}" method="post">
                                        @csrf
                                      <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">kelas pendidikan</label>
                                        <input class="form-control" name="kelas_pendidikan" type="text" value="">
                                      </div>
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                      <button class="btn btn-primary" type="button">Kirim</button>
                                    </div>
                                    </form>
                                </div>
                              </div>
                            </div> 
                            </div>
                          </div>
                          {{-- end-modal --}}
                        <!-- Container-fluid starts-->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Kelas</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no=1;
                                                    @endphp
                                                    @foreach ($kelas as $kls)
                                                        
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $kls->kelas_pendidikan }}</td>
                                                        <td>
                                                            <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                            </svg>delete</button>
                                                            <button type="submit"class="btn btn-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                  </svg>
                                                                
                                                                Edit</button>
                                                            {{-- <button type="submit"class="btn btn-warning">DETAIL</button> --}}
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
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection