@extends('layouts.discography')

@section('content')
    <main style="height: 100%; overflow-y: hidden;">
        <div class="first-section">
            <div class="container">
                <div class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        style="fill: white;transform: ;msFilter:;">
                        <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path>
                    </svg>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-wrap">
                            <img src="{{ url('images/album-image.png') }}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-wrap">
                            <div class="album-number">
                                <h2>5TH ALBUM</h2>
                                <h1>
                                    THE CHAPTER:
                                    <br>
                                    UNIVERSITY
                                </h1>
                            </div>
                            <div class="description">
                                Gen Z’s ‘it’ boys TOMORROW X TOGETHER continue their journey through the newest EP, minisode
                                2: Thursday’s Child.
                                <br><br>
                                In minisode 2: Thursday’s Child, the experience of a first breakup strikes as a powerful
                                storm mixed with denial, dejection, anger, and loss. Our protagonist fully indulges in and
                                expresses each of these emotions as they come, until he is finally able to accept that his
                                once treasured relationship has come to an end. Moving from adolescence to adulthood, the
                                boy comes to better understand both himself and the world around him. Then, a question
                                arises: on what path of growth will his feet lead him next?
                                <br><br>
                                minisode 2: Thursday’s Child is a post-farewell recollection with five tracks total: “Good
                                Boy Gone Bad,” “Trust Fund Baby,” “Opening Sequence,” and TOMORROW X TOGETHER’s first two
                                unit tracks, “Lonely Boy” and “Thursday’s Child Has Far To Go.” The members have made
                                creative contributions to all tracks in the EP.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
