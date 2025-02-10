@extends('layouts.app')

@section('content')
    <main class="site-main has-side">
        <div class="main-content">
            <div class="container">
                <aside class="side">
                    <div class="title">
                        <div class="side_logo"></div>
                        合作項目
                    </div>
                    <ul class="side-nav list-v">
                        <li class="hover-on active"><a href="2.html">教育合作</a></li>
                        <li class="hover-on "><a href="1.html">師資培訓</a></li>
                    </ul>
                </aside>
                <div class="content">
                    <header class="content-top clearfix">
                        <h1 class="content-title" itemprop="headline">{{ $post['title'] }}</h1>
                    </header>
                    
                    <article class="editor clearfix" itemprop="text">
                        <div class="is-container-in">
                            {!! $post['content'] !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
