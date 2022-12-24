@extends('layouts.opening')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="container my-auto">
            <p class="first-line">FEEL THE RYHTHM</p>
            <p class="second-line">SHOW WHO YOU ARE TO THE WORLD</p>
        </div>
    </main>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('second') }}";
        }, 10000);
    </script>
@endsection
