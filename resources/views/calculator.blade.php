<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>calculator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class = "container" id="contain">
      <div class="input1">

        <div class="row">
          <input id="degree" class="set" type="radio" name="angle" value="degree"  checked>
            <label class="set" for="degree">Degree</label>
          <input id="decimal" class="set" type="radio" name="decimalfraction" value="decimal"  checked>
          <label class="set" for="decimal">Decimal</label>
          <div class="set" id="moveleft">left</div>
        </div>
        <div class="row">
          <input id="radian" class="set" type="radio" name="angle" value="radian">
          <label class="set" for="radian">Radian</label>
          <input id="fractions" class="set" type="radio" name="decimalfraction" value="fractions" >
          <label class="set" for="fractions">Fraction</label>
          <div class="set" id="moveright">right</div>
        </div>
      </div>
<!--      計算結果を出力する場所-->
      <div id = "output_total" class="output ">0</div>
<!--      計算過程を出力する -->
      <div id = "output_sub" class="output active">0</div>
<!--      ボタンを配置する場所-->
      <div class="input2">
          <section class ="row">
            <div class="setting" id="cmath">math</div>
            <div class = "setting" id="cconstruction">構造</div>
            <div class ="setting" id = "cfunction">関数</div>
            <div class ="setting" id ="ccontent">定数</div>
          </section>
          <section class ="row">
            <div class="setting" id="clear">C</div>
            <!--<div class="setting" id="clear"><form action="" method="POST" id="test"><button type="submit"  name="C"></button></form>C</div>-->
            <div class = "setting" id="variable">x</div>
            <div class="setting" id="bs">BS</div>
            <div class="setting" id="equal_btn">=</div>
          </section>
        <div id="panel">
          <div id="math">
            <section class = "row">
              <div class = "num_bth one_nine " data-index-id = "7" >7</div>
              <div class = "num_bth one_nine " data-index-id = "8" >8</div>
              <div class = "num_bth one_nine " data-index-id = "9" >9</div>
              <div class = "num_bth cal" data-index-id= "/">÷</div>
            </section>
            <section class = "row">
              <div class = "num_bth one_nine " data-index-id = "4" >4</div>
              <div class = "num_bth one_nine " data-index-id = "5" >5</div>
              <div class = "num_bth one_nine " data-index-id = "6" >6</div>
              <div class = "num_bth cal" data-index-id = "*">×</div>    
            </section>
            <section class = "row">
              <div class = "num_bth one_nine " data-index-id = "1" >1</div>
              <div class = "num_bth  one_nine" data-index-id = "2" >2</div>
              <div class = "num_bth  one_nine" data-index-id = "3" >3</div>
              <div class = "num_bth cal" data-index-id = "-">－</div>
            </section>
            <section class = "row">
              <div class = "num_bth" id="zerozero" data-index-id = "00" >00</div>
              <div class = "num_bth" id="zero" data-index-id = "0" >0</div>
              <div class = "num_bth" id="point" data-index-id = "." >.</div>
              <div class = "num_bth cal" data-index-id = "+">+</div> 
            </section>
          </div>
          <div id="construction">
            <section class ="row">
                <div class ="const" id="pow">累乗</div>
                <div  class ="const" id="parenthes">かっこ</div>
                <div  class ="const" id="root">ルート</div>
                <div  class ="const" id="fraction">分数</div>
            </section>
            <section class ="row">
                <div  class ="const" id = "differential">微分</div>
                <div  class ="const" id = "Indefinite integral">不定</div>
                <div  class ="const" id ="Definite integral">定積</div>
            </section>
          </div>
          <div id ="func">
            <section class ="row">
                <div class="funct" id="sin">sin</div>
                <div class="funct" id="cos">cos</div>
                <div class="funct" id="tan">tan</div>
            </section>
            <section class="row">
                <div class="funct" id="sin-">sin-1</div>
                <div class="funct" id="cos-">cos-1</div>
                <div class="funct" id="tan-">tan-1</div>
            </section>
            <section class="row">
                <div class="funct" id="log">log</div>
            </section>
          </div>
          <div id="content">
            <section class="row">
                <div class="conte" id="pi">pi</div>
                <div class="conte" id="napier">e</div>
                <div class="conte" id="gravity">g</div>
            </section>
            <section class="row">
                <div class="conte" id="a">a</div>
                <div class="conte" id="b">b</div>
                <div class="conte" id="c">c</div>
            </section>
          </div>       
        </div>     
      </div>
    </div>
   <form action="/retu" method="POST"><button type="submit" id="efgh" name="retu">戻る</button></form>
    <!--<form action="/next" method="POST"><button type="button" id="efgh">進む</form>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/calculator.js"></script>
  </body>
</html>