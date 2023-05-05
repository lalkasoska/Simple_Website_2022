<?php 
$db = @mysqli_connect('localhost', 'root', '', 'guestbook') or die('Ошибка соединения с БД');// Подключаем базу данных
mysqli_set_charset($db, "utf8mb4") or die('Не установлена кодировка'); // Устанавливаем кодировку
include 'foo.php';// Подключаем файл с функционалом гостевой книги

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><!-- Подключаем внешние таблицы стилей -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"><!-- Подключаем внешние таблицы стилей -->
<!-- Для некоторых элементов стили прописаны во внутренней таблице стилей и в самих тегах, чтобы на примере показать различный приоритет стилей -->
<title>Отзывы</title>
<style>
  * {border-radius: 25px; font-family: Comic Sans MS;}
  body{
    background: url(guestbookBG.jpg);
    background-attachment: fixed;
  }
  .alert.alert-mess:before{
    content: "";
    position: absolute;
    border: 6px solid transparent;
    border-bottom: 12px solid #d4edda;
    top: -16px;
    left: 0px; 
  }
  .alert.alert-mess{
    display: inline-block;
  }
  header.site_header {margin: 15px auto; min-width:600px; width:99%; color: white }/*Устанавливаем ширину 99%, чтобы не возникала полоса горизонтальной прокрутки*/
  header.site_header { height: 150px; background-color:transparent; text-align:center; }/*Задаём нужный внешний вид*/
  #menu_back {width: 550px; background: #1bbf2b; margin:auto; margin-top: 25px; align-content: center; border-radius: 25px; text-align: center;} /*Задаём нужный внешний вид и отступы*/
  #menu {padding:0; list-style:none; width: 550px; align-content: center; border-radius: 25px;text-align: center;} /*Задаём нужный внешний вид и отступы*/
  #menu li { display: inline; text-align: center; border-radius: 25px; }/*Задаём нужный внешний вид и отступы*/
  #menu a {color: white; text-decoration: none; display: inline-block;width: 100px; padding: 2px; border-radius: 25px;text-align: center;}/*Задаём нужный внешний вид и отступы*/
  #menu a:hover {color:white; background:blue;}/*Задаём изменение цвета при наведении на ссылку*/
  .alert {background-color: white; border-width: 3px; border-color: #1bbf2b;}
  .alert.alert-mess::before {border-bottom: 0px;}
  .badge-pill {background-color: white;}
  .badge {color: white; background-color: #1bbf2b; text-shadow: /*Добавляем тексту обводку для читаемости*/
		-0   -1px 0   #000000,
		 0   -1px 0   #000000,
		-0    1px 0   #000000,
		 0    1px 0   #000000,
		-1px -0   0   #000000,
		 1px -0   0   #000000,
		-1px  0   0   #000000,
		 1px  0   0   #000000,
		-1px -1px 0   #000000,
		 1px -1px 0   #000000,
		-1px  1px 0   #000000,
		 1px  1px 0   #000000,
		-1px -1px 0   #000000,
		 1px -1px 0   #000000,
		-1px  1px 0   #000000,
		 1px  1px 0   #000000;}
  
</style>
</head>
<body>
  <header class="site_header">
      <h1>ОТЗЫВЫ</h1>
      <div id ="menu_back">
          <ul id= "menu">
              <!-- Горизонтальное меню -->
              <li><a href="index.html">Главная</a></li>
              <li><a href="about.html">О нас </a> </li>
              <li><a href="contacts.html">Контакты</a></li>
              <li><a href="guestbook.php">Отзывы</a></li>
              <li><a href="calculus.php">Цены</a></li>
          </ul>
      </div>
  </header>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="text-white mb-2 d-block" style=" text-shadow:
		-0   -1px 0   #000000,
		 0   -1px 0   #000000,
		-0    1px 0   #000000,
		 0    1px 0   #000000,
		-1px -0   0   #000000,
		 1px -0   0   #000000,
		-1px  0   0   #000000,
		 1px  0   0   #000000,
		-1px -1px 0   #000000,
		 1px -1px 0   #000000,
		-1px  1px 0   #000000,
		 1px  1px 0   #000000,
		-1px -1px 0   #000000,
		 1px -1px 0   #000000,
		-1px  1px 0   #000000,
		 1px  1px 0   #000000;">Сообщений в базе: <?php echo $cou.'<br>'; ?></span>
          <nav aria-label="...">
            <ul class="pagination"> <!-- Кнопки перехода на другие страницы -->
              
              <?php for ($i = 1; $i <= $pagesCount; $i++) {                  
                
                if ($page == $i) {
                  echo '<li class="page-item active"><a class="page-link" style="border-radius: 3px;" href="?page='.$i.'">'.$i.'</a></li>';// Применяем к текущей странице особое выделение
                }else{
                  echo '<li class="page-item"><a class="page-link" style="border-radius: 3px;" href="?page='.$i.'">'.$i.'</a></li>
                  ';
                }
              }
              
              
              ?>
            </ul>
          </nav>
           <?php if(!empty($arr)): ?> <!--Выводим сообщения -->
            <?php for($b = $first; $b <= $last; $b++){ ?>
                <div class = "badge badge-warning badge-pill"><?=$arr[$b]['name']?>  <?=$arr[$b]['date']?></div><br>
                <div class="alert alert-success mt-3 p-1 alert-mess"><?=$arr[$b]['text']?></div><br>
            <?php } ?>
          <?php endif; ?>

          <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>"method="post"><!-- Создаём формы ввода сообщения -->
            <div class="form-group">
              <small class="text-white">Введите имя</small>
              <input type="text" class="form-control" name="name" id="name" data-attribut="Lexus">
              <input type="hidden" id="secret" name="secret" value="">
              <div class="block text-warning"></div>
            </div>
             <div class="form-group">
              <small class="text-white">Введите сообщение</small>
              <textarea name="txt" id="form" rows="3" class="form-control"></textarea>
              <button class="btn btn-success mt-3" type="submit" name="add" id="btn">Отправить</button>
             </div>
             <span class="span text-black"></span>

          </form>
          <nav aria-label="...">
            <ul class="pagination"> <!-- Дублируем кнопки перехода на другие страницы -->
            
              <?php for ($i = 1; $i <= $pagesCount; $i++) {                  
                
                if ($page == $i) {
                  echo '<li class="page-item active"><a class="page-link" style="border-radius: 3px;" href="?page='.$i.'">'.$i.'</a></li>';
                }else{
                  echo '<li class="page-item"><a class="page-link" style="border-radius: 3px;" href="?page='.$i.'">'.$i.'</a></li>
                  ';
                }
              }
              
              
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>  
<script type="text/javascript">
  let name = document.querySelector('#name'); // Сохраняем имя, чтобы оно осталось в поле после перезагрузки страницы
  name.value = localStorage.getItem('names');
  name.oninput = () => {
  localStorage.setItem('names', name.value);
  };


</script>
</body>
</html>