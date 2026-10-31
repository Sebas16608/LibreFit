<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraint as Assert;

class CreateProfileDto
{
    #[Assert\NotBlank]
}
