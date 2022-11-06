<?php


header('Content-Type: text/html; charset=utf-8');

$host="localhost";
$user="root";
$pass="vertrigo";

$db="board";

$table_provesing = '';
$table_provesing2 = '';
$district = '';

if (isset($_REQUEST['request_search'])){
    
    
//   $search_input = $_REQUEST['search_input'];
   //echo 'SEARCH'.$search_input;
//   $region = $_REQUEST['region'];
//   
//   $street = $_REQUEST['street'];
//   $building = $_REQUEST['building'];
   
   if(isset($_REQUEST['district'])){
       $district = $_REQUEST['district'];
       //echo ''.$district;
  
   
    $sql2 = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a.building 
  FROM district d
  JOIN street s ON d.id = s.district_id
  JOIN address a ON s.id = a.street_id
  JOIN request r ON a.id = r.adress_id
  JOIN label l ON r.label_id = l.id
  WHERE d.name = '$district'";
    
    $query2 = mysqli_query($con, $sql2);
       
    while ($r2 = mysqli_fetch_assoc($query2)) {
       // echo ''.$r2;
        $r_id = $r2['id']; 
        $l_name = $r2['name'].'  ';
        $d_name = $r2['d_name']; 
        $s_name = $r2['s_name'];
        $a_building = $r2['building'];
        $address = ' '.$d_name.' '.$s_name.' '.$a_building;
        //echo '<br/>building == '.$a_building;
       
       // echo '<br/>NEW MIDDLE == '.$middle_name;
//        $last_name = $r2['last_name'];
//        $pasport = $r2['pasport'];
//        $email = $r2['email'];
       // echo $status;
        
         $table_provesing .= "<div class='col-lg-12 col-md-12'>
                                <div class='single_jobs white-bg d-flex justify-content-between'>
                                    <div class='jobs_left d-flex align-items-center'
                                        
                                        <div class='obs_conetent'>
                                            <h4>$l_name </h4>
                                                <br/>
                                            <h4></h4><br/>
                                            <div class='links_locat d-flex align-items-center'>
                                                <div class='location'>
                                                    <p> <i class='fa fa-map-marker'>$address</i></p>
                                                </div>
                                            </div>
                                        </div>
                                            <div class='apply_now'>
                                                    <input  class='boxed-btn3 w-100' name='location' type='submit' value='$r_id'/>
                                            </div>
                                        
                                    </div>                                    
                                </div>";
        
        
        
    }
    
     }
//}        
   
  //echo'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.$region.$district.$street.$building;
   
    
}

if (isset($_REQUEST['location'])){
    
    $sql2 = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a.building 
  FROM district d
  JOIN street s ON d.id = s.district_id
  JOIN address a ON s.id = a.street_id
  JOIN request r ON a.id = r.adress_id
  JOIN label l ON r.label_id = l.id
  WHERE d.name = '$district'";
    
    $query2 = mysqli_query($con, $sql2);
       
    while ($r2 = mysqli_fetch_assoc($query2)) {
       // echo ''.$r2;
        $r_id = $r2['id']; 
        $l_name = $r2['name'].'  ';
        $d_name = $r2['d_name']; 
        $s_name = $r2['s_name'];
        $a_building = $r2['building'];
        $address = ' '.$d_name.' '.$s_name.' '.$a_building;
        //echo '<br/>building == '.$a_building;
       
       // echo '<br/>NEW MIDDLE == '.$middle_name;
//        $last_name = $r2['last_name'];
//        $pasport = $r2['pasport'];
//        $email = $r2['email'];
       // echo $status;
        
         $table_provesing .= "<div class='col-lg-12 col-md-12'>
                                <div class='single_jobs white-bg d-flex justify-content-between'>
                                    <div class='jobs_left d-flex align-items-center'
                                        
                                        <div class='obs_conetent'>
                                            <h4>$l_name </h4>
                                                <br/>
                                            <h4></h4><br/>
                                            <div class='links_locat d-flex align-items-center'>
                                                <div class='location'>
                                                    <p> <i class='fa fa-map-marker'>$address</i></p>
                                                </div>
                                            </div>
                                        </div>
                                            <div class='apply_now'>
                                                    <input  class='boxed-btn3 w-100' name='location' type='submit' value='$r_id'/>
                                            </div>
                                        
                                    </div>                                    
                                </div>";
        
        
        
    }
    
    $btn = $_REQUEST['location'];
//    echo 'AAAAAAAAAAAAAAAAAAAFFFFFFFFFF'.$btn;
    
    $sql2 = "SELECT r.id, r.system_number, l.name AS l_name, r.description, r.executor, r.company, r.criticality, a.type, r.date_start, r.date_end
                FROM request r
                JOIN label l ON r.label_id = l.id
                JOIN anomaly a ON r.anomaly_id = a.id
                WHERE r.id = $btn";
    
    $query2 = mysqli_query($con, $sql2);
       
    while ($r2 = mysqli_fetch_assoc($query2)) {
       // echo ''.$r2;
        $r_id = $r2['id']; 
        $system_number = $r2['system_number'].'  ';
        $l_name = $r2['l_name']; 
        $description = $r2['description'];
        $executor = $r2['executor'];
        $company = $r2['company']; 
        $criticality = $r2['criticality'];
        $type = $r2['type'];
        
        //echo '<br/>building == '.$a_building;
       
       // echo '<br/>NEW MIDDLE == '.$middle_name;
//        $last_name = $r2['last_name'];
//        $pasport = $r2['pasport'];
//        $email = $r2['email'];
       // echo $status;
        
         $table_provesing2 .= "<table>
                                                <tr>
                                                    <td>Номер</td>
                                                    <td>$r_id</td>
                                                </tr>
                                                <tr>
                                                    <td>Номер в системе</td>
                                                    <td>$system_number</td>
                                                </tr>
                                                <tr>
                                                    <td>Наименование</td>
                                                    <td>$l_name</td>
                                                </tr>
                                                <tr>
                                                    <td>Описание</td>
                                                    <td>$description</td>
                                                </tr>
                                                <tr>
                                                    <td>Ответсвенный</td>
                                                    <td>$executor</td>
                                                </tr>
                                                <tr>
                                                    <td>Заказчик</td>
                                                    <td>$company</td>
                                                </tr>
                                                <tr>
                                                    <td>Критичность</td>
                                                    <td>$criticality</td>
                                                </tr>
                                                <tr>
                                                    <td>Аномальность</td>
                                                    <td>$type</td>
                                                </tr>
                                            </table>";
        
        
        
    }
    
     
}
?>
<!--                            <div class='col-lg-12 col-md-12'>
                                <div class='single_jobs white-bg d-flex justify-content-between'>
                                    <div class='jobs_left d-flex align-items-center'
                                        
                                        <div class='obs_conetent'>
                                            <h4>$l_name </h4>
                                                <br/>
                                            <h4></h4><br/>
                                            <div class='links_locat d-flex align-items-center'>
                                                <div class='location'>
                                                    <p> <i class='fa fa-map-marker'>$address</i></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="job_details.html" class="boxed-btn3">Просмотр</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>-->

