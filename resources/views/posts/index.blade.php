<!DOCTYPE html>
<html>
    <head>
        <title>Simple Blog</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">My Blog</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Write Posts</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <h2>List of Post <a href="{{route('posts.form')}}"><button class="btn btn-primary pull-right">Create</button></a></h2>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <td width="5%">No.</td>
                        <td>Title</td>
                        <td>Category</td>
                        <td>Created At</td>
                        <td>Updated At</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Lorem Ipsum</a></td>
                        <td>My Post</td>
                        <td>2016-03-10</td>
                        <td>2016-03-10</td>
                        <td class="text-right">
                            <button class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Lorem Ipsum</a></td>
                        <td>My Post</td>
                        <td>2016-03-10</td>
                        <td>2016-03-10</td>
                        <td class="text-right">
                            <button class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">Lorem Ipsum</a></td>
                        <td>My Post</td>
                        <td>2016-03-10</td>
                        <td>2016-03-10</td>
                        <td class="text-right">
                            <button class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
