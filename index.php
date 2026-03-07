<?php 

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
