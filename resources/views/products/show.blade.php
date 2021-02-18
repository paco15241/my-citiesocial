@extends('layouts.app')

@section('content')
    <section class="container mx-auto my-8">
        <nav class="breadcrumb">
            <ul class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
                <li class="px-2 text-blue-500"><a href="#">健康養生</a></li>
                <li>/</li>
                <li class="px-2 text-blue-500"><a href="#">輔具器材</a></li>
                <li>/</li>
                <li class="px-2 text-black"><a href="#" aria-current="page">按摩伸展</a></li>
            </ul>
        </nav>

        <div class="product flex flex-wrap">
            <div class="w-7/12 px-2">
                <figure class="image">
                    <img src="{{ asset('images/cats/cat1.jpg') }}" alt="">
                </figure>

                <article class="content">
                    <h4 class="text-xl font-bold">產品特色</h4>
                    <p>
                    全新升級版本和一般按摩槍打擊幅度較大
                    美歸馬達續航力強：6-8小時電池續航沉穩安靜
                    三檔強度可調節：每分鐘可提供高達3200次震擊，適合不同受力程度
                    降造更升級，實際測量最低僅36分貝，不吵躁，不影響使用心情
                    升級六種按摩頭可替換：隨時依自己身體需求做調整，隨時享受各種按摩體驗
                    </p>
                </article>
            </div>
            <div class="w-5/12 px-2">
                <h3 class="text-gray-400">YOULISN</h3>
                <h2 class="text-2xl font-bold">天王深層震動按摩槍-進階版</h2>
                <p class="text-green-400 text-2xl my-4">NTD 8,811 NTD 27,600 (免運費)</p>
                <hr>
                <div class="flex m-8">
                    <div class="w-3/12 text-right mr-2 text-xl">數量</div>
                    <div class="w-9/12">
                        <a href="#" class="bg-white text-xl p-2">-</a>
                        <input type="number" name="quantity" class="text-center text-xl border border-gray-100" value="1">
                        <a href="#" class="bg-white text-xl p-2">+</a>
                    </div>
                </div>
                <a href="#" class="w-full p-2 text-xl rounded bg-green-400 text-white text-center block">加到購物車</a>
            </div>
        </div>


    </section>
@endsection