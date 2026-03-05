<?php 

//napisat programmu na php, ispolzuya string method. est function, kotoraya vizivaet input(readline), 
//v nyom mogu pisat text skolko zaxochu, vtoroy input prixodit srazu posle otpravki pervogo input, kakoy simvol 
//napishu, obyazatelno proverit esli pusto snova doljno priyti i takje probel toje ne schitat za pustotu, tak 
// kak eto toje simvol, esli sdelayu probel, to iz texta uberet vse probeli, esli napishu bukvu m to vse, esli slovo i t.d
// v konce dat mne raznicu length, toest do i posle


// function test(){
//     print_r("Greq text: ");
//     $originaltext = readline();

//     do{
//         print_r("Greq simvol kam bar, vory uzumek jnjel: ");
//         $t = readline();

//         if(strlen($t) == 0){
//             print_r("Porceq noric mi ban grel: ");
//         }
//     }while(strlen($t) == 0);

//     $poxvactext = str_replace($t, "", $originaltext);

//     $oldlen = strlen($originaltext);
//     $newlen = strlen($poxvactext);
//     $diff = $oldlen - $newlen;

//     print_r("------Rezultat------");
//     print_r("Texty poxveluc heto: " . $poxvactext . "\n");
//     print_r("Length do: " . $oldlen . "\n");
//     print_r("Length posle: " . $newlen . "\n");
//     print_r("Tarberucyuny: " . $diff . "\n");
// }

// test();




//napisat function kotoriy budet sozdavat txt file dav emu nazvanie kotoroe ya dam i etot file doljen bit v papke data

// function test($filename, $content = ""){
//     $directory = "data";

//     if(!is_dir($directory)){
//         mkdir($directory, 0777, true);
//     }

//     $filePath = $directory . "/" . $filename . ".txt";

//     if(file_put_contents($filePath, $content) != false){
//         return "Gotovo! Fayl lezhit tut: " . $filePath;
//     }

//     return "Chto-to poshlo ne tak.";
// }

// test("tester", "testi michi textna")



//napisat function kotoriy budet proveryat est li s takim nazvaniem file v papke data, esli est to pust vidast true


// function test2($name){
//     $exists = is_file("data/" . $name . ".txt");
//     return $exists;
// }

// $status = test2("testikner");
// var_dump($status);




//napisat function, kotoriy pri vizove on doljen vzyat otvet true, ego on beryot iz function test2, esli file est on poluchaet otvet true, on razreshit
//ego chitat i v nyom pisat i pechataet v console, eshyo odna function posle togo kak poluchil napechatal v console, doljno rabotat srazu sleduyushaya function,
// kotoraya sprosit xotite k nemu sdelat edit, esli chelovek napishet y, to to chto napishet vzyat postavit v input i sdelat edit, toest ya smogu ili udalit chtoto
// ili dobavit posle chego ya doljna v kovichkax dat save, chtobi moya programma save sdelala, vsyo eto razmestit v odnu function, chtobi vsyo vmeste rabotalo

function test($filename, $content = "", $a = false){
    $directory = "data";

    if(!is_dir($directory)){
        mkdir($directory, 0777, true);
    }

    $filePath = $directory . "/" . $filename . ".txt";
    if($a == true){
        $finalContent = "\n" . $content;
    }else{
        $finalContent = $content;
    }

    if($a == true){
        $result = file_put_contents($filePath, $finalContent, FILE_APPEND);
    }else{
        $result = file_put_contents($filePath, $finalContent);
    }

    return $result != false;
}

function test2($name){
    return is_file("data/" . $name . ".txt");
}

function test3($filename){
    if(test2($filename)){
        print_r("STATUS: true (Fily gtnvac e)\n");
        print_r("--- MICHINY ---\n" . file_get_contents("data/$filename.txt") . "\n-------------------\n");
        
        print_r("Uzumek anel edit? (y/n): ");
        if(trim(fgets(STDIN)) != "y"){
            return;
        }

        print_r("Yntrek: 1 - Poxel, 2 - Sharunakel: ");
        $c = trim(fgets(STDIN));
        $b = ($c == "2");
    }else{
        print_r("STATUS: false (Fily gouycuyn chuni)\n");
        print_r("Fily kstexcvi.\n");
        $b = false; 
    }

    print_r("Greq text (karox ek ogtagorcel Enter). Verchum greq 'save' pahpanelu hamar:\n");
    
    $fullContent = ""; 

    while(true){
        $l = fgets(STDIN);
        
        if(str_contains($l, "'save'")){
            $c = str_replace("'save'", "", $l);
            $fullContent = $fullContent . $c;
            break; 
        }
        $fullContent = $fullContent . $l;
    }

    if(test($filename, trim($fullContent), $b)){
        print_r("Hajoxvac e! Pahpanvac e data/$filename.txt\n");
    }else{
        print_r("Sxal: Chhajoxvec pahel.\n");
    }
}

print_r("Fili anun e: ");
$name = trim(fgets(STDIN));
test3($name);
?>