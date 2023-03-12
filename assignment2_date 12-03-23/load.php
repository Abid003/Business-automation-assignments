<?php

$conn = mysqli_connect("localhost","root","", "testdb") or die("connection failed");
$sql = "select * from calculator";
$result = mysqli_query($conn, $sql) or die("failed");
$output = "";
if(mysqli_num_rows($result)>0){
    $output = "<table>
    
        <tr>
            <th>number</th>
            <th>result</th>
        
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
        $output.= "<tr>
            <td>{$row['val']}</td>
            <td>{$row['result']}</td>";
          
    }

    $output.="</table>";
    mysqli_close($conn);
    echo $output;

}else{
    echo "no record found";
}

?>