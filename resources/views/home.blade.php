<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel-primi-passi</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  img{
    max-width: 100%;
    display: block;
  }

  a{
    text-decoration: none;
    color: currentColor;
  }

  .container{
    width: 1024px;
    margin: 0 auto;
  }

  .title{
    text-align: center;
    color: #555555;
    font-size: 60px;
  }

  header{
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 30px;
    background-color: #555555;
    padding: 20px;
    color: white;
    text-transform: uppercase;
  }

  header a:hover{
    text-decoration: underline
  }



</style>
<body>
  <header>
    <a href="{{ route('contacts') }}"> Contacts </a>
    <a href="{{ route('about') }}"> About </a>
    <a href="{{route('gallery')}}"> Gallery </a>
    <a href="{{route('where')}}"> Where </a>
  </header>
  <div class="container">

    <h1 class="title">{{$title}}</h1>

  </div>
</body>
</html>