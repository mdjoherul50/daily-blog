@extends('template.master')
@include('template.includes.banner')
@section('content')
    <section id="blog">
        <!--blog-heading--------------->
        <div class="blog-heading">
            <span>Recent Posts</span>
            <h3>My Blog</h3>
        </div>

        <!--container---------------->
        <div class="blog-container">
            <!--box-1------------->
            <div class="blog-box">
                <!--img---->
                <div class="blog-img">
                    <img src="https://www.searchenginejournal.com/wp-content/uploads/2019/07/the-essential-guide-to-using-images-legally-online.png"
                        alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>18 July 2021 / Web Design</span>
                    <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                        veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <div class="blog-btn-section">
                        <a href="#">Read More</a>
                        <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                    </div>
                </div>
            </div>

            <!--box-2------------->
            <div class="blog-box">
                <!--img---->
                <div class="blog-img">
                    <img src="https://neilpatel.com/wp-content/uploads/2021/05/How-to-Find-Image-Sources.jpg"
                        alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>18 July 2021 / Web Design</span>
                    <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                        veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <div class="blog-btn-section">
                        <a href="#">Read More</a>
                        <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                    </div>
                </div>
            </div>

            <!--box-3------------->
            <div class="blog-box">
                <!--img---->
                <div class="blog-img">
                    <img src="images/banner.jpg" alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>18 July 2021 / Web Design</span>
                    <a href="#" class="blog-title">What Has Happened to All of the Web Design Ideas?</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi
                        veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <div class="blog-btn-section">
                        <a href="#">Read More</a>
                        <p class="blog-comment"><i class="fa fa-comments"></i>50 Comments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection