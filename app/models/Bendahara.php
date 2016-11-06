<?php

class Bendahara extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $tanggal;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $ket;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $besar;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $user;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $nota;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bendahara';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bendahara[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bendahara
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
