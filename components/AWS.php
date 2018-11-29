<?php

namespace app\components;

use Yii;

class AWS
{
    //Get the content of the file from the specified bucket
    public function getContent($bucket, $fileName)
    {
        try {
            $list = file_get_contents($bucket . $fileName);
            if (!empty($list)) {
                Yii::debug('Bucket content received');
            }
            return $list;
        }catch (\Exception $exception) {
            Yii::error($exception->getMessage());
            return false;
        }

    }
    //Save file content to specified bucket
    public function setContent($bucket, $fileName, $content)
    {
        try {
            file_put_contents($bucket . $fileName, $content);
            Yii::debug('Bucket content send');
            return true;
        }catch (\Exception $exception) {
            Yii::error($exception->getMessage());
            return false;
        }
    }
}