@extends('layouts.app')
@section('title', 'Mushroom Info')

@section('content')

    @if ($mushroom)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{ $mushroom->image_link }} class="img-fluid rounded-start" alt={{$mushroom->name}}>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><strong>{{ $mushroom->name }}</strong></h5>
                            <p class="card-text">{{$mushroom->edibility_notes}}</p>
                            <a href={{ $mushroom->wikipedia_link }}>More information</a>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cap Notes</h5>
                                    <p class="card-text">
                                        Ranges from {{$mushroom->cap->cap_size[0]}} to {{$mushroom->cap->cap_size[1]}} cm.
                                    </p>
                                    <p class="card-text">

                                    <ul>Caps may be
                                        @foreach($mushroom->cap->cap_shape as $cap_shape)

                                            <li>{{ $capshape[$cap_shape] }}</li>
                                        @endforeach
                                    </ul>
                                    <p class="card-text">Cap is
                                        @foreach ($mushroom->cap->cap_suriace as $caps)
                                            {{ $capsurface[$caps] }}
                                        @endforeach
                                    </p>


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Gill Notes</h5>
                                    <p class="card-text">
                                        @foreach ($mushroom->gill->gill_color as $gc)
                                            {{ $gc }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->gill->gill_attachment as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->gill->gill_spacing as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Stem Notes</h5>

                                    <p class="card-text">
                                        @foreach ($mushroom->stem->stem_height as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->stem->stem_width as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->stem->stem_root as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->stem->stem_surface as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                    <p class="card-text">
                                        @foreach ($mushroom->stem->stem_color as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Veil Notes</h5>
                                    <p class="card-text">
                                        {{ $mushroom->veil->veil_type }}
                                        @foreach ($mushroom->veil->veil_color as $ga)
                                            {{ $ga }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ring Notes</h5>
                                    <p class="card-text">
                                        @if($mushroom->ring->has_ring)
                                            @foreach ($mushroom->ring->ring_type as $ga)
                                                {{ $ga }}
                                            @endforeach
                                            <br>
                                            @foreach ($mushroom->ring->ring_color as $ga)
                                                {{ $ga }}
                                            @endforeach
                                        @else
                                            No ring
                                        @endif

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Not found!</p>
    @endif
@endsection