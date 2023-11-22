<?php

namespace AfupTours\AtPhp83\DynamicClassConstantFetch;

class DynamicClassConstantFetch {
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(DynamicClassConstantFetch::{$searchableConstant});
