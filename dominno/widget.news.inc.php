
                <!--Start of Blog Area-->
                <div class="blog-area pt-70 pb-80 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-40 mt-31 text-center" data-wb="role=formdata&form=pages&item=news">
                                    <span class="opacity-text text-uppercase center">{{header}}</span>
                                    <h2 class="uppercase mb-25">{{header}}</h2>
                                    <p class="pb-15">{{text}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="blog-carousel carousel-none" data-wb="role=foreach&form=news&limit=5" data-wb-id='active="on"'>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="images/blog/1.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">10 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Smith</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">{{header}}</a></h5>
                                            <p class="mb-20" data-wb-where='descr = ""'>{{wbGetWords({{text}},15)}}</p>
                                            <p class="mb-20" data-wb-where='descr > ""'>{{descr}}</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Blog Area-->
