<?php/** * Created by Viktor Lazhevskyi. * User: viktor.lazhevskyi@gmail.com * Date: 19.01.2019 * Time: 22:42 */abstract class DomainObject{    private $group;    public function __construct()    {        $this->group = static::getGroup();    }    static function getGroup(){        return "default";    }    public static function create(){        return new static();    }}class Document extends DomainObject{    static function getGroup(){        return "document";    }}class User extends DomainObject{}print_r(Document::create());print_r(User::create());