<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>Document</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Nunito', sans-serif;
      background-color: #444444;
    }
    
    img{
      max-width: 100%;
      display: block;
    }
  
    a{
      text-decoration: none;
      color: currentColor;
      border-radius: 10px;
      background-color: #555555;
    }
  
    .container{
      width: 1024px;
      margin: 0 auto;
    }
  
    .title{
      text-align: center;
      color: coral;
      font-size: 60px;
    }
  
    header{
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
      background-color: #555555;
      color: white;
      text-transform: uppercase;
    }
  
    header a:hover{
      border-bottom: 2px solid currentColor;
      padding: 20px 0;
    }

    .gallery-wrapper{
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
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
    <a href="{{route('home')}}">Home</a>
    <a href="{{ route('contacts') }}"> Contacts </a>
    <a href="{{ route('about') }}"> About </a>
    <a class="active" href="{{route('gallery')}}"> Gallery </a>
    <a href="{{route('where')}}"> Where </a>
  </header>
  <div class="container">

    <h1 class="title">{{$title_gallery}}</h1>
    <div class="gallery-wrapper">
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
      <figure>
        <img src="https://picsum.photos/200/300" alt="">
      </figure>
    </div>

  </div>
</body>
</html>