<?php
    function getprojectmeta($projecturl){
        if ($metafile = fopen($projecturl . '/meta.txt', 'r')) {
        
            //boucle pour récupérer les meta du projet
            while (!feof($metafile)) {
                $line = fgetcsv($metafile, 256);
                switch ($line[0]) {
                    case "PROJECT NAME":
                        $meta_array["projectname"] = $line[1];
                        break;
                    case "STATUS":
                        $meta_array["status"] = $line[1];
                        break;
                    case "DATE":
                        $meta_array["date"] = $line[1];
                        break;
                    case "WHAT":
                        $count = count($line);
                        for ($i=1; $i<$count; $i++){
                            $meta_array["what"][$i-1] = $line[$i];   
                        }
                        break;
                    default:
                        break;                                
                }
            }
            fclose($metafile);
        }
        return $meta_array;
    }
?>