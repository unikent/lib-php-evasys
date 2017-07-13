<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
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
     * Method to call the operation originally named ListTasks
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\IDList $subunitIDList
     * @param \StructType\IDList $formIDList
     * @param \StructType\IDList $surveyIDList
     * @param \StructType\IDList $userIDList
     * @param \StructType\IDList $taskTypeIDList
     * @return \StructType\TaskList|bool
     */
    public function ListTasks(\StructType\IDList $subunitIDList, \StructType\IDList $formIDList, \StructType\IDList $surveyIDList, \StructType\IDList $userIDList, \StructType\IDList $taskTypeIDList)
    {
        try {
            $this->setResult(self::getSoapClient()->ListTasks($subunitIDList, $formIDList, $surveyIDList, $userIDList, $taskTypeIDList));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TaskList
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
