<?php/** * Created by Viktor Lazhevskyi. * User: viktor.lazhevskyi@gmail.com * Date: 02.02.2019 * Time: 12:35 */abstract class CostStrategy{    abstract function cost(Lesson $lesson);    abstract function chargeType();}