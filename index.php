<?php

include 'lang-en.php';
$en = $vLang;

include 'lang-vi.php';
$cn = $vLang;

// $en = [
//   "firstname"=> "First Name",
//   "lastname"=> "Last Name",
//   "emailaddress"=> "Email Address",
//   "phone number"=> "Phone Number",
//   "country"=> "Country",
//   "selectcountry"=> "Select Country",
//   "reg-agreement"=> "I have read and I agree to the terms, privacy and offer details",
//   "getstarted"=> "Get Started",
// ];


// $cn = [
//   "firstname"=> "名字",
//   "lastname"=> "姓氏",
//   "emailaddress"=> "电子邮箱",
//   "phone number"=> "电话号码",
//   "country"=> "国家",
//   // "selectcountry"=> "选择国家",
//   "reg-agreement"=> "我已阅读并同意这些条款、隐私和优惠详情",
//   "getstarted"=> "开始"
// ];

// $keys = [
//   "firstname",
//   "lastname",
//   "emailaddress",
//   "phone number",
//   "country",
//   "selectcountry",
//   "reg-agreement",
//   "getstarted"
// ];

$html = "<table>";
foreach($en as $key => $value) {
  $html .= "<tr>";
  $html .= "<td>" . $value . "</td>";
  if (array_key_exists($key, $cn)) {
    $html .= "<td>" . $cn[$key] . "</td>";
  } else {
    $html .= "<td style='color: red;'>" . $en[$key] . "</td>";
  }
  $html .= "</tr>";
}

echo $html;
?>
