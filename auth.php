<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
global $USER;

if(!is_object($USER)) $USER = new CUser;

$login 	= (isset($_POST['login']) ? $_POST['login'] : '');
$pass	= (isset($_POST['pass']) ? $_POST['pass'] : '');

$arAuthResult = $USER->Login($login, $pass);
$APPLICATION->arAuthResult = $arAuthResult;

if(!empty($arAuthResult['TYPE']) && $arAuthResult['TYPE'] == 'ERROR')
	echo json_encode($APPLICATION->arAuthResult);
else
	echo json_encode(array('success'=>true));
?>