<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Форма регистрации</title>
  <meta name="author" content="alexpa940">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="assets/js/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<style>
.form-group{
 margin-bottom: 15px;
}
label{
 margin-bottom: 15px;
}
input,
input::-webkit-input-placeholder {
 font-size: 11px;
 padding-top: 3px;
}
.form-control {
 height: auto!important;
padding: 8px 12px !important;
}
.input-group {
 box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
 border: 1px solid #ccc;
 margin-top: 28px;
 padding: 6px 12px;
 color: #666;
 text-shadow: 0 1px #fff;
 cursor: pointer;
 border-radius: 3px 3px;
 box-shadow: 0 1px #fff inset, 0 1px #ddd;
 background: #f5f5f5;
 background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
 background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-form{
 margin-top: 30px;
 margin: 0 auto;
 max-width: 400px;
 padding: 10px 40px;
background:#009edf;
color: #FFF;
text-shadow: none;
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
}
span.input-group-addon i {
 color: #009edf;
 font-size: 17px;
}
.login-button{
 margin-top: 5px;
}
</style>

<body>
<div class="container">
<div class="row main-form">
<body onload="document.registration.name.focus();">
<h1>Регистрация</h1>
<hr>
<br>

    <form  class="" name='registration'  method="post" id="ajax_form" action="#" >

      <div class="form-group">
      <label for="name" class="cols-sm-2 control-label">Имя:</label>
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
      <input name="name" type="text" class="form-control" id="name" placeholder="ИМЯ">
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="secname" class="cols-sm-2 control-label">Фамилия:</label>
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
      <input name="secname" type="text" class="form-control" id="secname" placeholder="ФАМИЛИЯ">
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="useremail" class="cols-sm-2 control-label">E-MAIL:</label>
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
      <input name="useremail" type="email" class="form-control" id="useremail" placeholder="EX@EXAMPLE.COM">
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="userpass" class="cols-sm-2 control-label">Пароль:</label>
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
      <input name="userpass" type="password" class="form-control" id="userpass" placeholder="Введите пароль">
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="userrepass" class="cols-sm-2 control-label">Повторите пароль:</label>
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
      <input name="userrepass" type="password" class="form-control" id="userrepass" placeholder="Введите пароль">
      </div>
      </div>
      </div>


      <br>

      <hr>

      <div class="form-group ">
      <a href="#" target="_blank" type="button" id="btn" class="btn btn-primary btn-lg btn-block login-button">Отправить</a>
      </div>

    </form>
    <div id="result_form"></div> 

    <br>

    </div>
    </div>
    


</body>
</html>