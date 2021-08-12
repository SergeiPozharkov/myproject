<?php


namespace App\Helper;

/**
 * Отвечает за проверку пароля при регистрации
 */
class Password
{
    protected string $pass;

    /**
     * Инициализируется введенный пароль
     * @param string $pass
     */
    public function __construct(string $pass)
    {
        $this->setPass($pass);
    }


    /**
     * @param string $pass
     * @return $this
     */
    public function setPass(string $pass): static
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * Проверяет минимальную длину пароля в 8 символов
     * @return bool
     */
    public function checkMinSize(): bool
    {
        return mb_strlen($this->pass) >= 8;
    }

    /** Проверяет на максимальное число символов 128
     * @return bool
     */
    public function checkMaxSize(): bool
    {
        return mb_strlen($this->pass) <= 128;

    }

    /** Проверяет на наличие арабских цифр
     * @return bool
     */
    public function containsNumbers(): bool
    {
        return (bool)preg_match_all("/[0-9]/", $this->pass);
    }

    /** Проверяет на наличие кириллических букв
     * @return bool
     */
    public function checkCyrillic(): bool
    {
        return (bool)preg_match_all("/[а-я]/iu", $this->pass);
    }

    /** Проверяет на наличие латинских букв
     * @return bool
     */
    public function checkLatin(): bool
    {
        return (bool)preg_match_all("/[a-z]/iu", $this->pass);
    }

    /** Проверяет на отсутствие специфических символов в пароле
     * @return bool
     */
    public function checkForbiddenSymbols(): bool
    {
        return !preg_match_all("/[~!?@#$%^&*_\-+()\[\]{}><\/\\\|\"\\\'\\\.,:;]/u", $this->pass);
    }

    /** Проверяет на наличие хоты бы одной кириллической и(или) латинской строчной и одной заглавной буквы
     * @return bool
     */
    public function checkUpperLowerSymbols(): bool
    {
        return preg_match_all("/[a-zа-я]/u", $this->pass) && preg_match_all("/[A-ZА-Я]/u", $this->pass);

    }

    /** Проверяет на наличие пробелов
     * @return bool
     */
    public function checkSpaceSymbol(): bool
    {
        return (bool)preg_match_all("/\s/iu", $this->pass);
    }


}