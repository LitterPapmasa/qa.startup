<?php 
//$path= 'http://'.$_SERVER["SERVER_NAME"].'/';
?>

           <footer id="footer">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12 col-sm-12">
                       
                        <div class="col-md-4 col-sm-4 text-center">
							
                    		<div id="contact" class="vcard">
								<h3 class="fn">Учебный центр QA Start Up</h3>
								<div class="adr">
									<div class="street-address">ул. Смоленская, 31/33</div>
									<div class="locality">Киев</div>
									<div class="region">Украина</div>
								</div>
								<div class="tel">
									<span class="value">(096) 255 45 49</span>
									<span class="value">(093) 615 30 90</span>
								</div>
							</div>
                       
                        </div>
                        
                        <div class="col-md-4 col-sm-4 text-center footer-center">
                            
                            <a href="#contact2" data-toggle="modal" class="btn btn-success no-flickr" onclick="resetf('#contact-form')">Задать вопрос</a> 
                            
                            <!-- First Form -->
                            <div id="contact2" class="contact-form modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                           
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <span id="model_h3" class="modal-title" style="color:#414D59;">Задать вопрос</span>
                                        </div>                   
                                        <form id="contact-form" class="modal-body" method="post" action="javascript:void(0);" onsubmit="ajax('#contact-form','<?= $path ?>')">
                                                <input type="input" name="form-name" value="contact-form" hidden>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-user"></i>
                                                            </span>
                                                            <input class="form-control input-lg" id="name1f" type="text" placeholder="Ваше имя" name="name">
                                                        </div>
                                                        <span class="help-block" style="display: none;">Введите Ваше имя</span>
                                                    </div> 
                                                </div>

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-envelope"></i>
                                                            </span>
                                                            <input class="form-control input-lg" id="email1f"  name="email" type="email" placeholder="Ваш e-mail"  name="mail">
                                                        </div>
                                                        <span class="help-block" style="display: none;">Введите корректный e-mail адрес</span>
                                                    </div>  
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-comment"></i>
                                                            </span>
                                                            <textarea class="form-control input-lg" id="message1f" name="message" rows="5" placeholder="Ваше сообщение"  name="message"></textarea>
                                                        </div>
                                                        <span class="help-block" style="display: none;">Введите Ваше сообщение</span>
                                                    </div>
                                                </div>
                                                
                                                <p><input class="btn btn-success btn-lg" type="submit" name="send" id="submit1f" class="send" value="Отправить"></p>  
                                                <span  class="label results" style="display: none;"></span>
                                         </form>
                                    </div>
                                </div>

                            </div> <!-- First Form -->

                            <!-- Second Form -->
                            <div id="callback" class="modal fade" tabindex="-1", role="dialog", aria-hidden="true">
                           
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal", aria-hidden="true">×</button>
                                            <span id="model_h3" class="modal-title" style="color:#414D59;">Обратный звонок:</span>
                                        </div>
                                        <form id="callback-form" class="modal-body" role="form" action="javascript:void(0);" onsubmit="ajax('#callback-form','<?= $path ?>')" name="callback">
                                            <input type="input" name="form-name" value="callback-form" hidden>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-user"></i>
                                                        </span>
                                                        <input class="form-control input-lg" id="name2f" type="text" placeholder="Ваше имя" required name="name">
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите Ваше имя</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-phone"></i>
                                                        </span>
                                                        <input class="form-control input-lg" id="phone2f" type="tel" placeholder="Ваш номер телефона" required name="phone">
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите корректный номер</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-clock-o"></i>
                                                        </span>
                                                        <textarea class="form-control input-lg"  id="message2f"  rows="5" placeholder="Удобное время для разговора" required name="message"></textarea>
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите Ваше сообщение</span>
                                                </div>
                                            </div>
                                            
                                            <p><input class="btn btn-success btn-lg" type="submit" name="send" id="submit2f" class="send" value="Заказать"></p>  
                                            <span  class="label results" style="display: none;"></span>
                                        </form>
                                   </div>
                                </div>

                            </div> <!-- Second Form -->
                            
                             <!-- Third Form -->
                            <div id="freelesson" class="modal fade" tabindex="-1", role="dialog", aria-hidden="true">
                           
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal", aria-hidden="true">×</button>
                                            <span id="model_h3" class="modal-title" style="color:#414D59;">Записаться на бесплатное занятие</span><br>
                                            <p class="modal-title">Время проведения: 7 декабря 2014г. в 12.00</p>
                                            <p class="modal-title">Место проведения: г.Киев, ул. Смоленская, 31/33,<br>
                                            здание института «ЭКОМЕН»</p>
                                        </div>
                                        <form id="freelesson-form" class="modal-body" method="post" action="javascript:void(0);" onsubmit="ajax('#freelesson-form','<?= $path ?>')">
                                            <input type="input" name="form-name" value="freelesson-form" hidden>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-user"></i>
                                                        </span>
                                                        <input class="form-control input-lg" id="name4f" type="text" placeholder="Ваше имя" required name="name">
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите Ваше имя</span>
                                                </div>              
                                                                
                                            </div>    
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-phone"></i>
                                                        </span>
                                                        <input class="form-control input-lg" id="phone4f" type="tel" placeholder="Ваш номер телефона" required name="phone">
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите корректный номер</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                               <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-envelope"></i>
                                                        </span>
                                                        <input class="form-control input-lg" id="email4f"  name="email" type="email" placeholder="Ваш e-mail"  name="mail">
                                                    </div>
                                                    <span class="help-block" style="display: none;">Введите корректный e-mail адрес</span>
                                                </div>                           
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-th-list"></i>
                                                        </span>
                                                        <select class="form-control input-lg" id="courses4f" name="courses" >
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
                                            <div>             
                                                <button type="submit" id="submit4f" class="send btn btn-success btn-lg">Отправить</button>
                                                <p><span  class="btn-lg label results" style="display: none;"></span></p>
                                            </div>

                                        </form>
                                   </div>
                                </div>

                            </div> <!-- Third Form -->
                        
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="text-center center-block no-flickr social">
                                <p class="txt-railway no-flickr">Мы в социальных сетях</p>
                                <noindex><a rel="nofollow" href="https://vk.com/qastartup" target="_blank" class="btn btn-social-icon btn-vk btn-lg">
                                    <i class="fa fa-vk"></i>
                                </a> </noindex>
                                <noindex><a rel="nofollow" href="https://www.facebook.com/qastartup" target="_blank" class="btn btn-social-icon btn-facebook btn-lg">
                                    <i class="fa fa-facebook"></i>
                                </a></noindex>
                                <noindex><a rel="nofollow" href="https://twitter.com/QA_Start_Up" target="_blank" class="btn btn-social-icon btn-twitter btn-lg">
                                    <i class="fa fa-twitter"></i>
                                </a></noindex>
                                <noindex><a rel="nofollow" href="https://plus.google.com/114545140666357265300/posts" target="_blank" class="btn btn-social-icon btn-google-plus btn-lg">
                                    <i class="fa fa-google-plus"></i>
                                </a></noindex>
                            </div>

                            <div class="text-center">
                            	<script type="text/javascript">(function() {
									if (window.pluso)if (typeof window.pluso.start == "function") return;
									if (window.ifpluso==undefined) { window.ifpluso = 1;
										var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
										s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
										s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
										var h=d[g]('body')[0];
										h.appendChild(s);
									  }})();
								</script>
								<div class="pluso" data-background="none;" data-options="small,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="vkontakte,facebook,twitter,google" data-user="499644806"></div>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </footer>
     
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script  type="text/javascript" src="<?= $path;?>js/bootstrap.min.js"></script>
        
        <!-- Slider Carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
            	$('#carousel').carousel();
            }); ;
        </script>
        
        <!-- Our Courses Carousel -->
        <script type="text/javascript">
            var tabCarousel = setInterval(function() {
            var tabs = $('.nav-tabs > li'),
                active = tabs.filter('.active'),
                next = active.next('li'),
                toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

                toClick.trigger('click');
            }, 5000);
            
           $('.nav-tabs > li').hover(function(){
                clearInterval(tabCarousel);
            });  
            
        </script>       
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function (d, w, c) {
		    (w[c] = w[c] || []).push(function() {
		        try {
		            w.yaCounter26672109 = new Ya.Metrika({id:26672109,
		                    webvisor:true,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true});
		        } catch(e) { }
		    });

		    var n = d.getElementsByTagName("script")[0],
		        s = d.createElement("script"),
		        f = function () { n.parentNode.insertBefore(s, n); };
		    s.type = "text/javascript";
		    s.async = true;
		    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		    if (w.opera == "[object Opera]") {
		        d.addEventListener("DOMContentLoaded", f, false);
		    } else { f(); }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="//mc.yandex.ru/watch/26672109" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->

    </body>
</html>