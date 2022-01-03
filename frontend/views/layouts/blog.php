<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">198 West 21th Street, Suite 721 New York NY 10016</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">"Золотой </br>ключик"</a>
             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Сведения об образовательной </br> организации</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>
                </div>   
             
             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Родителям</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>
                </div>  
             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Воспитатели</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>
                </div>  

             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Группы</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>
                </div>  

             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Жизнь садика</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
<!--                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    -->
                  </div>
                </div>  

             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Библиотека</button>
<!--                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>-->
                </div>               
             
             <!-- Пример сплит опасности -->
                <div class="btn-group">
                  <button type="button" class="btn ">Обратная связь</button>
<!--                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Основные сведения</a>
                    <a class="dropdown-item" href="#">Структура и органы управления образовательной организацией</a>
                    <a class="dropdown-item" href="#">Документы</a>
                    <a class="dropdown-item" href="#">Образование</a>
                    <a class="dropdown-item" href="#">Образовательные стандарты и требования</a>
                    <a class="dropdown-item" href="#">Руководство. Педагогический (научно-педагогический) состав</a>
                    <a class="dropdown-item" href="#">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                    <a class="dropdown-item" href="#">Стипендии и иные виды материальной поддержки</a>
                    <a class="dropdown-item" href="#">Платные образовательные услуги</a>
                    <a class="dropdown-item" href="#">Финансово-хозяйственная деятельность</a>
                    <a class="dropdown-item" href="#">Вакантные места для приема (перевода) обучающихся</a>
                    <a class="dropdown-item" href="#">Доступная среда</a>
                    <a class="dropdown-item" href="#">Международное сотрудничество</a>                    
                  </div>-->
                </div>               

             
             
             
             
             
             
             <!--				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Сведения об </br>образовательной организации</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">Родителям</a></li>
	        	<li class="nav-item"><a href="teacher.html" class="nav-link">Воспитатели</a></li>
	        	<li class="nav-item"><a href="courses.html" class="nav-link">Группы</a></li>
	        	<li class="nav-item"><a href="pricing.html" class="nav-link">Жизнь садика</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Библиотека</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Обратная связь</a></li>
	        </ul>
	      </div>-->
	    </div>
	  </nav>
    <!-- END nav -->

    <?= $content ?>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage();
