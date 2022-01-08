<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('style/css.css'); }}">
</head>
<body>
    <div class="main-content">
        <div class="card">
            <div class="card-top">
                <img src="{{ URL::asset('style/webdev-intern-assignment-main/app/assets/nike.png'); }}" class="card-top-logo" alt="">
            </div>

            <div class="card-title">
                Our Products
            </div>
            <div class="card-body">
                <div class="shop-items">
                    @foreach ($collect as $data)
                    <div class="shop-item">
                        <div class="shop-item-image" style="background-color: {{ $data['color'] }}">
                            <img src="{{ url( $data['image']) }}" alt="">
                        </div>
                        <div class="shop-item-name">
                            {{ $data['name'] }}
                        </div>
                        <div class="shop-item-description">
                            {{ $data['description'] }}
                        </div>
                        <div class="shop-item-bottom">
                            <div class="shop-item-price">
                                ${{ $data['price'] }}
                            </div>
                            <div data-id="{{ $data['id'] }}" class="shop-item-button buttonAddCart addCart">
                                <p>ADD TO CART</p>
                            </div>
                            <div data-id="{{ $data['id'] }}" class="check-btn shop-item-button">
                                <div  class="check-btn-img">
                                    <img src="{{ URL::asset('style/webdev-intern-assignment-main/app/assets/check.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="shop-item">
                        <div class="shop-item-image" style="background-color: rgb(225, 231, 237);">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/cruzrone-unisex-shoe-T2rRwS-removebg-preview.png" alt="">
                        </div>
                        <div class="shop-item-name">
                            Nike CruzrOne
                        </div>
                        <div class="shop-item-description">
                            Designed for steady, easy-paced movement, the Nike CruzrOne keeps you going. Its rocker-shaped sole and plush, lightweight cushioning let you move naturally and comfortably. The padded collar is lined with soft wool, adding luxury to every step, while mesh details let your foot breathe. There’s no finish line—there’s only you, one step after the next.                        </div>
                        <div class="shop-item-bottom">
                            <div class="shop-item-price">
                                $100.97
                            </div>
                            <div class="shop-item-button">
                                <p>ADD TO CART</p>
                            </div>
                        </div>
                    </div>
                    <div class="shop-item">
                        <div class="shop-item-image" style="background-color: rgb(225, 231, 237);">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/air-zoom-pegasus-36-shield-mens-running-shoe-24FBGb__1_-removebg-preview.png" alt="">
                        </div>
                        <div class="shop-item-name">
                            Nike Air Zoom Pegasus 36 Shield
                        </div>
                        <div class="shop-item-description">
                            The Nike Air Zoom Pegasus 36 Shield gets updated to conquer wet routes. A water-repellent upper combines with an outsole that helps create grip on wet surfaces, letting you run in confidence despite the weather.                        </div>
                        <div class="shop-item-bottom">
                            <div class="shop-item-price">
                                $89.97
                            </div>
                            <div class="shop-item-button">
                                <p>ADD TO CART</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-top">
                <img src="webdev-intern-assignment-main/app/assets/nike.png" class="card-top-logo" alt="">
            </div>

            <div class="card-title">
                Your cart
                <span id="total" class="card-title-amount">$0</span>
            </div>
            <div class="card-body">
                <div id="Cart_list" class="cart-items">
                    <div class="cart-item">
                        <p class="cart-empty">Cart is empty</p>
                    </div>
                    {{--  @if (session()->exists('ItemId'))
                    @foreach ($items as  $item)
                    <div class="cart-item">
                        <div class="cart-item-left">
                            <div class="cart-item-image" style="background-color: ">
                                <div class="cart-item-image-block">
                                    <img src="{{ $item['image'] }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-right">
                            <div class="cart-item-name">{{ $item['name'] }}</div>
                            <div class="cart-item-price">{{ $item['price'] }}</div>
                            <div class="cart-item-actions">
                                <div class="cart-item-count">
                                    <div class="cart-item-count-button">-</div>
                                    <div class="cart-item-count-number">1</div>
                                    <div class="cart-item-count-button">+</div>
                                </div>
                                <div class="cart-item-remove">
                                    <img src="{{ URL::asset('webdev-intern-assignment-main/app/assets/trash.png'); }}" class="cart-item-remove-icon" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif  --}}
                    

                </div>
            </div>
        </div>

    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="{{ URL::asset('style/js.js'); }}"></script>
</html>