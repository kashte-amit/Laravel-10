@extends('layout.master')

@section('content')
<main role="main" class="container">
  <h1 class="mt-5 text-danger">Home</h1>
  <p>  Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>

  <div class="row mt-4 mb-2">
    
    @foreach ( $blogs as $blog )
      @if ( $blog['status'] === 'A' )
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h2>{{ $blog['title'] }}</h2>
              <p>{{ $blog['content'] }}</p>
            </div>
          </div>
        </div>
      @else
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h2>{{ $blog['title'] }}</h2>
              <p>{{ $blog['content'] }}</p>
              <div class="btn btn-warning">pending</div>
            </div>
          </div>
        </div>
      @endif
    @endforeach

  </div>

  @php
      $name = 'Amit';
  @endphp

  @isset($name)
    <div class="alert alert-success">{{ $name }}</div>
  @endisset

  @switch($type)
      @case(1)
          
          @break
      @case(2)
          
          @break
      @default
          
  @endswitch

  @empty($record)
      
  @endempty
  
  {{-- <h2>With for loop</h2>

  <div class="row mt-4">
    
    @for ($i=0; $i < count($blogs); $i++)
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2>{{ $blogs[$i]['title'] }}</h2>
            <p>{{ $blogs[$i]['content'] }}</p>
          </div>
        </div>
      </div>
    @endfor

  </div> --}}

</main>
@endsection