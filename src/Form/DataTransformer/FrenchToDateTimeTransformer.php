<?php 

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class FrenchToDateTimeTransformer implements DataTransformerInterface {

    public function transform($date) {

        if($date === null) {
            return '';
        }
        return $date->format('d/m/Y');
    }

    public function reverseTransform($frenchDate) {
        if($frenchDate === null) {
            throw new TransformationFailedException("Vous devez fournir une date"); 
        }

        $date = \DateTime::createFromFormat('d/m/y', $frenchDate);

        if($date === false) {
            throw new TransformationFailedException("La date n'est pas au bon format");
        }

        return $date;
    }
    
}