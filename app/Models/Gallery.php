<?php


namespace app\Models;


use Machine\Valve\Model;

class Gallery extends Model
{
    protected array $timestamp = [];
    protected array $fillable = [
        'album_id', 'albumName', 'image_name'
    ];

    /**
     * @param $data
     * @return bool|false|INT
     */
    public static function saveGallery($data)
    {
        return (new static)->save($data);
    }

    /**
     * @param $files
     * @param $id
     * @param null $path
     * @param null $album
     * @return bool
     */
    public static function saveFiles($files, $id, $path = null, $album = null)
    {
        $files = $files[array_key_first($files)];
        if ($files['tmp_name'] !== ''){
            (new static)->storeFiles($files, $id, $path, $album);
        }
        return true;
    }

    public function rules(): array
    {
        // TODO: Implement rules() method.
    }
}