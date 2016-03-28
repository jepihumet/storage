<?php
/**
 * StorageException.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
namespace Jepi\Storage;

use Jepi\Exception\Exception;

class StorageException extends Exception
{
    protected $exceptionType = "Storage Exception";
}