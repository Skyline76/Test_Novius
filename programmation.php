<?php
setlocale(LC_ALL, "French"); //set local to french to have right day names

$bookingDates = [
  '2018-10-10',
  '2018-10-12',
  '2018-10-13',
  '2018-10-14',
  '2018-10-18',
  '2018-10-20',
  '2018-10-22',
  '2018-10-23',
  '2018-10-24',
  '2018-10-25',
];

function formatDate($tab){ //format the date
  foreach ($tab as $t){
    $date = strftime("%a %m/%e", strtotime($t)); //format to have the french version of the day names
    $date = strtoupper($date);
    $arrayDate[] = $date;
  }
  return json_encode($arrayDate);
}

echo formatDate($bookingDates);

?>