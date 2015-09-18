<?php include "header.php"; ?>

        <section id="contacts">
            <div class="container">
               
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span id="contacts_h3"><i class="fa fa-map-marker"></i> На карте</span>
                            </div>
                            <div class="panel-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5080.707603085008!2d30.444012423001112!3d50.453136049328855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc25a6329ae9%3A0xed96cf4fc88bd039!2z0JrQuNGX0LLRgdGM0LrQuNC5INCV0LrQvtC90L7QvNGW0YfQvdC40Lkg0IbQvdGB0YLQuNGC0YPRgiDQnNC10L3QtdC00LbQvNC10L3RgtGDLCDQstGD0LsuINCh0LzQvtC70LXQvdGB0YzQutCwLCAzMS8zMywg0JrQuNGX0LIsINC80ZbRgdGC0L4g0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1410391755308" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="panel no-flickr">
                            <div class="panel-heading">
                                <span id="contacts_h3"><i class="fa fa-pencil-square-o"></i> Наши контакты</span>
                            </div>
                            <div class="panel-body">
                                <address>
                                <strong>QA Start Up</strong><br>
                                г.Киев, ул. Смоленская, 31/33, <br>здание института «ЭКОМЕН» <br>(5 минут ходьбы от метро Шулявская).   <br><br>
                                <i class="icon-phone-sign"></i> (096) 255 45 49<br>
                                <i class="icon-phone-sign"></i> (093) 615 30 90<br>
                                </address>
                            </div>
                        </div>

                        <div class="panel no-flickr">
                            <div class="panel-heading">
                              <span id="contacts_h3"><i class="glyphicon glyphicon-time panel-icon"></i> Время проведения занятий</span>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>День недели</th>
                                            <th>Время проведения</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>Понедельник - Пятница</td>
                                            <td>с 19.30 до 21.30</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>Суббота – Воскресение </td>
                                            <td>с 11.00 до 17.00</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel no-flickr">
                            <div class="panel-heading">
                              <span id="contacts_h3"><i class="glyphicon glyphicon-time panel-icon"></i> Режим работы контактного центра</span>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>День недели</th>
                                            <th>Рабочее время</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>Понедельник - Пятница</td>
                                            <td>с 10.00 до 18.00</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>Суббота – Воскресение </td>
                                            <td>с 11.00 до 17.00</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="panel no-flickr">
                            <div class="panel-heading">	
                                <span id="contacts_h3" class="">
                                    <i class="glyphicon glyphicon-envelope panel-icon"></i>
                                    Написать нам:
                                </span>
                            </div>
                            <div class="panel-body">
                                
                                <form id="feedbackForm" method="post" action="javascript:void(0);" onsubmit="ajax('#feedbackForm','<?= $path ?>')">
                                    <input type="input" name="form-name" value="feedback-form" hidden>
                                    <div class="form-group">
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                </span>
                                                <input type="text" class="form-control input-group" id="name3f" name="name" placeholder="Ваше имя">
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
                                                <input type="email" class="form-control" id="email3f" name="email" placeholder="Ваш e-mail адрес">
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
                                                <textarea rows="10" cols="100" class="form-control" id="message3f" name="message" placeholder="Ваше сообщение"></textarea>
                                            </div>
                                            <span class="help-block" style="display: none;">Введите Ваше сообщение</span>
                                        </div>
                                    </div>
                           
                                    <div>
                                        <button type="submit" id="submit3f" class="send btn btn-success btn-lg">Отправить</button>
                                        <p><span  class="btn-lg label results" style="display: none;"></span></p>
                                    </div>
                                     
                                </form>
                                
                                
                            </div>
                        </div>			
                    </div>
                </div>
                
            </div>
        </section>
        
<?php include "footer.php"; ?>