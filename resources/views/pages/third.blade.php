@extends('layouts.opening')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="container content my-auto">
            <p class="first-line">APRILIA ANJANI, S.Si.</p>
        </div>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ntchgune.json" background="transparent"
            speed="1" style="width: 100%; height: 100%;" mode="bounce" autoplay></lottie-player>
    </main>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('fourth') }}";
        }, 7000);
    </script>
@endsection
