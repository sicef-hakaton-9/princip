<?php

include_once 'core.php';

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requestData = json_decode(file_get_contents("php://input"), true);

if($requestData['token'] != 'K5dP9q2w8GfXtLmVbU7Z'){
	die("Error: Not validate token!");
}

switch ($_GET['a']) {
    case 'sos':

    	/*	
			curl -X POST -H "Content-Type: application/json" -d '{ "token": "K5dP9q2w8GfXtLmVbU7Z", "patient_id": "12345", "coords": "51.5074, 0.1278", "time": "2023-11-04 14:30:00", "pulse": 75, "blood_pressure": "120/80" }' http://localhost/princip/api.php?a=sos
    	*/

	    if (
	        !isset($requestData['patient_id']) ||
	        !isset($requestData['time']) ||
	        !isset($requestData['pulse']) ||
	        !isset($requestData['coords']) ||
	        !isset($requestData['blood_pressure'])
	    ) {
	        http_response_code(400); // Bad Request
	        die('Error: Request it\'s not valid!');
	    }

		$query = "INSERT INTO intervention (patient_id, coords, time, pulse, blood_pressure, sos) VALUES (:patient_id, :coords, :time, :pulse, :blood_pressure, '1')";
		$statement = $pdo->prepare($query);

		$statement->bindParam(':patient_id', $requestData['patient_id']);
		$statement->bindParam(':coords', $requestData['coords']);
		$statement->bindParam(':time', $requestData['time']);
		$statement->bindParam(':pulse', $requestData['pulse']);
		$statement->bindParam(':blood_pressure', $requestData['blood_pressure']);

		$result = $statement->execute();

        break;

    case 'regular':

    	/*
			curl -X POST -H "Content-Type: application/json" -d '{ "token": "K5dP9q2w8GfXtLmVbU7Z", "patient_id": "12345", "time": "2023-11-04 14:30:00", "pulse": 75, "blood_pressure": "120/80" }' http://localhost/princip/api.php?a=regular
    	*/

	    if (
	        !isset($requestData['patient_id']) ||
	        !isset($requestData['time']) ||
	        !isset($requestData['pulse']) ||
	        !isset($requestData['blood_pressure'])
	    ) {
	        http_response_code(400); // Bad Request
	        die('Error: Request it\'s not valid!');
	    }

		$query = "INSERT INTO intervention (patient_id, time, pulse, blood_pressure, sos) VALUES (:patient_id, :time, :pulse, :blood_pressure, '0')";
		$statement = $pdo->prepare($query);

		$statement->bindParam(':patient_id', $requestData['patient_id']);
		$statement->bindParam(':time', $requestData['time']);
		$statement->bindParam(':pulse', $requestData['pulse']);
		$statement->bindParam(':blood_pressure', $requestData['blood_pressure']);

		$result = $statement->execute();

        break;        

    case 'add_patient':

    	/*
			curl -X POST -H "Content-Type: application/json" -d '{ "token": "K5dP9q2w8GfXtLmVbU7Z", "a": "add_patient", "firstname": "Ime", "lastname": "Prezime", "age": 30, "JMBG": "1234567890123", "carton_id": "456", "address": "Adresa" }' http://localhost/princip/api.php?a=add_patient
    	*/

	 	if (
	        !isset($requestData['firstname']) ||
	        !isset($requestData['lastname']) ||
	        !isset($requestData['age']) ||
	        !isset($requestData['JMBG']) ||
	        !isset($requestData['carton_id']) ||
	        !isset($requestData['address'])
	    ) {
	        http_response_code(400); // Bad Request
	        die('Error: Request it\'s not valid!');
	    }

		$query = "INSERT INTO patients (firstname, lastname, age, JMBG, carton_id, address) 
              VALUES (:firstname, :lastname, :age, :JMBG, :carton_id, :address)";
	    $statement = $pdo->prepare($query);

	    $statement->bindParam(':firstname', $requestData['firstname']);
	    $statement->bindParam(':lastname', $requestData['lastname']);
	    $statement->bindParam(':age', $requestData['age']);
	    $statement->bindParam(':JMBG', $requestData['JMBG']);
	    $statement->bindParam(':carton_id', $requestData['carton_id']);
	    $statement->bindParam(':address', $requestData['address']);

	    $result = $statement->execute();

	    if ($result) {
	        http_response_code(201);
	        die('The patient has been successfully added to the database!');
	    } else {
	        http_response_code(500);
	        die('Error: An error occurred while processing this action!');
	    }

        break;     

    default:
    	die('Error: API Not Found!');
        break;
}

?>