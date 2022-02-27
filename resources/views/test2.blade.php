@extends('layouts.main')

@section('bodyPrincipal')
    <section class="container mt-5">
        <div class="card" style="width: 18rem;">
            <h2>Hola</h2>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section>

    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li> el valor de i es: {{ $i }} </li>
        @endfor
    </ul>
    <ul>
        @foreach ($tests as $test)
            <li>
                {{ $test }}
            </li>
        @endforeach
    </ul>

    @if (count($tests) === 1)
        <span class="alert alert-danger"> Hay 1 waaaa</span>
    @elseif(count($tests) > 1)
        <span class="alert alert-danger"> Hay 3 waaaa</span>
    @else
        <span class="alert alert-danger"> No hay</span>
    @endif
@endsection
