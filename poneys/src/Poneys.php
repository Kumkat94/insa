<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $_count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    public function setCount(int $number):void{
        $this->_count=$number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if(($this->_count - $number) <0 ){
            throw new Exception('Inferieur à 0',1);
        }
        $this->_count -= $number;
    }

    /**
     * Ajoute un poney au champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->_count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    public function NotEnoughtPoneys(): bool
    {
        if($this->_count <15){
            return true;
        }else{
            return false;
        }
    }

    
}
?>
