<?php
$con = $_POST['country'];
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-193.p.rapidapi.com/history?country=india",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-193.p.rapidapi.com",
		"x-rapidapi-key: 381e0dbffcmshc09ea9a79184fd7p1d4e68jsn57d21fcf6f3d"
	],
]);

$rep = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $data = array(array());
    $response = json_decode($rep,true);
    $date = '';
    $i=0;
    foreach($response['response'] as $key=> $val)
    {
        foreach($response['response'][$key] as $k=>$v)
        {
            foreach($response['response'][$key]['cases'] as $ke=>$value)
            {
                if($ke=='new' && $date != $response['response'][$key]['day'])
                {
                    $data[$i]=array(
                        "date"=>$response['response'][$key]['day'],
                        "new"=>$value,
                        
                    );
                }
                   
            }
            foreach($response['response'][$key]['deaths'] as $ke=>$value)
            {                
                if($ke=='new' && $date != $response['response'][$key]['day'])
                {
                   //echo $ke."=>".$value;
                   $data[$i]["death"]=$value;
                    $i=$i+1;
                }
            }
            $date = $response['response'][$key]['day'];
        }
    }
     print_r(json_encode($data));
}