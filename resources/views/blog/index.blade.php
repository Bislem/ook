@extends('layouts.default')


@section('content')
<div class="blog container">
    <div class="blog-main container">

        @foreach ($results as $post)
            <div class="blog-post-card">
                <div class="blog-post-card-image">
                    <img src="<?= $post->image ?>" alt="...">
                </div>
                <div class="blog-post-card-body">
                    <h2><?= $post->title ?></h2>
                    <div class="blog-post-card-info">
                        <span><i class="fas fa-calendar-week"></i> <?= date('d M Y',strtotime($post->created_at))  ?></span>
                        <?php
                            $author = app('db')->select('select * from users where id = '.$post->author)[0];
                            $category = app('db')->select('select * from categories where id = '.$post->category)[0];
                        ?>
                        <span><i class="fas fa-user"></i> <a href="<?= url('/blog/user/'.$author->slug)?>" target="_blank" class="link" rel="noopener noreferrer"> <?= $author->username ?></a></span>
                        <span><i class="fas fa-tags"></i> <a href="<?= url('/blog/category/'.$category->slug)?>" target="_blank" class="link" rel="noopener noreferrer"> <?= $category->title ?></a></span>
                    </div>
                    <div class="blog-post-card-text">
                        <p>
                            <?= $post->description ?>
                        </p>
                    </div>
                    <div class="blog-post-card-cta">
                        <a href="<?= url("blog/post/".$post->slug)?>" class="btn btn-sm primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            <div class="pagination">
                {{$results->links('layouts.pagination')}}
            </div>
        </div>
    </div>
    

    <div class="aside">
        <aside>
            <div class="container">
                <div class="searchbox">
                    <input type="text" placeholder="Search">
                    <button><i class="fas fa-search"></i></button>
                </div>
    
                <div class="latest-posts">
                    <h2 class="dancing" style="font-size: 30px;">Latest posts</h2>
                    <ul>
                        @foreach ($latest as $post)
                        <li>
                            <h4><a href="<?= url('/blog/post/'.$post->slug)?>" target="_blank" rel="noopener noreferrer" class="link"><?= $post->title ?></a></h4>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="container" style="margin-top: 30px">
                <div class="latest-posts">
                    <h2 class="dancing" style="font-size: 30px;">Categories</h2>
                    <select name="category" id="category" class="form-input" style="width: 70%;height:50px">
                        @foreach ($categories as $cat)
                            <option value="{{url('/blog/category/'.$cat->slug)}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                    <button id="go" style="width: 20%;height: 100%;display: inline-block  ;margin: 5px 0 0 3px;" class="btn btn-sm primary">Go</button>
                </div>
            </div>

            <div class="container" style="margin-top: 30px">
                <div class="latest-posts">
                    <h2 class="dancing" style="font-size: 30px;">Subscribe to my newsletter</h2>
                    <form action="{{url('/blog/subscribe')}}" method="POST"  style="text-align: right">
                        @csrf
                        <input style="width: 100%;margin: 10px 0;height: 50px;" type="email" required class="form-input" name="email" placeholder="Your email here">
                        <button style="width: fit-content;margin: 5px 0;font-size: 15px;padding: 5px !important;" class="btn btn-sm primary">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="container" style="margin-top: 30px">
                <div class="latest-posts">
                    <h2 class="dancing" style="font-size: 30px;">Follow me</h2>
                    <div class="footer-socials">
                        <span><a class="footer-social" target="blank" href="https://www.youtube.com/channel/UC4Nr45KQzhV5OAx-JrMV1uA"><i class="fab fa-youtube"></i></a></span>
                        <span><a class="footer-social" target="blank" href="https://chettout-abdeslam.blogspot.com"><i class="fab fa-blogger"></i></a></span>
                        <span><a class="footer-social" target="blank" href="https://www.github.com/bislem"><i class="fab fa-github"></i></a></span>
                        <span><a class="footer-social" target="blank" href="https://twitter.com/oceanofknowled6"><i class="fab fa-twitter"></i></a></span>
                        <span><a class="footer-social" target="blank" href="https://www.facebook.com/loup1999"><i class="fab fa-facebook"></i></a></span>
                    </div>
                </div>
            </div>

        </aside>
    </div>
</div>
@endsection
@section('head')
    <link rel="stylesheet" href="css/blog.css">
@endsection

@section('foot')
    <script>
        const goToCategoryBtn = document.querySelector('#go')
        const category = document.querySelector('#category');

        goToCategoryBtn.addEventListener('click',goToCategory);

        function goToCategory(){
            const url = category.options[category.selectedIndex].value;
            window.location.href = url;
        }
    </script>
@endsection