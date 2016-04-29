@extends('main')
@section('title', 'Homepage')
@section('content')

     <div class="container" >
        <div class ="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                    <h1>Welcome to my Blog!</h1>
                    <p class="lead">Thank you so much for visisting. This is my tesst website built with laravel. Please read my latest post.</p>
                    <P><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></P>
                    </div><!--end jumbotron-->    
                </div><!--end column-->
        </div><!--end of .row-->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quas consequatur doloremque totam eveniet recusandae. Reprehenderit saepe nulla recusandae, ullam. Fuga quasi similique commodi eveniet voluptatum dolorem officia in perspiciatis...
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quas consequatur doloremque totam eveniet recusandae. Reprehenderit saepe nulla recusandae, ullam. Fuga quasi similique commodi eveniet voluptatum dolorem officia in perspiciatis...
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quas consequatur doloremque totam eveniet recusandae. Reprehenderit saepe nulla recusandae, ullam. Fuga quasi similique commodi eveniet voluptatum dolorem officia in perspiciatis...
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quas consequatur doloremque totam eveniet recusandae. Reprehenderit saepe nulla recusandae, ullam. Fuga quasi similique commodi eveniet voluptatum dolorem officia in perspiciatis...
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
             
            </div>
        </div>
   @endsection