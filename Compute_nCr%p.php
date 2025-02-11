<?php
// A Dynamic Programming based
// solution to compute nCr % p
     
// Returns nCr % p
function nCrModp($n, $r, $p)
{
 
// Optimization for the cases when r is large
if ($r > $n - $r)
    $r = $n - $r;
 
// The array C is going
// to store last row of
// pascal triangle at
// the end. And last entry
// of last row is nCr
$C = array();
 
for( $i = 0; $i < $r + 1; $i++)
    $C[$i] = 0;
 
// Top row of Pascal
// Triangle
$C[0] = 1;
 
// One by constructs remaining
// rows of Pascal Triangle from
// top to bottom
for ($i = 1; $i <= $n; $i++)
{
     
    // Fill entries of current
    // row using previous row values
    for ($j = Min($i, $r); $j > 0; $j--)
 
        // nCj = (n-1)Cj + (n-1)C(j-1);
        $C[$j] = ($C[$j] +
                  $C[$j - 1]) % $p;
}
 
return $C[$r];
}
 
// Driver Code
$n = 10; $r = 2;$p = 13;
 
echo "Value of nCr % p is ",
         nCrModp($n, $r, $p);
 
// This code is contributed
// by anuj_67.
?>
