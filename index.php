<?php

//cau 1
echo "Câu 1 <br>";
function isEvenNumber($num){
    if ($num % 2 == 0){
        return "$num is even number";
    } else {
        return "$num not is even number";
    }
}
echo isEvenNumber(6). '<br>';
echo isEvenNumber(7). '<br>';
echo "<hr>";

// cau 2
echo "Câu 2 <br>";
function sum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
echo "<br>";
echo "Tổng các số từ 1 đến $n là: " . sum($n);
echo "<hr>";

// cau 3
echo "Câu 3 <br>";

function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . $i * $j . "<br />";
        }
        echo "\n";
    }
}
multiplicationTable();

echo "<hr>";
// câu 4
echo "Câu 4: ";
function checkString($string, $word) {
    $check = strstr($string, $word);
    if ($check !== false) {
        return "Chuỗi '$string' chứa từ '$word'";
    } else {
        return "Chuỗi '$string' không chứa từ '$word'";
    }
}

$string = "dai hoc thuong mai";
$word = "hoc";
echo checkString($string, $word);
echo "<hr>";


// cau 5
echo "Câu 5 <br>";
function MaxMin ($arr){
    return "Max = ". $max = max($arr). '<br>';
    return "Min = ". $min = min($arr);
}
echo MaxMin($arr = array (2,54,6,11,7)) . '<hr>';

// cau 6
echo "Câu 6 <br>";
function ascendingOrder() {
    $numbers = array(1,5,3,7,2,9);
    sort($numbers);
    foreach( $numbers as $n) {
        echo "$n <br>";
    }
}
ascendingOrder();

// cau 7
echo "Câu 7 <br>";
$a = 5;
$b = 0;
$c = 10;
function factorialCaculation($n) {
    $factorial = 1;
    if ($n == 0 || $n == 1) {
        return $factorial;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
 
echo ("Giai thừa của " . $a . " là: " . factorialCaculation ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . factorialCaculation ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . factorialCaculation ( $c ) . "<hr>");
?>

<?php
// câu 8 
echo "Câu 8 <br>";
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
echo 'Kết quả: ';
$start = 3;
$end = 10;
for($i = $start; $i <= $end; $i ++) {
if(check_prime($i))
 echo "$i , ";
}
echo "<hr>";
?>

<?php
// câu 9
echo "Câu 9 <br>";
function total($array)
{
    $total = 0;
    foreach ($array as $num) {
        $total += $num;
    }
    return $total;
}

$array = [1, 2, 3, 4, 5];

$total = total($array);
echo "Tổng của các số trong mảng là: $total";
echo "<hr>";
?>

<?php
// câu 10
echo "Câu 10 <br>";
 //Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
       
 function inFibonacci($n)
 {
     $fibonacci = [];
     $fibonacci[0] = 0;
     $fibonacci[1] = 1;
 
     for ($i = 2; $i <= $n; $i++) {
         $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
     }
 
     return $fibonacci;
 }

 $start = 0; // Giá trị bắt đầu
 $end = 10; // Giá trị kết thúc
 
 $fibonacci = inFibonacci($end);
 
 echo "Các số Fibonacci từ $start đến $end là: ";
 for ($i = $start; $i <= $end; $i++) {
     echo $fibonacci[$i] . " ";
 }
 echo "<hr>";
 ?>

<?php
        //  câu 11
         echo "Câu 11 <br> ";
        //Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
        function isArmstrongNumber($number) {
            $sum = 0;
            $temp = $number;
        
            // Tính tổng các lũy thừa bậc n của các chữ số
            while ($temp > 0) {
                $digit = $temp % 10;
                $sum += pow($digit, strlen((string)$number));
                $temp = floor($temp / 10);
            }
        
            // Kiểm tra nếu tổng bằng số gốc thì là số Armstrong
            if ($sum === $number) {
                return true;
            } else {
                return false;
            }
        }
        
        // Ví dụ sử dụng chương trình
        $number1 = 153;
        $number2 = 123;
        
        if (isArmstrongNumber($number1)) {
            echo "$number1 là số Armstrong";
        } else {
            echo "$number1 không là số Armstrong";
        }
        
        echo "<br>";
        
        if (isArmstrongNumber($number2)) {
            echo "$number2 là số Armstrong";
        } else {
            echo "$number2 không là số Armstrong";
        }
        echo "<hr>";
        ?>


        <?php
         echo "Câu 12 <br> ";
        //Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
        function insertElement($array, $element, $position) {
            // Kiểm tra vị trí chèn hợp lệ
            if ($position < 0 || $position > count($array)) {
                return $array;
            }
        
            // Chia mảng thành hai phần
            $part1 = array_slice($array, 0, $position);
            $part2 = array_slice($array, $position);
        
            // Chèn phần tử vào mảng
            $result = array_merge($part1, [$element], $part2);
        
            return $result;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 4, 5];
        $insertElement = 10;
        $insertPosition = 2;
        $result = insertElement($numbers, $insertElement, $insertPosition);
        
        echo "Mảng sau khi chèn phần tử $insertElement vào vị trí $insertPosition là: ";
        print_r($result);
        echo "<hr>";
        ?>

        <?php
         
         echo "Câu 13: ";
        //Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
        function removeDuplicates($array) {
            $result = array_unique($array);
            return $result;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 2, 4, 2, 5];
        $uniqueNumbers = removeDuplicates($numbers);
        
        echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
        print_r($uniqueNumbers);
        echo "<hr>";
        ?>
 <?php
         
         echo "Câu 14: ";
        //Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
        function findElementPosition($array, $element) {
            $positions = [];
        
            // Duyệt qua mảng và tìm các vị trí của phần tử
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] === $element) {
                    $positions[] = $i;
                }
            }
        
            return $positions;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 2, 4, 2, 5];
        $searchElement = 2;
        $positions = findElementPosition($numbers, $searchElement);
        
        if (empty($positions)) {
            echo "Không tìm thấy phần tử $searchElement trong mảng";
        } else {
            echo "Vị trí của phần tử $searchElement trong mảng là: ";
            foreach ($positions as $position) {
                echo "$position ";
            }
        }
        echo "<hr>";
        ?>     
        <?php
        
         echo "Câu 15: ";
        //Viết chương trình PHP để đảo ngược một chuỗi.
        function reverseString($string) {
            $reversedString = '';
        
            // Duyệt chuỗi từ phải sang trái và thêm ký tự vào chuỗi đảo ngược
            for ($i = strlen($string) - 1; $i >= 0; $i--) {
                $reversedString .= $string[$i];
            }
        
            return $reversedString;
        }
        
        // Ví dụ sử dụng chương trình
        $word = "Hello World";
        $reversedWord = reverseString($word);
        
        echo "Chuỗi đảo ngược của \"$word\" là: $reversedWord";
        echo "<hr>";
        ?>
        <?php
         
         echo "Câu 16: ";
        //Viết chương trình PHP để tính số lượng phần tử trong một mảng.
        function countElements($array) {
            return count($array);
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 4, 5];
        $count = countElements($numbers);
        
        echo "Số lượng phần tử trong mảng là: $count";
        echo "<hr>";
        ?>
        <?php
        
         echo "Câu 17: ";
        //Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
        function isPalindrome($string) {
            // Loại bỏ các ký tự không phải chữ cái và chuyển thành chữ thường
            $string = strtolower(preg_replace('/[^a-zA-Z]/', '', $string));
        
            // So sánh chuỗi gốc với phiên bản đảo ngược của nó
            return $string === strrev($string);
        }
        
        // Ví dụ sử dụng chương trình
        $word1 = "radar";
        $word2 = "Hello";
        
        if (isPalindrome($word1)) {
            echo "$word1 là chuỗi Palindrome";
        } else {
            echo "$word1 không là chuỗi Palindrome";
        }
        
        echo "<br>";
        
        if (isPalindrome($word2)) {
            echo "$word2 là chuỗi Palindrome";
        } else {
            echo "$word2 không là chuỗi Palindrome";

        }
        echo "<hr>";
        ?>
        <?php
        
         echo "Câu 18: ";
        //Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
        function countOccur($array, $element) {
            $count = 0;
        
            foreach ($array as $value) {
                if ($value === $element) {
                    $count++;
                }
            }
        
            return $count;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 2, 4, 2, 5];
        $searchElement = 2;
        $count = countOccur($numbers, $searchElement);
        
        echo "Số lần xuất hiện của phần tử $searchElement trong mảng là: $count";
        echo "<hr>";
        ?>
        <?php
 
         echo "Câu 19: ";
        //Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
        function sortArrayDescending($array) {
            rsort($array);
            return $array;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [5, 2, 9, 1, 7];
        $result = sortArrayDescending($numbers);
        
        echo "Mảng sau khi sắp xếp giảm dần là: ";
        print_r($result);
        echo "<hr>";
        ?>

<?php
        
         echo "Câu 20: ";
        //Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
        //Thêm đầu vào
        function addElementToBeginning($array, $element) {
            array_unshift($array, $element);
            return $array;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 4, 5];
        $newElement = 0;
        $result = addElementToBeginning($numbers, $newElement);
        
        echo "Mảng sau khi thêm $newElement vào đầu là: ";
        print_r($result);

        //Thêm cuối 
        function addElementToEnd($array, $element) {
            $array[] = $element;
            return $array;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [1, 2, 3, 4, 5];
        $newElement = 6;
        $result = addElementToEnd($numbers, $newElement);
        
        echo "Mảng sau khi thêm $newElement vào cuối là: ";
        print_r($result);
    
        ?>
        <?php
         echo "<hr>";
         echo "Câu 21: ";
        //Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
        function findSecondLargest($array) {
            $largest = $array[0];
            $secondLargest = null;
        
            foreach ($array as $number) {
                if ($number > $largest) {
                    $secondLargest = $largest;
                    $largest = $number;
                } elseif ($number < $largest && ($secondLargest === null || $number > $secondLargest)) {
                    $secondLargest = $number;
                }
            }
        
            return $secondLargest;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [5, 12, 8, 20, 10, 15];
        $result = findSecondLargest($numbers);
        
        if ($result !== null) {
            echo "Số lớn thứ hai trong mảng là: $result";
        } else {
            echo "Không tìm thấy số lớn thứ hai trong mảng.";
        }
        ?>
        <?php
         echo "<hr>";
         echo "Câu 22: ";
        //Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
        function findGCD($a, $b) {
            // Chuyển đổi các số âm thành dương
            $a = abs($a);
            $b = abs($b);
        
            // Tìm ước số chung lớn nhất (GCD) bằng phương pháp Euclid
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
        
            return $a;
        }
        
        function findLCM($a, $b) {
            // Tính bội số chung nhỏ nhất (LCM) dựa trên GCD
            $gcd = findGCD($a, $b);
            $lcm = ($a * $b) / $gcd;
        
            return $lcm;
        }
        
        // Ví dụ sử dụng chương trình
        $number1 = 12;
        $number2 = 18;
        
        $gcd = findGCD($number1, $number2);
        $lcm = findLCM($number1, $number2);
        
        echo "Ước số chung lớn nhất (GCD) của $number1 và $number2 là: $gcd<br>";
        echo "Bội số chung nhỏ nhất (LCM) của $number1 và $number2 là: $lcm";
        ?>
        <?php
         echo "<hr>";
         echo "Câu 23: ";
        //Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
        function isPerfectNumber($number) {
            // Khởi tạo biến tổng
            $sum = 0;
        
            // Tìm các ước số của số đó và tính tổng các ước số
            for ($i = 1; $i <= $number / 2; $i++) {
                if ($number % $i === 0) {
                    $sum += $i;
                }
            }
        
            // Kiểm tra nếu tổng các ước số bằng số đó
            if ($sum === $number) {
                return true;
            } else {
                return false;
            }
        }
        
        // Ví dụ sử dụng chương trình
        $number = 28;
        
        if (isPerfectNumber($number)) {
            echo "$number là số hoàn hảo.";
        } else {
            echo "$number không là số hoàn hảo.";
        }
        ?>
        <?php
         echo "<hr>";
         echo "Câu 24: ";
        //Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
        function findLargestOdd($array) {
            $largestOdd = null;
        
            foreach ($array as $number) {
                if ($number % 2 != 0 && ($largestOdd === null || $number > $largestOdd)) {
                    $largestOdd = $number;
                }
            }
        
            return $largestOdd;
        }
        
        $numbers = [2, 8, 5, 12, 3, 7, 9];
        $result = findLargestOdd($numbers);
        
        if ($result !== null) {
            echo "Số lẻ lớn nhất trong mảng là: $result";
        } else {
            echo "Không tìm thấy số lẻ trong mảng.";
        }
        ?>
        <?php
         echo "<hr>";
         echo "Câu 25: ";
        //Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
        function isPrimeNumber($number) {
    
            if ($number <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    return false;
                }
            }
            return true;
        } 
        $number = 18; 
        if (isPrimeNumber($number)) {
            echo "$number là số nguyên tố.";
        } else {
            echo "$number không là số nguyên tố.";
        }
        ?>
        <?php
        echo "<hr>";
         echo "Câu 26: ";
        //Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
        function findLargestPositive($array) {
            $largestPositive = null;
        
            foreach ($array as $number) {
                if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
                    $largestPositive = $number;
                }
            }
        
            return $largestPositive;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [-5, 2, 9, -10, 4, 7, 1];
        $result = findLargestPositive($numbers);
        
        if ($result !== null) {
            echo "Số dương lớn nhất trong mảng là: $result";
        } else {
            echo "Không tìm thấy số dương trong mảng.";
        }
        ?>
        <?php
         echo "<hr>";
         echo "Câu 27: ";
        //Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
        function findLargestNegative($array) {
            $largestNegative = null;
        
            foreach ($array as $number) {
                if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
                    $largestNegative = $number;
                }
            }
        
            return $largestNegative;
        }
        
        // Ví dụ sử dụng chương trình
        $numbers = [5, -2, 9, -10, 4, -7, 1];
        $result = findLargestNegative($numbers);
        
        if ($result !== null) {
            echo "Số âm lớn nhất trong mảng là: $result";
        } else {
            echo "Không tìm thấy số âm trong mảng.";
        }
        ?>

        <?php
         echo "<hr>";
         echo "Câu 28: ";
         //Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
         function sumOfOddNumbers($n) {
             $sum = 0;
         
             // Kiểm tra từng số từ 1 đến n
             for ($i = 1; $i <= $n; $i++) {
                 // Kiểm tra nếu số đó là số lẻ
                 if ($i % 2 != 0) {
                     // Nếu đúng, cộng số đó vào tổng
                     $sum += $i;
                 }
             }
         
             return $sum;
         }
         
         $n = 10;
         $result = sumOfOddNumbers($n);
         
         echo "Tổng các số lẻ từ 1 đến $n là: $result";
        
        ?>
        <?php 
        echo "<hr>";
        echo "Câu 29: ";
        //Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
    $perfectSquares = [];
    
    // Kiểm tra từng số trong khoảng từ $start đến $end
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra nếu căn bậc hai của số đó là số nguyên
        if (sqrt($i) == intval(sqrt($i))) {
            // Nếu đúng, thêm số đó vào mảng số chính phương
            $perfectSquares[] = $i;
        }
    }
    
    return $perfectSquares;
}

$start = 1;
$end = 100;

$result = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($result as $square) {
    echo $square . " ";
}
?>
        ?>
        <?php 
        echo "<hr>";
        echo "Câu 30: ";
        //Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
        function isSubstring($string, $substring) {
            // Sử dụng hàm strpos() để tìm kiếm vị trí xuất hiện đầu tiên của chuỗi con trong chuỗi cha
            $position = strpos($string, $substring);
            // Kiểm tra nếu vị trí tìm thấy không là false, tức là chuỗi con tồn tại trong chuỗi cha
            if ($position !== false) {
                return true;
            } else {
                return false;
            }
        }
        $string = "Hello, world!";
        $substring = "world";

        if (isSubstring($string, $substring)) {
            echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
        } else {
            echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'";
        }
        ?>