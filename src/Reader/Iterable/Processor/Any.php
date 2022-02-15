<?php

declare(strict_types=1);

namespace Yiisoft\Data\Reader\Iterable\Processor;

class Any extends GroupProcessor
{
    public function getOperator(): string
    {
        return \Yiisoft\Data\Reader\Filter\Any::getOperator();
    }

    protected function checkResults(array $results): bool
    {
        return false;
    }

    protected function checkResult(bool $result): ?bool
    {
        return $result ? true : null;
    }
}
