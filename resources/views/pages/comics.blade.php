@extends('layout.app')

@section('main-content')
<section>
        <div class="bg-black">
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-md-2">
                                <img class="png-2" src="{{ $comic['thumb'] }}"  alt="">
                                <p class="text-uppercase size-black">
                                    {{ $comic['title'] }}
                                </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
                <button type="button" class="btn btn-primary button"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    LEARN MORE
                </button>
            </div>
            <div class="bg-blue p-left">
                <div class="flex">
                    <img class="png" src="{{ Vite::asset ('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </div>
                <div class="flex">
                    <img class="png" src="{{ Vite::asset ('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <p>DC MERCHANDISE</p>
                </div>
                <div class="flex">
                    <img class="png" src="{{ Vite::asset ('resources/images/buy-comics-subscriptions.png') }}" alt="">
                    <p>SUBSCRIPTIONS</p>
                </div>
                <div class="flex">
                    <img class="png" src="{{ Vite::asset ('resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <p>COMIC SHOP LOCATOR</p>
                </div>
            </div>
        </section>
@endsection