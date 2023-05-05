<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>Пример верстки</title>
        <style>
            * {border-radius: 25px;  text-align: center; font-family: Comic Sans MS;}
            .img_responsive  {max-width: 500; max-height: 500;}
            header, nav, section, article, aside, footer {display: block;}
            header.top_banner, header.site_header, footer, #main_wrapper {margin: 5px auto; min-width:600px; width:99%; }
            header.top_banner, footer{ text-align:center; }
            header.top_banner{ height: 35px; padding-top:15px; background-color:#F2DCDC;}
            header.site_header{ height: 150px; background-color:transparent; text-align:center; }
            footer{ height: 20px; background-color:RGB(198,217,240); position: absolute; bottom: 0; border-radius: 0%;}
            section{ padding:15px; background-color: #3688c2; overflow:hidden;}
            #clearD { clear:both; }
            article.infoblock {background-color: #3688c2; margin:438px 0px 10px 0;padding:2px 8px; }
            header.infoblock_head { padding:0px 8px; text-align:center; }
            #menu_back {width: 550px; background:#1bbf2b; margin:auto; align-content: center;} /*Задаём нужный внешний вид и отступы*/
            #menu {padding:0; list-style:none; width: 550px; align-content: center;} /*Задаём нужный внешний вид и отступы*/
            #menu li { display: inline; text-align: center; }/*Задаём нужный внешний вид и отступы*/
            #menu a {color:white;text-decoration: none; display: inline-block;width: 100px; padding: 2px;}/*Задаём нужный внешний вид и отступы*/
            #menu a:hover {color:white; background:blue;}/*Задаём изменение цвета при наведении на ссылку*/
            body { background: url(background.png); }
            section h2 {color: white; text-shadow: 
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
         #pricesNames {text-align: left;  width: 150px; float: left; height:308px;}
         #prices {text-align: left;  width: 125px; float: left;}
         #calculus{text-align: left; float: left; margin-left: 50px; color:white; background:green; height:440px; padding:5px; width:300px;}
        </style>
    </head>
<body>
    <header class="site_header">
        <h1>ПЕРСПЕКТИВНЫЕ СТУДЕНТЫ</h1>
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
    <div id="main_wrapper">
        <section >
            <section style = "background: green; width: 275px; float: left; margin-left: 600px;">
            <h2 style="text-align:left; margin-left: 102px; ">Цены</h2><!-- Надпись "Цены" -->
            
            <h2 id = "pricesNames"> <!-- Имена -->
                Дмитрий:<br>
                Марк:<br>
                Татьяна:<br>
                Софья:<br>
                Екатерина:<br>
                Сергей:
            </h2>
            <h2 id = "prices"> <!-- Цены -->
                300 р/ч<br>
                10000 р/ч<br>
                666 р/ч<br>
                700 р/ч<br>
                666 р/ч<br>
                4 р/ч<br>
            </h2>
            </section>
            <form id = "calculus"><!-- Форма калькулятора -->
                <div class="row mb-3">
                    <div class="form-group col-md-6 col-sm-6">
                    <p class="badge badge-warning">Дата</p><!-- Поле даты -->
                    <input type="text" name="mess" class="form-control" id="date" required="" placeholder="31.12.2022" required=""/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                    <p class="badge badge-warning">Время начала работы</p><!-- Поле времени -->
                    <input type="text" name="mess" id="startTime" class="form-control" placeholder="23:00" required=""/>
                    </div>
                </div>
                <br>
                <!-- Чекбоксы для выбранных исполнителей -->
                <div class="custom-control custom-checkbox row d-flex justify-content-center mb-3" style = "text-align: left; margin-left: 50px; ">
                    <div class="col-md-3" style="visibility: visible; text-align: left;">
                    <input type="checkbox" id="dima" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="dima">Дмитрий</label>
                    </div>
                
                    <div class="col-md-3" style="visibility: visible;text-align: left;">
                    <input type="checkbox" id="mark" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="mark">Марк</label>
                    </div>
                
                    <div class="col-md-3" style="visibility: visible;text-align: left;">
                    <input type="checkbox" id="tanya" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="tanya">Татьяна</label>
                    </div>

                    <div class="col-md-3" style="visibility: visible;text-align: left;">
                    <input type="checkbox" id="sonya" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="sonya">Софья</label>
                    </div>

                    <div class="col-md-3" style="visibility: visible;text-align: left;">
                    <input type="checkbox" id="katya" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="katya">Екатерина</label>
                    </div>

                    <div class="col-md-3" style="visibility: visible;text-align: left;">
                    <input type="checkbox" id="serega" name="mess" class="custom-control-input"/>
                    <label class="custom-control-label" for="serega">Сергей</label>
                    </div>
                </div>
                <div class="row mb-3">
                
                    <div class="form-group col-md-12"><!-- Ползунок для изменения общего времени работы -->
                    <label for="range"><br>Общее время работы <span class="worktime">0</span> <span>ч</span></label><br>
                    <input type="range" class="custom-range" min="1" max="24" step="1" id="range" value="1"/>
                    </div>
                
                </div>
                <div class="row col-12 mb-3"><span id="out">0.0</span> <span class="rub">₽</span></div>
                <div class="row"><!-- Кнопка для запуска функции подсчёта -->
                    <div class="col-md-2 col-12">
                        <input type="button" name="adress" id="btn" class="btn-block btn btn-primary" value="Считать"/>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <footer>
        Copyright
    </footer>
<script>
    var btn = document.querySelector('#btn'),
    out = document.querySelector('#out'),
    date = document.querySelector('#date'),
    startTime = document.querySelector('#startTime'),
    dima = document.querySelector('#dima'),
    mark = document.querySelector('#mark'),
    tanya = document.querySelector('#tanya'),
    sonya = document.querySelector('#sonya'),
    katya = document.querySelector('#katya'),
    serega = document.querySelector('#serega'),
    range = document.querySelector('#range'),
    worktime = document.querySelector('.worktime').innerHTML = 1;
    dimaPrice = 300,
    markPrice = 10000,
    tanyaPrice = 666,
    sonyaPrice = 700,
    katyaPrice = 666,
    seregaPrice = 4;
 // range slider
    range.onchange = function(){
      var worktime = document.querySelector('.worktime').innerHTML = range.value;
    }
  // Basic function  
    btn.onclick = function(){
    if (date.value != '' && startTime.value != '')
    {

        if (dima.checked)
        {dima.value = 1;}
        else 
        {dima.value = 0;}

        if (mark.checked)
        {mark.value = 1;}
        else 
        {mark.value = 0;}

        if (tanya.checked)
        {tanya.value = 1;}
        else 
        {tanya.value = 0;}

        if (sonya.checked)
        {sonya.value = 1;}
        else 
        {sonya.value = 0;}

        if (katya.checked)
        {katya.value = 1;}
        else 
        {katya.value = 0;}

        if (serega.checked)
        {serega.value = 1;}
        else 
        {serega.value = 0;}      
    
        var sum = (Number(dima.value)*dimaPrice + Number(mark.value)*markPrice + Number(tanya.value)*tanyaPrice + Number(sonya.value)*sonyaPrice + Number(katya.value)*katyaPrice + Number(serega.value)*seregaPrice)*range.value;
        out.innerHTML = sum;
    }

    else
        {alert('Введите дату и время начала работы');}
    }
</script>
</body>
</html>