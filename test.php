<?php
class Address
{
  public function getCountry()
  {
    return 'Austria';
  }
}

class Order
{
  private $address;

  public function __construct(Address $address = null)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    var_dump($this->address);
    return $this->address;
  }

  public function test()
  {
    return null;
  }
}

$order = new Order();

// $country = null;
// if ($order->getAddress()) {
//   $country = 'hell nah';
// }

$country = $order->getAddress()?->getCountry();


var_dump($country);

// $status = 404;

// var_dump($status);

// $users = [
//   [
//     'id' => 1,
//     'name' => 'John Doe',
//   ],
//   [
//     'id' => 2,
//     'name' => 'Jane Doe',
//   ],
// ];

// $users = null;

// while (isset($users) && $user = current($users)) {
//   var_dump($user);
//   next($users);
// };

$i = 0;
while (isset($users) && $i <= count($users)) {
  var_dump($users[$i]);
  $i++;
};
