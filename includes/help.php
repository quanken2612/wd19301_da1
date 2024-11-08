<?php
function uploadFile($file, $folderUpload = '../public/img/') {
    // Kiểm tra tính hợp lệ của file đầu vào
    if (!isset($file) || $file['error'] != UPLOAD_ERR_OK) {
        return null; // Trả về null nếu có lỗi với file upload
    }
    
    // Tạo thư mục nếu chưa tồn tại
    if (!file_exists($folderUpload)) {
        mkdir($folderUpload, 0777, true);
    }

    // Thêm time() để tránh trùng tên file
    $fileName = time() . "_" . basename($file['name']);
    $pathStorageForDB = './public/img/' . $fileName; // Đường dẫn tương đối để lưu vào DB
    $pathStorage = $folderUpload . $fileName; // Đường dẫn thực tế để lưu file

    $from = $file['tmp_name'];
    $to = $pathStorage; // Đường dẫn thực tế

    // Di chuyển file đã tải lên
    if (move_uploaded_file($from, $to)) {
        return $pathStorageForDB; // Trả về đường dẫn tương đối để lưu vào DB
    } 

    return null; // Upload thất bại, trả về null
}
?>
