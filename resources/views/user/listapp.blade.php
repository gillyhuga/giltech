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
                    <h2>Microsoft: Performa Xbox Series X Tinggal Persoalan Optimasi Saja</h2>
                    <p>Pertempuran Microsoft dan Sony sudah dari dulu; jauh sebelum konsol terbaru mereka dirilis.
                        Sekarang, setelah Xbox Series X dan PlayStation 5 keluar...</p>
                    <a href="https://teknologi.info/277421/microsoft-performa-xbox-series-x-tinggal-persoalan-optimasi-saja/"
                        class="button">Selengkapnya</a>
                </article>
                <article class="content">
                    <h2>Apple Watch Sekarang dapat Memutar Spotify Tanpa iPhone</h2>
                    <p>Pengguna Apple Watch mungkin akan bersorak setelah membaca berita ini. Benar! Sekarang Anda bisa
                        langsung...</p>
                    <a href="https://teknologi.info/257394/apple-watch-dapat-memutar-spotify-tanpa-iphone/"
                        class="button">Selengkapnya</a>
                </article>
                <article class="content">
                    <h2>Update Windows 10 di April 2018; Apa Saja yang Baru?</h2>
                    <p>Dengan Windows 10, Microsoft telah memfokuskan diri ­untuk menghadirkan sistem operasi yang
                        paling modern dan paling...</p>
                    <a href="https://teknologi.info/304106/update-windows-10-april-2018/"
                        class="button">Selengkapnya</a>
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