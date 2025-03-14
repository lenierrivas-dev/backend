@foreach ($Accommodation as $item)
        <a href="/" class="card_items item ">
            <button href="#">
                <div class="card_love">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                        <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede"
                            stroke-width="2">
                            <path
                                d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                            <path
                                d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                        </g>
                    </svg>
                </div>
            </button>
            <div class="card_img">
                @foreach ($item['thumbNailUrl'] as $url)
                    <img src="{{ URL::asset('assets/img/thumbnails') }}/{{ $url }}" alt="">
                @endforeach
            </div>
            <div class="content-dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="card_info">
                <div class="card_info_text">
                    <h2 class="h2-cards">{{ $item->name }}</h2>
                </div>
                <h3 class="h3-cards">{{ $item->proximityDistance }} miles away</h3>
            </div>
        </a>
@endforeach
