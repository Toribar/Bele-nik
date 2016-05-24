@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 style="display: inline;">Izmeni stranku</h4>
                    <button class="btn btn-xs pull-right" style="background-color: #00E676; color:
                    #004D40" id="scanner">Skeniraj podatke</button>
                </div>

                <div class="panel-body">
                    {{ Form::model($client, ['url' => route('clients.update', $client->id), 'method' => 'put', 'class' => 'form-horizontal']) }}
                        @include('clients.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop
