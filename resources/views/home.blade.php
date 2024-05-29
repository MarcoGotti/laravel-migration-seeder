@extends('layouts.app')

@section('pageTitle'){{-- per la Home page lascio il titolo della Repo/Folder  --}}

@section('content')

    <section class="bg-white p-5">
        <div class="container">

            <table class="table table-danger">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Treno</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th>
                                {{-- @if ($train->azienda === null)
                                    <div class="text-secondary">n/a</div>
                                @else
                                    {{ $train->azienda }}
                                @endif --}}
                                {{ $train->azienda ?? 'n/a' }}
                            </th>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->stazione_partenza }} {{ $train->orario_partenza }}</td>
                            <td>{{ $train->stazione_arrivo }} {{ $train->orario_arrivo }}</td>
                            <td>
                                @if ($train->cancelled)
                                    <div class="text-danger text-uppercase">
                                        cancelled</div>
                                @elseif (!$train->on_time)
                                    Delay
                                @else
                                    OnTime
                                @endif

                            </td>
                        </tr>
                    @endforeach

                    {{-- con @forelse è più adeguato perchè gestisce il case-limit $trains = NULL --}}

                    {{-- @forelse ($trains as $train)
                        <tr>
                            <th>{{ $train->azienda ?? 'N/A' }}</th>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->stazione_partenza }} {{ $train->orario_partenza }}</td>
                            <td>{{ $train->stazione_arrivo }} {{ $train->orario_arrivo }}</td>
                            <td>
                                @if ($train->cancelled)
                                    <div class="text-danger text-uppercase">
                                        cancelled</div>
                                @elseif (!$train->on_time)
                                    Delay
                                @else
                                    OnTime
                                @endif

                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>no posts here</td>
                        </tr>
                    @endforelse --}}
                </tbody>
            </table>

        </div>
    </section>

@endsection
