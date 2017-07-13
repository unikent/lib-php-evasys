<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Setup ServiceType
 * @subpackage Services
 */
class Setup extends AbstractSoapClientBase
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
    public function setSoapHeaderHeader(\StructType\Header $header, $nameSpace = 'soapserver-v61.wsdl', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Header', $header, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named SetupCentralSurvey
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v61.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\User $oUser
     * @param \StructType\Course $oCourse
     * @param \StructType\Unit $oSubunit
     * @param string $nFormId
     * @param string $nPeriodId
     * @param string $sSurveyType
     * @param string $sNotice
     * @return \StructType\Survey|bool
     */
    public function SetupCentralSurvey(\StructType\User $oUser, \StructType\Course $oCourse, \StructType\Unit $oSubunit, $nFormId, $nPeriodId, $sSurveyType, $sNotice)
    {
        try {
            $this->setResult(self::getSoapClient()->SetupCentralSurvey($oUser, $oCourse, $oSubunit, $nFormId, $nPeriodId, $sSurveyType, $sNotice));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Survey
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
