<?php
if(isset($_COOKIE["crm"])){

echo $_COOKIE["crm"];

}else{
    echo "Cookie is set now, Please refresh";
setcookie("crm","Biswas Company CRM",time()+(8600),);
}



?>