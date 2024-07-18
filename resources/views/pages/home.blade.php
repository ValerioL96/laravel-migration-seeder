@extends('layouts.app')

@section('page-title','Laravel Migration Seeder')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Partenze gionaliera dei treni
            </h1>
        </div>
        @foreach ($trains as $train )
        <article class="col-3 mb-3">
            <div class="card text-bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">
                    <h5 class="card-title">
                        {{$train->id}}: {{$train->azienda}}
                    </h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 ">
                        Partenza da {{$train->stazione_di_partenza}}
                    </h6>
                    <p class="card-text">
                        alle ore {{$train->orario_di_partenza}}
                    </p>
                    <h6 class="card-subtitle mb-2 ">
                        Arrivo a {{$train->stazione_di_arrivo}}
                    </h6>
                    <p class="card-text">
                        alle ore {{$train->orario_di_arrivo}}
                    </p>
                    <p class="card-text">
                        Treno: {{$train->codice_treno}}, con {{$train->numero_carrozze}} carrozze
                    </p>
                </div>
            </div>
        </article>
        @endforeach
@endsection
