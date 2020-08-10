<?php
// File : Count.php
class Hitung
{
    //fungsi 1
    public function count($sentence)
    {
        return count(explode(" ",$sentence));
    }
   // fungsi 2
   public function jumlahMath($a, $b)
   {
       return $a + $b;
   }

   // fungsi 3
   public function kurangMath($a, $b)
   {
       return $a - $b;
   }

    // fungsi 4
    public function bagiMath($a, $b)
    {
        return $a / $b;
    }

       // fungsi 5
    public function kaliMath($a, $b)
    {
        return $a * $b;
    }

       // fungsi 6
    public function kelilingPersegi($a)
    {
       return 4*$a;
    }

       // fungsi 7
    public function luasPersegi($a)
    {
       return $a * $a;
    }
    
       // fungsi 8
    public function luasBalok($a, $b, $c)
    {
       return 2*($a + $b + $c);
    }
    
       // fungsi 9
    public function volumeBalok($a, $b, $c)
    {
       return $a * $b * $c ;
    }
      // fungsi 10
    public function kelilingBalok($a, $b, $c)
    {
       return 4 * ($a + $b + $c) ;
    }



}
?>