@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 style="display: inline;">Izmeni stranku</h4>
                    <button class="btn btn-xs pull-right" style="background-color: #00E676; color:
                    #004D40" id="scanner">Učitaj podatke</button>
                </div>

                <div class="panel-body">
                    {{ Form::model($client, ['url' => route('clients.update', $client->id), 'method' => 'put', 'class' => 'form-horizontal']) }}
                        @include('clients.form')
                    {{ Form::close() }}
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4">Obriši stranku</h4>
                </div>

                <div class="panel-body">
                    {{ Form::open(['url' => route('clients.destroy', $client->id), 'method' => 'delete', 'class' => 'form-horizontal']) }}
                        <div class="col-md-6 col-md-offset-3">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-danger btn-block">Obriši</button>
                                </div>

                                <div class="col-xs-6">
                                    <a href="{{ route('clients.index') }}" class="btn btn-default btn-block">Odustani</a>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop
