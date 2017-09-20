<?php

namespace Wedo;

class TooLongMethod
{
    public function getFileName($versionNumber)
    {
        $filePutName = str_split('FileNameTest');

        for ($i = 0; $i < 2; $i++)
        {
            if ($versionNumber[$i] > 89)
            {
                $filePutName[13 + (2 * $i) + $i] = '9';
                switch ($versionNumber[$i])
                {
                case 91:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 92:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 93:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 94:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 95:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 96:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 97:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 98:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 99:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 79)
            {
                $filePutName[13 + (2 * $i) + $i] = '8';
                switch ($versionNumber[$i])
                {
                case 81:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 82:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 83:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 84:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 85:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 86:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 87:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 88:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 89:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 69)
            {
                $filePutName[13 + (2 * $i)] = '7';
                switch ($versionNumber[$i])
                {
                case 71:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 72:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 73:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 74:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 75:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 76:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 77:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 78:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 79:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 59)
            {
                $filePutName[13 + (2 * $i) + $i] = '6';
                switch ($versionNumber[$i])
                {
                case 61:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 62:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 63:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 64:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 65:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 66:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 67:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 68:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 69:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 49)
            {
                $filePutName[13 + (2 * $i) + $i] = '5';
                switch ($versionNumber[$i])
                {
                case 51:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 52:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 53:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 54:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 55:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 56:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 57:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 58:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 59:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 39)
            {
                $filePutName[13 + (2 * $i) + $i] = '4';
                switch ($versionNumber[$i])
                {
                case 41:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 42:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 43:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 44:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 45:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 46:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 47:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 48:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 49:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 29)
            {
                $filePutName[13 + (2 * $i) + $i] = '3';
                switch ($versionNumber[$i])
                {
                case 31:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 32:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 33:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 34:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 35:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 36:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 37:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 38:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 39:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 19)
            {
                $filePutName[13 + (2 * $i) + $i] = '2';
                switch ($versionNumber[$i])
                {
                case 21:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 22:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 23:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 24:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 25:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 26:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 27:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 28:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 29:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else if ($versionNumber[$i] > 9)
            {
                $filePutName[13 + (2 * $i) + $i] = '1';
                switch ($versionNumber[$i])
                {
                case 11:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 12:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 13:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 14:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 15:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 16:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 17:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 18:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 19:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
            else
            {
                switch ($versionNumber[$i])
                {
                case 1:
                    $filePutName[14 + (2 * $i) + $i] = '1';
                    break;
                case 2:
                    $filePutName[14 + (2 * $i) + $i] = '2';
                    break;
                case 3:
                    $filePutName[14 + (2 * $i) + $i] = '3';
                    break;
                case 4:
                    $filePutName[14 + (2 * $i) + $i] = '4';
                    break;
                case 5:
                    $filePutName[14 + (2 * $i) + $i] = '5';
                    break;
                case 6:
                    $filePutName[14 + (2 * $i) + $i] = '6';
                    break;
                case 7:
                    $filePutName[14 + (2 * $i) + $i] = '7';
                    break;
                case 8:
                    $filePutName[14 + (2 * $i) + $i] = '8';
                    break;
                case 9:
                    $filePutName[14 + (2 * $i) + $i] = '9';
                    break;
                }
            }
        }

        return implode('' ,$filePutName);
    }
}
