@extends('mahasiswa.home')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h1 class="page-title">Data Pribadi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        {{-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> --}}
                                        <a href="#" class="btn-sm btn-success float-right "><i
                                                class="fa fa-edit"></i></a>
                                        <h6 class="m-b-30">Profil</h6>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <img class="img-responsive" alt="image"
                                style="max-height: 256px; xmin-width: 256px; margin: 10px auto; display: block; "
                                src="{{ url('public') }}/assets/images/index.jpeg">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="200px">NIM/NPM</td>
                                            <td width="10px">:</td>
                                            <td>Muhammad Danendra Andana</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>:</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        {{-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> --}}
                                        <a href="#" class="btn-sm btn-success float-right "><i
                                                class="fa fa-edit"></i></a>
                                        <h6 class="m-b-30">Data Kependudukan</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="200px">NIM/NPM</td>
                                            <td width="10px">:</td>
                                            <td>Muhammad Danendra Andana</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>:</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-7">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        {{-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> --}}
                                        <a href="#" class="btn-sm btn-success float-right "><i
                                                class="fa fa-edit"></i></a>
                                        <h6 class="m-b-30">Alamat dan Kontak</h6>
                                    </div>

                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        {{-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> --}}
                                        <a href="#" class="btn-sm btn-success float-right "><i
                                                class="fa fa-edit"></i></a>
                                        <h6 class="m-b-30">Alamat dan Kontak</h6>
                                    </div>
                                    {{-- <hr> --}}
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        {{-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> --}}
                                        <a href="#" class="btn-sm btn-success float-right "><i
                                                class="fa fa-edit"></i></a>
                                        <h6 class="m-b-30">Alamat dan Kontak</h6>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->

    </div>
@endsection
