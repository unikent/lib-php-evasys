<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
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
     * Method to call the operation originally named CreatePdfReportDefinition
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v61.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $pdfReportDefinitionName
     * @param string $pdfReportDefinitionDescription
     * @param string $pdfReportDefinitionBaseFormId
     * @param \StructType\ItemList $relevantQuestions
     * @param \StructType\UserList $pdfReportDefinitionRecipients
     * @param string $pdfReportDefinitionCreationMode
     * @param string $pdfReportDefinitionBaseReportId
     * @return int|bool
     */
    public function CreatePdfReportDefinition($pdfReportDefinitionName, $pdfReportDefinitionDescription, $pdfReportDefinitionBaseFormId, \StructType\ItemList $relevantQuestions, \StructType\UserList $pdfReportDefinitionRecipients, $pdfReportDefinitionCreationMode, $pdfReportDefinitionBaseReportId)
    {
        try {
            $this->setResult(self::getSoapClient()->CreatePdfReportDefinition($pdfReportDefinitionName, $pdfReportDefinitionDescription, $pdfReportDefinitionBaseFormId, $relevantQuestions, $pdfReportDefinitionRecipients, $pdfReportDefinitionCreationMode, $pdfReportDefinitionBaseReportId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return int
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
