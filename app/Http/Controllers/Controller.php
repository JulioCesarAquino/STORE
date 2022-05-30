<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function Resize($file, $directory, $newWidth, $newHeight)
    {
        if ($file->hasFile('photo') && $file->file('photo')->isValid()) {
            $requestImage = $file->photo;
            $extension  = $requestImage->extension();
            $allowedfileExtension = ['pdf', 'jpg', 'png', 'webp', 'jpeg'];
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $temporaryImage = imagecreatefromstring(file_get_contents($requestImage));
                $sizeImage = getimagesize($requestImage);
                $resizeImage = imagecreatetruecolor($newWidth, $newHeight);
                imagecopyresampled($resizeImage, $temporaryImage, 0, 0, 0, 0, $newWidth, $newHeight, $sizeImage['0'], $sizeImage['1']);
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                imagejpeg($resizeImage, $directory . $imageName);
                return $imageName;
            } else {
                return response()->json(['invalid_file_format'], 422);
            }
        } else {
            return response()->json(['upload_file_not_found'], 400);
        }
    }
}
