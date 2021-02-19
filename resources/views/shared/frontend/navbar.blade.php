<nav class="border-b border-gray-200">
    <div class="container mx-auto flex flex-wrap justify-between items-center ">

        <a href="{{ route('index') }}">
            <svg class="w-32" id='logoipsum' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 177.778 100'><path d='M10.427,30.047V65.5H169.005V30.047ZM167.005,63.5h-81V32.047h81Z' fill='#394149'/><path d='M18.856,53.713V41.926h4.068v8.648H30.1v3.139Z' fill='#fff'/><path d='M46.138,47.737c0,3.753-2.342,6.156-7.913,6.156-5.06,0-7.928-2.072-7.928-6.156,0-3.619,2.734-6.081,7.928-6.081C43.5,41.656,46.138,43.923,46.138,47.737Zm-4.084.045c0-1.7-.706-3.063-3.844-3.063-2.868,0-3.8,1.216-3.8,3.063,0,1.877.855,3.093,3.813,3.093C41.2,50.875,42.054,49.584,42.054,47.782Z' fill='#fff'/><path d='M58.722,53.713l-.105-1.142a7.2,7.2,0,0,1-4.685,1.322c-2.507,0-4.595-.751-5.766-2.267a6.2,6.2,0,0,1-1.111-3.784A5.861,5.861,0,0,1,48.2,44.163c1.185-1.471,3.333-2.447,6.531-2.447,3.679,0,5.841,1.126,6.771,3.018a4.039,4.039,0,0,1,.346,1.411H57.956a1.6,1.6,0,0,0-.525-.751,4.138,4.138,0,0,0-2.628-.675,3.87,3.87,0,0,0-3.033.946,3.259,3.259,0,0,0-.615,2.207,3.336,3.336,0,0,0,.57,2.117,3.945,3.945,0,0,0,3.108,1.036,4.34,4.34,0,0,0,3.093-.961,1.886,1.886,0,0,0,.375-.8H54.113V46.731H61.95v6.982Z' fill='#fff'/><path d='M78.932,47.737c0,3.753-2.343,6.156-7.913,6.156-5.06,0-7.928-2.072-7.928-6.156,0-3.619,2.734-6.081,7.928-6.081C76.29,41.656,78.932,43.923,78.932,47.737Zm-4.084.045c0-1.7-.706-3.063-3.844-3.063-2.868,0-3.8,1.216-3.8,3.063,0,1.877.856,3.093,3.813,3.093C73.993,50.875,74.848,49.584,74.848,47.782Z' fill='#fff'/><path d='M92.857,53.668V41.881h2.9V53.668Z' fill='#394149'/><path d='M110.649,48.743c-.735.961-2,1.4-3.783,1.411-.376,0-5.361-.015-5.361-.015v3.529H98.667V41.881h8.2a4.707,4.707,0,0,1,3.648,1.186,4.344,4.344,0,0,1,.886,2.958A4.248,4.248,0,0,1,110.649,48.743ZM108.322,44.9c-.3-.45-.947-.7-2.042-.7h-4.79v3.588h4.759c1.171,0,1.788-.24,2.073-.706a1.952,1.952,0,0,0,.21-1.066A2.279,2.279,0,0,0,108.322,44.9Z' fill='#394149'/><path d='M119.764,53.848c-5.346,0-6.982-2-6.982-3.979h3.033c0,.976,1.336,1.712,4.084,1.712,2.732,0,3.453-.481,3.453-1.262,0-.871-.54-1.141-3.078-1.426-.5-.045-1.861-.21-2.372-.285-3.6-.406-4.986-1.472-4.986-3.379,0-2.012,2.028-3.528,6.427-3.528,4.775,0,6.607,1.877,6.607,3.829h-3c0-.991-1.126-1.562-3.784-1.562-2.733,0-3.318.375-3.318,1.111,0,.766.6,1.006,3.5,1.351.661.091,2.132.256,2.537.3,3.064.315,4.445,1.426,4.445,3.393C126.325,52.466,124.223,53.848,119.764,53.848Z' fill='#394149'/><path d='M134.87,53.833c-3.918,0-6.471-1.547-6.471-4.8V41.881h2.867v7.192c0,1.487,1.217,2.477,3.724,2.477,2.267,0,3.619-.93,3.619-2.477V41.881h2.838V49.3C141.447,52.257,139.074,53.833,134.87,53.833Z' fill='#394149'/><path d='M156.987,53.668V45.8l-3.679,7.868h-2.792L146.942,45.8v7.868h-2.7V41.881H147.9l4.054,8.979,4.144-8.979h3.6V53.668Z' fill='#394149'/></svg>
        </a>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block">
            <svg class="fill-current text-gray-900"
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden w-full lg:flex lg:w-auto menu">
            <input type="text" placeholder="輸入關鍵字" class="py-2 px-4 rounded-l-md border border-gray-300 focus:outline-none">
            <a href="#" class="py-2 px-4 rounded-r-md bg-green-400 text-white focus:outline-none"><i class="fa fa-search"></i>&nbsp; 搜尋</a>
        </div>
        <div class="hidden w-full lg:flex lg:w-auto lg:justify-between lg:items-center menu">
            @if (auth()->check())
                <div class="relative">
                    <input type="checkbox" id="userbox" class="hidden absolute">
                    <label for="userbox" class="py-2 px-4 flex items-center space-x-1 cursor-pointer">
                        <i class="fas fa-user"></i>&nbsp;{{ auth()->user()->email }}&nbsp;
                        <i class="text-blue-500 ml-2 fas fa-angle-down"></i>
                    </label>

                    <div id="userboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-white border border-gray-300 transition delay-75 ease-in-out z-10">
                        <ul class="block text-right">
                            <li><a href="#" class="block px-3 py-2">個人資料</a></li>
                            <li><a href="#" class="block px-3 py-2">訂單紀錄</a></li>
                            <hr>
                            <a class="user-button block px-3 py-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            @else
                <a href="{{ route('register') }}" class="py-2 px-4 mr-2 rounded bg-green-300 text-white focus:outline-none">註冊</a>
                <a href="{{ route('login') }}" class="py-2 px-4 rounded bg-gray-300 text-white focus:outline-none">登入</a>
            @endif
        </div>
    </div>
</nav>