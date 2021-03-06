<?php



/**
 * This class defines the structure of the 'centroatencion' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class CentroatencionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.CentroatencionTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('centroatencion');
        $this->setPhpName('Centroatencion');
        $this->setClassname('Centroatencion');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 45, null);
        $this->addColumn('CALLE', 'Calle', 'VARCHAR', true, 100, null);
        $this->addColumn('NUMERO', 'Numero', 'VARCHAR', false, 45, null);
        $this->addColumn('DEPTO', 'Depto', 'VARCHAR', false, 4, null);
        $this->addColumn('PISO', 'Piso', 'INTEGER', false, 10, null);
        $this->addForeignKey('LOCALIDAD_ID', 'LocalidadId', 'INTEGER', 'localidad', 'ID', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Localidad', 'Localidad', RelationMap::MANY_TO_ONE, array('localidad_id' => 'id', ), null, null);
        $this->addRelation('CentroatencionHasPrestador', 'CentroatencionHasPrestador', RelationMap::ONE_TO_MANY, array('id' => 'centroatencion_id', ), null, null, 'CentroatencionHasPrestadors');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
        );
    } // getBehaviors()

} // CentroatencionTableMap
