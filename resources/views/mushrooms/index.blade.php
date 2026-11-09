@extends('layouts.app')

@section('title', 'Mushrooms')
@section('content')

    <!-- add padding and margins later -->
    <div class="row row-cols-1 row-cols-md-6 g-4 m-2">


        @foreach ($mushrooms as $mushroom)
            <!-- <p>{{ $mushroom->name }}</p> -->

            <div class="col">
                <!-- <a href={{ $mushroom->wikipedia_link }}></a> -->
                <div class="card">
                    <img src={{ $mushroom->image_link }} class="card-img-top" alt={{ $mushroom->book_name }}>
                    <div class="card-body">
                        <!-- <small>{{ $mushroom->edibility }}</small> -->
                        <h5 class="card-title">
                            <small>
                                @if ($mushroom->edibility == 'e')
                                    <span class="badge bg-primary rounded-pill">{{ $mushroom->edibility }}</span>
                                @elseif($mushroom->edibility == 'p')
                                    <span class="badge bg-danger rounded-pill">{{ $mushroom->edibility }}</span>
                                @elseif($mushroom->edibility == 'i')
                                    <span class="badge bg-secondary rounded-pill">{{ $mushroom->edibility }}</span>
                                @endif
                                {{ $mushroom->name }}
                            </small>
                        </h5>
                        <small><i>{{ $mushroom->genus_name }} {{ $mushroom->specific_name }} </i></small>


                        <p class="card-text">{{ $mushroom->edibility_notes}}</p>
                    </div>
                </div>

            </div>

        @endforeach
    </div>
@endsection