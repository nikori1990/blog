@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            @foreach ($posts as $post)

            <h2>
                <a href="#">{{ $post->title }}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            {{-- <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p> --}}
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{ date('M j, Y', strtotime($post->created_at)) }}</p>
            <hr>
            {{-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> --}}
            {{-- <hr> --}}
            <p>{{ $post->body }}</p>
            <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            @endforeach


            <!-- Pager -->
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
            {{-- <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul> --}}

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>
	</div>

@stop