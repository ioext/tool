<?php
namespace ioext\tool;

class CEncryption
{
    /**
     * md5 加密
     *
     *  @link   http://www.w3school.com.cn/php/func_string_md5.asp
     *
     * @param $sTmp
     * @param bool $bDefault false 32位, true 15位
     * @param null $sRtn
     * @param string $sDesc
     * @return int
     */
    public static function MD5( $sTmp, $bDefault = true )
    {
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;
        $sRtn = null;

        if( CLib::SafeStringVal( $sTmp )  )
        {
            $sRtn = self::MD5( $sTmp, $bDefault );
        }

        return $sRtn;
    }
}