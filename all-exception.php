<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/21
 * Time: 21:54
 */

set_exception_handler( function( $e ){
    var_dump( $e->getMessage() );
} );

set_error_handler( function( $errno, $errstr, $errfile, $errline ){
    if ( !( error_reporting() & $errno )){
        //error_reporting没有设置这个错误，将其忽略
        return;
    }

    throw new Exception( $errstr, $errno );
} );


try {

//    throw new LogicException('xxx');
//    throw new LengthException('aaa');
//    throw new BadFunctionCallException('xx');
//    throw new BadMethodCallException('xxx');

} catch ( LengthException $e) {

    var_dump( $e->getMessage() );

} finally {
    //这里的代码始终会运行
    echo "always do this.";
}


throw new Exception('xcxx');


