<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="lightgreen">


<?Php
//array declaration
$arr=array("mani","maran","kumar");
echo "<br>";
echo "Array 1st element : ".$arr[1];

//count array elements
echo "<br>Total  array elements : ".count($arr);
echo "<br>";
 
//array use function
$arr=array("mani","maran","kumar");
echo "Array elements are : ";
for($i=0;$i<count($arr);$i++)
{
echo "<br>element ".$i." is : ";
echo $arr[$i];
}
echo "<br>";

//sort array elements
$arr=array("mani","maran","kumar");
sort($arr);
echo "Array elements are with sorted : ";
for($i=0;$i<count($arr);$i++)
{
echo "<br>element ".$i." is : ";
echo $arr[$i];
}
echo "<br>";

//reverse sort
$arr=array("mani","maran","kumar");
rsort($arr);
echo "Array elements are with sorted : ";
for($i=0;$i<count($arr);$i++)
{
echo "<br>element ".$i." is : ";
echo $arr[$i];
}


//Multi Dimentional array
$ar=array("mani","maran","kumar",array("kavi","vasee"));
echo "<br>Multi Dimentional array elements : <br>"; 
echo $ar[3][0];
echo "<br>";
echo $ar[3][1];
echo "<br>";
echo $ar[2];


//join Array
$arr=array("mani","maran","kumar");
echo "<br>Join array elements : <br>";
$list=implode("#",$arr);
echo $list;



?>






	</body>
</HTML>