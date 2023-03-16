<?php
$url = 'https://jsonplaceholder.typicode.com/posts/';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
$display = '<table class="table text-center mt-5" id="my-table">
<thead class="thead-dark">
    <tr class = "bg-light">
        <th scope="col">SN</th>
        <th  scope="col">ID</th>
        <th style="width:100px" scope="col">User ID</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
    </tr>';

$serial = 1;

foreach ($data as $i) {
    $display.= '<tr><td>'.$serial.'</td>';
    $display.= '<td>'.$i['id'].'</td>';
    $display.= '<td>'.$i['userId'].'</td>';
    $display.= '<td>'.$i['title'].'</td>';
    $display.= '<td>'.$i['body'].'</td></tr>';
    $serial++;
}

  $display .= '
  </thead>
  </table>
  ';


echo $display; 
