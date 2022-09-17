<?php namespace DSTU_TWO\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRElement;
use DSTU_TWO\JsonSerializable;

/**
 * There is a variety of postal address formats defined around the world. This format defines a superset that is the basis for all addresses around the world.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRAddress extends FHIRElement implements JsonSerializable
{
    /**
     * The purpose of this address.
     * @var \DSTU_TWO\FHIRElement\FHIRAddressUse
     */
    public $use = null;

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @var \DSTU_TWO\FHIRElement\FHIRAddressType
     */
    public $type = null;

    /**
     * A full text representation of the address.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @var \DSTU_TWO\FHIRElement\FHIRString[]
     */
    public $line = array();

    /**
     * The name of the city, town, village or other community or delivery center.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $city = null;

    /**
     * The name of the administrative area (county).
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $district = null;

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $state = null;

    /**
     * A postal code designating a region defined by the postal service.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $postalCode = null;

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $country = null;

    /**
     * Time period when address was/is in use.
     * @var \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Address';

    /**
     * The purpose of this address.
     * @return \DSTU_TWO\FHIRElement\FHIRAddressUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The purpose of this address.
     * @param \DSTU_TWO\FHIRElement\FHIRAddressUse $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @return \DSTU_TWO\FHIRElement\FHIRAddressType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @param \DSTU_TWO\FHIRElement\FHIRAddressType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A full text representation of the address.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A full text representation of the address.
     * @param \DSTU_TWO\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @return \DSTU_TWO\FHIRElement\FHIRString[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @param \DSTU_TWO\FHIRElement\FHIRString[] $line
     * @return $this
     */
    public function addLine($line)
    {
        $this->line[] = $line;
        return $this;
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @param \DSTU_TWO\FHIRElement\FHIRString $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * The name of the administrative area (county).
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * The name of the administrative area (county).
     * @param \DSTU_TWO\FHIRElement\FHIRString $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @param \DSTU_TWO\FHIRElement\FHIRString $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @param \DSTU_TWO\FHIRElement\FHIRString $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @param \DSTU_TWO\FHIRElement\FHIRString $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Time period when address was/is in use.
     * @return \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Time period when address was/is in use.
     * @param \DSTU_TWO\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->use) $json['use'] = $this->use->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->text) $json['text'] = $this->text->jsonSerialize();
        if (0 < count($this->line)) {
            $json['line'] = array();
            foreach($this->line as $line) {
                $json['line'][] = $line->jsonSerialize();
            }
        }
        if (null !== $this->city) $json['city'] = $this->city->jsonSerialize();
        if (null !== $this->district) $json['district'] = $this->district->jsonSerialize();
        if (null !== $this->state) $json['state'] = $this->state->jsonSerialize();
        if (null !== $this->postalCode) $json['postalCode'] = $this->postalCode->jsonSerialize();
        if (null !== $this->country) $json['country'] = $this->country->jsonSerialize();
        if (null !== $this->period) $json['period'] = $this->period->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Address xmlns="http://hl7.org/fhir"></Address>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->use) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->line)) {
            foreach($this->line as $line) {
                $line->xmlSerialize(true, $sxe->addChild('line'));
            }
        }
        if (null !== $this->city) $this->city->xmlSerialize(true, $sxe->addChild('city'));
        if (null !== $this->district) $this->district->xmlSerialize(true, $sxe->addChild('district'));
        if (null !== $this->state) $this->state->xmlSerialize(true, $sxe->addChild('state'));
        if (null !== $this->postalCode) $this->postalCode->xmlSerialize(true, $sxe->addChild('postalCode'));
        if (null !== $this->country) $this->country->xmlSerialize(true, $sxe->addChild('country'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}