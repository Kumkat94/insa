<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    protected $poney;

    public function setUp():void{
        $this->poney = new Poneys();
    }

    public function tearDown():void{
        
        unset($this->poney);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        //$Poneys = new Poneys();

        // Action
        $this->poney->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $this->poney->getCount());
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromFieldException()
    {
        // Setup
        //$Poneys = new Poneys();
        $this->expectException(Exception::class);
        $this->poney->removePoneyFromField(9);
    }

    /**
     * Undocumented function
     *
     * @return void
     * @dataProvider removeProvider
     */
    public function testRemovePoneyFromFieldProvider($nbr,$expected)
    {
        // Setup
        //$Poneys = new Poneys();
        // Action
        $this->poney->removePoneyFromField($nbr);
        // Assert
        $this->assertEquals($expected, $this->poney->getCount());
        
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testAddPoneyFromField()
    {
        // Setup
        //$Poneys = new Poneys();

        // Action
        $this->poney->addPoneyFromField(3);

        // Assert
        $this->assertEquals(11, $this->poney->getCount());
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testGetNames()
    {
       //create un stub for the Poneys class
       $stub=$this->createMock(Poneys::class);
       //configure stub
       // Avoir un retour en attendant
       $stub->method('getNames')
            ->willReturn([
                'Apple',
                'Orange',
                'Cherry',
                'Banana',
                'Peer',
                'Nuts',
                'Grape',
                'Tomato'
            ]);
        
        $this->assertEquals([
            'Apple',
            'Orange',
            'Cherry',
            'Banana',
            'Peer',
            'Nuts',
            'Grape',
            'Tomato'
        ], $stub->getnames());


    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testNotEnoughtPoneys()
    {
        // Setup
        //$Poneys = new Poneys();

        $this->assertEquals(true,$this->poney->NotEnoughtPoneys());
    }

    public function testSetCount(){

        $this->poney->setCount(5);
        $this->assertEquals(5,$this->poney->getCount());

    }

    

    //*************** PROVIDERS *************** //


    public static function removeProvider () {
        return [
            [0,8],
            [2,6],
            [1,7],
        ];
    }

}
?>
