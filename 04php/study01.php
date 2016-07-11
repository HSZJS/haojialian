<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
     <?php
         echo "鎴戠殑绗竴娈礟HP鑴氭湰<br>";
     ?>
     <!--1. 语法，php脚本可以放置于文档中的任何位置。php脚本以《？php？》 开始或者结尾
         2. php文件的默认文件扩展名是“。php”
         3.php文件通常抱哈按html标签以及一些php脚本代码。
         
        -->
        <?php
           echo "hello world!<br>";   
         ?>
         <!--1.php语句以分号结尾； php代码块的关闭标签也会移动表明分号，因此在php代码块的最后一行不必使用分号
             2。php中的注释； php代码中的注释不会被作为程序来读取和还行。它唯一的作用是提供代码编辑者阅读。
             注释运用于：a 使其他人理解您正在做的工作 -注释可以让其他程学院了解您在每个步骤进行的工作（㘝您供职于团队）
           b 提醒自己都做过什么 -大多数程序员都曾经经历过一两年后对项目进行返工，然后不得不重新考虑他们做过的事情。注释可以记录您在
           写代码时的思路。
            
           -->
           <?php
              //这是单行注释
             #这也是单行注释
              /*
                                                       这是多行注释块 它横跨了多行
              */
            ?>
            <!-- php 大小写敏感， 
                 在php中，所偶用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感
             -->
             
             <?php
             ECHO "HELLO WORLD!<br>";
             echo "hello world!<br>";
             ECHO "Hello World!<br>";
             ?>
             
            <!-- 在php中，所有变量都对大小写敏感。
               在下面的例子中，只有第一条语句会显示$color变量的值，这是因为$color/$COLOR以及$coLOR被视作三个不同的变量
             --> 
             
             <?php
                $color = "red";
                echo "My car is ". $color."<br>";
                echo "My car is".$COLOR."<br>";
                echo "My car is".$coLOR."<br>";

              ?>
             
             <!-- php变量
                     变量是存储信息的容器
              -->
              <?php
              $x = 5;
              $y = 6;
              $z = $x+$y;
              echo $z;
               ?>
               <!-- 
                 类似代数，在代数中我们使用字母来保存值；
                 在php中，这三个字母被称为变量。
                 注释：请把变量视为存储数据的容器。
                 php变量，正如代数，php变量尅用于保存值和表达式。
                 变量的名称可以很短，以可以取根据描述性的名称
                 php变量规则：a变量名以$符号开头，其后是变量的名称 b变量名称必须以字母或下划线开头
                 c变量名称不能以数字开头
                 d变量名称只能包含字母数字子和下划线
                 变量名称对大小写敏感
                 注释：php变量民粹对大小写敏感！！！
                -->
                
                
                
             <!-- php变量、
               php没有创建变量额命令。变量会在首次为其赋值的时候被创建：
               注释：下面语句执行后，变量txt会保存值Hello World！。变量x会保存值5
               ，变量名y会保存值10.5 如果您为变量赋的值是文本，请用引号包围该值。
              -->
             
             <?php 
               $txt = "Hello World!";
               $x = 5;
               $y = 10.5;
 
             ?>
         <!-- php 是一门类型松散的语言
            在上面的例子中，请注意我们不必告知php变量的数据类型。
            php根据它的值，自动把变量转换为正确的数据类型。
            在诸如c和c++以及Java之类的语言中，程序员必须在使用变量之前声明它的名称和类型。
            
            PHP变脸作用域 。在php中，可以在脚本的任意位置对变量进行声明。
            php本剧它的值，自动把变量转换为正确额数据类型。
            变量的作用域指的是变量能够被引用、使用的那部分脚本。
            php有三种不同的变量作用域：
            1local （局部）global(全局) static静态
            
            local和global作用域
            函数之外声明的变量拥有global作用域，只能在函数以外进行访问。
            函数内部的变量拥有local作用域，只能在函数内部进行访问。
            下面额例子测试了带有局部和全局作用域变量。
          -->    
           <?php
            $x = 5; #全局变量
            
            function myTest(){
                              $y = 10; //局部变量
                              echo "<p>测试函数内部的变量:</p>";
                              echo "变量x是:$x <hr>";
                              echo "<br>";
                              echo "变量y 是:$x<hr>";
                              }
              
             
           myTest();
           echo "<p>测试函数内部的变量</p>";
           echo "变量x 是 $x";
           echo "<br>";
           echo "变量y 是：$x";      
           ?>   
             <!-- 在上例中，有两个变量$x 和$y,以及一个函数myTest().$x是局部变量，因为它是在函数之外声明的，而且$y是
             局部变量，因为它是在函数内声明的。
             如果我们在myTest().$x是全局变量，因为它是在函数之外声明的，而且，而$y是局部变量，因为它是在函数内部 创建的。
             注释：您可以在不同的函数中创建名称仙童的局部变量，因为局部变量只能被在其中创建它的函数识别。
             
             php global 关键词
             global 关键词用于访问函数内部的全局变量。
             要做到这一点，请在（函数内部）变量前面使用global关键词。
             
             
              -->
             
<?php
$x=5;
$y=10;

function wodetest() {
  global $x,$y;
  $y=$x+$y;
}

wodetest();
echo $y; // 输出 15
echo"<br>";
?>
  <!-- PHP同时在名为$GLOBALS[index]的数组中存储了所偶的全局变量。下表存有变量名。这个数组在函数内也开昂文，并能够英语直接更新全局变量 -->          
             
<?php
     $x = 5;
     $y = 10;
     function mytest4()
{
  $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 myTest4();
 echo $y;//输出15
?>
<!--然后，每当函数被调用时，这个变量所存储的信息都是函数最后一次被调动是所包含的信息。
  注释：该变量仍然是函数的局部变量
  -->
             
             <!-- echo 和print语句
             在PHP中，有两种基本的输出方法:echo 和print.
             在本教程中，我们几乎在每个例子中都会用到echo和print。因此，本节为您讲解更多关于这两条输出语句的知识。
             PHP echo 和print语句、
             echo -能够输出一个以上的字符串
             print 只能输出一个字符串，并始终返回1；
             提示：echo比print稍快，因为它不返回任何值。
             
             PHP echo语句
             echo是一个语言结构，有无括号均可使用：echo或echo().
             显示字符串
             下面的例子展示如何用echo命令来显示不同的字符串（同时请注意字符串中能包含HTML标记）
             
              -->
             
             <?php
                echo"<h2>PHP is fun!</h2>";
                echo"Hello world!<br>";
                echo"I'm about to learn PHP!<br>";
                echo "This","string","was","made","with multiple parameters.";
             ?>
             <!-- PHP数据类型 
                  php 字符串 字符串是字符序列，比如"Hello World!"
                                                              字符串  可以是引号内的任何文本。您可以使用单引号或双引号；
                                                              
             -->
             <?php
                  $x = "Hello world!";
                  echo $x;
                  echo "<br>";
                  $x = 'Hello World';
                  echo $x;
             ?>
             <!--
               php 整数 整数是没有小数的数字
               整数规则：整数必须有至少一个数字
              整数不能包含逗号或空格
              整数不能有小数点
              整数正负均可
              可以用三种格式规定整数：十进制、十六进制（前缀是0x）或八进制（前缀是0）
              在下面的例子中，我们将测试不同的数字.php var_dump()会返回变量的数据类型和值：
              
              
               -->
                <?php
                   $x = 5985;
                   var_dump($x);
                   echo "<br>";
                   $x = -345;//负数
                   var_dump($x);
                   $x = 0x8C;//十六进制数
                   var_dump($x);
                   echo "<br>";
                   $x = 047;//八进制数
                   var_dump($x);
                    ?>
      <!-- 	php 浮点数
         浮点数是有小数点或指数形式的数字
         在下面的例子中，我们将测试不同的数字。PHP var_dump()会返回变量的数据类型和值：
       -->
              <?php
                 $x = 10.365;
                 var_dump($x);
                 echo "<br>";
                 $x = 2.4e3;
                 var_dump($x);
                 echo "<br>";
                 $x = 8E-5;
                 var_dump($x);
               ?>
               <!-- 
               PHP逻辑  逻辑true或false
               $x = true;
               $y = false;
               逻辑常用于条件测试。您将在本教程稍后的章节学到更多有关条件测试的知识。
               
               PHP数组
               数组在一个变量中存储多个值。
               在下面的例子中，我们将测试不同的数字。 PHP var_dump()会返回变量的数据类型和值：
       
                -->
                        
               <?php
                 $cars = array("Volvo","BMW","SAAB");
                 var_dump($cars);
              ?>
              <!-- PHP对象
                 对象是存储数据和有关如何处理数据的信息的数据类型。
                 在PHP中，必须明确地声明对象。
                 首先我们必须声明对象的类。对此，我们使用class关键词。类是包含属性和方法的结构。
                 然后我们在对象类中定义数据类型，然后在该类中使用此数据类型：
               -->
               <?php
                 class Car
                  {
                        var $color;
                        function Car ($color = "green")
                        {
                           $this->color = $color;
                           
                        }
                       function what_color(){
                       return $this ->color;
}
                 }

                ?>
             <!-- PHP NULL值
              特殊的NULL值表示变量无值。NULL是数据类型NULL唯一可能的值。
              NULL值标表示变量是否为空。也用于区分空字符串与空值数据库。
              可以通过把值设置为NULL，将变量清空：
              -->
              <?php
                 $x = "Hello world!";
                 $x = null;
                 var_dump($x);
               ?>
               <!--PHP字符串函数
                 字符串是字符序列，比如“Hello World!”.
                 php 字符串函数 在本节中，我们将学习常用的字符串操作函数。
                 PHP strlen()函数
                 strlen()函数返回字符串的长度，以字节符计。
                 下例返回字符串“Hello World!”的长度
                 
                 -->
                 <?
                  echo "Hello world!";
                  echo strlen ("Hello world!");
                  ?>
                  <!-- strlen()常用于循环和其他函数，在确定字符串何时结束很重要。
                  例如，在循环中，我们也需要在字符串的最后一个 字符之后停止循环
                  PHP strpos()函数用于检索字符串内指定的字符或文本。
                  如果找到匹配，则会返回首个匹配额字符位置。如果未找到匹配，则将返回FALSE.
                  
                  -->
                  <?php
                     echo strpos("Hello World!","World"); 
                   ?>
                   <!-- PHP常量
                    常量类似变量，但是常量一旦被定义就无法更改或撤销定义。
                    PHP常量
                    常量是单个值得标识符（名称）。在脚本中无法改变该值。
                    有效的常量名以字符串或下划线开头（常量名称前面没有$符号）.
                    注释：与变量不同，常量贯穿整个脚本是自动全局的。
                    
                    
                    
                    设置php常量 如果设置常量，请使用define()函数 -它使用三个参数：
                    1.首个参数定义常量的名称
                    2.第二个参数定义常量的值
                    3.可选的第三个参数规定常量名是否对大小写敏感。默认是false
                    下面的例子创建了一个对大小写敏感的常量，值为"welcome to W3School.com.cn!":
                    
                    -->
                    <?php
                         define("GREETING","Welcome to W3School.com.cn!");
                        echo  GREETING;
                        echo"<br>";
                    ?>
                    <!--下例子创建了一个对大小写不敏感的常量，值为"Welcome to W3School.com.cn!:" -->
                    <?php
                      define ("GREETING","Welcome to W3School.com.cn!",true);
                      echo greeting;
                    ?>
                    <!-- PHP运算符
                           php算数运算符号
                           + - * / %
                     -->
                  <?php
                     $x = 10;
                     $y = 6;
                     echo ($x +$y),"<br>";
                     echo ($x -$y),"<br>";
                     echo ($x *$y),"<br>";
                     echo ($x /$y),"<br>";
                     echo ($x %$y),"<br>";
                   ?>
                   
                   <!-- 
                           PHP 赋值运算符
                           PHP 赋值运算符用于向变量写值。
                           PHP中基础的赋值运算符是“=”.这意味着右侧表达式会为左侧运算设置值。
                           赋值、加、减、乘、除、模数
                    -->
                    <?php
                            $x = 10;
                            echo $x,"<br>";
                            
                            $y = 20;
                            $y +=100;
                            echo $y,"<br>";
                            $z = 50;
                            $z -=25;
                            echo $z,"<br>";
                            $i = 5;
                            $i *=6;
                            echo $i,"<br>";
                            $j = 10;
                            $j /=5;
                            echo $j,"<br>";
                    
                            $k = 15;
                            $k %=4;
                            echo $k,"<br>";
                           
                    ?>
                   
                   <!-- PHP字符串运算符号
                                                                                。串接  。= 串接赋值
                    -->
                    <?php
                      $a = "Hello";
                      $b = $a . " world!";
                      echo $b; // 输出 Hello world!

                      $x="Hello";
                       $x .= " world!";
                       echo $x; // 输出 Hello world!
                       ?>
                       <!--PHP递增、递减运算符号  -->
                       <?php
$x=10; 
echo ++$x; // 输出 11

$y=10; 
echo $y++; // 输出 10

$z=5;
echo --$z; // 输出 4

$i=5;
echo $i--; // 输出 5
?>
<!--PHP 比较运算符用于比较两个值（数字或字符串）：
运算符	名称	例子	结果
==	等于	$x == $y	如果 $x 等于 $y，则返回 true。
===	全等（完全相同）	$x === $y	如果 $x 等于 $y，且它们类型相同，则返回 true。
!=	不等于	$x != $y	如果 $x 不等于 $y，则返回 true。
<>	不等于	$x <> $y	如果 $x 不等于 $y，则返回 true。
!==	不全等（完全不同）	$x !== $y	如果 $x 不等于 $y，且它们类型不相同，则返回 true。
>	大于	$x > $y	如果 $x 大于 $y，则返回 true。
<	大于	$x < $y	如果 $x 小于 $y，则返回 true。
>=	大于或等于	$x >= $y	如果 $x 大于或者等于 $y，则返回 true.
<=	小于或等于	$x <= $y	如果 $x 小于或者等于 $y，则返回 true。
下例展示了使用某些比较运算符的不同结果：
实例  -->
<?php
$x=100; 
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
<!-- 
PHP 逻辑运算符
运算符	名称	例子	结果
and	与	$x and $y	如果 $x 和 $y 都为 true，则返回 true。
or	或	$x or $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
xor	异或	$x xor $y	如果 $x 和 $y 有且仅有一个为 true，则返回 true。
&&	与	$x && $y	如果 $x 和 $y 都为 true，则返回 true。
||	或	$x || $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
!	非	!$x	如果 $x 不为 true，则返回 true。
PHP 数组运算符
PHP 数组运算符用于比较数组：
运算符	名称	例子	结果
+	联合	$x + $y	$x 和 $y 的联合（但不覆盖重复的键）
==	相等	$x == $y	如果 $x 和 $y 拥有相同的键/值对，则返回 true。
===	全等	$x === $y	如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回 true。
!=	不相等	$x != $y	如果 $x 不等于 $y，则返回 true。
<>	不相等	$x <> $y	如果 $x 不等于 $y，则返回 true。
!==	不全等	$x !== $y	如果 $x 与 $y 完全不同，则返回 true。
下例展示了使用不同数组运算符的不同结果：
 -->
 <?php
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>\
<!-- 
PHP 条件语句
在您编写代码时，经常会希望为不同的决定执行不同的动作。您可以在代码中使用条件语句来实现这一点。
在 PHP 中，我们可以使用以下条件语句：
if 语句 - 如果指定条件为真，则执行代码
if...else 语句 - 如果条件为 true，则执行代码；如果条件为 false，则执行另一端代码
if...elseif....else 语句 - 选择若干段代码块之一来执行
switch 语句 - 语句多个代码块之一来执行


 -->
 <?php
$t=date("H");

if ($t<"20") {
  echo "Have a good day!";
}
?>

<?php
$t=date("H");

if ($t<"20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
if (条件) {
  条件为 true 时执行的代码;
} elseif (condition) {
  条件为 true 时执行的代码;
} else {
  条件为 false 时执行的代码;
}
<?php
$t=date("H");

if ($t<"10") {
  echo "Have a good morning!";
} elseif ($t<"20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
switch (expression)
{
case label1:
  code to be executed if expression = label1;
  break;  
case label2:
  code to be executed if expression = label2;
  break;
default:
  code to be executed
  if expression is different 
  from both label1 and label2;
}
<?php
switch ($x)
{
case 1:
  echo "Number 1";
  break;
case 2:
  echo "Number 2";
  break;
case 3:
  echo "Number 3";
  break;
default:
  echo "No number between 1 and 3";
}
?>

<!--PHP函数
        除了内建的函数，我们可以创建我们自己额函数。
        函数是可以在程序中重复使用的语句块。
        页面加载时函数不会立即执行。
        函数只有在被调试用时才会执行。
        在php创建用户定义函数
        用户定义的函数声明以关单“function”开头
        function functionName() {
  被执行的代码;
}
注释：函数名能够以字母或下划线开头（而非数字）。
注释：函数名对大小写不敏感。
提示：函数名应该能够反映函数所执行的任务。
在下面的例子中，我们创建名为 "writeMsg()" 的函数。打开的花括号（{）指示函数代码的开始，而关闭的花括号（}）指示函数的结束。此函数输出 "Hello world!"。如需调用该函数，只要使用函数名即可：
 
  -->
<?php
function writeMsg() {
 echo "<br>";
  echo "Hello world!";
}

writeMsg(); // 调用函数
?>
<!-- php 函数参数  
可以通过参数向函数传递信息。参数类似变量
参数被定义在函数名自后，括号内部。您可以添加任意多参数，只要用逗号隔开即可。
下面的例子中的函数有一个参数。当调用 familyName（）函数是，我们同事要传递，
这样会输出不同的名字，但是姓氏相同；
-->
<?php 
    function familyName($frame){
        
        echo "$frame zhang.<br>";
    }
    familyName("Li");
    familyName("Li");
    familyName("Li");
    familyName("Li");
    familyName("Li");
    familyName("Li");
    familyName("Li");
    familyName("Li");
  
?>
<!-- PHP默认参数值。
下面的例子暂时了如何使用默认参数。如果我们调用没有参数的setHeight（）函数，它的参数会取默认值“
 -->
 <?php 
   function setHeight($minheight=50){
       echo "The height is : $minheight <br>"; 
   }
   setHeight(350);
   setHeight();
   setHeight(135);
   setHeight(80);
  
 ?>
 <!-- php函数 - 返回值
     如需要使函数返回值，请使用return语句。
  -->
  <?php 
   function sum ($x,$y){
       $z = $x + $y;
       return $z;
   }
   echo "5 + 10 = ".sum(5,10)."<br>";
  ?>
  <!-- 数组
   数组能够在单独的变量名中存储一个或多个值。
   数组在单个变量中存储多个值；
   -->
  <?php 
   $cars = array("volvo","bmw","saab");
   echo "i like ".$cars[0].",".$cars[1]." and ".$cars[2].".";
  ?>
  <!-- 
  什么是数组？
  数组是特殊的变量，它可以同时保存一个以上的值。
  如果您有一个项目列表，（例如汽车品牌列表），在单个变量中存储这些品牌名称是这样的：
$cars1="Volvo";
$cars2="BMW";
$cars3="SAAB";
  不过，加入您希望对变量进行遍历并找出特定的那个值？或者如果您需要存储300个汽车品牌，而不是3个呢？
  解决方法是创建数组！
  数组能够在单一变量名中存储许多值，并且您能够通过引用下标好来访问某个值。
  在php中创建数组
  在php中，array（）函数用于创建数组
 array（）；
  在php中创建数组s
  在php中，有三种数组类型
  索引数组
  关联数组
  多维数组
  php索引数组
  有两种创建索引数组的方法
  索引是自动分配的（索引从0开始）
  获得数组的长度 -count（）函数
   -->
  <?php
  $cars = array("Volvo","BMW","SAAB");
  echo count($cars)."<br>";
  ?>
  <!-- 
   关联数组
   关联数组是使用您分配给数组的指定键的数组。
   有两种创建关联数组的方法
   -->
   <?php 
   $age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
   echo "Peter is".$age['Peter']."years old.";
   ?>
</body>
</html>