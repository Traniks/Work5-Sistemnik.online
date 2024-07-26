<?php
if( stristr($_SERVER['REQUEST_URI'], basename(__FILE__)) ){
	header('HTTP/1.0 404 Not Found', true, 404); exit("404 Not Found");
}
/*
	?phrase_id=2141240
	?phrase_id=2141240&region_id=2141236

	Файлы с заменами в папке replacements
	
*/
$CheckUTMData = CheckUTMData();
$Phone = $CheckUTMData["NewPhone"] ? $CheckUTMData["NewPhone"] : $DefData["Phone"];
$PageUTMData = [
	"Title" => $CheckUTMData["NewTitle"] ? $CheckUTMData["NewTitle"] : $DefData["Title"],
	"image" => $CheckUTMData["NewImage"] ? $CheckUTMData["NewImage"] : $DefData["image"],
	"city" => $CheckUTMData["NewCity"] ? $CheckUTMData["NewCity"] : $DefData["city"],
	/* "Phone" => [
		"PhoneLink" => str_replace(["+","(",")","-"," "], "", $Phone),
		"PhoneShow" => $Phone,
	], */
];

/**/
function CheckUTMData(){
	$GETArr = array();
	$phrase_id = FALSE;
	if(@count($_GET)>0){
		foreach($_GET AS $Key => $Val){
			
			if($Key == "utm_content"){
				$phrase_id =  end(explode("|", $Val));
			}
			
			$Key = strip_tags(trim($Key));
			$Val = strip_tags(trim($Val));
			if($Key != "" AND $Val != ""){
				$GETArr[$Key] = $Val;
			}
			
		}
	}
	
	if($phrase_id){
		$GETArr["phrase_id"] = $phrase_id;
	}
	
	$REtDataArr = [
		"NewTitle" => FALSE,
		"NewImage" => FALSE,
		"NewCity" => FALSE,
	];
	
	//Заголовок
	if(@$GETArr['phrase_id'] != ""){//Если UTM есть
		
		//Заголовок
		$NewTitle = UTMCheckNewData($GETArr['phrase_id'], "titles.csv");
		if(@$NewTitle){//Если заголовок найден
			/* $NewTitleArr = explode(' ', $NewTitle);
			$i = 1;
			foreach($NewTitleArr as $Key => $word){
				//if($i % 2 == 0){
				if($i % 4 == 0 && $i != 0){
					$NewTitleArr[$Key] = $word ."<br data-v-c046ed3e=''/>";
				}
				if($i > 3){ BREAK;}
				$i++;
			}
			$REtDataArr["NewTitle"] = implode(" ", $NewTitleArr); */
			
			
			$REtDataArr["NewTitle"] = $NewTitle;
		}
		
		//Картинка 
		$NewImage = UTMCheckNewData($GETArr['phrase_id'], "pictures.csv");
		if(@$NewImage){//Если есть ссылка на картинку
			$REtDataArr["NewImage"] = $NewImage;
		}
		
		//Телефон 
		/* $NewPhone = UTMCheckNewData($GETArr['phrase_id'], "number.csv");
		if($NewPhone){
			$REtDataArr["NewPhone"] = $NewPhone;
		} */
		
	}
	
	//Город
	if(@$GETArr['region_id'] != ""){//Если UTM есть
		
		//Город
		$NewCity = UTMCheckNewData($GETArr['region_id'], "cities.csv", TRUE);
		if(@$NewCity){//Если город найден
			$REtDataArr["NewCity"] = $NewCity;
		}
		
		//Телефон 
		/* $NewPhone = UTMCheckNewData($GETArr['region_id'], "number.csv");
		if($NewPhone){
			$REtDataArr["NewPhone"] = $NewPhone;
		} */
		
	}
	
	return $REtDataArr;
	
}//END FUNCTION

/*
	Ищет замены
	$RetArr == TRUE Если нужно вернуть всю строку данных по ключу 
*/
function UTMCheckNewData($DataID, $csvFileName, $RetArr = false){
	
	//Разбираем файл 
	$keywords = @explode("\n",  trim(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/PL/replacements/'.$csvFileName)));
	
	foreach($keywords as $v){
		$v = explode(';', $v);
		
		$v[0] = trim($v[0]);//ID 
		$v[1] = trim($v[1]);//Текст
		
		if(@$DataID == $v[0] AND $v[1] != ""){
			
			if($RetArr){
				unset($v[0]);
				return array_values($v);//Вся строка сиз файла массивом
			}
			return $v[1];//Текст
		}
	}
	
	//Нечего не нашел
	return FALSE;
	
}//END FUNCTION