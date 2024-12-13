<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
    echo 'Data saved successfully!';
} else {
    echo 'Invalid request method.';
}
?>
