<?php/** * Created by Viktor Lazhevskyi. * User: viktor.lazhevskyi@gmail.com * Date: 02.02.2019 * Time: 12:55 */const DS = DIRECTORY_SEPARATOR;include_once __DIR__ . DS . "Seminar.php";include_once __DIR__ . DS . "Lecture.php";include_once __DIR__ . DS . "TimedCostStrategy.php";include_once __DIR__ . DS . "FixedCostStrategy.php";$lessons [] = new Seminar(4, new TimedCostStrategy());$lessons[] = new Lecture(4, new FixedCostStrategy());foreach ($lessons as $lesson) {    print "Плата за заняття: " . $lesson->cost() . ".\n";    print "Тип оплати: " . $lesson->chargeType() . ".\n";}