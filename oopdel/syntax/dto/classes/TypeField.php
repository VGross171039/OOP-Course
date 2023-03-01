<?php 
namespace classes\TypeField;

// Класс, состоящий только из полей
class TypeField 
{
  public $firstName;
  public $lastName;
  public $email;
  public $phone;
  public $country;
  public $city;
}
//  Применение
function printReport($firstName, $lastName, $email, $phone, $country, $city) 
{

}

//  Модификация с целью упрощения работы в дальнейшем
//  Разбиваем один большой класс на несколько малых с узкой направленностью

class UserDate
{
  public $email;
  public $birthdata;
}

class Name 
{
  public $first;
  public $last;
}

class Phone 
{
  public $code;
  public $number;
}

class Address 
{
  public $country;
  public $region;
  public $city;
}

function printReportModif(Name $name, Phone $phone, Address $address, $email, $birthdata) 
{
  return $address->country;  //  Выводим нужные данные
}

?>