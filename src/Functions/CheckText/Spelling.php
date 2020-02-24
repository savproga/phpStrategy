<?php

/**
 * Проверка орфографии текста
 * php version 7.4.3
 *
 * @category Class
 * @package  StrategyTest
 * @author   Alex Shakmaev <savproga@mail.ru>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.uxel.ru
 */

namespace App\Functions\CheckText;

use App\Interfaces\ICheckText as ICheckText;

class Spelling implements ICheckText
{
    public function check(string $text): string
    {
        return "Spelling::Check <br>";
    }
}
