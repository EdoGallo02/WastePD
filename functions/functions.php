<?php
    function cleanstr($x){
        return trim($x,"\"' ;");
    }
    function adduser($conn, $codf, $lastname, $firstname, $com,$via,$civ,$cap,$subplan,$cardnum,$cardscad,$cvv,$email,$pass){
        $sql="INSERT INTO users(codf,cognome,nome,reg,pro,com,via,civico,cap,numcard,scadcard,cvv,email,pass,datar) VALUES ('$codf','$lastname','$firstname','Veneto','Padova','$com','$via','$civ','$cap','$cardnum','$cardscad','$cvv','$email','$pass',now())";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        $codu=getcodu($conn,$codf);
        $subtype=getsubtype($conn,$subplan);
        insertuserabb($conn, $codu, $subtype);
        insertconfirm($conn, $codu);
        die("<script>location.href='confirm.php?email=$email'</script>");
    }
    function checkuser($conn,$codf,$email){
        $sql="SELECT * FROM users WHERE codf='".$codf."'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        $sql2="SELECT * FROM users WHERE email='".$email."'";
        $result2= mysqli_query($conn, $sql2);
        if(!$result2){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        if((mysqli_num_rows($result)===1) || (mysqli_num_rows($result2)===1)){
            $err= "Utente già registrato";
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function getcodu($conn,$codf){
        $sql="SELECT codice FROM users WHERE codf='$codf'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["codice"];
        }
    }
    function getcodu2($conn,$email){
        $sql="SELECT codice FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["codice"];
        }
    }
    function getsubtype($conn,$sub){
        $sql="SELECT codicea FROM abbonamenti WHERE descrizione='$sub'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["codicea"];
        }
    }
    function getsubtype2($conn,$codu){
        $sql="SELECT fk_abb FROM users_abb WHERE fk_users='$codu'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["fk_abb"];
        }
    }
    function insertfatt($conn,$email){
        $codu= getcodu2($conn, $email);
        if(getnumfplusone($conn, $codu)==1){$datai=date_create(getdatar($conn,$codu));}
        else{$datai=date_create(getdatalastfatt($conn,$codu));}
        $dataf= date_create(date("Y-m-d"));
        $diff=date_diff($datai,$dataf);
        if($diff->format("%a")>31){
            $nfatt=round($diff->format("%a")/31,0);
            for($i=1;$i<=$nfatt;$i++){
                $numf=getnumfplusone($conn,$codu);
                date_add($datai,date_interval_create_from_date_string("1 month"));
                $dfatt=date_format($datai,"Y-m-d");
                $sql3="INSERT INTO fatture(fk_users,numf,dataf) VALUES('$codu','$numf','$dfatt')";
                $result3= mysqli_query($conn, $sql3);
                if(!$result3){
                    $err= mysqli_errno($conn);
                    die("<script>location.href='error.php?err=$err'</script>");
                }
            }
        }
    }
    function getnumfplusone($conn,$codu){
        $sql2="SELECT * FROM fatture WHERE fk_users=$codu";
        $result2= mysqli_query($conn, $sql2);
        if(!$result2){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        return mysqli_num_rows($result2)+1;
    }
    function getdatar($conn,$codu){
        $sql2="SELECT datar FROM users WHERE codice=$codu";
        $result2= mysqli_query($conn, $sql2);
        if(!$result2){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result2)){
            return $row["datar"];
        }
    }
    function getdatalastfatt($conn,$codu){
        $sql2="SELECT dataf FROM fatture WHERE fk_users=$codu ORDER BY dataf DESC LIMIT 1";
        $result2= mysqli_query($conn, $sql2);
        if(!$result2){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result2)){
            return $row["dataf"];
        }
    }
    function insertuserabb($conn,$codu,$subtype){
        $sql3="INSERT INTO users_abb(fk_users,fk_abb) VALUES ('$codu','$subtype')";
        $result3= mysqli_query($conn, $sql3);
        if(!$result3){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function insertconfirm($conn,$codu){
        $sql4="INSERT INTO confirm(fk_users,confirmed) VALUES ('$codu',0)";
        $result4= mysqli_query($conn, $sql4);
        if(!$result4){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function confirmuser($conn,$codf){
        $codu=getcodu($conn,$codf);
        $sql4="UPDATE confirm SET confirmed=1 WHERE fk_users=$codu";
        $result4= mysqli_query($conn, $sql4);
        if(!$result4){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function checkuserlogin($conn,$email){
        $sql="SELECT * FROM users WHERE email='".$email."'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die(mysqli_error($conn));
        }
        if((mysqli_num_rows($result)===0)){
            $err= "Utente non ancora registrato";
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function getpasshash($conn,$email){
        $sql="SELECT pass FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["pass"];
        }
    }
    function checkifconfirmed($conn,$email){
        $codu= getcodu2($conn, $email);
        $sql="SELECT confirmed FROM confirm WHERE fk_users=$codu";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["confirmed"];
        }
    }
    function getlogininfo($conn,$email){
        $sql="SELECT * FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            assigndata($row);
        }
        $_SESSION["subplan"]=getsubtype2($conn, getcodu2($conn, $email));
        header("Location:index.php");
    }
    function assigndata($row){
        $_SESSION["codf"]=$row["codf"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["lastname"]=$row["cognome"];
        $_SESSION["firstname"]=$row["nome"];
        $_SESSION["reg"]=$row["reg"];
        $_SESSION["pro"]=$row["pro"];
        $_SESSION["com"]=$row["com"];
        $_SESSION["via"]=$row["via"];
        $_SESSION["civ"]=$row["civico"];
        $_SESSION["cap"]=$row["cap"];
        $_SESSION["numcard"]=$row["numcard"];
        $_SESSION["scadcard"]=$row["scadcard"];
        $_SESSION["cvv"]=$row["cvv"];
    }
    function managemonth(){
        $data=date("m");
        if($data<10){
            return trim($data,0);
        }
        else{
            return $data;
        }
    }
    function managemonth2($data){
        if($data<10){
            return trim($data,0);
        }
        else{
            return $data;
        }
    }
    function getnextsvuot($conn,$plan){
        $datanew=date("Y-m-d");
        $querysubpart=getsqlsubquery($plan);
        $i=0;
        while($i<=3){
            $datanew= date_format(date_add(date_create($datanew),date_interval_create_from_date_string("1 day")),"Y-m-d");
            $sql="SELECT * FROM svuotamenti WHERE $querysubpart datas='$datanew'";
            $result= mysqli_query($conn, $sql);
            if(!$result){
                $err= mysqli_errno($conn);
                die("<script>location.href='error.php?err=$err'</script>");
            }
            if(mysqli_num_rows($result)>0){
                $nextdates[$i]=$datanew;
                $i++;
            }
        }
        return $nextdates;
    }
    function getsqlsubquery($plan){
        switch($plan){
            case 1:
                $sql="fk_abb=1 AND";
                break;
            case 2:
                $sql="(fk_abb=1 OR fk_abb=2) AND";
                break;
            case 3:
                $sql="";
                break;
        }
        return $sql;
    }
    function gettitlenextsvuot($data){
        $month= managemonth2(date_format(date_create($data), "m"));
        switch($month){
            case "1": $title="Gennaio ".date("Y");break;
            case "2": $title="Febbraio ".date("Y");break;
            case "3": $title="Marzo ".date("Y");break;
            case "4": $title="Aprile ".date("Y");break;
            case "5": $title="Maggio ".date("Y");break;
            case "6": $title="Giugno ".date("Y");break;
            case "7": $title="Luglio ".date("Y");break;
            case "8": $title="Agosto ".date("Y");break;
            case "9": $title="Settembre ".date("Y");break;
            case "10": $title="Ottobre ".date("Y");break;
            case "11": $title="Novembre ".date("Y");break;
            case "12": $title="Dicembre ".date("Y");break;
            default: $title="Errore";break;
        }
        return $title;
    }
    function getsiglanextsvuot($conn,$data,$plan){
        $querysubpart=getsqlsubquery($plan);
        $sql="SELECT sigla FROM svuotamenti,contenitori WHERE $querysubpart datas='$data' AND fk_cont=codicec";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            $sigla[]=$row["sigla"];
        }
        return $sigla;
    }
    function changepass($conn,$email,$newpass){
        $sql="UPDATE users SET pass='$newpass' WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
    function getfattcod($conn,$email){
        $codu= getcodu2($conn, $email);
        $sql="SELECT codicef FROM fatture WHERE fk_users=$codu ORDER BY dataf DESC";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        if(mysqli_num_rows($result)){
            while($row= mysqli_fetch_assoc($result)){
                $recentfatt[]=$row["codicef"];
            }
            return $recentfatt; 
        }
    }
    function getsubprice($conn,$subplan){
        $sql="SELECT prezzo FROM abbonamenti WHERE codicea='$subplan'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["prezzo"];
        }
    }
    function getfattinfo($conn,$cod,$email){
        $codu= getcodu2($conn, $email);
        $sql="SELECT numf,dataf FROM fatture WHERE codicef='$cod' AND fk_users='$codu'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        $infofatt= mysqli_fetch_assoc($result);
        return $infofatt;
    }
    function edituser($conn,$email,$lastname,$firstname,$com,$via,$civ,$cap,$subplan,$cardnum,$cardscad,$cvv){
        $codu= getcodu2($conn,$email);
        $subtype=getsubtype($conn,$subplan);
        $sql="UPDATE users SET cognome='$lastname',nome='$firstname',com='$com',via='$via',civico='$civ',cap='$cap',numcard='$cardnum',scadcard='$cardscad',cvv='$cvv' WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        $sql3="UPDATE users_abb SET fk_abb=$subtype WHERE fk_users=$codu";
        $result3= mysqli_query($conn, $sql3);
        if(!$result3){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
    }
	function getcodf($conn,$email){
		$sql="SELECT codf FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result){
            $err= mysqli_errno($conn);
            die("<script>location.href='error.php?err=$err'</script>");
        }
        while($row= mysqli_fetch_assoc($result)){
            return $row["codf"];
        }
	}