<?php
if( $_REQUEST["html"] )
{
   $html= $_REQUEST['html'];
   $css=$_POST['css'];
   $js=$_POST['js'];
   echo "<script type=\"text/javascript\">".$js."</script><style>".$css."</style></head>".$html." ";
}
?>
