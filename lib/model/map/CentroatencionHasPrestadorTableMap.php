<?php



/**
 * This class defines the structure of the 'centroatencion_has_prestador' table.
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
class CentroatencionHasPrestadorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.CentroatencionHasPrestadorTableMap';

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
        $this->setName('centroatencion_has_prestador');
        $this->setPhpName('CentroatencionHasPrestador');
        $this->setClassname('CentroatencionHasPrestador');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('CENTROATENCION_ID', 'CentroatencionId', 'INTEGER' , 'centroatencion', 'ID', true, 10, null);
        $this->addForeignPrimaryKey('PRESTADOR_ID', 'PrestadorId', 'INTEGER' , 'prestador', 'ID', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Centroatencion', 'Centroatencion', RelationMap::MANY_TO_ONE, array('centroatencion_id' => 'id', ), null, null);
        $this->addRelation('Prestador', 'Prestador', RelationMap::MANY_TO_ONE, array('prestador_id' => 'id', ), null, null);
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

} // CentroatencionHasPrestadorTableMap
