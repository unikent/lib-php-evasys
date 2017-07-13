<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://evasys-dmz.kent.ac.uk/evasys/services/soapserver-v61.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://evasys-dmz.kent.ac.uk/evasys/services/soapserver-v61.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Request ServiceType
 */
$request = new \ServiceType\Request($options);
/**
 * Sample call for RequestTicket operation/method
 */
if ($request->RequestTicket($Login, $Password) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for GetPswdsByParticipant operation/method
 */
if ($get->GetPswdsByParticipant($UserMailAddress, $CourseCode) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUser operation/method
 */
if ($get->GetUser($UserId, $IdType, $IncludeCourses, $IncludeSurveys, $IncludeParticipants, $IncludeSecondaryCourses) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUsersBySubunit operation/method
 */
if ($get->GetUsersBySubunit($nSubunitId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllPeriods operation/method
 */
if ($get->GetAllPeriods() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCoursesByUserId operation/method
 */
if ($get->GetCoursesByUserId($nUserId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCourse operation/method
 */
if ($get->GetCourse($CourseId, $IdType, $IncludeSurveys, $IncludeParticipants) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPeriod operation/method
 */
if ($get->GetPeriod($sPeriodId, $sPeriodIdType) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllForms operation/method
 */
if ($get->GetAllForms($IncludeCustomReports) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyTypes operation/method
 */
if ($get->GetSurveyTypes() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFormByCourseIdAndPeriodId operation/method
 */
if ($get->GetFormByCourseIdAndPeriodId($nCourseId, $nPeriodId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetForm operation/method
 */
if ($get->GetForm($FormId, $IdType, $IncludeOnlyQuestions) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyById operation/method
 */
if ($get->GetSurveyById($nSurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveysByCourse operation/method
 */
if ($get->GetSurveysByCourse($nCourseId, $nFormId, $nPeriodId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPswdsBySurvey operation/method
 */
if ($get->GetPswdsBySurvey($nSurveyId, $nPswdCount, $nCodeTypes) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPDFReport operation/method
 */
if ($get->GetPDFReport($nSurveyId, $nUserId, $nCustomPDFId, $nLanguageID) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSubunits operation/method
 */
if ($get->GetSubunits() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSubunit operation/method
 */
if ($get->GetSubunit($SubunitId, $IdType, $IncludeInstructors) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPDFPluginsByFormId operation/method
 */
if ($get->GetPDFPluginsByFormId($FormId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPDFQuestionnaire operation/method
 */
if ($get->GetPDFQuestionnaire($FormId, $SurveyId, $SerialPrint) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPDFCoversheet operation/method
 */
if ($get->GetPDFCoversheet($SurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPDFPswd operation/method
 */
if ($get->GetPDFPswd($SurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSPSSRawData operation/method
 */
if ($get->GetSPSSRawData($SurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCSVRawData operation/method
 */
if ($get->GetCSVRawData($SurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyRawData operation/method
 */
if ($get->GetSurveyRawData($SurveyId, $IncludeOpenEndedQuestions) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyResults operation/method
 */
if ($get->GetSurveyResults($SurveyId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOnlineSurveyLinkByEmail operation/method
 */
if ($get->GetOnlineSurveyLinkByEmail($SurveyId, $EmailAddress, $AddRecipientToSurvey, $AutoIncreasePSWDCount) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomReportsByForm operation/method
 */
if ($get->GetCustomReportsByForm($FormId, $IdType) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSimpleForm operation/method
 */
if ($get->GetSimpleForm($FormId, $IdType, $IncludeCustomReports) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetVFD operation/method
 */
if ($get->GetVFD($FormId, $IncludeSecondaryData) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyRawDataByTime operation/method
 */
if ($get->GetSurveyRawDataByTime($StartTime, $EndTime, $IncludeOpenEndedQuestions) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSessionForUser operation/method
 */
if ($get->GetSessionForUser($UserId, $IdType) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCourseTypes operation/method
 */
if ($get->GetCourseTypes($OnlyModuleCourseTypes) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPswdsByRecipient operation/method
 */
if ($get->GetPswdsByRecipient($UserMailAddress) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPercentOfCompletedSurveysByParticipant operation/method
 */
if ($get->GetPercentOfCompletedSurveysByParticipant($UserMailAddress, $StartDate, $EndDate, $SubunitId, $IdType) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAccessibleSubunitsForSubunitAdmin operation/method
 */
if ($get->GetAccessibleSubunitsForSubunitAdmin($nUserId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserVolumeLicenses operation/method
 */
if ($get->GetUserVolumeLicenses($UserId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyOriginalScansPDF operation/method
 */
if ($get->GetSurveyOriginalScansPDF($SurveyId, $SheetId, $BatchId) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWebscanBatchList operation/method
 */
if ($get->GetWebscanBatchList($UserId, $Language) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\Delete($options);
$delete->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for DeleteUnusedPswds operation/method
 */
if ($delete->DeleteUnusedPswds(new \StructType\OnlineCodeList()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteUser operation/method
 */
if ($delete->DeleteUser($UserId, $IdType) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteCourse operation/method
 */
if ($delete->DeleteCourse($CourseId, $IdType) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSubunit operation/method
 */
if ($delete->DeleteSubunit($SubunitId, $IdType) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSurvey operation/method
 */
if ($delete->DeleteSurvey($SurveyId) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteTask operation/method
 */
if ($delete->DeleteTask($TaskId) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteVolumeLicense operation/method
 */
if ($delete->DeleteVolumeLicense($UserId, $LicenseId, $LicenseKey) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
$update->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for UpdateUser operation/method
 */
if ($update->UpdateUser(new \StructType\User()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateCourse operation/method
 */
if ($update->UpdateCourse(new \StructType\Course(), $DeleteExistingParticipants) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateSurvey operation/method
 */
if ($update->UpdateSurvey(new \StructType\Survey()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateInvitationTask operation/method
 */
if ($update->UpdateInvitationTask(new \StructType\InvitationTask()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRemindTask operation/method
 */
if ($update->UpdateRemindTask(new \StructType\RemindTask()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateResponseRateTask operation/method
 */
if ($update->UpdateResponseRateTask(new \StructType\ResponseRateTask()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateCloseTask operation/method
 */
if ($update->UpdateCloseTask(new \StructType\CloseTask()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Insert ServiceType
 */
$insert = new \ServiceType\Insert($options);
$insert->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for InsertCourse operation/method
 */
if ($insert->InsertCourse(new \StructType\Course()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertCentralSurvey operation/method
 */
if ($insert->InsertCentralSurvey($nUserId, $nCourseId, $nFormId, $nPeriodId, $sSurveyType, $sNotice) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertUser operation/method
 */
if ($insert->InsertUser(new \StructType\User()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertSubunit operation/method
 */
if ($insert->InsertSubunit(new \StructType\Unit()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertForm operation/method
 */
if ($insert->InsertForm(new \StructType\VFForm()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertParticipants operation/method
 */
if ($insert->InsertParticipants(new \StructType\PersonList(), $CourseId, $IdType, $DeleteExisting) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertSurveyNotice operation/method
 */
if ($insert->InsertSurveyNotice($SurveyId, $Notice, $UserId, $IdType) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertInvitationTask operation/method
 */
if ($insert->InsertInvitationTask(new \StructType\InvitationTask()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertRemindTask operation/method
 */
if ($insert->InsertRemindTask(new \StructType\RemindTask()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertResponseRateTask operation/method
 */
if ($insert->InsertResponseRateTask(new \StructType\ResponseRateTask()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Sample call for InsertCloseTask operation/method
 */
if ($insert->InsertCloseTask(new \StructType\CloseTask()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
/**
 * Samples for Close ServiceType
 */
$close = new \ServiceType\Close($options);
$close->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for CloseSurvey operation/method
 */
if ($close->CloseSurvey($nSurveyId) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Samples for Open ServiceType
 */
$open = new \ServiceType\Open($options);
$open->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for OpenSurvey operation/method
 */
if ($open->OpenSurvey($nSurveyId) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \ServiceType\Is($options);
$is->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for IsPswdUnused operation/method
 */
if ($is->IsPswdUnused($sPSWD) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Setup ServiceType
 */
$setup = new \ServiceType\Setup($options);
$setup->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for SetupCentralSurvey operation/method
 */
if ($setup->SetupCentralSurvey(new \StructType\User(), new \StructType\Course(), new \StructType\Unit(), $nFormId, $nPeriodId, $sSurveyType, $sNotice) !== false) {
    print_r($setup->getResult());
} else {
    print_r($setup->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \ServiceType\Upload($options);
$upload->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for UploadSessions operation/method
 */
if ($upload->UploadSessions(new \StructType\SessionList(), $DeleteExistingParticipants) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadModules operation/method
 */
if ($upload->UploadModules(new \StructType\ModuleList()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadVolumeLicense operation/method
 */
if ($upload->UploadVolumeLicense($UserId, $LicenseKey) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Activate ServiceType
 */
$activate = new \ServiceType\Activate($options);
$activate->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for ActivateOptionalQuestionsForSurvey operation/method
 */
if ($activate->ActivateOptionalQuestionsForSurvey($SurveyId, $SendEmail, $Mode) !== false) {
    print_r($activate->getResult());
} else {
    print_r($activate->getLastError());
}
/**
 * Sample call for ActivateOptionalQuestionsForSurveys operation/method
 */
if ($activate->ActivateOptionalQuestionsForSurveys(new \StructType\IDList(), $SendEmail, $Mode) !== false) {
    print_r($activate->getResult());
} else {
    print_r($activate->getLastError());
}
/**
 * Sample call for ActivateOptionalQuestionsForSurveyAddQuestions operation/method
 */
if ($activate->ActivateOptionalQuestionsForSurveyAddQuestions($SurveyId, new \StructType\ItemGroupList()) !== false) {
    print_r($activate->getResult());
} else {
    print_r($activate->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \ServiceType\_List($options);
$list->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for ListTasks operation/method
 */
if ($list->ListTasks(new \StructType\IDList(), new \StructType\IDList(), new \StructType\IDList(), new \StructType\IDList(), new \StructType\IDList()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
$create->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for CreatePdfReportDefinition operation/method
 */
if ($create->CreatePdfReportDefinition($PdfReportDefinitionName, $PdfReportDefinitionDescription, $PdfReportDefinitionBaseFormId, new \StructType\ItemList(), new \StructType\UserList(), $PdfReportDefinitionCreationMode, $PdfReportDefinitionBaseReportId) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Replace ServiceType
 */
$replace = new \ServiceType\Replace($options);
$replace->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for ReplaceAnswersToOpenQuestions operation/method
 */
if ($replace->ReplaceAnswersToOpenQuestions(new \StructType\IDList(), new \StructType\StringList(), $sReplaceComment) !== false) {
    print_r($replace->getResult());
} else {
    print_r($replace->getLastError());
}
/**
 * Samples for Apply ServiceType
 */
$apply = new \ServiceType\Apply($options);
$apply->setSoapHeaderHeader(new \StructType\Header());
/**
 * Sample call for ApplyActionOnWebscanBatch operation/method
 */
if ($apply->ApplyActionOnWebscanBatch($BatchId, $Action) !== false) {
    print_r($apply->getResult());
} else {
    print_r($apply->getLastError());
}
