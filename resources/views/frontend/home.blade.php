@extends('frontend.master')
@section('posts')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-md-last">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-entry ftco-animate">
                                <a href="#" class="img img-2" style="background-image: url(images/image_1.jpg);"></a>
                                <div class="text text-2 pt-3 mt-3">
                                    <span class="big">Asia</span>
                                    <h3 class="mb-4"><a href="#">What to pack when visiting Philippines in summer time</a></h3>
                                    <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                    <div class="author mb-4 d-flex align-items-center">
                                        <a href="#" class="img" style="background-image: url(images/person_2.jpg);"></a>
                                        <div class="ml-3 info">
                                            <span>Written by</span>
                                            <h3><a href="#">Dave Lewis</a>, <span>October 04, 2018</span></h3>
                                        </div>
                                    </div>
                                    <div class="meta-wrap align-items-center">
                                        <div class="half order-md-last">
                                            <p class="meta">
                                                <span><i class="icon-heart"></i>3</span>
                                                <span><i class="icon-eye"></i>100</span>
                                                <span><i class="icon-comment"></i>5</span>
                                            </p>
                                        </div>
                                        <div class="half">
                                            <p><a href="#" class="btn btn-primary px-3 py-2">Continue Reading</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($posts)
                            @foreach($posts as $post)
                                <div class="col-md-6">
                                    <div class="blog-entry ftco-animate">
                                        <a href="#" class="img img-2" style="background-image: url(images/image_1.jpg);"></a>
                                        <div class="text text-2 pt-3 mt-3">
                                            <span class="big">Asia</span>
                                            <h3 class="mb-4"><a href="#">What to pack when visiting Philippines in summer time</a></h3>
                                            <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                            <div class="author mb-4 d-flex align-items-center">
                                                <a href="#" class="img" style="background-image: url(images/person_2.jpg);"></a>
                                                <div class="ml-3 info">
                                                    <span>Written by</span>
                                                    <h3><a href="#">Dave Lewis</a>, <span>October 04, 2018</span></h3>
                                                </div>
                                            </div>
                                            <div class="meta-wrap align-items-center">
                                                <div class="half order-md-last">
                                                    <p class="meta">
                                                        <span><i class="icon-heart"></i>3</span>
                                                        <span><i class="icon-eye"></i>100</span>
                                                        <span><i class="icon-comment"></i>5</span>
                                                    </p>
                                                </div>
                                                <div class="half">
                                                    <p><a href="#" class="btn btn-primary px-3 py-2">Continue Reading</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- END-->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Destination</h3>
                        <ul class="categories">
                            @if($categories)
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->name}} <span>(6)</span></a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Popular Articles</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                {{-- need it in hero section--}}
{{--                    <div class="sidebar-box subs-wrap">--}}
{{--                        <h3>Subcribe to our Newsletter</h3>--}}
{{--                        <p>Far far away, behind the word mountains, far from the countries Vokalia</p>--}}
{{--                        <form action="#" class="subscribe-form">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Email Address">--}}
{{--                                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

                </div><!-- END COL -->
            </div>
        </div>
    </section>
@endsection

