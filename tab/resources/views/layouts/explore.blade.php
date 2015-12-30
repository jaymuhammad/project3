<!DOCTYPE html>

<html>
	<head>
		<title>String Theory</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
	</head>
<body>
 <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand href="#">
      <img class="brand" src="img/guitar-icon1.png">
    </a>
      <p class="navbar-text">String Tab Theory</p>
      <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
          <li><a href="/">Home</a></li>
          <li class="active"><a href="/explore">Explore</a></li>
          <li><a href="/tabhub">TabHub</a></li>
        </ul>
      </div>
    </div>
  </div>
  <header class="main-header">
    <h1>Get All The Classic and Latest Guitar Music Tabs</h1>
  </header>
  <div class="jumbotron">
    <h2>To get started, just enter your name and e-mail and start exploring!</h2>
    <img class="logo-icon" src="http://www2.psd100.com/ppp/2013/10/0401/Music-note-symbol-icon-1004151629.png">
    <img class="main-icon" src="http://www.mouserunner.com/MusicalNotes1/MusicalNotes1Preview.png">
    
 </div>
 <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{!! Form::open( array('route' => 'explore_store', 'class' => 'form')) !!}
 {!! Form::text('name', 'Name') !!}
{!! Form::text('email', 'E-mail') !!}
{!! Form::submit('submit', array('class' => 'button')) !!}
{!! Form::close() !!}


<footer class="main-footer">
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
  </body>
</html>
