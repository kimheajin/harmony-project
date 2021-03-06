<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/upload.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/BandCallenge_Controller.js"></script>
  </head>
  <body>
    <!--
    |**************************************************************************
    | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
    |**************************************************************************
     -->
    <div class="top">
      @include('menu.topmenu')
    </div>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_미리듣기/악보출력
    |**************************************************************************
     -->
    <table id="tables">
    <tr>
    <td>
      <p>미리듣기 :</p>
    </td>
    <td>
      <div>
         <audio id="audioplayer" controls style="width:100%;" >
            <source src="script.mp3" type="audio/mp3">
         </audio>
      </div>
    </td>
    <tr>
      <td id="Result">악보결과</td>
      <td><img src="/img/c.jpg" width="400" height="400"></td>
    </tr>
    <tr>
      <td>
        <button type="button" name="modify" id="modify">수정</button>
      </td>
    </tr>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_게시글 작성란
    |**************************************************************************
     -->
    <tr>
      <td>게시글 제목: </td>
      <td><input type="text" id="title" rows="5"></td>
    </tr>
    <tr>
      <td id="content">게시글 내용: </td>
      <td>
        <textarea rows="10" cols="57" name="contents"></textarea>
      </td>
    </tr>
    <tr>
      <td>
        <button type="button" name="ok" id="ok">완료</button>
      </td>
    </tr>
    </table>
  </body>
</html>
