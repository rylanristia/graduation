@extends('layouts.opening')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="container content my-auto">
            <div class="header d-flex justify-content-center">
                <img src="{{ url('../public/images/complete-chapter.svg') }}" alt="" width="400px"
                    class="chapter-name">
            </div>
        </div>
    </main>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('last') }}";
        }, 6000);
    </script>
@endsection
