<!DOCTYPE html>
<html lang="uk en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brazilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster:wght@400&display=swap" rel="stylesheet">
    <link href="assets\css\style.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand d-flex" href="#">
                            <img src="img/logo.png" alt="Logo" class="nav_logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerHeader" aria-controls="navbarTogglerHeader"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerHeader">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item me-3">
                                    <a class="nav-link" href="#">Головна</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link" href="about.php">Про нас</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link" href="login.php">Увiйти</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <a href="basket.php" class="btn basket me-3"><i
                                        class="fa-solid fa-basket-shopping"></i></a>
                                <a class="btn btn-dark buy" href="#blends"><span class="buying">Купити бленди</span></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="heading row d-flex align-items-center">
                <div class="col-lg-4 col-12 mt-4 mt-lg-0 order-last order-lg-first">
                    <h1>
                        <p>Brazilla</p>
                        <p>Coffee</p>
                    </h1>
                    <p class="subheading mt-5 mb-4">Спробуйте нашi чудовi кавовi бленди i Ви отримаєте справжню
                        насолоду.
                    </p>
                    <a class="btn btn-dark more" href="#explore">Дiзнатися бiльше</a>
                </div>
                <div class="img-container col-lg-8 col-12 order-first order-lg-last">
                    <img class="heading_image" src="img/img3.jpg" alt="Coffee cup and beans">
                </div>
            </div>
        </div>
    </header>
    <a id="scroller"></a>
    <main class="main">
        <div class="container">
            <section class="explore" id="explore">
                <div class="explore-heading text-center">
                    <h2>Смачна та якiсна кава - це про нас</h2>
                    <p class="subheading p_center mx-auto mt-3 mb-5">Тут Ви можете дiзнатися бiльше про нашу компанiю та
                        каву. А також на Вас чекають рецепти
                        смачної кави, яку Ви можете приготувати власноруч.</p>
                </div>
                <div class="explore-cards d-flex justify-content-between flex-wrap flex-lg-nowrap">
                    <div class="card me-lg-3 my-3 my-lg-0">
                        <img src="img/coffee-shop.jpg" class="card-img-top" alt="Магазин кави">
                        <div class="card-body">
                            <h5 class="card-title">Про нашу компанiю</h5>
                            <p class="card-text">Ми закуповуємо зерна з латинської америки, самi обсмажуємо, перемелюємо
                                i мiксуємо.</p>
                            <a href="#about_us" class="btn btn-dark">Дiзнатися бiльше</a>
                        </div>
                    </div>
                    <div class="card me-lg-3 my-3 my-lg-0">
                        <img src="img/coffee-beans.jpg" class="card-img-top" alt="Кавовi зерна">
                        <div class="card-body">
                            <h5 class="card-title">Про каву</h5>
                            <p class="card-text">Тут на Вас чекають цiкавi факти про каву та iсторiя походження цього напою.</p>
                            <a href="#about_coffee" class="btn btn-dark">Дiзнатися бiльше</a>
                        </div>
                    </div>
                    <div class="card my-3 my-lg-0">
                        <img src="img/coffee-cup.jpg" class="card-img-top" alt="Чашка кави">
                        <div class="card-body">
                            <h5 class="card-title">Рецепти кави</h5>
                            <p class="card-text">За цими рецептами Ви зможете обрати правильний бленд, а також
                                приготувати каву власноруч, не виходячи з дому.</p>
                            <a href="#recipes" class="btn btn-dark">Дiзнатися бiльше</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about_us" id="about_us">
                <div class="row d-flex align-items-center">
                    <div class="img_about col-lg-7 col-12 mb-3">
                        <img src="img/coffee-about.jpg" class="about_image w-100" alt="Про нас">
                    </div>
                    <div class="about_company col-lg-5 col-12 mt-3 mt-lg-0">
                        <h2>Про нашу компанiю</h2>
                        <p class="subheading mt-4 mb-3">
                            Привiт! Наша компанiя – новий гравець на ринку кави. Ми закуповуємо зерна з латинської
                            америки i самi обсмажуємо, перемелюємо i мiксуємо. На даний момент у нас є 3 готових бленда,
                            якi ми продаємо. Незабаром додасться ще три. Ми орiєнтованi на роздрiбного покупця, але у
                            нас також є пропозицiя для спецiалiзованих торговельних мереж i ресторанiв та iншого
                            гуртового продажу. Ми продаємо готовi бленди у наших фiрмових пакуваннях.
                        </p>
                        <a class="btn btn-dark" href="about.php">Дiзнатися бiльше</a>
                    </div>
                </div>
            </section>
            <section class="about_coffee" id="about_coffee">
                <div class="row d-flex align-items-center">
                    <div class="about_coffee_facts col-lg-5 col-12 order-last order-lg-first">
                        <h2>Про каву</h2>
                        <p class="subheading mt-4">
                            Iсторiя кави бере початок з найдавнiших часiв i йде
                            корiнням в першi цивiлiзацiї Близького Сходу, хоча походження кави до цих пiр залишається
                            неясним.
                        </p>
                        <p class="subheading">
                            Вважається, що ефiопськi предки народiв Оромо першими помiтили збудливий ефект кавового
                            зерна. Однак, жодних прямих доказiв немає, не збереглися свiдчення про те,
                            де в Африцi вирощували каву або хто серед африканцiв мiг знати про iснування кави ранiше
                            XVII столiття.
                        </p>
                        <a href="https://uk.wikipedia.org/wiki/%D0%86%D1%81%D1%82%D0%BE%D1%80%D1%96%D1%8F_%D0%BA%D0%B0%D0%B2%D0%B8"
                            class="btn btn-dark" target="_blank">Дiзнатися бiльше</a>
                    </div>
                    <div class="video_coffee col-lg-7 col-12 order-first order-lg-last mb-3 mb-lg-0">
                        <div class="ratio ratio-16x9">
                            <iframe width="100%" src="https://www.youtube.com/embed/zWN7L-IVDnk"
                                title="Цiкавi факти про каву. Пiдбiрка цiкавих фактiв українською" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recipes" id="recipes">
                <div class="recipes-heading text-center">
                    <h2>Рецепти кави</h2>
                    <p class="subheading p_center mx-auto mt-3 mb-5">Запорукою приготування смачної кави є три складовi:
                        правильно пiдiбраний бленд, якiсна вода та найкращий рецепт</p>
                </div>
                <div class="recipes-content">
                    <div class="accordion accordion-flush" id="accordionRecipes">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Кава з кардамоном по-арабськи
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionRecipes">
                                <div class="accordion-body row d-flex align-items-center">
                                    <div class="recipe_image col-lg-5 col-12">
                                        <img src="img/recipe1.jpg" class="recipe1_img"
                                            alt="Кава з кардамоном по-арабськи">
                                    </div>
                                    <div class="recipe1 col-lg-7 col-12 mt-3 mt-lg-0">
                                        <div class="ingredients">
                                            <ul>
                                                <li>2 ч. ложки свiжозмеленої меленої кави</li>
                                                <li>100 мл води</li>
                                                <li>2 зернини кардамону</li>
                                                <li>цукор до смаку</li>
                                            </ul>
                                        </div>
                                        <div class="prepare">
                                            <ol>
                                                <li>Мелену каву, цукор i розчавленi давленi зерна кардамону насипати в
                                                    турку. Залити все це чистою холодною водою i поставити на маленький
                                                    вогонь.</li>
                                                <li>Щойно з’явиться на поверхнi бiла плiвка, турку зняти з вогню i
                                                    поставити
                                                    назад через 5-7 секунд. Цю процедуру слiд повторити 2-3 рази, не
                                                    допускаючи закипання</li>
                                                <li>Пiсля цього накрити каву кришкою i вiдставити, щоб настоялася. Через
                                                    кiлька хвилин налити у фiлiжанку i подавати.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Кава з корицею по-голландськи
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionRecipes">
                                <div class="accordion-body row d-flex align-items-center">
                                    <div class="recipe_image col-lg-5 col-12">
                                        <img src="img/recipe2.jpg" class="recipe2_img"
                                            alt="Кава з корицею по-голландськи">
                                    </div>
                                    <div class="recipe2 col-lg-7 col-12 mt-3 mt-lg-0">
                                        <div class="ingredients">
                                            <ul>
                                                <li>150 мл натуральної кави</li>
                                                <li>1 ст. ложка густих вершкiв</li>
                                                <li>1 паличка корицi (або 0,5 ч. ложки меленої)</li>
                                                <li>0,5 ч. ложки вершкового масла</li>
                                                <li>цукор до смаку</li>
                                            </ul>
                                        </div>
                                        <div class="prepare">
                                            <ol>
                                                <li>Зварити каву в турцi або за допомогою кавового апарата.</li>
                                                <li>Кавову чашку облити окропом, покласти в неї паличку корицi, налити
                                                    готову гарячу каву.</li>
                                                <li>Влити вершки та додати цукор за смаком.</li>
                                                <li>Зверху покласти грудочку вершкового масла.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Кава з вiскi по-iрландськи
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionRecipes">
                                <div class="accordion-body row d-flex align-items-center">
                                    <div class="recipe_image col-lg-5 col-12">
                                        <img src="img/recipe3.jpg" class="recipe3_img" alt="Кава з вiскi по-iрландськи">
                                    </div>
                                    <div class="recipe3 col-lg-7 col-12 mt-3 mt-lg-0">
                                        <div class="ingredients">
                                            <ul>
                                                <li>80 мл свiжозвареної чорної кави</li>
                                                <li>40 мл iрландського вiскi</li>
                                                <li>1 ч. ложка коричневого цукру</li>
                                                <li>30 мл збитих вершкiв</li>
                                            </ul>
                                        </div>
                                        <div class="prepare">
                                            <ol>
                                                <li>Зварити мiцну каву в турцi або кавомашинi.</li>
                                                <li>У попередньо нагрiту склянку влити свiжозварену каву, додати цукор i
                                                    перемiшати до повного розчинення цукру.</li>
                                                <li>Додати до сумiшi вiскi i прикрасити поверхню напою збитими вершками.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Медова кава
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionRecipes">
                                <div class="accordion-body row d-flex align-items-center">
                                    <div class="recipe_image col-lg-5 col-12">
                                        <img src="img/recipe4.jpg" class="recipe4_img" alt="Медова кава">
                                    </div>
                                    <div class="recipe4 col-lg-7 col-12 mt-3 mt-lg-0">
                                        <div class="ingredients">
                                            <ul>
                                                <li>200 мл свiжозвареної мiцної чорної кави</li>
                                                <li>2 ч. ложки меду</li>
                                                <li>2 ст. ложки збитих вершкiв</li>
                                                <li>2 щiпки меленої корицi</li>
                                                <li>лiд</li>
                                            </ul>
                                        </div>
                                        <div class="prepare">
                                            <ol>
                                                <li>Зварити у будь-який спосiб та охолодити каву, налити у високу
                                                    склянку, додати мед, зверху викласти шапочку зi збитих вершкiв.</li>
                                                <li>Вершки посипати корицею.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Кавово-банановий смузi
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionRecipes">
                                <div class="accordion-body row d-flex align-items-center">
                                    <div class="recipe_image col-lg-5 col-12">
                                        <img src="img/recipe5.jpg" class="recipe5_img" alt="Кавово-банановий смузi">
                                    </div>
                                    <div class="recipe5 col-lg-7 col-12 mt-3 mt-lg-0">
                                        <div class="ingredients">
                                            <ul>
                                                <li>70 мл натуральної охолодженої кави</li>
                                                <li>50 мл молока</li>
                                                <li>0,5 банана</li>
                                                <li>100 г вершкового морозива</li>
                                                <li>1 ст. ложка тертого шоколаду</li>
                                            </ul>
                                        </div>
                                        <div class="prepare">
                                            <ol>
                                                <li>Зварити будь-яким способом каву та повнiстю охолодити.</li>
                                                <li>Всi iнгредiєнти (крiм шоколаду) покласти в чашу блендера i збити до
                                                    однорiдної маси з густою пiнної шапкою.</li>
                                                <li>Отриману сумiш вилити у високу склянку, посипати тертим шоколадом.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blends" id="blends">
                <div class="blends-heading text-center">
                    <h2>Нашi кавовi бленди</h2>
                    <p class="subheading p_center mx-auto mt-3 mb-5">Тут Ви можете обрати бленд на свiй смак у нашому
                        фiрмовому екологiчному пакуваннi.</p>
                </div>
                <?php 
                    require 'source/tovar.php';
                    require 'views/tovars.php';
                ?>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-heading pt-5">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                        <img src="img/logo.png" alt="Logo" class="footer_logo">
                        <p class="subheading mt-4">Наша мета - якiсна продукцiя, задоволення наших клiєнтiв та
                            працiвникiв. Долучайтесь до нас та насолоджуйтесь натуральною кавою, приготованою з любов'ю.
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 mt-lg-0 mt-4">
                        <h4>Нашi контакти</h4>
                        <div class="contact mt-3">
                            <div class="mail d-flex flex-inline align-items-center">
                                <a class="btn btn-light me-3" href="mailto:coffee.brazilla@gmail.com"><i
                                        class="fa-solid fa-envelope"></i></a>
                                <span class="subheading">coffee.brazilla@gmail.com</span>
                            </div>
                        </div>
                        <div class="social mt-3">
                            <a class="btn btn-light me-2" href="tel:0670000000"><i
                                class="fa-solid fa-phone"></i></a>
                            <button class="btn btn-light me-2"><i class="fa-brands fa-facebook-f"></i></button>
                            <button class="btn btn-light me-2"><i class="fa-brands fa-square-instagram"></i></button>
                            <button class="btn btn-light me-2"><i class="fa-brands fa-twitter"></i></button>
                            <button class="btn btn-light"><i class="fa-brands fa-linkedin-in"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center mt-4">
                    <div class="col-12 col-lg-5 mt-lg-0 mt-4">
                        <h4>Знайти нас</h4>
                        <p class="subheading mt-3">Ми доставляємо каву одразу до Вас додому, але також Ви можете купити
                            або
                            забрати бленди в нашому магазинi.</p>
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mapModal">Ми на
                            мапi</button>
                    </div>
                    <div class="col-12 col-lg-4 mt-lg-0 mt-4">
                        <form id="subscribe" class="sub_form">
                            <h4>Приєднуйтесь до нас</h4>
                            <div class="form_elem mt-3">
                                <input class="ps-3 w-100" type="text" name="name" required placeholder="Iм'я">
                                <input class="ps-3 w-100 mt-2" type="email" name="email" required placeholder="E-mail">
                                <button class="btn btn-dark mt-3" type="submit">ПIдписатись</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-container d-flex flex-inline mt-3">
                <p>
                    Ivan Vovk &copy; 2023 <strong>Brazilla Coffee</strong>
                </p>
            </div>
        </div>
    </footer>

    <div class="modal fade" tabindex="-1" id="mapModal" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Ми на мапi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.0950449449524!2d26.96177727561633!3d49.407108261936436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732068ee3947e73%3A0xbeec4e86129ffdd6!2sVeranda%20Coffee!5e0!3m2!1suk!2sua!4v1685972021314!5m2!1suk!2sua"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9f10b6e71b.js" crossorigin="anonymous"></script>
    <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>