<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Hitung.php";

// Class untuk run Testing.
class Test extends TestCase
{
    public function testCount()
    {
        // Kita pakai class yang mau kita test.
        $c = new Hitung();

        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Ayu"; // 4 Kata ..
        $Hitung = $c->count($TestSentence);

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti count berfungsi dengan baik.
        $this->assertEquals(4, $Hitung); 
    }

    public function testJumlahMath()
    {
        $jml = new Hitung();
        $a = 10;
        $b = 10;
        $jmlMath = $jml->jumlahMath($a, $b);
        $this->assertEquals(20, $jmlMath);
    }

    public function testKurangMath()
    {
        $kr = new Hitung();
        $a = 30;
        $b = 10;
        $krMath = $kr->kurangMath($a, $b);
        $this->assertEquals(20, $krMath);
    }

    public function testBagiMath()
    {
        $ba = new Hitung();
        $a = 30;
        $b = 10;
        $baMath = $ba->bagiMath($a, $b);
        $this->assertEquals(3, $baMath);
    }
    
    public function testKaliMath()
    {
        $ka = new Hitung();
        $a = 5;
        $b = 10;
        $kaMath = $ka->kaliMath($a, $b);
        $this->assertEquals(50, $kaMath);
    }

    public function testKelilingPersegi()
    {
        $kp = new Hitung();
        $a = 5;
        $kpMath = $kp->kelilingPersegi($a);
        $this->assertEquals(20, $kpMath);
    }

    public function testLuasPersegi()
    {
        $lp = new Hitung();
        $a = 5;
        $lpMath = $lp->luasPersegi($a);
        $this->assertEquals(25, $lpMath);
    }
    public function testLuasBalok()
    {
        $lb = new Hitung();
        $a = 5;
        $b = 3;
        $c = 4;
        $lbMath = $lb->luasBalok($a, $b, $c);
        $this->assertEquals(24, $lbMath);
    }
    public function testVolumeBalok()
    {
        $vb = new Hitung();
        $a = 5;
        $b = 3;
        $c = 4;
        $vbMath = $vb->volumeBalok($a, $b, $c);
        $this->assertEquals(60, $vbMath);
    }
    public function testKelilingBalok()
    {
        $kb = new Hitung();
        $a = 5;
        $b = 3;
        $c = 4;
        $kbMath = $kb->kelilingBalok($a, $b, $c);
        $this->assertEquals(48, $kbMath);
    }
}
?>