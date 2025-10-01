<?php
$data = file_get_contents("php://input");
file_put_contents("callback.json", $data . PHP_EOL, FILE_APPEND);

http_response_code(200);
echo json_encode(["ResultCode" => 0, "ResultDesc" => "Callback received successfully"]);
