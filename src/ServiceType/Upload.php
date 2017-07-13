<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
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
     * Method to call the operation originally named UploadSessions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SessionList $sessionList
     * @param string $deleteExistingParticipants
     * @return \StructType\UploadStatusList|bool
     */
    public function UploadSessions(\StructType\SessionList $sessionList, $deleteExistingParticipants)
    {
        try {
            $this->setResult(self::getSoapClient()->UploadSessions($sessionList, $deleteExistingParticipants));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadModules
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ModuleList $moduleList
     * @return \StructType\UploadStatusList|bool
     */
    public function UploadModules(\StructType\ModuleList $moduleList)
    {
        try {
            $this->setResult(self::getSoapClient()->UploadModules($moduleList));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadVolumeLicense
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $userId
     * @param string $licenseKey
     * @return \StructType\VolumeLicense|bool
     */
    public function UploadVolumeLicense($userId, $licenseKey)
    {
        try {
            $this->setResult(self::getSoapClient()->UploadVolumeLicense($userId, $licenseKey));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UploadStatusList|\StructType\VolumeLicense
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
