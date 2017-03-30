<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quintype Demo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
$response = file_get_contents('http://sketches.quintype.com/api/v1/stories');
$menu = file_get_contents('http://sketches.quintype.com/api/v1/config');

$response1 = json_decode($response);
$menu1 = json_decode($menu);

$img_var = "hero-image-s3-key";
$auth_name = "author-name";
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Quintype</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3" class="panel-collapse collapse">
                <p class="lead"><a data-toggle="collapse" href="#collapse2">Menu</a></p>
                <!--<div id="collapse1" class="list-group panel-collapse collapse">-->
                    <div id="collapse1" class="list-group">
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[1]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[2]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[3]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[4]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[5]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[6]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[7]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[8]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[9]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[10]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[11]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[12]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[13]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[14]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[15]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[16]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[17]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[18]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[19]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[20]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[21]->name ?></a>
                </div>
                <div id="collapse2" class="list-group panel-collapse collapse">
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[1]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[2]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[3]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[4]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[5]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[6]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[7]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[8]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[9]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[10]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[11]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[12]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[13]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[14]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[15]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[16]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[17]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[18]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[19]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[20]->name ?></a>
                    <a href="#" class="list-group-item"><?php echo $menu1->sections[21]->name ?></a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active" style="height: 300px; width:900px; overflow: hidden;">
                                    <img class="slide-image" src="http://quintype-01.imgix.net/<?php echo $response1->stories[1]->$img_var ?>" alt="">
                                     <div class="carousel-content">
                                    <?php echo $response1->stories[1]->headline ?>
                                    </div>
                                </div>
                                <div class="item" style="height: 300px; width: 900px; overflow: hidden;">
                                    <img class="slide-image" src="http://quintype-01.imgix.net/<?php echo $response1->stories[2]->$img_var ?>" alt="">
                                    <div class="carousel-content">
                                    <?php echo $response1->stories[2]->headline ?>
                                    </div>
                                </div>
                                <div class="item" style="height: 300px; width: 900px; overflow: hidden;">
                                    <img class="slide-image" src="http://quintype-01.imgix.net/<?php echo $response1->stories[3]->$img_var ?>" alt="">
                                    <div class="carousel-content">
                                    <?php echo $response1->stories[3]->headline ?>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[4]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[4]->sections[0]->name ?></div>
                            <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[4]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[4]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                            <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[5]->$img_var ?>" alt="">
                            </div>
                            <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[5]->sections[0]->name ?></div>
                            <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[5]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[5]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[6]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[6]->sections[0]->name ?></div>
                            <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[6]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[6]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[7]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[7]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[7]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[7]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[8]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[8]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[8]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[8]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[9]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[9]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[9]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[9]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[10]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[10]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[10]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[10]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[11]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[11]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[11]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[11]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="    height: 122px;
                                            width: 100%;
                                            overflow: hidden;
                                            position: relative;">
                             <img src="http://quintype-01.imgix.net/<?php echo $response1->stories[12]->$img_var ?>" alt="">
                             </div>
                             <div style="    margin: 10px;
    font-size: large;
    color: darkred;
    font-style: italic;"><?php echo $response1->stories[12]->sections[0]->name ?></div>
                           <div class="caption">
                              
                                <h4><a href="#"><?php echo $response1->stories[12]->headline ?></a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span>-<?php echo $response1->stories[12]->$auth_name ?></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                   

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
