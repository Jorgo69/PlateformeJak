@extends('Layouts.admin_header')

@section('admin')

{{-- Table Different Color --}}

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4> Tous les Cours </h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Tous les Cours </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            
            <!-- Responsive tables Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Responsive table</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem perferendis, impedit, excepturi totam placeat facere deleniti alias beatae quis eos error inventore ea omnis illum qui blanditiis, <code> natus </code> architecto! Atque.</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Tag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><span class="badge badge-primary">Primary</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><span class="badge badge-secondary">Secondary</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><span class="badge badge-success">Success</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><span class="badge badge-secondary">Secondary</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><span class="badge badge-success">Success</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Responsive tables End -->

            
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            &copy; All Right Reserve Jak Investisseur 
        </div>
    </div>
</div>





{{-- End Table --}}


@endsection