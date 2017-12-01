<?php
namespace ioext\tool;

class CEncryption
{
    public static function MD5( $sTmp, $nLength = 32, & $sRtn = null, & $sDesc = "" )
    {
        $nErrCode = CErrCode::SUCCESS;
        if( CLib::SafeStringVal( $sTmp )  )
        {
        }
        else
        {
            $nErrCode = CErrCode::PARAM_ERROR;
        }

        return $nErrCode;
    }
}