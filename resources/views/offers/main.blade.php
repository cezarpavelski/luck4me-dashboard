@extends('main')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-ticket"></i>
                        </div>
                        <div class="header-title">
                            <h3>Ofertas</h3>
                            <small>
                                Fidelize seus clientes, crie uma nova oferta.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <a href="#"
                    class="btn btn-w-md btn-accent pull-right"
                    data-toggle="modal"
                    data-target="#new-offer-modal">
                        Novo +
                    </a>
                </div>
                @include('offers.modals.new-offer')
                <br/>
                <br/>
                <br/>
                <div class="col-xs-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow:hidden">
                                <table id="offers" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th>Desconto</th>
                                        <th>Tipo</th>
                                        <th>Data de Início</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#offers').DataTable({
                dom: "<'row'<'col-sm-6'l><'col-sm-6 text-right'B>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            });
        });
    </script>
@endpush
