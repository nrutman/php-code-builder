<?php

namespace Swaggest\PhpCodeBuilder\Types;

use Swaggest\PhpCodeBuilder\PhpClass;
use Swaggest\PhpCodeBuilder\PhpClassTraitInterface;
use Swaggest\PhpCodeBuilder\PhpTemplate;

/**
 * Class ReferenceTypeOf
 * @package Swaggest\PhpCodeBuilder\Types
 * @deprecated redundant by TypeOf
 */
class ReferenceTypeOf extends PhpTemplate
{
    /** @var PhpClassTraitInterface */
    private $class;

    /**
     * TypeOf constructor.
     * @param PhpClassTraitInterface $class
     */
    public function __construct(PhpClassTraitInterface $class)
    {
        $this->class = $class;
    }

    protected function toString()
    {
        return $this->class->getReference();
    }

}