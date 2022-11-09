<?php


$table_provesing = '';
$table_provesing2 = '';

$region = '';
$district = '';
$street = '';
$building = '';


$error_search = '';
$region_start = '';
$district_start = '';
$street_start = '';
$building_start = '';
$top_adress = '';
$sql = '';
        
        





if (isset($_REQUEST['request_search'])){
    
   if($_REQUEST['region'] != ''){
       $region_start = $_REQUEST['region']; 
        
        if($_REQUEST['district'] != ''){            
            $district_start = $_REQUEST['district'];
            
            if ($_REQUEST['street'] != '') {
                $street_start = $_REQUEST['street'];
                
                if ($_REQUEST['building'] != '') {
                    $building_start = $_REQUEST['building'];
                    $error_search = 'no';
                    $top_adress = $region_start.' '.$district_start.' '.$street_start.' '.$building_start;
                    
                    $region_start = $_REQUEST['region']; 
                    $_SESSION['region'] = $_REQUEST['region'];
                    $region = $_REQUEST['region'];
                    $_SESSION['district'] = $_REQUEST['district'];
                    $district = $_REQUEST['district'];
                    $street_start = $_REQUEST['street'];
                    $_SESSION['street'] = $_REQUEST['street'];
                    $street = $_REQUEST['street'];
                    $_SESSION['building'] = $_REQUEST['building'];
                    $building = $_REQUEST['building'];
                    $_SESSION['sql'] = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a1.building
                                            FROM district d
                                            JOIN street s ON d.id = s.district_id
                                            JOIN address a1 ON s.id = a1.street_id
                                            JOIN request r ON a1.id = r.adress_id
                                            JOIN label l ON r.label_id = l.id
                                            JOIN anomaly a ON r.anomaly_id = a.id
                                            JOIN region r1 ON d.region_id = r1.id
                                            WHERE (r1.name = '$region') AND (d.name = '$district') AND (s.name = '$street') AND (a1.building = '$building');";
                }
                else{
                    $region_start = $_REQUEST['region']; 
                    $_SESSION['region'] = $_REQUEST['region'];
                    $region = $_REQUEST['region'];
                    $_SESSION['district'] = $_REQUEST['district'];
                    $district = $_REQUEST['district'];
                    $street_start = $_REQUEST['street'];
                    $_SESSION['street'] = $_REQUEST['street'];
                    $street = $_REQUEST['street'];
                    
                    $error_search = 'no';
                    $top_adress = $region_start.' '.$district_start.' '.$street_start.' '.$building_start;

                    $_SESSION['sql'] = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a1.building
                                                FROM district d
                                                JOIN street s ON d.id = s.district_id
                                                JOIN address a1 ON s.id = a1.street_id
                                                JOIN request r ON a1.id = r.adress_id
                                                JOIN label l ON r.label_id = l.id
                                                JOIN anomaly a ON r.anomaly_id = a.id
                                                JOIN region r1 ON d.region_id = r1.id
                                                WHERE (r1.name = '$region') AND (d.name = '$district') AND (s.name = '$street');";

                }
                
                
            }
            elseif ($_REQUEST['building'] != '') {
                $error_search = 'Введите улицу';
                $building_start = $_REQUEST['building'];
            }
            else{
                $error_search = 'no';
                $region_start = $_REQUEST['region']; 
                $top_adress = $region_start.' '.$district_start.' '.$street_start.' '.$building_start;
                
                $_SESSION['region'] = $_REQUEST['region'];
                $region = $_REQUEST['region'];
                $_SESSION['district'] = $_REQUEST['district'];
                $district = $_REQUEST['district'];
                
                $_SESSION['sql'] = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a1.building
                                                FROM district d
                                                JOIN street s ON d.id = s.district_id
                                                JOIN address a1 ON s.id = a1.street_id
                                                JOIN request r ON a1.id = r.adress_id
                                                JOIN label l ON r.label_id = l.id
                                                JOIN anomaly a ON r.anomaly_id = a.id
                                                JOIN region r1 ON d.region_id = r1.id
                                                WHERE (r1.name = '$region') AND (d.name = '$district');";
                
            }
            
        }
        elseif ($_REQUEST['street'] != '') {
            $error_search = 'Введите район';
            $street_start = $_REQUEST['street'];
            if ($_REQUEST['building'] != '') {
                $building_start = $_REQUEST['building'];
            }
        }
        elseif ($_REQUEST['building'] != '') {
            $error_search = 'Введите район и улицу';
            $building_start = $_REQUEST['building'];
        }
        else{
            $error_search = 'no';
            $top_adress = $region_start.' '.$district_start.' '.$street_start.' '.$building_start;
            
            $region_start = $_REQUEST['region']; 
            $_SESSION['region'] = $_REQUEST['region'];
            $region = $_REQUEST['region'];
            $_SESSION['sql'] = "SELECT r.id, l.name, d.name AS d_name, s.name AS s_name, a1.building
                                                FROM district d
                                                JOIN street s ON d.id = s.district_id
                                                JOIN address a1 ON s.id = a1.street_id
                                                JOIN request r ON a1.id = r.adress_id
                                                JOIN label l ON r.label_id = l.id
                                                JOIN anomaly a ON r.anomaly_id = a.id
                                                JOIN region r1 ON d.region_id = r1.id
                                                WHERE (r1.name = '$region');";
        }
        
    }
    else{
            $error_search = 'Введите округ';
            
        }
    
}

if (isset($_SESSION['sql'])){
   
    $sql2 = $_SESSION['sql'];
    
    $query2 = mysqli_query($con, $sql2);
       
    while ($r2 = mysqli_fetch_assoc($query2)) {

        $r_id = $r2['id']; 
        $l_name = $r2['name'].'  ';
        $d_name = $r2['d_name']; 
        $s_name = $r2['s_name'];
        $a_building = $r2['building'];
        $address = ' '.$d_name.' '.$s_name.' '.$a_building;

        
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
                                                <button class='boxed-btn3 w-100' id='$r_id' onclick='funshow(this)'>$r_id</button>
                                            </div>
                                        
                                    </div>                                    
                                </div>";
         
         $sql3 = "SELECT r.id, r.system_number, l.name AS l_name, r.description, r.executor, r.company, r.criticality, a.type, r.date_start, r.date_end, a1.long, a1.latt
                    FROM request r
                    JOIN label l ON r.label_id = l.id
                    JOIN anomaly a ON r.anomaly_id = a.id
                    JOIN address a1 ON a1.id = r.adress_id
                    WHERE r.id = $r_id";
    
    $query3 = mysqli_query($con, $sql3);
       
    while ($r3 = mysqli_fetch_assoc($query3)) {
        
        $system_number = $r3['system_number'].'  ';
        $l_name = $r3['l_name']; 
        $description = $r3['description'];
        $executor = $r3['executor'];
        $company = $r3['company']; 
        $criticality = $r3['criticality'];
        $type = $r3['type'];
        $date_start = $r3['date_start'];
        $date_end = $r3['date_end'];
        
        $content_id = 'content'.$r_id;
        
        $table_provesing .= "<div class='col-xl-12' id='$content_id' style='display:none;'>
                                <div class='row'>
                                    <div class='col-lg-12'>
                                        <div class='info' align ='center'>
                                            <table width ='90%'>
                                                <tr>
                                                    <td width ='30%'>Номер:</td>
                                                    <td width ='60%'>$r_id</td>
                                                    <td width ='10%'><button class='boxed-btn3 w-100' id='$r_id' onclick='funhide(this)'>X</button></td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Номер в системе:</td>
                                                    <td width ='70%'>$system_number</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Наименование:</td>
                                                    <td width ='70%'>$l_name</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Описание:</td>
                                                    <td width ='70%'>$description</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Дата начала:</td>
                                                    <td width ='70%'>$date_start</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Дата завершения:</td>
                                                    <td width ='70%'>$date_start</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Ответсвенный:</td>
                                                    <td width ='70%'>$executor</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Заказчик:</td>
                                                    <td width ='70%'>$company</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Критичность:</td>
                                                    <td width ='70%'>$criticality</td>
                                                </tr>
                                                <tr>
                                                    <td width ='30%'>Аномальность:</td>
                                                    <td width ='70%'>$type</td>
                                                </tr>
                                            </table>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>";
        
    }   
    }
    
}

//if (isset($_REQUEST["exit"])){
//    session_destroy();
//    exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
//}

if (isset($_REQUEST["exit"])){
    session_destroy();
    exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>");
}

?>
              