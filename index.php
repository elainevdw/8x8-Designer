<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>8x8 Designer</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- google font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Code+Pro:500,700">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- custom -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/scripts.js"></script>
</head>

<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">8x8 Designer (beta)</a> 
        </div><!-- .navbar-header --> 
      </div><!-- .container -->
    </nav>
    
    <div class="container theme-showcase" role="main">
    
      <div class="row">
      
        <div class="col-lg-6">
            
            <div class="row">
            
            	<div class="col-lg-6"> 
            
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Matrix</h3>
                      </div>
                      <div class="panel-body">                          
                          <div id="grid"> 
                          </div><!-- #grid -->
                      </div>
                    </div>            
                </div><!-- .col -->
                
            	<div class="col-lg-6">
                
                        
            
                    <div class="panel panel-default matrix-panel">
                      <div class="panel-heading">
                        <h3 class="panel-title">Settings</h3>
                      </div>
                      <div class="panel-body">
                            <input type="text" class="form-control" id="frameTitle" placeholder="frame title" /><br />
                            <input type="text" class="form-control" id="frameRate" placeholder="framerate" /><br />   
                            <label>preview color</label><br />                 
                            <div class="color default"><span id="currentColor" class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
                            <div class="color red"></div>
                            <div class="color orange"></div>
                            <div class="color yellow"></div>
                            <div class="color green"></div>
                            <div class="color blue"></div>
                      </div>
                    </div>
                
                
                </div><!-- .col -->
            
            </div><!-- .row -->
        </div><!-- .col -->
        
        <div class="col-lg-6">
          	          
          <p style="font-size:small;">
            click and drag to toggle lights on and off<br />
            <em>optional:</em> name your frame and edit your delay (default 50)<br />
            click the export button to generate code<br />
            copy and paste into your anim.h file and have fun!</p>
            
        </div><!-- .col -->
        
      </div><!-- .row -->
      
      <div class="row">
      
      	<div class="col-sm-6">  
        
          <div id="controls">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Controls
                <button id="exportFrame">Export Frame</button></h3>
              </div>
              <div class="panel-body">
                <button id="allOn">All On</button>
                <button id="allOff">All Off</button>
                <button id="invert">Invert</button>
                <br />
                <br />
                <button id="shiftLeft">Shift Left</button>
                <button id="shiftRight">Shift Right</button>
              </div>
            </div>
          </div><!-- #controls -->
        
        </div><!-- .col -->
        
      	<div class="col-sm-6">
          
          <div id="export">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">anim.h</h3>
              </div>
              <div class="panel-body">
                <textarea id="animh" class="form-control"></textarea>
              </div>
            </div>
          </div><!-- #export -->  
        
        </div><!-- .col -->
      
      </div><!-- .row --> 
      
    </div><!-- .container -->

</body>
</html>
