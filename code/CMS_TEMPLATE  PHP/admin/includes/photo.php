<?php
namespace Admin\Includes;

class Photo extends DataObject
{
    protected static $mainTable = "photos";
    protected static $dbTableFields = [
        'id',
        'title',
        'caption',
        'description',
        'filename',
        'alternate_text',
        'type',
        'size'
    ];
    public $id;
    public $title;
    public $caption;
    public $description;
    public $alternateText;
    public $filename;
    public $type;
    public $size;
//    public $tmpPath;
//    public $uploadDirectory = "images";
//    public $errors = [];
//    public $uploadErrorsArray = [
//        UPLOAD_ERR_OK => "There is no error",
//        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
//        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
//        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
//        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
//        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",
//        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
//        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
//    ];

    // This is passing $_FILES['uploaded_file'] as an argument
//    public function set_file($file)
//    {
//        if (empty($file) || !$file || !is_array($file)) {
//            $this->errors[] = "There was no file uploaded here";
//            return false;
//        } elseif ($file['error'] != 0) {
//            $this->errors[] = $this->uploadErrorsArray[$file['error']];
//            return false;
//        } else {
//            $this->filename = basename($file['name']);
//            $this->tmpPath = $file['tmp_name'];
//            $this->type = $file['type'];
//            $this->size = $file['size'];
//        }
//    }
//    public function picture_path()
//    {
//        return $this->uploadDirectory . DS . $this->filename;
//    }
//    public function save()
//    {
//        if ($this->id) {
//            $this->update();
//        } else {
//            if (!empty($this->errors)) {
//                return false;
//            }
//            if (empty($this->filename) || empty($this->tmpPath)) {
//                $this->errors[] = "the file was not available";
//                return false;
//            }
//            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->uploadDirectory . DS . $this->filename;
//            if (file_exists($target_path)) {
//                $this->errors[] = "The file {$this->filename} already exists";
//                return false;
//            }
//            if (move_uploaded_file($this->tmpPath, $target_path)) {
//                if ($this->create()) {
//                    unset($this->tmpPath);
//                    return true;
//                }
//            } else {
//                $this->errors[] = "the file directory probably does not have permission";
//                return false;
//            }
//        }
//    }
//    public function delete_photo()
//    {
//        if ($this->delete()) {
//            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->picture_path();
//            return unlink($target_path) ? true : false;
//        } else {
//            return false;
//        }
//    }
} // End of Class 
?>