<?php include "header.php"; ?>

<?php require "includes/fun.inc.php"; ?>

<section id="feedback">
    <div class="container no-flickr">
        <div class="row">
            <h1>Наши отзывы</h1>
        </div>
        
        <div class="feedback-form">
			<button class="btn btn-success" id="show-form">Показать форму</button>
			<br><br>
            <form id="feedbackdb-form"  method="post" action="javascript:void(0);" onsubmit="ajaxFeedback()" class="animation-fadeIn" role="form" enctype="multipart/form-data">
               
                <input id="ratings-hidden" name="rating" type="hidden">
                <input type="input" name="form-name" value="feedbackdb-form" hidden>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> 
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-4 avatar-contariner column row-centered"> <!-- hidden-sm hidden-xs -->
                       
                        <div class="avatar-preview">
                        	<img id="avatar" src="images/avatars/avatar.jpg" alt="your image" />
                        </div>
                        
                        <div class="btn btn-success btn-file">
                            <input type="file" multiple="false" accept="image/*" id="avatar-input" name="uf">
                            <i class="glyphicon glyphicon-picture"></i> Выбрать фото
                        </div>
                        
                        <div class="btn btn-danger" type="file">
                            <i class="glyphicon glyphicon-trash"></i> Удалить
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6 col-sm-12 column row-centered">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control input-lg" id="name5f" type="text" placeholder="Ваше имя" required name="name">
                                        </div>
                                        <span class="help-block" style="display: none;">Вы не ввели имя</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-envelope"></i>
                                                    </span>
                                            <input class="form-control input-lg" id="email5f" type="email" placeholder="Ваш e-mail" name="email">
                                        </div>
                                        <span class="help-block" style="display: none;">Введите корректный e-mail адрес</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-th-list"></i>
                                                    </span>
                                            <select class="form-control input-lg" id="courses5f" name="courses">
                                                <option selected value="">Выберите курс</option>
                                                <option value="QA Testing">QA Testing</option>
                                                <option value="Selenium + Python">Selenium + Python</option>
                                                <option value="UNIX">UNIX</option>
                                                <option value="Networks">Networks</option>
                                                <option value="SQL">SQL</option>
                                            </select>
                                        </div>
                                        <span class="help-block" style="display: none;">Не выбран курс</span> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="fa fa-comment"></i>
                                                    </span>
                                            <textarea class="form-control input-lg comment-animation" id="message5f" rows="5" placeholder="Введите сообщение" required name="message"></textarea>
                                        </div>
                                        <span class="help-block" style="display: none;">Вы не ввели сообщение</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="row">
                                    <div class="col-md-4 star-container">
                                        <div class="stars starrr" data-rating="0"></div>
                                    </div>
                                    <div class="col-md-3 star-span">
                                        <span style="display: none;">Оцените нас</span>
                                        <input id="starValue" type="input" name="stars" value="" hidden>
                                        <!-- должно быть hidden -->
                                    </div>
                                </div>
                                <input class="btn btn-success pull-left" type="submit" name="send" id="submit5f" class="send" value="Оставить отзыв">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="label results" style="display: none;"></span>
            </form>
        </div>
        <div id="feedback-ok">
            <h1 style="display:none;">Форма отправлена успешно</h1> 
        </div>
		<br>
        <br>
        <!-- ВЫВОД ОТЗЫВОВ HTML-->

        <div class="view-out">
            <?php require "feedb.php"; ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>