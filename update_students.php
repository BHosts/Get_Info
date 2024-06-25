<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    file_put_contents('students.csv', $input);
    echo 'تم تحديث الملف بنجاح';
} else {
    http_response_code(405);
    echo 'طريقة الطلب غير مدعومة';
}
?>
