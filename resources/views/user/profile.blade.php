@extends('user.layouts.master')
@section('title', 'Profile')

@section('hero') 
    <div class="hero-image_profile">
        <div class="hero-text container">
            <h1>Hello My Name is <strong>Gilly</strong> <br> it's Really Nice to Meet You.</h1>
        </div>
    </div>
@endsection  

 @section('photo-profile')   
 <aside id="left" class="container">
            <article class="all-content">
                <h1>My Profile</h1>
                <article class="content  category-sidebar">
                <div style="text-align: center;">
                        <img class="image-profile" src="assets/images/profile.jpg">
                    </div>
                </article>
            </article>
    

        </aside>
@endsection

@section('profile')  
            <article class="all-content">
                <h1>a bit about me:</h1>
                <article class="content">
                    
                    <h2>Hi,I'am <strong>Gilly Huga Anargya</strong></h2>
                    <p>I'm a software engineer, with a strong interest in technology and good aesthetics.
                        But i think you've probably figured that out by now.
                        <br>
                        As a software engineer, My goal is to always build applications that are scalable and efficient
                        under the hood while providing engaging, pixel-perfect user experiences.
                    </p>
                    <div style="text-align: center;">
                        <a href="https://gillyhuga.xyz/assets/file/Resume.pdf" class="button">View Resume</a>
                    </div>
                </article>
            </article>
            <article class="all-content">
                <h1>Education :</h1>
                <article class="content">
                    <h2>SD Negeri Klojen Malang</h2>
                    <p>2007 - 2013</p>
                </article>
                <article class="content">
                    <h2>SMP Negeri 24 Malang</h2>
                    <p>2013 - 2016</p>
                </article>
                <article class="content">
                    <h2>SMK Negeri 8 Malang</h2>
                    <p>2016 - 2019</p>
                </article>
                <article class="content">
                    <h2>Universitas Muhammadiyah Malang</h2>
                    <p>2019 - Present</p>
                </article>

            </article>
@endsection