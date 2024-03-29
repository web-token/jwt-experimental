<?php

declare(strict_types=1);

namespace Jose\Experimental\KeyEncryption;

final class A256CTR extends AESCTR
{
    public function name(): string
    {
        return 'A256CTR';
    }

    protected function getMode(): string
    {
        return 'aes-256-ctr';
    }
}
