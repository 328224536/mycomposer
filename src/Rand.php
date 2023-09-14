<?php

namespace MyComposer\Rand;

class Rand
{
    public function uuid(): string
    {
        return uniqid();
    }
}