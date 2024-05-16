@extends('layouts.app')
@section('title', 'About - Hadi Nurhidayat')
@section('content')
    <div class="about">
        <div class="about__wrapper">
            <section class="about__section-me">
                <h1 class="about__section-title">About Me</h1>
                <div class="about__section-content">
                    <img src="{{ asset('/assets/images/hadinurhidayat-edit.png') }}" alt="hadinurhidayat"
                        class="about__section-content-image">
                    <div class="about__section-article">
                        <p class="about__section-article-p">
                            Hi everyone! I'm Hadi Nurhidayat, a web developer from Bandung, West Java. I have over 3 years
                            of
                            experience in the field as a full-stack developer. I really enjoy my current job. To me,
                            building a
                            website isn't just a job, but an art to help many people.
                        </p>
                        <p class="about__section-article-p">
                            The websites I create prioritize functionality with an
                            interactive user experience. This ensures
                            that users can quickly adapt to the websites I build. Additionally, I also provide input to make
                            the
                            systems I build more economical and efficient. If you're interested in hiring me to build a
                            website
                            that aligns with your business needs, feel free to contact me for further discussion.
                        </p>
                    </div>
                </div>
            </section>
            <section class="">
                <h1 class="about__section-title">My Skils</h1>
                <x-tab></x-tab>
            </section>
        </div>
    </div>
@endsection
