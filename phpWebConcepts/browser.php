<!DOCTYPE html>
<html>
    <body>
        <?php
        //php creates usefule environment variables as seen in phpinfo.php
        //the environment variables are:
        //$_SERVER[HTTP_USER_AGENT] which identifies the browser
        //$_SERVER[HTTP_HOST] which identifies the host
        //$_SERVER[HTTP_REFERER] which identifies the page that linked to this page
        //$_SERVER[HTTP_ACCEPT_LANGUAGE] which identifies the language used by the browser
        //$_SERVER[HTTP_ACCEPT_ENCODING] which identifies the encoding used by the browser
        //$_SERVER[HTTP_ACCEPT_CHARSET] which identifies the character set used by the browser
        //$_SERVER[HTTP_ACCEPT] which identifies the content types accepted by the browser
        

        function getBrowser(){
            $b_agent=$_SERVER['HTTP_USER_AGENT'];
            $b_name="Unknown";
            $b_version="Unknown";
            $b_platform="Unknown";
            $b_pattern="/MSIE|Firefox|Chrome|Safari/i";

            //getting the platform
            if(preg_match("/Windows/i",$b_agent)){
                $b_platform="Windows";
            }
            elseif(preg_match("/Linux/i",$b_agent)){
                $b_platform="Linux";
            }
            elseif(preg_match("/Mac/i",$b_agent)){
                $b_platform="Mac";
            }

            //getting the name of the user agent
            
        ?>
    </body>
</html>