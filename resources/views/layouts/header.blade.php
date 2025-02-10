<header id='header' class="site-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="container">
        <div class="site-title">
            <a href="{{ url('/') }}" class="logo ibtn" itemprop="url"
                style="background-image: url('{{ asset('storage/' . ($setting['site_logo'] ?? '')) }}')">
                <h1 itemprop="headline">{{ $setting['site_name'] ?? '台灣樂博樂博機器人教育' }}</h1>
            </a>
        </div>
        <div class="top-nav">
            <div class="search-box">
                <label for="PdSearch">
                    <span class="none">SEARCH:</span>
                    <form action="https://www.roborobo.com.tw/products_search" method="post" name="searchform"
                        id="searchform">
                        <input type="hidden" name="csrf_test_name" value="bca0d35ca8d97438ffd7c3e5a2458000">
                        <input type="text" name="PdSearch" id="PdSearch" class="form-control" placeholder="SEARCH"
                            aria-placeholder="SEARCH" value="">
                        <input type="submit" value="SEARCH" class="ibtn search" title="產品搜尋" alt="產品搜尋">
                    </form>
                </label>
            </div>
        </div>
        <nav class="site-nav" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
            <ul class="menu list-h dropdown-menu">
                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('about') }}">關於我們</a>
                    <ul>
                        @foreach ($aboutPosts as $post)
                            <li itemprop="name">
                                <a itemprop="url" href="{{ route('about.show', $post['id']) }}">{{ $post['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('courses') }}">教育課程</a>
                </li>

                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('competitions') }}">國際競賽</a>
                    <ul>
                        @foreach ($competitionPosts as $post)
                            <li itemprop="name">
                                <a itemprop="url"
                                    href="{{ route('competitions.show', $post['id']) }}">{{ $post['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('cooperation') }}">合作項目</a>
                    <ul>
                        @foreach ($cooperationPosts as $post)
                            <li itemprop="name">
                                <a itemprop="url"
                                    href="{{ route('cooperation.show', $post['id']) }}">{{ $post['title'] }}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('news') }}">最新消息</a>
                </li>

                <li itemprop="name" class="hover-on">
                    <a itemprop="url" href="{{ route('albums') }}">精彩相簿</a>
                </li>
                <li itemprop="name" class="hover-on "><a itemprop="url" href="contact/8.html">聯絡我們</a></li>
                <li itemprop="name" class="hover-on "><a itemprop="url" href="autopage/3/13.html">下載專區</a>
                    <ul>
                        <li itemprop="name" class=""><a itemprop="url" href="autopage/3/13.html">營隊相片下載</a></li>
                        <li itemprop="name" class=""><a itemprop="url" href="autopage/3/10.html">軟體下載</a></li>
                        <li itemprop="name" class=""><a itemprop="url" href="autopage/3/11.html">報名表單</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
