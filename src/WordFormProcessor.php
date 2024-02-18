<?php

declare(strict_types=1);

namespace StanislavGavrilchik\OtusComposerPackage;

class WordFormProcessor
{
    /**
     * @param int $n
     * @param string $form1
     * @param string $form2
     * @param string $form5
     * @return string
     */
    public function getPluralForm(int $n, string $form1, string $form2, string $form5): string
    {
        $n = abs($n) % 100;
        $n1 = $n % 10;

        if ($n > 10 && $n < 20) return $form5;
        if ($n1 > 1 && $n1 < 5) return $form2;
        if ($n1 == 1) return $form1;

        return $form5;
    }

}