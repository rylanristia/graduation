@extends('layouts.opening')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="container my-auto">
            <p class="first-line">THIS IS YOUR TURN</p>
            <p class="second-line">YOUR NEW CHAPTER HAS BEEN UNLOCKED</p>
        </div>
    </main>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('third') }}";
        }, 10000);
    </script>
@endsection
