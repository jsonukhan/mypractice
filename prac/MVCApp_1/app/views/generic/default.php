
<html>
    <head>
        <title><?=Config::get('site_name')?></title>
        <meta charset="UTF-8">
        <script src = "<?php echo Config::get('baseURL').DS.'public'.DS?>js/custom.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                    <a class="navbar-brand" href="<?php echo Config::get('baseURL').DS?>home"><?=Config::get('site_name')?></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        
                        <li><a href="<?php echo Config::get('baseURL').DS?>home">Home</a></li>
                        <li><a href="<?php echo Config::get('baseURL').DS?>student">Student</a></li>
                        <li><a href="<?php echo Config::get('baseURL').DS?>teacher">Teacher</a></li>
                        <li><a href="<?php echo Config::get('baseURL').DS?>course">Course</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br/>
        <br/>
        <br/>
        <br/>
        
