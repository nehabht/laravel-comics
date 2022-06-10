@extends('layouts.app')

@section('content')


<div>
    <div class="container">
        <button class="btn_current">CURRENT SERIES</button>
        
        <div class="row covers row-cols-6">
            @foreach($comics as $index => $comic)
            <a href="{{route('comic', $index)}}">
              <div class="col">
                  <div class="cover">
                      <img class="" src="{{ $comic['thumb'] }}" alt="">
                      <h6>{{ $comic['series'] }}</h6>
                  </div>
              </div>


            @endforeach

        </div>

        <button class="more">
            
           <span class="btn_more"> LOAD MORE</span>
        </button>
        
    </div>

    <div class="buy_section">
      <div class="container_cards">
        <div class="cards_buy">
          <div class="card_buy">
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            <p class="text_buy">digital comics</p>
          </div>
          <div class="card_buy">
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            <p class="text_buy">dc merchandise</p>
          </div>
          <div class="card_buy">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            <p class="text_buy">subscriptions</p>
          </div>
          <div class="card_buy">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
            <p class="text_buy">comic shop locator</p>
          </div>
          <div class="card_buy">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
            <p class="text_buy">dc power visa</p>
          </div>
        </div>


      </div>
    </div>




</div>




@endsection