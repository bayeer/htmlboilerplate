<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестовый сайт</title>
	<link rel="stylesheet" href="/css/main.css?v=<?=uniqid()?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- begin main-offer -->
	<section class="main-offer top">

		<!-- Static navbar -->
		<nav class="navbar-inverse navbar-foo">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="/img/logo.png" alt="Тестовое лого" class="img-responsive">
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a class="smoothscroll" href="#advantages">Преимущества <span class="sr-only"></span></a></li>
						<li><a class="smoothscroll" href="#services">Услуги</a></li>
						<li><a class="smoothscroll" href="#reviews">Отзывы</a></li>
						<li><a class="smoothscroll" href="#contacts">Контакты</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?php include 'content/header-contacts.html'; ?>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

		<div class="container">

			<div class="row">
				<div class="col-sm-8 col-lg-8">
					<div class="jumbotron">
						<?php include 'content/main-offer.html'; ?>
					</div>
				</div>

                <div class="col-sm-4 col-lg-4 text-right">
                    <form action="#" id="frm-hero">
                        <fieldset>
                            <legend class="text-center">Заполните форму и мы<br>свяжемся с вами через <b>5</b> минут</legend>

                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="pwd" name="phone" placeholder="Введите номер телефона...">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="interest" name="interest" placeholder="Какая техника вас интересует...">
                            </div>
                            <div class="text-center">
                            	<button type="submit" class="btn btn-primary btn-lg">Отправить сообщение</button>
                            </div>

                        </fieldset>
                    </form>
                </div>
			</div>

		</div>
	</section>
	<!-- end main-offer -->


<!-- begin advantages -->
<a name="advantages"></a>
<section class="advantages">
    <div class="container">

		<?php include 'content/advantages.html'; ?>

    </div>
</section>
<!-- end advantages -->


<!-- begin services -->
<a name="services"></a>
<section class="services">
    <div class="container">
		<?php include 'content/services.html'; ?>
    </div>
</section>
<!-- end services -->




<!-- begin reviews -->
<a name="reviews"></a>
<section class="reviews">
    <div class="container">
		<?php include 'content/reviews.html'; ?>
    </div>
</section>
<!-- end reviews -->




<!-- begin photogallery -->
<section class="photogallery">
    <div class="container">
		<?php include 'content/photogallery.html'; ?>
    </div>
</section>
<!-- end photogallery -->



<!-- begin contacts -->
<a name="contacts"></a>
<section class="contacts">

    <div id="yandex-map">
		<?php include 'content/map.html'; ?>
    </div>
    
    <div class="container">
        <div class="box">
            <?php include 'content/contacts.html'; ?>

<?php /*
            <!-- <div class="footer-socials">
                <a href="https://facebook.com/asdf" target="_blank">
                	<img src="img/socials/fb.png" alt="Facebook" style="height: 30px"></a>
                <a href="https://vk.com/asdf" target="_blank"><img src="img/socials/vk.png" alt="VKontakte" style="height: 30px"></a>
                <a href="https://ok.ru/group/123" target="_blank"><img src="img/socials/ok.png" alt="Одноклассники" style="height: 30px"></a>
                <a href="http://instagram.com/asdf" target="_blank"><img src="img/socials/inst.png" alt="Instagram" style="height: 30px"></a>
                <a href="https://www.youtube.com/channel/asdf" target="_blank"><img src="img/socials/you.png" alt="Youtube" style="height: 30px"></a>
            </div> -->
*/
?>

			<form action="#" id="frm-contacts">
                <fieldset>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pwd" name="phone" placeholder="Введите номер телефона...">
                    </div>
                    <div class="text-center">
                    	<button type="submit" class="btn btn-primary btn-lg">Отправить сообщение</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</section>
<!-- end contacts -->




<!-- begin footer -->
<footer class="footer">
	<div class="container text-right">
		<div class="row">
			<div class="col-xs-3 col-xs-offset-6">
				2017г. Все права защищены
			</div>
			<div class="col-xs-3">
				Performed by Bayeer
			</div>
		</div>
	</div>

</footer>
<!-- end footer -->

<a href="#top" class="up smoothscroll" title="Перейти наверх"><img src="/img/up.png"></a>





<div class="modal fade" id="modal-order" tabindex="-1" role="dialog" aria-labelledby="modal-orderLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="modal-callbackLabel">Заявка</h3>
            </div>
            <div class="modal-body" style="padding:20px 30px;">
                <div class="bs-component">

                    <form action="#" id="frm-order">
		                <fieldset>
		                	<input type="hidden" name="interest" value="">
		                    <div class="form-group">
		                        <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя...">
		                    </div>
		                    <div class="form-group">
		                        <input type="text" class="form-control" id="pwd" name="phone" placeholder="Введите номер телефона...">
		                    </div>
		                    <div class="text-center">
		                    	<button type="submit" class="btn btn-primary btn-lg">Отправить заявку</button>
		                    </div>

		                </fieldset>
		            </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:500px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel">Заявка</h3>
            </div>
            <div class="modal-body">
                <p>Спасибо вам!<br/>Ваша заявка успешно сохранена! Нашим менеджеры свяжутся с вами в ближайшее время, если возникнут дополнительные вопросы.</p>
                <button onclick="window.location='/'" class="btn btn-primary">Отлично</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:500px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel">Заявка</h3>
            </div>
            <div class="modal-body">
                Произошла ошибка при отправке заявки. Попробуйте снова через 1 минуту.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/main.js"></script>

</body>
</html>