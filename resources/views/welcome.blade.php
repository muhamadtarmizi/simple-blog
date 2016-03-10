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
                        <li><a href="{{route('posts.index')}}">Write Posts</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="article">
                        <h1>Lorem Ipsum Article</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dui eu libero congue sagittis. Vestibulum sed libero massa. Duis odio enim, convallis nec eleifend eget, aliquet blandit purus. Nulla mattis placerat diam. In sodales, sapien in ultricies vulputate, tortor quam tincidunt erat, a feugiat felis nibh iaculis velit. Quisque eget volutpat enim, vitae scelerisque tellus. In pulvinar massa ligula, vel consequat odio molestie sed. Quisque imperdiet varius pellentesque. Cras vulputate tincidunt libero, a maximus justo euismod eu. Cras magna velit, congue quis laoreet ut, congue vel turpis. Fusce ac dolor et ipsum congue congue sit amet eu justo.</p>
                        <p>Vivamus ac massa neque. Nullam auctor sagittis enim, eget blandit dui faucibus nec. Pellentesque rutrum nec quam quis tempus. Morbi tempus dignissim orci eget lacinia. Sed ac nulla enim. Fusce quis sollicitudin magna. Fusce in nulla tortor. Maecenas sollicitudin nisi justo, sit amet aliquam nisi convallis laoreet. Duis libero eros, tempor vel dolor quis, dignissim finibus tellus. Proin nec tortor porttitor, convallis ante a, consequat elit. Proin at ante lectus.</p>
                        <p>Cras ut vestibulum sapien. Aliquam dignissim, lacus quis vestibulum viverra, ante metus rutrum velit, quis convallis felis mi at lectus. Mauris mollis dolor lacus, a facilisis metus aliquam non. Praesent sit amet elit tortor. Sed eleifend viverra mauris, sit amet elementum enim tempus vel. Nullam quis felis elementum purus hendrerit rhoncus eu in risus. Mauris et convallis ipsum, eu mattis eros. Pellentesque vel libero massa. Maecenas libero arcu, semper a malesuada sed, maximus eget enim. In ac velit laoreet, lobortis arcu nec, ultrices mauris. Suspendisse dapibus tempor mi, a bibendum tellus gravida nec. Nulla dictum scelerisque enim, et sagittis sapien hendrerit id. Pellentesque sit amet efficitur augue, eu tristique justo.</p>
                    </div>
                    <div class="article">
                        <h1>Lorem Ipsum Article</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dui eu libero congue sagittis. Vestibulum sed libero massa. Duis odio enim, convallis nec eleifend eget, aliquet blandit purus. Nulla mattis placerat diam. In sodales, sapien in ultricies vulputate, tortor quam tincidunt erat, a feugiat felis nibh iaculis velit. Quisque eget volutpat enim, vitae scelerisque tellus. In pulvinar massa ligula, vel consequat odio molestie sed. Quisque imperdiet varius pellentesque. Cras vulputate tincidunt libero, a maximus justo euismod eu. Cras magna velit, congue quis laoreet ut, congue vel turpis. Fusce ac dolor et ipsum congue congue sit amet eu justo.</p>
                        <p>Vivamus ac massa neque. Nullam auctor sagittis enim, eget blandit dui faucibus nec. Pellentesque rutrum nec quam quis tempus. Morbi tempus dignissim orci eget lacinia. Sed ac nulla enim. Fusce quis sollicitudin magna. Fusce in nulla tortor. Maecenas sollicitudin nisi justo, sit amet aliquam nisi convallis laoreet. Duis libero eros, tempor vel dolor quis, dignissim finibus tellus. Proin nec tortor porttitor, convallis ante a, consequat elit. Proin at ante lectus.</p>
                        <p>Cras ut vestibulum sapien. Aliquam dignissim, lacus quis vestibulum viverra, ante metus rutrum velit, quis convallis felis mi at lectus. Mauris mollis dolor lacus, a facilisis metus aliquam non. Praesent sit amet elit tortor. Sed eleifend viverra mauris, sit amet elementum enim tempus vel. Nullam quis felis elementum purus hendrerit rhoncus eu in risus. Mauris et convallis ipsum, eu mattis eros. Pellentesque vel libero massa. Maecenas libero arcu, semper a malesuada sed, maximus eget enim. In ac velit laoreet, lobortis arcu nec, ultrices mauris. Suspendisse dapibus tempor mi, a bibendum tellus gravida nec. Nulla dictum scelerisque enim, et sagittis sapien hendrerit id. Pellentesque sit amet efficitur augue, eu tristique justo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar">
                        <h3>Recent Posts</h3>
                        <ul class="nav-pills nav-stacked">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                            <li><a href="#">Aliquam dignissim, lacus quis vestibulum</a></li>
                            <li><a href="#">Nullam auctor sagittis enim, eget blandit dui faucibus</a></li>
                            <li><a href="#">Donec luctus dui eu libero congue sagittis</a></li>
                            <li><a href="#">Pellentesque rutrum nec quam quis tempus</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
