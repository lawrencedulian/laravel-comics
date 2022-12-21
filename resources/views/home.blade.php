@extends('layouts.app')

@section('content')
    <section class="banner">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        <div class="container">
            <div class="name-section">
                <h4>CURRENT SERIE</h4>
            </div>
        </div>
    </section>

    <section class="books">
        <div class="container d-flex flex-column align-items-center justify-content-center p-5">
            <div class="row row-cols-6 g-3">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $book['thumb'] }}" alt="">
                            <div class="text text-light mt-2">
                                <h5>{{ $book['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn-more mt-2">LEAD MORE</button>
        </div>
    </section>

    <section class="icons">
        <div class="container ">
            <ul>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <a href="">Digital Comics</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <a href="">Dc Merchandising</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <a href="">Subscription</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <a href="">Comic shop locator</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <a href="">Dc power visa</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
