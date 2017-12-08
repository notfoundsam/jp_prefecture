<?php

namespace JpPrefecture;

use JpPrefecture\Config;
use JpPrefecture\Prefecture;

/**
 * 
 * 
 * @category JpPrefecture
 * @package  JpPrefecture\JpPrefecture
 * @author   Zazimko Alexey <notfoundsam@gmail.com>
 * @link     https://github.com/notfoundsam/jp_prefecture
 *
 */
class JpPrefecture
{
    private $_prefectures = [];

    public static function findByCode($code)
    {
        $code = intval($code);

        if (array_key_exists($code, Config::CODES))
        {
            $v = Config::CODES[$code];

            return new Prefecture($code, $v['area'], $v['name_kanji'], $v['name_roman'], $v['name_hiragana'], $v['name_katakana'], $v['zip_range']);
        }

        return false;
    }

    public static function findByArea($area)
    {
        return null;
    }

    public static function findByKanji($kanji)
    {
        return null;
    }

    public static function findByRoman($roman)
    {
        return null;
    }

    public static function all()
    {
        foreach (Config::CODES as $k => $v)
        {
            $this->_prefectures[] = new Prefecture($k, $v['area'], $v['name_kanji'], $v['name_roman'], $v['name_hiragana'], $v['name_katakana'], $v['zip_range']);
        }

        return $this->_prefectures;
    }
}
