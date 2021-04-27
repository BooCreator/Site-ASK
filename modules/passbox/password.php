<?php
  if (isset($_POST["pass"])) {
    $pass = $_POST["pass"];
	$file = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSnhndWAd36QDWtEFbVisaiMQrKyusLpqzrtLrN9YVQHJC1tHc02ws7ohZ8jZOfj5Ehb1RuLiapBefi/pubhtml";
	switch(strtolower($pass)){
      case "гогорева": echo $file.'?gid=273337648&single=true'; break; //		-- 1с1
	  case "жукова": echo $file."?gid=1789273672&single=true"; break; //		-- 1а
	  case "маликова": echo $file."?gid=2069266020&single=true"; break; //		-- 1в
	  case "веремеева": echo $file."?gid=1403880187&single=true"; break; //		-- 1э
	  case "гребень": echo $file."?gid=1598855743&single=true"; break; //		-- 2с1
	  case "альховик": echo $file."?gid=1924793584&single=true"; break; //		-- 2с2
	  case "жебрак": echo $file."?gid=38899331&single=true"; break; //			-- 2с4
	  case "жолобова": echo $file."?gid=753641555&single=true"; break; //		-- 2а
	  case "шатуха": echo $file."?gid=1279611250&single=true"; break; //		-- 2т
	  case "дайнеко": echo $file."?gid=1394230825&single=true"; break; //		-- 2э
	  case "емельянова": echo $file."?gid=519128006&single=true"; break; //		-- 3с1
	  case "миндубаева": echo $file."?gid=1128667169&single=true"; break; //	-- 3с2
	  case "шмулянова": echo $file."?gid=1678572523&single=true"; break; //		-- 3с5
	  case "шаблицкая": echo $file."?gid=3084910&single=true"; break; //		-- 3а
	  case "сафронова": echo $file."?gid=1906163333&single=true"; break; //		-- 3т
	  case "антипирович": echo $file."?gid=2063921417&single=true"; break; //	-- 3э1
	  case "войтович": echo $file."?gid=224859422&single=true"; break; //		-- 3э2
	  case "зенович": echo $file."?gid=1109749469&single=true"; break; //		-- 4с1
	  case "хитрикова": echo $file."?gid=1289717218&single=true"; break; //		-- 4с2
	  case "дыщенко": echo $file."?gid=125551610&single=true"; break; //		-- 4с5
	  case "усов": echo $file."?gid=1325604242&single=true"; break; //			-- 4а
	  case "терехова": echo $file."?gid=686564019&single=true"; break; //		-- 4м
	  case "титенкова": echo $file."?gid=554569404&single=true"; break; //		-- 4т
	  case "косько": echo $file."?gid=518491644&single=true"; break; //			-- 4э
	  case "все": echo $file; break;
	  case "AJHjBSInaCASI8": echo "https://docs.google.com/spreadsheets/d/14AdlT2a0IWbev6SDqGX0r4OxCyelUPhB7qHT8MQQOik/edit?usp=sharing"; break;
	}
  }
?>