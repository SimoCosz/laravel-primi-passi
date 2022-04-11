<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>laravel-primi-passi</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Nunito', sans-serif;
    }

    body{
      background-image: url('https://birchtree.nyc3.digitaloceanspaces.com/images/wwdc18/dev-dots.png');
      background-position: center;
      background-size: cover;
      height: 100vh;
    }
    
    img{
      max-width: 100%;
      display: block;
    }
  
    a{
      text-decoration: none;
      color: currentColor;
      border-radius: 10px;
    }
  
    .container{
      width: 1024px;
      margin: 0 auto;
    }
  
    .title{
      text-align: center;
      color: coral;
      font-size: 60px;
      background-color: transparent;
    }
  
    header{
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
      background-image: linear-gradient(#444444, transparent);
      color: white;
      text-transform: uppercase;
    }
  
    header a:hover{
      border-bottom: 2px solid currentColor;
      padding: 20px 0;
    }

    .active{
      color: coral;
      font-size: 20px;
      padding: 20px 0;
      border-bottom: 3px solid coral;
      font-weight: bold;
    }

    a.active:hover{
      text-decoration: none;
      border-bottom: 3px solid coral;
    }
  
  
  
  </style>
</head>
<body>
  <header>
    <a class="active" href="{{route('home')}}">Home</a>
    <a href="{{route('contacts')}}"> Contacts </a>
    <a href="{{route('about')}}"> About </a>
    <a href="{{route('gallery')}}"> Gallery </a>
    <a href="{{route('where')}}"> Where </a>
  </header>
  <div class="container">

    <h1 class="title">{{$title}}</h1>

  </div>
</body>
</html>