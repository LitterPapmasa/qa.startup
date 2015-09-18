<?php include "../header.php"; ?>
        
        <section id="first-trainer">
            
            <div class="panel-body">
               
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 course-description no-flickr">

                            <h1 id="title_h4" class="trainer-title text-center">ОСНОВЫ SQL</h1>
                            
                            <p class="text-indent">Данный курс направлен на изучение баз данных и языка структурированных запросов SQL. На этом курсе Вы изучите все тонкости работы с SQL и сможете тестировать приложение на уровне взаимодействия с базами данных. Успешное изучение SQL требует максимум практики, поэтому после каждой теоретической части рассматриваются практические примеры. Курс позволит получить все необходимые знания для работы с базами данных, используя структурированный язык запросов SQL.</p><hr>
                            <div class="col-md-8 course-program sql">
                                <span id="course-description_h2">Программа курса</span>
                                <i class="fa fa-folder-open-o fa-3x"></i>
                                <span id="course-program_h4">Занятие 1. Введение в базы данных.</span>
                                <ul>
                                    <li>Введение в информационные системы и роль БД в них. </li>
                                    <li>Введение в теорию БД. Виды БД. </li>
                                    <li>Основные понятия и термины. Объекты БД. Определение отношения. </li>
                                    <li>Structured Query Language – стандарт языков программирования баз данных. </li>
                                    <li>Введение в T-SQL. Типы данных. </li>
                                    <li>Знакомство со средой SQL Server Management Studio (SSMS). </li>
                                    <li>Знакомство с учебной базой данных курса. </li>
                                </ul>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 2. Выборка и модификация данных. </span>
                                    <ul>
                                        <li>Data Modification Language (DML) как часть T-SQL. </li>
                                        <li>Основные команды DML. 
                                            
                                            <ol>
                                                <li>Общая структура оператора выборки SELECT. </li>
                                                <li>Создание запроса на выборку данных. </li>
                                                <li>Модификация данных с помощью оператора UPDATE </li>
                                                <li>Удаление и добавление новых данных с помощью операторов DELETE и INSERT.</li>
                                            </ol>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 3. Создание объектов базы данных. </span>
                                    <ul>
                                        <li>Основные команды Data Definition Language (DDL) - CREATE, DROP, ALTER. Разбор синтаксиса. </li>
                                        <li>Понятие ключа. Первичный(PK) и внешний ключи(FK). Пользовательские ограничения.</li>
                                        <li>Data Quality Testing. </li>
                                        <li>Типы связей. </li>
                                        <li>Построение базы данных и создание таблиц в SSMS. </li>
                                        <li>Разбор учебной БД курса. </li>
                                        <li>Основы проектирования БД. Нормальные формы и зачем они нужны. </li>
                                        <li>Целостность данных. Relationship testing. </li>
                                        <li>ER диаграммы. Case средства разработки дизайна БД. </li>
                                        <li>Нормализация на примере учебной БД. </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 4. Ограничение и фильтрация данных с помощью предикатов. </span>
                                    <ul>
                                        <li>Понятие предиката. </li>
                                        <li>Работа с логическими операторами AND, OR, NOT. </li>
                                        <li>Сравнение с помощью LIKE, BETWEEN, IN, IS [NOT] NULL. </li>
                                        <li>Понятие NULL значений. </li>
                                        <li>Использование операторов SOME/ANY, EXISTS. </li>
                                        <li>Сортировка множества с помощью ORDER BY. </li>
                                        <li>Ограничение выборки с помощью TOP. </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 5. Сложные выборки данных из таблиц.</span>
                                    <ul>
                                        <li>Сложные выборки и варианты их осуществления </li>
                                        <li>Подзапросы: в столбцах, FROM и WHERE. </li>
                                        <li>Соединения – оператор JOIN. Их типы. 
                                        
                                            <ol>
                                                <li>Внешние и внутренние. </li>
                                                <li>Соединения по неравенству. </li>
                                                <li>Self-Join. Построение иерархий. </li>
                                            </ol>
                                        
                                        </li>
                                        <li>Агрегация данных в запросах. 
                                        
                                            <ol>
                                                <li>Оператор GROUP BY </li>
                                                <li>Фильтрация агрегированных данных с помощью HAVING </li>
                                                <li>Основные функции агрегации – SUM, AVG, COUNT. </li>
                                                <li>Работа функций с NULL значениями. </li>
                                            </ol>
                                        
                                        </li>
                                        <li>Объединение таблиц. UNION vs UNION ALL. </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 6. Транзакции. </span>
                                    <ul>
                                        <li>Определение транзакции, ее свойства. Принцип ACID. </li>
                                        <li>Управление результатом транзакции - ROLLBACK и COMMIT. </li>
                                        <li>Уровни изоляции. </li>
                                        <li>Понятие триггера. Сложности, которые могут создать триггеры. </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 7. Основы программирования в T-SQL. </span>
                                    <ul>
                                        <li>Хранимые процедуры.  </li>
                                        <li>Представления.  </li>
                                        <li>Функции. Скалярные и табличные. Оператор CROSS APPLY.  </li>
                                        <li>Циклы и условные конструкции.  </li>
                                        <li>Работа с курсорами и табличными переменными. </li>
                                        <li>Основы оптимизации выполнения запросов. 
                                        
                                            <ol>
                                                <li>Индексы, их типы и роль в БД. </li>
                                                <li>Понятие плана запроса. </li>
                                                <li>Отсутствующие индексы</li>
                                                <li>Анализ плана запроса на примере. </li>
                                                <li>Тестирование производительности БД. </li>
                                            </ol>
                                        
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div >
                                    <i class="fa fa-folder-open-o fa-3x" ></i>
                                    <span id="course-program_h4">Занятие 8. Модульное тестирование в T-SQL. </span>
                                    <ul>
                                        <li>Понятие unit теста и его роль в БД. </li>
                                        <li>Функциональное тестирование в БД. </li>
                                        <li>Обзор возможностей SQL Server Data Tools (Visual Studio) для создания модульных тестов.</li>
                                        <li>Введение в tSQLt framework. </li>
                                        <li>Написание модульных тестов. </li>
                                        <li>Регрессионное тестирование баз данных. </li>
                                    </ul>
                                </div>
                                <br>

                            </div>

                            <div class="col-md-4">

                                <img src="../images/courses/sql.png" alt="" class="img-responsive animation-bounceIn modal-image my-margin-auto">

                                <span id="course-description_h2">Информация</span>
                                <hr>
                                <span id="course-program_h4_info">Продолжительность курса:</span>
                                <p><i class="fa fa-clock-o"></i> 8 занятий по 2 часа </p>
                                <hr>
                                <span id="course-program_h4_info">Расписание:</span>
                                <p><i class="fa fa-pencil-square-o"></i> Группы буднего дня: 
                                    <ol>
                                        <li>Пн - Пт: 19.30 – 21.30</li>
                                    </ol>
                                </p>
                                <p><i class="fa fa-pencil-square-o"></i> Группы выходного дня: 
                                    <ol>
                                        <li>Сб, Вс: 11.00 – 13.00 </li>
                                        <li>Сб, Вс: 13.00 – 15.00 </li>
                                    </ol>
                                </p>
                                <hr>
                                <span id="course-program_h4_info">Цена: </span>
                                <p><i class="fa fa-money"></i> Стоимость курса: 1900 грн.</p>
                            </div>
                            <br>
                        </div>
                        
                        <p class="text-center no-flickr">
                            <a class="btn btn-success btn-outline-rounded" onclick="history.back()">Назад</a>
                            <a href="#freelesson" data-toggle="modal" onclick="resetf('#freelesson-form')" class="btn btn-success btn-outline-rounded" role="button">Заказать курс</a>
                        </p>
                        
                    </div>
                </div>
                
            </div>
                    
        </section>
        
<?php include "../footer.php"; ?>