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
                            <h3>Validar Voucher</h3>
                            <small>
                                Valide aqui o voucher do seu cliente, um cliente feliz é um cliente satisfeito.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <form action="/profile" method="get">
                            <div class="panel-body">
                                <h3>Voucher </h3>
                                <p>
                                    Insira o voucher no campo abaixo.
                                </p>
                                <div class="form-group">
                                    <input class="form-control input-lg text-center text-uppercase" name="voucher" placeholder="#EEEEEEE">
                                </div>

                                <h3>Valor </h3>
                                <p>
                                    Insira o valor total gasto pelo cliente abaixo.
                                </p>
                                <div class="form-group">
                                    <input class="form-control input-lg text-center text-uppercase" name="amount" placeholder="R$ 0,00">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-accent btn-lg">Validar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
