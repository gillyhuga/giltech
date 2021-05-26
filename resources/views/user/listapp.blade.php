@extends('user.layouts.master')
@section('title', 'List App')

@section('listapp')
            <article id="computer-content" class="all-content">
                <h1>List App</h1>
                <article class="content">
                    <form class="add-items">
                        <input type="text" class="form" id="todo-list-item" placeholder="Apa yang mau kamu list?">
                        <button class="button add-items " type="submit">Tambahkan </button>
                      </form>
                </article>
                <article class="content ">
                    <ul id="list-items"> 
                        
                    </ul>
                </article>
                <article class="content">
                    <p id="count-list">

                    </p>
                    <button class="button clear-all" type="submit">Clear</button>
                </article>
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