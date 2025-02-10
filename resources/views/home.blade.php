@extends('layouts.app')

@section('content')
    <main aria-label="main" class="site-main">
        <section class="about-sect">
            <div class="container">
                <div class="row clearfix">
                    <div class="col txt">
                        <div class="tag wow fadeInUp" data-wow-delay="0.3s">
                        </div>
                        <div class="txt-box">
                            <div class="title clearfix wow fadeInUp">
                                <span>ABOUT<br>US</span>
                                <h2>關於我們</h2>
                            </div>
                            <div class="index-about-editor">
                                <article class="editor clearfix wow fadeInUp" data-wow-delay="0.3s" itemprop="text">
                                    <div class="ttitle"><span style="color:#6600ff;">台灣樂博樂博機器人教育</span></div>
                                    專門為您提供各系列的機器人教育產品，從研究開發、生產製造、執行教育的專業公司，課程涵蓋學齡前兒童到大學生一系列完整教育!<br>
                                    所有系列課程均完整銜接，學生透過機器人結構任意組裝、程式編碼設計，達成STEAM五大學習領域，涵養縝密邏輯、思維能力、創造力和認知能力的建立，讓學生能運用科技來解決問題成為未來人才。
                                </article>
                            </div>
                            <span class="index_more"><a href="about/1.html" title="關於我們"><span>MORE</span></a></span>
                        </div>
                    </div>
                    <div class="col pic wow fadeInUp" data-wow-delay="0.5s">
                        <img itemprop="image" class="lazyload"
                            src="{{ asset('images/layout06-3/common/index/about_pic.png') }}"
                            data-src="https://www.roborobo.com.tw/images/layout06-3/common/index/about_pic.png"
                            alt="關於我們" title="關於我們">
                    </div>
                </div>
            </div>
        </section>
        <section class="products-sect">
            <div class="container">
                <div class="title"><span>CODING EDUCTION</span>
                    <h2>教育課程</h2>
                </div>
                <div class="products-box">
                    <div class="products-list list-h column4 type2">
                        <div class="item wow fadeIn" data-wow-delay="0s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_20240613125238pdiba.png"
                                            data-src="https://www.roborobo.com.tw/upload/products/20240613125238pdiba.png"
                                            height="620" itemprop="image" alt="UARO相片2.png" title="UARO相片2.png">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">U--ARO 初階課程 (幼兒)</div>
                                    <div class="description" itemprop="description">UARO 編碼機器人是專為學齡前兒童設計的編碼機器人<br>
                                        30分鐘的全神貫注孩子可以打造並驅動他想要的機器人</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/65.html" alt="U--ARO  初階課程 (幼兒)"
                                    title="U--ARO  初階課程 (幼兒)">U--ARO 初階課程 (幼兒)</a>
                            </div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.2s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_20240613125319rswj3.png"
                                            data-src="https://www.roborobo.com.tw/upload/products/20240613125319rswj3.png"
                                            height="620" itemprop="image" alt="AIRKIRO相片1.png" title="AIRKIRO相片1.png">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">AIKIRO 中階課程(8~10歲)</div>
                                    <div class="description" itemprop="description">AIKIRO
                                        是運用OID方式的程式筆與專用程式卡自由對機器人<br>
                                        的動作來進行編碼並驅動機器人課程不需電腦教學保護眼睛</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/66.html" alt="AIKIRO 中階課程(8~10歲)"
                                    title="AIKIRO 中階課程(8~10歲)">AIKIRO 中階課程(8~10歲)</a>
                            </div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.4s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_20240909180348ju7ha.jpg"
                                            data-src="https://www.roborobo.com.tw/upload/products/20240909180348ju7ha.jpg"
                                            height="620" itemprop="image" alt="메인이미지.jpg" title="메인이미지.jpg">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">ROBKIT 高階課程(10~12歲)</div>
                                    <div class="description" itemprop="description">
                                        專利Rogic機器人程式編程課程擁有豐富多彩的課程內容，<br>
                                        學員很容易融入當地的國情及自然環境而能隨意創作發明<br>
                                        的高階機器人課程</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/67.html"
                                    alt="ROBKIT 高階課程(10~12歲)" title="ROBKIT 高階課程(10~12歲)">ROBKIT 高階課程(10~12歲)</a>
                            </div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.6s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_202406211432259qtr9.png"
                                            data-src="https://www.roborobo.com.tw/upload/products/202406211432259qtr9.png"
                                            height="620" itemprop="image" alt="DIYGO相片.png" title="DIYGO相片.png">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">DIY-GO 進階課程 (中高年級~大學)</div>
                                    <div class="description" itemprop="description">
                                        支援AI編程軟體“Rogic”研發課程提供了各種電路模組和編碼系統<br>
                                        可以讓機械結構和3C感應系統連線，以匹配學習者設計的主題</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/68.html"
                                    alt="DIY-GO  進階課程 (中高年級~大學)" title="DIY-GO  進階課程 (中高年級~大學)">DIY-GO 進階課程
                                    (中高年級~大學)</a>
                            </div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.8s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_202406211503225t6ot.jpg"
                                            data-src="https://www.roborobo.com.tw/upload/products/202406211503225t6ot.jpg"
                                            height="620" itemprop="image" alt="20200725_131329.jpg"
                                            title="20200725_131329.jpg">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">IPRC ROBOT RACE 競賽課程(幼兒~大學)</div>
                                    <div class="description" itemprop="description">ROBOROBO機器人編程教育系統是國際性<br>
                                        規劃專業競賽課程讓學員每年參與國內外<br>
                                        IPRC機器人大賽與不同國家的學員交流<br>
                                        與國際接軌提升國際觀</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/75.html"
                                    alt="IPRC ROBOT RACE   競賽課程(幼兒~大學)" title="IPRC ROBOT RACE   競賽課程(幼兒~大學)">IPRC
                                    ROBOT RACE 競賽課程(幼兒~大學)</a>
                            </div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="1s" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <div class="box new">
                                <div class="mask">
                                    <span class="more">MORE</span>
                                    <figure class="pic">
                                        <img class="lazyload" src="upload/products/t_202409091812205cytk.jpg"
                                            data-src="https://www.roborobo.com.tw/upload/products/202409091812205cytk.jpg"
                                            height="620" itemprop="image" alt="圖片1.jpg" title="圖片1.jpg">
                                    </figure>
                                </div>
                                <div class="txt">
                                    <div class="name" itemprop="name">TECHER TRAINING 師資培訓(大學~成年)</div>
                                    <div class="description" itemprop="description">師資培訓&授證<br>
                                        正規機器人創作及程式編碼的專業課程<br>
                                        對於有志成為機器人教育創業者或老師<br>
                                        施予專業的機器人教學技巧並授予證書<br>
                                        成為具有國際級機器人教師資格的願望</div>
                                </div>
                                <a itemprop="url" class="cover" href="products_detail/76.html"
                                    alt="TECHER TRAINING 師資培訓(大學~成年)" title="TECHER TRAINING 師資培訓(大學~成年)">TECHER
                                    TRAINING 師資培訓(大學~成年)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="index_more"><a href="products/all/1.html" title="教育課程"><span>MORE</span></a></span>
            </div>
        </section>
        <section class="service-sect">
            <div class="container">
                <div class="service-box">
                    <div class="flex">
                        <div class="title wow fadeIn" data-wow-delay="0.3s"><span>SERVICES</span>
                            <h2>合作項目</h2>
                        </div>
                        <article class="editor clearfix wow fadeIn" data-wow-delay="0.5s" itemprop="text">
                            <div class="index-service">
                                <div class="row">
                                    <div class="col">
                                        <div class="s-list">
                                            <div class="box">
                                                <h3 class="list-num">01</h3>
                                                <img alt=""
                                                    src="{{ asset('images/layout06-3/common/index/service_icon_1.svg') }}">
                                                <div class="list-info">
                                                    <h3 class="list-name">創新</h3>
                                                </div>
                                            </div>

                                            <div class="s-arrow">&nbsp;</div>

                                            <div class="box">
                                                <h3 class="list-num">02</h3>
                                                <img alt=""
                                                    src="{{ asset('images/layout06-3/common/index/service_icon_2.svg') }}">
                                                <div class="list-info">
                                                    <h3 class="list-name">科技</h3>
                                                </div>
                                            </div>

                                            <div class="s-arrow">&nbsp;</div>

                                            <div class="box">
                                                <h3 class="list-num">03</h3>
                                                <img alt=""
                                                    src="{{ asset('images/layout06-3/common/index/service_icon_3.svg') }}">
                                                <div class="list-info">
                                                    <h3 class="list-name">教育</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="t-1">(一) <strong>教學事業創業合作</strong></h3>

                                        <p class="p-1">
                                            誠摯地邀請各教學單位各級學校、幼兒園、補習班、慈善單位，針對正規課程的規畫或短期營隊的活動，我們提供完善的建置計畫讓您的單位具有教學特色並引領學員進入國際觀的AI
                                            教育領域共同為台灣培育科技未來人才。</p>

                                        <h3 class="t-1">(二) 專業師資培訓</h3>

                                        <p class="p-1">對於有志成為機器人教育的老師，我們施予完整的教學技巧程式教學並授予證書，成為具有國際觀機器人教師資格的願望。
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </article>
                        <span class="index_more"><a href="service/2.html" title="合作項目"
                                alt="合作項目"><span>MORE</span></a></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="album-sect ">
            <div class="container">
                <div class="title"><span>ALBUM</span>
                    <h2>產品相簿</h2>
                </div>
                <div class="album-list list-h column6 type1">
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240613195715nka5v.png"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240613195715nka5v.png"
                                    height="1000" itemprop="image" alt="ROBOROBO_正方形_Word _ Symbol__2.png"
                                    title="ROBOROBO_正方形_Word _ Symbol__2.png">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">專利商標</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="專利商標" title="專利商標">專利商標</a>
                        </div>
                        <a class="fancybox" href="upload/album/2024062112111493184.jpg" title="08.jpg"
                            data-intro="">專利商標</a>
                        <a class="fancybox" href="upload/album/20240621121114931841.jpg" title="09.jpg"
                            data-intro="">專利商標</a>
                        <a class="fancybox" href="upload/album/2024062112111493184.png" title="로보로보_표지캐릭터_로고변경_-02.png"
                            data-intro="">專利商標</a>
                        <a class="fancybox" href="upload/album/20240621121114931841.png" title="로보로보_표지캐릭터_로고변경_-05.png"
                            data-intro="">專利商標</a>
                        <a class="fancybox" href="upload/album/20240621121114931842.jpg" title="06.jpg"
                            data-intro="">專利商標</a>
                        <a class="fancybox" href="upload/album/20240613195717f8yzk.png"
                            title="ROBOROBO_正方形_Word _ Symbol__2.png" data-intro="">專利商標</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240613194143bj9ik.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240613194143bj9ik.jpg"
                                    height="1000" itemprop="image" alt="a11.jpg" title="a11.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">AIKIRO 中階課程</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="AIKIRO 中階課程"
                                title="AIKIRO 中階課程">AIKIRO 中階課程</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240613194145gylma.jpg" title="a5.jpg"
                            data-intro="">AIKIRO 中階課程</a>
                        <a class="fancybox" href="upload/album/20240613194145gylma1.jpg" title="a11.jpg"
                            data-intro="">AIKIRO 中階課程</a>
                        <a class="fancybox" href="upload/album/20240613194145gylma.png" title="UARO相片5.png"
                            data-intro="">AIKIRO 中階課程</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240613194237gm9sj.png"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240613194237gm9sj.png"
                                    height="1000" itemprop="image" alt="DIYGO相片2.png" title="DIYGO相片2.png">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">DIYGO AI進階課程</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="DIYGO AI進階課程"
                                title="DIYGO AI進階課程">DIYGO AI進階課程</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240613194239pu97k.png" title="DIYGO相片2.png"
                            data-intro="">DIYGO AI進階課程</a>
                        <a class="fancybox" href="upload/album/20240613194239pu97k.jpg" title="DSC02124.jpg"
                            data-intro="">DIYGO AI進階課程</a>
                        <a class="fancybox" href="upload/album/20240613194239pu97k1.jpg" title="g4.jpg"
                            data-intro="">DIYGO AI進階課程</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240613194351ej1ai.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240613194351ej1ai.jpg"
                                    height="1000" itemprop="image" alt="IMG_20191025_134245.jpg"
                                    title="IMG_20191025_134245.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">澳洲WIT機器人國際賽</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="澳洲WIT機器人國際賽"
                                title="澳洲WIT機器人國際賽">澳洲WIT機器人國際賽</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240613194352gn58s.jpg" title="IMG_20191025_113404.jpg"
                            data-intro="">澳洲WIT機器人國際賽</a>
                        <a class="fancybox" href="upload/album/20240613194352gn58s1.jpg" title="IMG_20191025_134245.jpg"
                            data-intro="">澳洲WIT機器人國際賽</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240909190853muda8.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240909190853muda8.jpg"
                                    height="1000" itemprop="image" alt="86.jpg" title="86.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">IPRC機器人國際賽比賽紀錄</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="IPRC機器人國際賽比賽紀錄"
                                title="IPRC機器人國際賽比賽紀錄">IPRC機器人國際賽比賽紀錄</a>
                        </div>
                        <a class="fancybox" href="upload/album/202409061224078d9kn.jpg" title="img_1281x1_0003805.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh.jpg" title="29.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh1.jpg" title="86.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh2.jpg" title="95.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh3.jpg" title="222.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh4.jpg" title="284.jpg"
                            data-intro="">IPRC機器人國際賽比賽紀錄</a>
                        <a class="fancybox" href="upload/album/20240613195555v2khh7.jpg"
                            title="NIKON D4_20200726_134350.jpg" data-intro="">IPRC機器人國際賽比賽紀錄</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240613194502yr6rx.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240613194502yr6rx.jpg"
                                    height="1000" itemprop="image" alt="로보로보 040_자름.jpg" title="로보로보 040_자름.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">ROBOTKIT 高階課程</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="ROBOTKIT 高階課程"
                                title="ROBOTKIT 高階課程">ROBOTKIT 高階課程</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240613194505x37hf.jpg" title="04_VikingBot 사본.jpg"
                            data-intro="">ROBOTKIT 高階課程</a>
                        <a class="fancybox" href="upload/album/20240613194505x37hf1.jpg" title="로보로보 040_자름.jpg"
                            data-intro="">ROBOTKIT 高階課程</a>
                        <a class="fancybox" href="upload/album/20240613194505x37hf2.jpg" title="로직노트북,폰.jpg"
                            data-intro="">ROBOTKIT 高階課程</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_202406131946096fjls.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/202406131946096fjls.jpg"
                                    height="1000" itemprop="image" alt="SEO_2057.jpg" title="SEO_2057.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">UARO 初階課程</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="UARO   初階課程"
                                title="UARO   初階課程">UARO 初階課程</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240613194612pvszu.jpg" title="SEO_1856.jpg"
                            data-intro="">UARO 初階課程</a>
                        <a class="fancybox" href="upload/album/20240613194612pvszu1.jpg" title="SEO_2057.jpg"
                            data-intro="">UARO 初階課程</a>
                        <a class="fancybox" href="upload/album/20240613194612pvszu2.jpg" title="SEO_2931.jpg"
                            data-intro="">UARO 初階課程</a>
                    </div>
                    <div class="item" itemscope="" itemtype="https://schema.org/ListItem">
                        <div class="box">
                            <figure class="pic">
                                <img class="lazyload" src="upload/album/t_20240909190154u7ee4.jpg"
                                    data-src="https://www.roborobo.com.tw/upload/album/20240909190154u7ee4.jpg"
                                    height="1000" itemprop="image" alt="20191124_131949.jpg"
                                    title="20191124_131949.jpg">
                            </figure>
                            <div class="namebox">
                                <div class="name" itemprop="name">首爾IPRC機器人比賽</div>
                            </div>
                            <div class="more">MORE</div>
                            <a class="open-album cover" href="javascript:void(0)" alt="首爾IPRC機器人比賽"
                                title="首爾IPRC機器人比賽">首爾IPRC機器人比賽</a>
                        </div>
                        <a class="fancybox" href="upload/album/20240909190155s7qkx.jpg" title="20191124_090351.jpg"
                            data-intro="">首爾IPRC機器人比賽</a>
                        <a class="fancybox" href="upload/album/20240909190155s7qkx1.jpg" title="20191124_132001.jpg"
                            data-intro="">首爾IPRC機器人比賽</a>
                        <a class="fancybox" href="upload/album/20240613194720mi49b.jpg" title="20191124_090238.jpg"
                            data-intro="">首爾IPRC機器人比賽</a>
                        <a class="fancybox" href="upload/album/20240613194720mi49b1.jpg" title="img_1281x1_0003805.jpg"
                            data-intro="">首爾IPRC機器人比賽</a>
                    </div>
                </div>
                <span class="index_more"><a href="album/all/1.html" title="產品相簿"
                        alt="產品相簿"><span>MORE</span></a></span>
            </div>
        </section>
    </main>
@endsection
