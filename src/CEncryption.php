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
     * @param bool $bDefault
     * @param null $sRtn
     * @param string $sDesc
     * @return int
     */
    public static function MD5( $sTmp, $bDefault = true, & $sRtn = null, & $sDesc = "" )
    {
        $nErrCode = CErrCode::SUCCESS;
        if( CLib::SafeStringVal( $sTmp )  )
        {
            $sRtn = self::MD5( $sTmp,$bDefault );
        }
        else
        {
            $nErrCode = CErrCode::PARAM_ERROR;
            $sDesc = "参数解析错误";
        }

        return $nErrCode;
    }
}