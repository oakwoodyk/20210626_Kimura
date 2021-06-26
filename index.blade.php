<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    p {
      font-size: "10px";
    }
  </style>
</head>

<body>
<p>{{$content}}</p>
  <form action="/test" method="POST">
    @csrf
    <p>氏名</p><input type="text" name="氏名" >
    <p>メールアドレス</p><input type="email" name="メールアドレス" ><br>
    <input type="submit"  >
  </form>
</body>

</html>