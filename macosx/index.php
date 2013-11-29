<?php
 
class RedeemAPI {
    // Main method to redeem a code
    function redeem() {        
        $file = "/Users/darrencullen/Sites/webservices/macosx/WebServiceTestServer";
        ////$file = "/Users/darrencullen/Sites/phpinfo.php";
        //if (!file_exists($file))
        //    echo 'File does not exist: ', $file;
        //else
        //    echo 'File exists: ', $file;
                
        exec($file, $output, $return);
        //echo "Dir returned $return, and output:\n";
        var_dump($output);
    }
}
 
// This is the first thing that gets called when this page is loaded
// Creates a new instance of the RedeemAPI class and calls the redeem method
$api = new RedeemAPI;
$api->redeem();
 
?>