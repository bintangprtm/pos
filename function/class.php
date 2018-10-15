
function fstart($action,$method)
{
 $fstart = "<form action=".$action." method=".$method.">";
return $fstart;
}
function fend(){
$fend="</form>";
return $fend;
}
function input($type,$class,$id,$name,$f5,$value)
{
 $form = "<input type='".$type."' class='".$class."' id='".$id."' name='".$name."' placeholder='".$f5."' value='".$value."'>";
return $form;
}
