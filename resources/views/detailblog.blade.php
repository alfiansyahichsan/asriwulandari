@extends('layout.menu2')
@section('halaman')
Detail
@endsection
@section('content')

<!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="blog-post">
                                    <div class="full-width">
                                        <img src="{{asset('images/bum.jpg')}}" alt=""/>
                                    </div>
                                    <h4 class="text-uppercase"><a href="blog-single.html">standard blog post with photo</a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#">Asri Wulandari</a></li>
                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing elit</a>. Ab adipisci architecto
                                        consequatur debitis eos eum hic illum ipsam itaque laborum magni minima
                                        molestias nostrum numquam odit officia pariatur perspiciatis placeat porro quae
                                        rem, sequi sit soluta temporibus ullam voluptas voluptates. Aliquid amet
                                        architecto culpa cumque eius enim esse eum eveniet ex, fugiat illo ipsum
                                        laudantium, minima nemo porro sequi tempora veritatis vero voluptate,
                                        voluptatem. Culpa ducimus est eveniet, iste iusto officiis quas repudiandae
                                        rerum sit tenetur totam voluptas? Accusamus accusantium alias aliquam aliquid
                                        animi commodi dignissimos dolore doloremque dolorum exercitationem fugiat illum,
                                        iste laboriosam maiores molestiae nam odio officia officiis omnis optio placeat
                                        quaerat quia quibusdam quis quo ratione sapiente sed sequi sit tenetur unde ut
                                        veniam voluptas! Dicta, voluptatum!</p>

                                    <div class="blog-post">
                                        <blockquote class="quote-post">
                                            <p>
                                                Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error
                                            </p>
                                        </blockquote>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at debitis
                                        deleniti dignissimos ea enim iste laboriosam nihil omnis possimus quia, tempora,
                                        totam voluptatibus! Animi consectetur dolor in laboriosam unde.</p>

                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>

                                    
                                    <div class="pagination-row">

                                        <div class="pagination-post">
                                            <div class="prev-post">
                                                <a href="#">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-left"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Previous Post</span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="post-list-link">
                                                <a href="#">
                                                    <i class="fa fa-home"></i>
                                                </a>
                                            </div>

                                            <div class="next-post">
                                                <a href="#">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Next Post</span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    

                                </div>
                            </div>
                            <!--classic image post-->

                        </div>
                        <div class="col-md-4">

                            <!--author widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">about author</h6>
                                </div>
                                <div class="full-width avatar">
                                    <img src="img/post/avatar.jpg" alt=""/>
                                </div>
                                <p>Persuaded to return to the shoemaker's shop, young Edward struggled on till three years of his wretched apprenticeship had passed over.</p>

                                <span class="">- Nelson Leonard</span>
                            </div>
                            <!--author widget-->

                            <!--latest post widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">latest post</h6>
                                </div>
                                <ul class="widget-latest-post">
                                    <li>
                                        <div class="thumb"><a href="#"><img src="img/post/post-thumb.jpg" alt=""/></a></div>
                                        <div class="w-desk">
                                            <a href="#">Old Father Getup</a>
                                            April 25, 2014
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="#"><img src="img/post/post-thumb-2.jpg" alt=""/></a></div>
                                        <div class="w-desk">
                                            <a href="#">Represent is the best way</a>
                                            March 28, 2014
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="#"><img src="img/post/post-thumb-3.jpg" alt=""/></a></div>
                                        <div class="w-desk">
                                            <a href="#">Alone with the music</a>
                                            May 05, 2014
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--latest post widget-->

                            

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

@section('script')

@endsection
@endsection()