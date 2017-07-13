<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetPswdsByParticipant
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $userMailAddress
     * @param string $courseCode
     * @return \StructType\OnlineSurveyKeyList|bool
     */
    public function GetPswdsByParticipant($userMailAddress, $courseCode)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPswdsByParticipant($userMailAddress, $courseCode));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
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
     * @param string $idType
     * @param string $includeCourses
     * @param string $includeSurveys
     * @param string $includeParticipants
     * @param string $includeSecondaryCourses
     * @return \StructType\User|bool
     */
    public function GetUser($userId, $idType, $includeCourses, $includeSurveys, $includeParticipants, $includeSecondaryCourses)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUser($userId, $idType, $includeCourses, $includeSurveys, $includeParticipants, $includeSecondaryCourses));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsersBySubunit
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nSubunitId
     * @return \StructType\UserList|bool
     */
    public function GetUsersBySubunit($nSubunitId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUsersBySubunit($nSubunitId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllPeriods
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PeriodList|bool
     */
    public function GetAllPeriods()
    {
        try {
            $this->setResult(self::getSoapClient()->GetAllPeriods());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCoursesByUserId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nUserId
     * @return \StructType\CourseList|bool
     */
    public function GetCoursesByUserId($nUserId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCoursesByUserId($nUserId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCourse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $courseId
     * @param string $idType
     * @param string $includeSurveys
     * @param string $includeParticipants
     * @return \StructType\Course|bool
     */
    public function GetCourse($courseId, $idType, $includeSurveys, $includeParticipants)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCourse($courseId, $idType, $includeSurveys, $includeParticipants));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPeriod
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $sPeriodId
     * @param string $sPeriodIdType
     * @return \StructType\Period|bool
     */
    public function GetPeriod($sPeriodId, $sPeriodIdType)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPeriod($sPeriodId, $sPeriodIdType));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllForms
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $includeCustomReports
     * @return \StructType\SimpleFormList|bool
     */
    public function GetAllForms($includeCustomReports)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAllForms($includeCustomReports));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyTypes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\SurveyTypeList|bool
     */
    public function GetSurveyTypes()
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyTypes());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFormByCourseIdAndPeriodId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nCourseId
     * @param string $nPeriodId
     * @return \StructType\SimpleFormList|bool
     */
    public function GetFormByCourseIdAndPeriodId($nCourseId, $nPeriodId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetFormByCourseIdAndPeriodId($nCourseId, $nPeriodId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetForm
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @param string $idType
     * @param string $includeOnlyQuestions
     * @return \StructType\VFForm|bool
     */
    public function GetForm($formId, $idType, $includeOnlyQuestions)
    {
        try {
            $this->setResult(self::getSoapClient()->GetForm($formId, $idType, $includeOnlyQuestions));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyById
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nSurveyId
     * @return \StructType\Survey|bool
     */
    public function GetSurveyById($nSurveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyById($nSurveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveysByCourse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nCourseId
     * @param string $nFormId
     * @param string $nPeriodId
     * @return \StructType\SurveyList|bool
     */
    public function GetSurveysByCourse($nCourseId, $nFormId, $nPeriodId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveysByCourse($nCourseId, $nFormId, $nPeriodId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPswdsBySurvey
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nSurveyId
     * @param string $nPswdCount
     * @param string $nCodeTypes
     * @return \StructType\OnlineCodeList|bool
     */
    public function GetPswdsBySurvey($nSurveyId, $nPswdCount, $nCodeTypes)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPswdsBySurvey($nSurveyId, $nPswdCount, $nCodeTypes));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPDFReport
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nSurveyId
     * @param string $nUserId
     * @param string $nCustomPDFId
     * @param string $nLanguageID
     * @return string|bool
     */
    public function GetPDFReport($nSurveyId, $nUserId, $nCustomPDFId, $nLanguageID)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPDFReport($nSurveyId, $nUserId, $nCustomPDFId, $nLanguageID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubunits
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\UnitList|bool
     */
    public function GetSubunits()
    {
        try {
            $this->setResult(self::getSoapClient()->GetSubunits());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubunit
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $subunitId
     * @param string $idType
     * @param string $includeInstructors
     * @return \StructType\Unit|bool
     */
    public function GetSubunit($subunitId, $idType, $includeInstructors)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSubunit($subunitId, $idType, $includeInstructors));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPDFPluginsByFormId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @return \StructType\PDFPluginContainer|bool
     */
    public function GetPDFPluginsByFormId($formId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPDFPluginsByFormId($formId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPDFQuestionnaire
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @param string $surveyId
     * @param string $serialPrint
     * @return string|bool
     */
    public function GetPDFQuestionnaire($formId, $surveyId, $serialPrint)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPDFQuestionnaire($formId, $surveyId, $serialPrint));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPDFCoversheet
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @return string|bool
     */
    public function GetPDFCoversheet($surveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPDFCoversheet($surveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPDFPswd
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @return string|bool
     */
    public function GetPDFPswd($surveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPDFPswd($surveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSPSSRawData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @return string|bool
     */
    public function GetSPSSRawData($surveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSPSSRawData($surveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCSVRawData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @return string|bool
     */
    public function GetCSVRawData($surveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCSVRawData($surveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyRawData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @param string $includeOpenEndedQuestions
     * @return \StructType\SurveyRawData|bool
     */
    public function GetSurveyRawData($surveyId, $includeOpenEndedQuestions)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyRawData($surveyId, $includeOpenEndedQuestions));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyResults
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @return \StructType\SurveyResult|bool
     */
    public function GetSurveyResults($surveyId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyResults($surveyId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOnlineSurveyLinkByEmail
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $surveyId
     * @param string $emailAddress
     * @param string $addRecipientToSurvey
     * @param string $autoIncreasePSWDCount
     * @return string|bool
     */
    public function GetOnlineSurveyLinkByEmail($surveyId, $emailAddress, $addRecipientToSurvey, $autoIncreasePSWDCount)
    {
        try {
            $this->setResult(self::getSoapClient()->GetOnlineSurveyLinkByEmail($surveyId, $emailAddress, $addRecipientToSurvey, $autoIncreasePSWDCount));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomReportsByForm
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @param string $idType
     * @return \StructType\CustomReportList|bool
     */
    public function GetCustomReportsByForm($formId, $idType)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCustomReportsByForm($formId, $idType));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSimpleForm
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @param string $idType
     * @param string $includeCustomReports
     * @return \StructType\SimpleForm|bool
     */
    public function GetSimpleForm($formId, $idType, $includeCustomReports)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSimpleForm($formId, $idType, $includeCustomReports));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVFD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $formId
     * @param string $includeSecondaryData
     * @return string|bool
     */
    public function GetVFD($formId, $includeSecondaryData)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVFD($formId, $includeSecondaryData));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyRawDataByTime
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $startTime
     * @param string $endTime
     * @param string $includeOpenEndedQuestions
     * @return \StructType\SurveyRawDataList|bool
     */
    public function GetSurveyRawDataByTime($startTime, $endTime, $includeOpenEndedQuestions)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyRawDataByTime($startTime, $endTime, $includeOpenEndedQuestions));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSessionForUser
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
     * @param string $idType
     * @return \StructType\UserSession|bool
     */
    public function GetSessionForUser($userId, $idType)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSessionForUser($userId, $idType));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCourseTypes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $onlyModuleCourseTypes
     * @return \StructType\CourseTypeList|bool
     */
    public function GetCourseTypes($onlyModuleCourseTypes)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCourseTypes($onlyModuleCourseTypes));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPswdsByRecipient
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $userMailAddress
     * @return \StructType\OnlineCodeList|bool
     */
    public function GetPswdsByRecipient($userMailAddress)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPswdsByRecipient($userMailAddress));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetPercentOfCompletedSurveysByParticipant
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $userMailAddress
     * @param string $startDate
     * @param string $endDate
     * @param string $subunitId
     * @param string $idType
     * @return int|bool
     */
    public function GetPercentOfCompletedSurveysByParticipant($userMailAddress, $startDate, $endDate, $subunitId, $idType)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPercentOfCompletedSurveysByParticipant($userMailAddress, $startDate, $endDate, $subunitId, $idType));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetAccessibleSubunitsForSubunitAdmin
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Header
     * - SOAPHeaderNamespaces: soapserver-v60.wsdl
     * - SOAPHeaderTypes: \StructType\Header
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $nUserId
     * @return \StructType\UnitList|bool
     */
    public function GetAccessibleSubunitsForSubunitAdmin($nUserId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAccessibleSubunitsForSubunitAdmin($nUserId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserVolumeLicenses
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
     * @return \StructType\VolumeLicenseList|bool
     */
    public function GetUserVolumeLicenses($userId)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUserVolumeLicenses($userId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return int|string|\StructType\Course|\StructType\CourseList|\StructType\CourseTypeList|\StructType\CustomReportList|\StructType\OnlineCodeList|\StructType\OnlineSurveyKeyList|\StructType\PDFPluginContainer|\StructType\Period|\StructType\PeriodList|\StructType\SimpleForm|\StructType\SimpleFormList|\StructType\Survey|\StructType\SurveyList|\StructType\SurveyRawData|\StructType\SurveyRawDataList|\StructType\SurveyResult|\StructType\SurveyTypeList|\StructType\Unit|\StructType\UnitList|\StructType\User|\StructType\UserList|\StructType\UserSession|\StructType\VFForm|\StructType\VolumeLicenseList
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
