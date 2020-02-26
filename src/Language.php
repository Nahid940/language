<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 2/26/20
 * Time: 9:57 PM
 */

namespace Language;


class Language
{

    public function __construct()
    {

    }

    public function getLanguage($type,$key)
    {
        if($type=='bn')
        {
            $bn_file=file_get_contents('vendor/nahid940/language/json_files/bn.json');
            $json_decoded_file=json_decode($bn_file);
            return $json_decoded_file->bn->$key;
        }

        if($type=='en')
        {
            $bn_file=file_get_contents('vendor/nahid940/language/json_files/en.json');
            $json_decoded_file=json_decode($bn_file);
            return $json_decoded_file->bn->$key;
        }

    }


}