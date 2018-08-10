<!-- Portfolio Modals -->

<?php
if(!defined('access')) {
    die('Direct access not permitted');
}
?>
<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="car19085866" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <?php //var_dump($bid)?>
                            <?php //var_dump($image_galleria)?>
                            <h2><?= $headlines[0]?></h2>
                            <p class="item-intro text-muted">От <?= $bid[17]?></p>
                            <div class="car-images ">
                                <?php
                                foreach ($image_galleria as $key => $image ) {
                                    if ($key%2 == 0) { ?>
                                        <div class="car-images_slide align-middle">
                                            <img class="mx-auto img-thumbnail" src="modules/parse/cars/<?= substr_replace($image, '', 0, 2) ?>" alt="">
                                        </div>
                                    <?php   }
                                }
                                ?>
                            </div>
                            <div class="row no-gutters align-items-stretch justify-content-center">
                                <ul class="col-6 list-group pr-1 align-items-stretch">
                                    <li class="list-group-item ">
                                        <div class="col-4 p-0"><strong>Марка авто:</strong></div>
                                        <div class="col-8"><?= $bid[26]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Год выпуска:</strong></div>
                                        <div class="col-8"><?= $bid[25]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Тип кузова:</strong></div>
                                        <div class="col-8"><?= $bid[8]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Пробег:</strong></div>
                                        <div class="col-8"><?= $bid[1]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Топливо:</strong></div>
                                        <div class="col-8"><?= $bid[13]?></div>
                                    </li>
                                </ul>
                                <ul class="col-6 list-group align-items-stretch">
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Номер VIN:</strong></div>
                                        <div class="col-8"><?= $bid[7]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Объем двигателя:</strong></div>
                                        <div class="col-8"><?= $bid[10]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цвет:</strong></div>
                                        <div class="col-8"><?= $bid[9]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Привод:</strong></div>
                                        <div class="col-8"><?= $bid[11]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цилиндры:</strong></div>
                                        <div class="col-8"><?= $bid[12]?></div>
                                    </li>
                                </ul>
                            </div>
                            <p class="mt-4 text-justify">BMW X5 - роскошный кроссовер среднего класса производства BMW. Первое поколение X5, с кодом кузова E53, дебютировало в 1999 году. Это был первый внедорожник BMW, а также полноприводный автомобиль с механической или автоматической коробкой передач. В 2006 году было выпущено второе поколение X5, известное изнутри как E70, с системой полного привода xDrive с разделением крутящего момента, связанной с автоматической коробкой передач, а в 2009 году вариант производительности X5 M был выпущен в качестве модели 2010 года. BMW F15 - это спортивное транспортное средство третьего поколения X5 третьего поколения (SAV), представленное 30 мая 2013 года и выпущенное в ноябре 2013 года. Новая модель использует одно шасси с той же колесной базой предыдущего поколения и запускается с первоначальным выбором из трех двигателей : Бензиновый двигатель V8 мощностью 450 л.с. (xDrive50i) и два шестицилиндровых рядных дизельных двигателя, мощностью 258 л.с. с двумя турбинами (xDrive30d) и 381 л.с. с тремя турбинами (M50d M Performance) соответственно. В декабре 2013 года появятся новые варианты двигателей: xDrive40d, xDrive35i и, впервые на модели X5, два четырехцилиндровых двигателя xDrive25d и sDrive25d (с двухколесной передачей). Как и в предыдущей модели, он собран на заводе BMW в Спартанбурге в Южной Каролине, США.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Вернуться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="car26077217" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <?php //var_dump($bid2)?>
                            <?php //var_dump($image_galleria)?>
                            <h2><?= $headlines2[0]?></h2>
                            <p class="item-intro text-muted">От <?= $bid2[15]?></p>
                            <div class="car-images ">
                                <?php
                                foreach ($image_galleria2 as $key => $image ) {
                                    if ($key%2 == 0) { ?>
                                        <div class="car-images_slide align-middle">
                                            <img class="mx-auto img-thumbnail" src="modules/parse/cars/<?= substr_replace($image, '', 0, 2) ?>" alt="">
                                        </div>
                                    <?php   }
                                }
                                ?>
                            </div>
                            <div class="row no-gutters align-items-stretch justify-content-center">
                                <ul class="col-6 list-group pr-1 align-items-stretch">
                                    <li class="list-group-item ">
                                        <div class="col-4 p-0"><strong>Марка авто:</strong></div>
                                        <div class="col-8"><?= $bid2[26]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Год выпуска:</strong></div>
                                        <div class="col-8"><?= $bid2[25]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Тип кузова:</strong></div>
                                        <div class="col-8"><?= $bid2[8]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Пробег:</strong></div>
                                        <div class="col-8"><?= $bid2[1]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Топливо:</strong></div>
                                        <div class="col-8"><?= $bid2[13]?></div>
                                    </li>
                                </ul>
                                <ul class="col-6 list-group align-items-stretch">
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Номер VIN:</strong></div>
                                        <div class="col-8"><?= $bid2[7]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Объем двигателя:</strong></div>
                                        <div class="col-8"><?= $bid2[10]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цвет:</strong></div>
                                        <div class="col-8"><?= $bid2[9]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Привод:</strong></div>
                                        <div class="col-8"><?= $bid2[11]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цилиндры:</strong></div>
                                        <div class="col-8"><?= $bid2[12]?></div>
                                    </li>
                                </ul>
                            </div>
                            <p class="mt-4 text-justify">BMW X5 - роскошный кроссовер среднего класса производства BMW. Первое поколение X5, с кодом кузова E53, дебютировало в 1999 году. Это был первый внедорожник BMW, а также полноприводный автомобиль с механической или автоматической коробкой передач. В 2006 году было выпущено второе поколение X5, известное изнутри как E70, с системой полного привода xDrive с разделением крутящего момента, связанной с автоматической коробкой передач, а в 2009 году вариант производительности X5 M был выпущен в качестве модели 2010 года. BMW F15 - это спортивное транспортное средство третьего поколения X5 третьего поколения (SAV), представленное 30 мая 2013 года и выпущенное в ноябре 2013 года. Новая модель использует одно шасси с той же колесной базой предыдущего поколения и запускается с первоначальным выбором из трех двигателей : Бензиновый двигатель V8 мощностью 450 л.с. (xDrive50i) и два шестицилиндровых рядных дизельных двигателя, мощностью 258 л.с. с двумя турбинами (xDrive30d) и 381 л.с. с тремя турбинами (M50d M Performance) соответственно. В декабре 2013 года появятся новые варианты двигателей: xDrive40d, xDrive35i и, впервые на модели X5, два четырехцилиндровых двигателя xDrive25d и sDrive25d (с двухколесной передачей). Как и в предыдущей модели, он собран на заводе BMW в Спартанбурге в Южной Каролине, США.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Вернуться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="car45160616" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <?php //var_dump($bid3)?>
                            <?php //var_dump($image_galleria)?>
                            <h2><?= $headlines3[0]?></h2>
                            <p class="item-intro text-muted">От <?= $bid3[17]?></p>
                            <div class="car-images ">
                                <?php
                                foreach ($image_galleria3 as $key => $image ) {
                                    if ($key%2 == 0) { ?>
                                        <div class="car-images_slide align-middle">
                                            <img class="mx-auto img-thumbnail" src="modules/parse/cars/<?= substr_replace($image, '', 0, 2) ?>" alt="">
                                        </div>
                                    <?php   }
                                }
                                ?>
                            </div>
                            <div class="row no-gutters align-items-stretch justify-content-center">
                                <ul class="col-6 list-group pr-1 align-items-stretch">
                                    <li class="list-group-item ">
                                        <div class="col-4 p-0"><strong>Марка авто:</strong></div>
                                        <div class="col-8"><?= $bid3[26]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Год выпуска:</strong></div>
                                        <div class="col-8"><?= $bid3[25]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Тип кузова:</strong></div>
                                        <div class="col-8"><?= $bid3[8]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Пробег:</strong></div>
                                        <div class="col-8"><?= $bid3[1]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Топливо:</strong></div>
                                        <div class="col-8"><?= $bid3[13]?></div>
                                    </li>
                                </ul>
                                <ul class="col-6 list-group align-items-stretch">
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Номер VIN:</strong></div>
                                        <div class="col-8"><?= $bid3[7]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Объем двигателя:</strong></div>
                                        <div class="col-8"><?= $bid3[10]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цвет:</strong></div>
                                        <div class="col-8"><?= $bid3[9]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Привод:</strong></div>
                                        <div class="col-8"><?= $bid3[11]?></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-4 p-0"><strong>Цилиндры:</strong></div>
                                        <div class="col-8"><?= $bid3[12]?></div>
                                    </li>
                                </ul>
                            </div>
                            <p class="mt-4 text-justify">Mazda CX-9 - кроссовер среднего размера производства Mazda. До 2016 года модель CX-9 была построена на платформе Ford CD3, разделяемой с Ford Edge и Ford Fusion, и использовала тот же двигатель 3,7 л V6. Модель 2016 была крупным перепроектированием CX-9, который больше не основывался на линейке Ford. Доступны как переднеприводные, так и полноприводные модели CX-9. CX-9 производится на заводе Ujina 1 в префектуре Хиросима, Япония. Несмотря на то, что он был построен в Японии, CX-9 не продается на внутреннем рынке Японии. Тем не менее, Mazda планирует продать модель второго поколения в Японии, начиная с октября 2016 года.
                                В течение 2013 года CX-9 получил обновление, которое включало новый гриль, новые фары и рестайлинговые передние вентиляционные отверстия. Мощность по-прежнему поставляется Ford-sourced, 3.7 L V6, что делает 273 л.с. и 270 Нм крутящего момента (240 кВт / 321 л.с. Grand Touring) повязаны исключительно с шестиступенчатой автоматической коробкой передач.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Вернуться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Lines</li>
                                <li>Category: Branding</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Southwest</li>
                                <li>Category: Website Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Window</li>
                                <li>Category: Photography</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

