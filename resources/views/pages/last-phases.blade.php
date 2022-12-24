@extends('layouts.opening')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="container content my-auto">
            <div class="header d-flex justify-content-center">
                <img src="{{ url('images/last-phase.svg') }}" alt="" width="600px" class="chapter-name">
            </div>

            <div class="description">
                <p class="typing">After everything you had tried. Congratulations for your graduation, April! This is a
                    significant accomplishment that represents years of hard work and dedication. You should be proud of
                    yourself for successfully
                    completing your studies and earning your degree. I hope that your college graduation celebration is
                    everything you
                    hoped it would be and that the future holds many more successes and joys for you. As you move on to the
                    next
                    phase of your life, I wish you all the best in your future endeavors. Keep reaching for your goals and
                    don't be
                    afraid to take risks and embrace new opportunities. You have the skills and knowledge to achieve great
                    things, and I have no doubt that you will go on to do great things. As i said, just because of you need
                    more time to reach
                    what you want, it doesn't mean you failed. Best wishes for your next steps!</p>
                <a href="{{ route('discography') }}"><button class="btn mx-auto" align="center">Read Discography</button></a>
            </div>
        </div>
    </main>
    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_mGmUcR.json" background="transparent" speed="1"
        style="width: 100vhm; height: auto" autoplay></lottie-player>
@endsection
