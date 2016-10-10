<?php

class Key
{
    private $file;
    protected $master_key;

    function __construct()
    {
        // Only for developers...
        // $master_key = sha256 = nombre del cliente
        $this->setMasterKey("a05ac87e074e841c4c3ce1631523e4c314d1806e6b32696b2a5466c47cb387e5");
    }

    function make_key($file)
    {
        $this->setFile($file);

        $orig_contents = file_get_contents($file);
        $fp = fopen($file, "wb");
        fwrite($fp, $orig_contents . "key:" . $this->getMasterKey());
        fclose($fp);

        return "ok";
    }

    function download_file()
    {
        //forza la descarga del archivo y lo elimina
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getMasterKey()
    {
        return $this->master_key;
    }

    /**
     * @param string $master_key
     */
    public function setMasterKey($master_key)
    {
        $this->master_key = $master_key;
    }



}

$uploads_dir = '/home/clubdem1/public_html/modelos/uploads';
if (strstr($_FILES['fileKey']['type'], 'image/')) {
    $tmp_name = $_FILES["fileKey"]["tmp_name"];
    $name = $_FILES["fileKey"]["name"];
    $fullFile = "$uploads_dir/$name";
    if (!move_uploaded_file($tmp_name, $fullFile)) {
        echo "Error: " . PHP_EOL;
    } else {
        $c = new Key();
        echo $c->make_key($fullFile);
    }
} else {
    echo "Sube un archivo valido (.png .jpg .jpeg)";
}
