
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema List</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        .cinema-list {
            
            margin: 50px auto;
            padding: 50px;
            border-radius: 10px;
            display: inline-block;
            position: absolute;
            right: 400px;
            top: 10px;
            width: 50vw;
            height: 60vh;
            border: 4px solid whitesmoke;
            z-index: 3;
    
            
        }
        .cinema-list h1 {
            text-align: center;
            margin-bottom: 50px;
        }
        .cinema-item {
            margin-bottom: 20px;
            padding: 20px;
            border-bottom: 2px solid white;
            font-size: 20px;
        }
       
        #emptytickets{
    height: 100vh;
    width: 100vw;
    background-color:#0b0c10;
    opacity: 0.4;
    z-index: 3;
}
#emptytickets2{
    height: 100vh;
    width: 100vw;
    background-image: url(tcticketsbg3.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top: 10px;
    left: 0px;
    z-index: -1;    
    
    
}
    </style>
</head>
<body>
<div id="emptytickets">
         
         </div>
         <div id="emptytickets2">
             
         </div>

<div class="cinema-list">
    <h1>Nearby Cinemas </h1>
    <?php

if(isset($_POST['submit'])){
    $city =strtolower( $_POST['city']);
   


    ##############
    # API METHOD #
    ##############
    
    $api = 'cinemasNearby/?n=5';
    // See documentation for other methods available.
    // https://developer.movieglu.com/v2/api-index/
    
    ####################
    # REQUIRED HEADERS #
    ####################
    
    // You can find the details below in the email you received when you registered for a MovieGlu evaluation account.
    $api_endpoint = 'https://api-gate2.movieglu.com/';
    $username = 'STUD_355'; // Example: $username = 'ABCD';
    $api_key = 'tYmSpl3mXT5uymtsI7CMP3kOKqDbLAdV97OuziLT';  //Example: $api_key = 'AbCdEFG7CuTTc6KX76mI5aAoGtqbrGW2ga6B4jRg';
    $basic_authorization = '	Basic U1RVRF8zNTU6UXRjOWNwazNiNVRN'; // Example: $basic_authorization = 'Basic UHSYGF4xNTpNOHdJQllxckYyN3y=';
    $territory = 'IN'; // Territory chosen as part of your evaluation key request  (Options: UK, FR, ES, DE, US, CA, IE, IN)
    $api_version = 'v200'; // API Version for evaluation - check documentation for later versions
    $device_datetime = (new DateTime())->format('Y-m-d H:i:s'); // Current device date/time 

    if($city=="pune"){
        $geolocation = '18.32;73.85';
    }elseif($city=="mumbai"){
        $geolocation = '19.07;72.87';
    }elseif ($city=="nagpur") {
        $geolocation = '21.14;79.08';
    }elseif ($city=="nashik") {
        $geolocation = '19.99;73.78';
    }elseif ($city=="kolhapur") {
        $geolocation = '16.70;74.24';
    }elseif ($city=="sangli") {
        $geolocation = '16.85;74.58';
    }elseif ($city=="satara") {
        $geolocation = '17.68;74.01';
    }elseif ($city=="baramati") {
        $geolocation = '18.17;74.60';
    }elseif ($city=="solapur") {
        $geolocation = '17.65;75.90';
    }elseif ($city=="jalgaon") {
        $geolocation = '21.00;75.56';
    }
   
    ########
    # cURL #
    ########
    
    // Initialize a cURL session
    $ch = curl_init();
    
    // Assign cURL Settings
    curl_setopt($ch, CURLOPT_URL, $api_endpoint . $api);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Authorization: ' . $basic_authorization, 
      'client: ' . $username,
      'x-api-key: ' . $api_key,  
      'territory: ' . $territory,
      'api-version: ' .$api_version,
      'device-datetime: ' . $device_datetime,
      'geolocation: ' .$geolocation 
     ]
    );
    
    // cURL execution and processing
$ret = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($ret, 0, $header_size);
$body = substr($ret, $header_size);
curl_close($ch);

// Output HTTP Status
// echo '<p> Returned Status: <b>' . $http_code . '</b></p>';
 // JSON decode body
 $response = json_decode($body, true);

 if($http_code == 200){
     $theatres = [];
     foreach ($response['cinemas'] as $cinema) {
         $cinema_name = $cinema['cinema_name'];
         $address = $cinema['address'];
         $address2 = $cinema['address2'];
         $city = $cinema['city'];

         $theatre_string = "$cinema_name, $address, $address2, $city";
         echo "<div class='cinema-item'>$theatre_string</div>";
     }
 } elseif ($http_code == 204) {
     echo '<p>No results for request</p>';
 } else {
     exit();
 }
}
 ?>
</div>

</body>
</html>