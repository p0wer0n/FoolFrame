<?php

namespace Foolz\Foolframe\Model\Validation;

use Foolz\Foolframe\Model\Validation\Violation;

class ViolationCollection {

    /**
     * @var Violation[]
     */
    protected $violations;

    /**
     * @param Violation[] $violations
     */
    public function __construct($violations) {
        $this->violations = $violations;
    }

    /**
     * @return Violation[]
     */
    public function getArray() {
        return $this->violations;
    }

    /**
     * @return int
     */
    public function count() {
        return count($this->violations);
    }

    /**
     * @return string
     */
    public function getHtml() {
        $array = [];
        foreach ($this->violations as $violation) {
            $array[] = $violation->getLabel().': '.$violation->getViolationsString();
        }

        return implode('<br>', $array);
    }

    /**
     * @return string
     */
    public function getText() {
        $array = [];
        foreach ($this->violations as $violation) {
            $array[] = $violation->getLabel().': '.$violation->getViolationsString();
        }

        return implode("\n", $array);
    }
}