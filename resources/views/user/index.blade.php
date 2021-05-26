@extends('user.layouts.master')
@section('title', 'Home')

@section('hero')
<div class="hero-image">
        <div class="hero-text container">
            <h1>Temukan Berita Terkini Tentang Teknologi</h1>
            <p>Situs berita yang mengulas serba-serbi teknologi</p>
        </div>
    </div>
@endsection

@section('sidebar-left')
            <aside id="left" class="container">
            <article class="all-content">
                <h1>Kategori</h1>
                <article class="content  category-sidebar">
                    <li><a class="category-sidebar" href="#computer-content">Computer</a></li>
                </article>
                <article class="content  category-sidebar">
                    <li><a class="category-sidebar" href="#gadget-content">Gadget</a></li>
                </article>
                <article class="content  category-sidebar">
                    <li><a class="category-sidebar" href="#games-content">Games</a></li>
                </article>
                <article class="content  category-sidebar">
                    <li><a class="category-sidebar" href="#internet-content">Internet</a></li>
                </article>
            </article>
            </aside>
@endsection

@section('content')
            <article class="all-content">
                <h1>Berita Hari Ini</h1>
                @foreach ($news as $content)
                @if($content->is_published == 1)
                <article class="content">
                    <h2>{{ $content->title }}</h2>
                    <p class="author">By {{ $content->authors()->first()->name}} / {{ $content->created_at }}</p>
                    <img class="image-content" src="/images/{{$content->picture}}">
                    <p>{{ $content->content }}</p>
                    <a href="#"
                        class="button">Selengkapnya</a>
                </article>
                @endif
                @endforeach
            </article>
@endsection

@section('sidebar-right')
<aside id="right" class="container">
            <div class="search">
                <input type="text" class="searchForm" placeholder="Cari berita apa?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <article class="all-content">
                <h1>Sedang Populer</h1>
                <article class="content">
                <?php $count = 0; ?>
                @foreach ($news as $content)
                @if($content->is_published == 1)
                <?php if($count == 2) break; ?>
                    <h2>{{ $content->title }}</h2>
                    <p>{{ $content->content }}</p>
                    <a href="#"
                        class="button">Selengkapnya</a>
                <?php $count++; ?>
                @endif
                @endforeach
                </article>
            </article>
            </article>
        </aside>
@endsection