<?php/** * Created by Viktor Lazhevskyi. * User: viktor.lazhevskyi@gmail.com * Date: 05.02.2019 * Time: 23:23 */abstract class Unit{    abstract function bombardStrength(): int;    public function getComposite()    {        return null;    }}abstract class CompositeUnit extends Unit{    private $units = [];    function getComposite()    {        return $this;// TODO: Change the autogenerated stub    }    function removeUnit(Unit $unit)    {        $this->units = array_udiff($this->units, array($unit),            function ($a, $b) {                return ($a === $b) ? 0 : 1;            });    }    function addUnit(Unit $unit)    {        if (in_array($unit, $this->units, true)) {            return;        }        $this->units[] = $unit;    }}