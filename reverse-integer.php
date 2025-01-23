<?php
class Solution
{

	/**
	 * @param int $x
	 * @return int
	 */
	function reverse(int $x):int
	{
		if (abs($x) <= 2147483647 && is_int($x)) {

			$x = "$x"; 
			$sign = "";
			if ($x[0] == "-") {
				$sign = "-";
				$x = substr($x, 1);
			}
			$len = strlen($x);
			$str = array_fill(0, $len, '');

			$mid = (int) ($len / 2);
			for ($i = 0; $i < $mid; $i++) {
				$str[$i] = $x[$len - $i - 1];
				$str[$len - $i - 1] = $x[$i];
			}
			if ($len % 2 != 0) {
				$str[$mid] = $x[$mid];
			}
			$num = (int) ($sign . implode("", $str));
			if (abs($num) <= 2147483647 && is_int($num)) {
				return $num;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	}
}
$s = new Solution();
$n = (int) $argv[1] ?? 0;
var_dump($s->reverse($n));
