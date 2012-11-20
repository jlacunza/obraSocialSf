<?php



/**
 * This class defines the structure of the 'table1' table.
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
class Table1TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.Table1TableMap';

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
        $this->setName('table1');
        $this->setPhpName('Table1');
        $this->setClassname('Table1');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('USER', 'User', 'VARCHAR', true, 10, null);
        $this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Table1HasTable1RelatedByTable1Id', 'Table1HasTable1', RelationMap::ONE_TO_MANY, array('id' => 'table1_id', ), null, null, 'Table1HasTable1sRelatedByTable1Id');
        $this->addRelation('Table1HasTable1RelatedByTable1Id1', 'Table1HasTable1', RelationMap::ONE_TO_MANY, array('id' => 'table1_id1', ), null, null, 'Table1HasTable1sRelatedByTable1Id1');
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

} // Table1TableMap
