<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Replace ServiceType
 * @subpackage Services
 */
class Replace extends AbstractSoapClientBase
{
    /**
     * Sets the Header SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\Header $header
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderHeader(\StructType\Header $header, $nameSpace = 'soapserver-v60.wsdl', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Header', $header, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ReplaceAnswersToOpenQuestions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\IDList $surveyIDList
     * @param \StructType\StringList $itemCodeList
     * @param string $sReplaceComment
     * @return boolean|bool
     */
    public function ReplaceAnswersToOpenQuestions(\StructType\IDList $surveyIDList, \StructType\StringList $itemCodeList, $sReplaceComment)
    {
        try {
            $this->setResult(self::getSoapClient()->ReplaceAnswersToOpenQuestions($surveyIDList, $itemCodeList, $sReplaceComment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
