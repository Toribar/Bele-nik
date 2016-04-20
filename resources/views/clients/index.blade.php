@extends('layouts.master')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-md-1 text-center">Redni Broj</th>
                <th class="col-md-2 text-center">Datum</th>
                <th class="col-md-5 text-center">Podaci o stranci</th>
                <th class="col-md-4 text-center">Sluzbena knjiga u koju je stranka upisana</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td class="text-center">{{ $client->serial }}</td>
                    <td class="text-center">{{ $client->created_on->format('d.m.Y') }}</td>
                    <td class="text-center">{{ $client->info }}</td>
                    <td class="text-center">{{ $client->public_book }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">{!! $clients->render() !!}</div>

    <br>
    <hr>
    <br>
    <a class="col-md-6 col-md-offset-3 btn btn-primary" href="{{ route('clients.create') }}">Dodaj stranku</a>
@stop
