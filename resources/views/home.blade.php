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
            @foreach($trains as $train)

              <tr>
                <th>
                    @if ($train->azienda === null)

                    <div class="text-secondary">Unavailable</div>

                    @else
                    
                    {{$train->azienda}}
                        
                    @endif
                </th>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->stazione_partenza}}  {{$train->orario_partenza}}</td>
                <td>{{$train->stazione_arrivo}}  {{$train->orario_arrivo}}</td>
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
            </tbody>
          </table>

    </div>
</section>

@endsection