<?php 
function update_status($conn,$userId,$status){
    $sql= "UPDATE product SET status='$status' WHERE userId='$userId'";
if (mysqli_query($conn, $sql)){
    $_SESSION['status'] = $status;
    return 200;
}else{
    return 100;
}
}
function update_status_by_product($conn,$productId,$status){
    $sql= "UPDATE product SET status='$status' WHERE productid='$productId'";
if (mysqli_query($conn, $sql)){
    return 200;
}else{
    return 100;
}
}
function userId_to_data($conn,$userId){
    $sql = "SELECT * FROM userdetail WHERE userId= '$userId'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }else{
        return 0;
    }
}
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
function all_amount_by_userId($conn,$userid) {
	$sql1 = "SELECT SUM(amount) as Overallamount FROM product WHERE userId= '$userid'";
    $result1 = mysqli_query($conn,$sql1);
    return mysqli_fetch_assoc($result1)['Overallamount'];
}

function all_amount_include_discount($conn,$amount,$discount_name,$purpose) {
	$sql1 = "SELECT * FROM utilities WHERE topic= '$discount_name'";
    $result1 = mysqli_query($conn,$sql1);
    $sale_value_percent =  mysqli_fetch_assoc($result1)['value'];
	$dicount_value = $amount/$sale_value_percent;
	$dicountent_value =  $amount - $dicount_value;
	if (isset($purpose) && $purpose == "1"){
		return $dicount_value;
		}else{
	return $dicountent_value;
	}
}
?>
<?php
// echo ip_info($_SERVER['HTTP_CLIENT_IP'], "Country");
// echo ip_info("173.252.110.27", "Country"); // United States
// echo ip_info("173.252.110.27", "Country Code"); // US
// echo ip_info("173.252.110.27", "State"); // California
// echo ip_info("173.252.110.27", "City"); // Menlo Park
// echo ip_info("173.252.110.27", "Address"); // Menlo Park, California, United States

// print_r(ip_info("173.252.110.27", "Location")); // Array ( [city] => Menlo Park [state] => California [country] => United States [country_code] => US [continent] => North America [continent_code] => NA )

?>