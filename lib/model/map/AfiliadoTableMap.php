<?php



/**
 * This class defines the structure of the 'afiliado' table.
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
class AfiliadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.AfiliadoTableMap';

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
        $this->setName('afiliado');
        $this->setPhpName('Afiliado');
        $this->setClassname('Afiliado');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('NRO_DOC', 'NroDoc', 'INTEGER', false, null, null);
        $this->addColumn('APENOMBRE', 'Apenombre', 'VARCHAR', false, 45, null);
        $this->addColumn('FECHANAC', 'Fechanac', 'DATE', false, null, null);
        $this->addColumn('CALLE', 'Calle', 'VARCHAR', false, 45, null);
        $this->addColumn('ALTURA', 'Altura', 'VARCHAR', false, 45, null);
        $this->addColumn('PISO', 'Piso', 'VARCHAR', false, 45, null);
        $this->addColumn('DEPTO', 'Depto', 'CHAR', false, null, null);
        $this->addForeignKey('PLAN_ID', 'PlanId', 'INTEGER', 'plan', 'ID', true, 10, null);
        $this->addForeignKey('TIPODOC_ID', 'TipodocId', 'INTEGER', 'tipodoc', 'ID', true, 10, null);
        $this->addForeignKey('REPARTICION_ID', 'ReparticionId', 'INTEGER', 'reparticion', 'ID', true, 10, null);
        $this->addForeignKey('LOCALIDAD_ID', 'LocalidadId', 'INTEGER', 'localidad', 'ID', true, 10, null);
        $this->addColumn('FECHAINGRESO', 'Fechaingreso', 'DATE', false, null, null);
        $this->addForeignKey('SEXO_ID', 'SexoId', 'INTEGER', 'sexo', 'ID', true, 10, null);
        $this->addForeignKey('ESTADOCIVIL_ID', 'EstadocivilId', 'INTEGER', 'estadocivil', 'ID', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Plan', 'Plan', RelationMap::MANY_TO_ONE, array('plan_id' => 'id', ), null, null);
        $this->addRelation('Tipodoc', 'Tipodoc', RelationMap::MANY_TO_ONE, array('tipodoc_id' => 'id', ), null, null);
        $this->addRelation('Reparticion', 'Reparticion', RelationMap::MANY_TO_ONE, array('reparticion_id' => 'id', ), null, null);
        $this->addRelation('Localidad', 'Localidad', RelationMap::MANY_TO_ONE, array('localidad_id' => 'id', ), null, null);
        $this->addRelation('Sexo', 'Sexo', RelationMap::MANY_TO_ONE, array('sexo_id' => 'id', ), null, null);
        $this->addRelation('Estadocivil', 'Estadocivil', RelationMap::MANY_TO_ONE, array('estadocivil_id' => 'id', ), null, null);
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

} // AfiliadoTableMap
