<?php


class SelectData{

    public function TableName($tableName, $moresql){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM {$tableName} {$moresql}");
        $query->execute();
        return $query->fetchAll();
    }


    public function SingleView($tableName, $selectid, $moresql){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM {$tableName} {$moresql} ");
        $query->bindValue(1, $selectid);
        $query->execute();
        return $query->fetch();
    }
    
}

    function zugkor($zugcalamname, $tableName, $moresql){
        global $conn,$Usernameid;
        $sql = "SELECT SUM($zugcalamname) FROM $tableName $moresql";
        $query   = mysqli_query($conn, $sql);
        $Result  = mysqli_fetch_array($query);
        $sum_result = number_format((float)$Result['SUM(Amount)'], 3, '.', '');
        return $sum_result;
    }




//pagination
function pagelimit($getpagenumber, $limit){                
    global $get_page;
    if (isset($getpagenumber)) { $get_page = $getpagenumber; }
    if ($get_page=="" || $get_page=="1" ) { $traget_page = "1";
    }else{ $traget_page = ($get_page*$limit)-$limit;}
    return($traget_page);
}

function pagnation($tablename, $perpage){
    global $conn;
    $sql1="SELECT * FROM {$tablename}";
    $query2 = mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($query2);
    $pageNumber=ceil($count/$perpage);
    return($pageNumber);
}



   
?>  