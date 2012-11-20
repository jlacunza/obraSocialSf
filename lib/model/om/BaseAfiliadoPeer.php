<?php


/**
 * Base static class for performing query and update operations on the 'afiliado' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAfiliadoPeer {

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'afiliado';

    /** the related Propel class for this table */
    const OM_CLASS = 'Afiliado';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AfiliadoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the ID field */
    const ID = 'afiliado.ID';

    /** the column name for the NRO_DOC field */
    const NRO_DOC = 'afiliado.NRO_DOC';

    /** the column name for the APENOMBRE field */
    const APENOMBRE = 'afiliado.APENOMBRE';

    /** the column name for the FECHANAC field */
    const FECHANAC = 'afiliado.FECHANAC';

    /** the column name for the CALLE field */
    const CALLE = 'afiliado.CALLE';

    /** the column name for the ALTURA field */
    const ALTURA = 'afiliado.ALTURA';

    /** the column name for the PISO field */
    const PISO = 'afiliado.PISO';

    /** the column name for the DEPTO field */
    const DEPTO = 'afiliado.DEPTO';

    /** the column name for the PLAN_ID field */
    const PLAN_ID = 'afiliado.PLAN_ID';

    /** the column name for the TIPODOC_ID field */
    const TIPODOC_ID = 'afiliado.TIPODOC_ID';

    /** the column name for the REPARTICION_ID field */
    const REPARTICION_ID = 'afiliado.REPARTICION_ID';

    /** the column name for the LOCALIDAD_ID field */
    const LOCALIDAD_ID = 'afiliado.LOCALIDAD_ID';

    /** the column name for the FECHAINGRESO field */
    const FECHAINGRESO = 'afiliado.FECHAINGRESO';

    /** the column name for the SEXO_ID field */
    const SEXO_ID = 'afiliado.SEXO_ID';

    /** the column name for the ESTADOCIVIL_ID field */
    const ESTADOCIVIL_ID = 'afiliado.ESTADOCIVIL_ID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Afiliado objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Afiliado[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NroDoc', 'Apenombre', 'Fechanac', 'Calle', 'Altura', 'Piso', 'Depto', 'PlanId', 'TipodocId', 'ReparticionId', 'LocalidadId', 'Fechaingreso', 'SexoId', 'EstadocivilId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'nroDoc', 'apenombre', 'fechanac', 'calle', 'altura', 'piso', 'depto', 'planId', 'tipodocId', 'reparticionId', 'localidadId', 'fechaingreso', 'sexoId', 'estadocivilId', ),
        BasePeer::TYPE_COLNAME => array (self::ID, self::NRO_DOC, self::APENOMBRE, self::FECHANAC, self::CALLE, self::ALTURA, self::PISO, self::DEPTO, self::PLAN_ID, self::TIPODOC_ID, self::REPARTICION_ID, self::LOCALIDAD_ID, self::FECHAINGRESO, self::SEXO_ID, self::ESTADOCIVIL_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NRO_DOC', 'APENOMBRE', 'FECHANAC', 'CALLE', 'ALTURA', 'PISO', 'DEPTO', 'PLAN_ID', 'TIPODOC_ID', 'REPARTICION_ID', 'LOCALIDAD_ID', 'FECHAINGRESO', 'SEXO_ID', 'ESTADOCIVIL_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'nro_doc', 'apenombre', 'fechanac', 'calle', 'altura', 'piso', 'depto', 'plan_id', 'tipodoc_id', 'reparticion_id', 'localidad_id', 'fechaingreso', 'sexo_id', 'estadocivil_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NroDoc' => 1, 'Apenombre' => 2, 'Fechanac' => 3, 'Calle' => 4, 'Altura' => 5, 'Piso' => 6, 'Depto' => 7, 'PlanId' => 8, 'TipodocId' => 9, 'ReparticionId' => 10, 'LocalidadId' => 11, 'Fechaingreso' => 12, 'SexoId' => 13, 'EstadocivilId' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'nroDoc' => 1, 'apenombre' => 2, 'fechanac' => 3, 'calle' => 4, 'altura' => 5, 'piso' => 6, 'depto' => 7, 'planId' => 8, 'tipodocId' => 9, 'reparticionId' => 10, 'localidadId' => 11, 'fechaingreso' => 12, 'sexoId' => 13, 'estadocivilId' => 14, ),
        BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NRO_DOC => 1, self::APENOMBRE => 2, self::FECHANAC => 3, self::CALLE => 4, self::ALTURA => 5, self::PISO => 6, self::DEPTO => 7, self::PLAN_ID => 8, self::TIPODOC_ID => 9, self::REPARTICION_ID => 10, self::LOCALIDAD_ID => 11, self::FECHAINGRESO => 12, self::SEXO_ID => 13, self::ESTADOCIVIL_ID => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NRO_DOC' => 1, 'APENOMBRE' => 2, 'FECHANAC' => 3, 'CALLE' => 4, 'ALTURA' => 5, 'PISO' => 6, 'DEPTO' => 7, 'PLAN_ID' => 8, 'TIPODOC_ID' => 9, 'REPARTICION_ID' => 10, 'LOCALIDAD_ID' => 11, 'FECHAINGRESO' => 12, 'SEXO_ID' => 13, 'ESTADOCIVIL_ID' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'nro_doc' => 1, 'apenombre' => 2, 'fechanac' => 3, 'calle' => 4, 'altura' => 5, 'piso' => 6, 'depto' => 7, 'plan_id' => 8, 'tipodoc_id' => 9, 'reparticion_id' => 10, 'localidad_id' => 11, 'fechaingreso' => 12, 'sexo_id' => 13, 'estadocivil_id' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. AfiliadoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AfiliadoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(AfiliadoPeer::ID);
            $criteria->addSelectColumn(AfiliadoPeer::NRO_DOC);
            $criteria->addSelectColumn(AfiliadoPeer::APENOMBRE);
            $criteria->addSelectColumn(AfiliadoPeer::FECHANAC);
            $criteria->addSelectColumn(AfiliadoPeer::CALLE);
            $criteria->addSelectColumn(AfiliadoPeer::ALTURA);
            $criteria->addSelectColumn(AfiliadoPeer::PISO);
            $criteria->addSelectColumn(AfiliadoPeer::DEPTO);
            $criteria->addSelectColumn(AfiliadoPeer::PLAN_ID);
            $criteria->addSelectColumn(AfiliadoPeer::TIPODOC_ID);
            $criteria->addSelectColumn(AfiliadoPeer::REPARTICION_ID);
            $criteria->addSelectColumn(AfiliadoPeer::LOCALIDAD_ID);
            $criteria->addSelectColumn(AfiliadoPeer::FECHAINGRESO);
            $criteria->addSelectColumn(AfiliadoPeer::SEXO_ID);
            $criteria->addSelectColumn(AfiliadoPeer::ESTADOCIVIL_ID);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.NRO_DOC');
            $criteria->addSelectColumn($alias . '.APENOMBRE');
            $criteria->addSelectColumn($alias . '.FECHANAC');
            $criteria->addSelectColumn($alias . '.CALLE');
            $criteria->addSelectColumn($alias . '.ALTURA');
            $criteria->addSelectColumn($alias . '.PISO');
            $criteria->addSelectColumn($alias . '.DEPTO');
            $criteria->addSelectColumn($alias . '.PLAN_ID');
            $criteria->addSelectColumn($alias . '.TIPODOC_ID');
            $criteria->addSelectColumn($alias . '.REPARTICION_ID');
            $criteria->addSelectColumn($alias . '.LOCALIDAD_ID');
            $criteria->addSelectColumn($alias . '.FECHAINGRESO');
            $criteria->addSelectColumn($alias . '.SEXO_ID');
            $criteria->addSelectColumn($alias . '.ESTADOCIVIL_ID');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Afiliado
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AfiliadoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return AfiliadoPeer::populateObjects(AfiliadoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AfiliadoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Afiliado $obj A Afiliado object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Afiliado object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Afiliado) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Afiliado object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Afiliado Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(self::$instances[$key])) {
                return self::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        self::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to afiliado
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or NULL if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = AfiliadoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AfiliadoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AfiliadoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Afiliado object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AfiliadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AfiliadoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AfiliadoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AfiliadoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Plan table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPlan(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tipodoc table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTipodoc(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Reparticion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinReparticion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Localidad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLocalidad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sexo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSexo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Estadocivil table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEstadocivil(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Plan objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPlan(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        PlanPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PlanPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Tipodoc objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTipodoc(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        TipodocPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TipodocPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TipodocPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TipodocPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Tipodoc)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Reparticion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinReparticion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        ReparticionPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ReparticionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ReparticionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ReparticionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Reparticion)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Localidad objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLocalidad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        LocalidadPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LocalidadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LocalidadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LocalidadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Localidad)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Sexo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSexo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        SexoPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SexoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SexoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SexoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Sexo)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with their Estadocivil objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEstadocivil(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol = AfiliadoPeer::NUM_HYDRATE_COLUMNS;
        EstadocivilPeer::addSelectColumns($criteria);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EstadocivilPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EstadocivilPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EstadocivilPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Afiliado) to $obj2 (Estadocivil)
                $obj2->addAfiliado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SexoPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Plan rows

            $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PlanPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);
            } // if joined row not null

            // Add objects for joined Tipodoc rows

            $key3 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = TipodocPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = TipodocPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipodocPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Tipodoc)
                $obj3->addAfiliado($obj1);
            } // if joined row not null

            // Add objects for joined Reparticion rows

            $key4 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ReparticionPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ReparticionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ReparticionPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Reparticion)
                $obj4->addAfiliado($obj1);
            } // if joined row not null

            // Add objects for joined Localidad rows

            $key5 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = LocalidadPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = LocalidadPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    LocalidadPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Localidad)
                $obj5->addAfiliado($obj1);
            } // if joined row not null

            // Add objects for joined Sexo rows

            $key6 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = SexoPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = SexoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SexoPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Sexo)
                $obj6->addAfiliado($obj1);
            } // if joined row not null

            // Add objects for joined Estadocivil rows

            $key7 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = EstadocivilPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = EstadocivilPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    EstadocivilPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Afiliado) to the collection in $obj7 (Estadocivil)
                $obj7->addAfiliado($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Plan table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPlan(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tipodoc table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTipodoc(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Reparticion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptReparticion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Localidad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLocalidad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sexo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSexo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Estadocivil table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEstadocivil(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AfiliadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Plan.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPlan(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SexoPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Tipodoc rows

                $key2 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = TipodocPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = TipodocPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TipodocPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Tipodoc)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Reparticion rows

                $key3 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ReparticionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = ReparticionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ReparticionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Reparticion)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Localidad rows

                $key4 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocalidadPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = LocalidadPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocalidadPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Localidad)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Sexo rows

                $key5 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SexoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = SexoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SexoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Sexo)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Estadocivil rows

                $key6 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EstadocivilPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = EstadocivilPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EstadocivilPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Estadocivil)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Tipodoc.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTipodoc(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SexoPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Plan rows

                $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PlanPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Reparticion rows

                $key3 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ReparticionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = ReparticionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ReparticionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Reparticion)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Localidad rows

                $key4 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocalidadPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = LocalidadPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocalidadPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Localidad)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Sexo rows

                $key5 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SexoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = SexoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SexoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Sexo)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Estadocivil rows

                $key6 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EstadocivilPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = EstadocivilPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EstadocivilPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Estadocivil)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Reparticion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptReparticion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SexoPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Plan rows

                $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PlanPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Tipodoc rows

                $key3 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TipodocPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = TipodocPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipodocPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Tipodoc)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Localidad rows

                $key4 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocalidadPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = LocalidadPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocalidadPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Localidad)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Sexo rows

                $key5 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SexoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = SexoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SexoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Sexo)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Estadocivil rows

                $key6 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EstadocivilPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = EstadocivilPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EstadocivilPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Estadocivil)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Localidad.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLocalidad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SexoPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Plan rows

                $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PlanPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Tipodoc rows

                $key3 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TipodocPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = TipodocPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipodocPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Tipodoc)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Reparticion rows

                $key4 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ReparticionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = ReparticionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ReparticionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Reparticion)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Sexo rows

                $key5 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SexoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = SexoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SexoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Sexo)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Estadocivil rows

                $key6 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EstadocivilPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = EstadocivilPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EstadocivilPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Estadocivil)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Sexo.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSexo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        EstadocivilPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EstadocivilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::ESTADOCIVIL_ID, EstadocivilPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Plan rows

                $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PlanPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Tipodoc rows

                $key3 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TipodocPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = TipodocPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipodocPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Tipodoc)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Reparticion rows

                $key4 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ReparticionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = ReparticionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ReparticionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Reparticion)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Localidad rows

                $key5 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = LocalidadPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = LocalidadPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    LocalidadPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Localidad)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Estadocivil rows

                $key6 = EstadocivilPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EstadocivilPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = EstadocivilPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EstadocivilPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Estadocivil)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Afiliado objects pre-filled with all related objects except Estadocivil.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Afiliado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEstadocivil(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        AfiliadoPeer::addSelectColumns($criteria);
        $startcol2 = AfiliadoPeer::NUM_HYDRATE_COLUMNS;

        PlanPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanPeer::NUM_HYDRATE_COLUMNS;

        TipodocPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipodocPeer::NUM_HYDRATE_COLUMNS;

        ReparticionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ReparticionPeer::NUM_HYDRATE_COLUMNS;

        LocalidadPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + LocalidadPeer::NUM_HYDRATE_COLUMNS;

        SexoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SexoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AfiliadoPeer::PLAN_ID, PlanPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::TIPODOC_ID, TipodocPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::REPARTICION_ID, ReparticionPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::LOCALIDAD_ID, LocalidadPeer::ID, $join_behavior);

        $criteria->addJoin(AfiliadoPeer::SEXO_ID, SexoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseAfiliadoPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AfiliadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AfiliadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AfiliadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AfiliadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Plan rows

                $key2 = PlanPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PlanPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PlanPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj2 (Plan)
                $obj2->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Tipodoc rows

                $key3 = TipodocPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TipodocPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = TipodocPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipodocPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj3 (Tipodoc)
                $obj3->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Reparticion rows

                $key4 = ReparticionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ReparticionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = ReparticionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ReparticionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj4 (Reparticion)
                $obj4->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Localidad rows

                $key5 = LocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = LocalidadPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = LocalidadPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    LocalidadPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj5 (Localidad)
                $obj5->addAfiliado($obj1);

            } // if joined row is not null

                // Add objects for joined Sexo rows

                $key6 = SexoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SexoPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = SexoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SexoPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Afiliado) to the collection in $obj6 (Sexo)
                $obj6->addAfiliado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAfiliadoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAfiliadoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new AfiliadoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return AfiliadoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Afiliado or Criteria object.
     *
     * @param      mixed $values Criteria or Afiliado object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Afiliado object
        }

        if ($criteria->containsKey(AfiliadoPeer::ID) && $criteria->keyContainsValue(AfiliadoPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AfiliadoPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Afiliado or Criteria object.
     *
     * @param      mixed $values Criteria or Afiliado object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AfiliadoPeer::ID);
            $value = $criteria->remove(AfiliadoPeer::ID);
            if ($value) {
                $selectCriteria->add(AfiliadoPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AfiliadoPeer::TABLE_NAME);
            }

        } else { // $values is Afiliado object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the afiliado table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AfiliadoPeer::TABLE_NAME, $con, AfiliadoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AfiliadoPeer::clearInstancePool();
            AfiliadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Afiliado or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Afiliado object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AfiliadoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Afiliado) { // it's a model object
            // invalidate the cache for this single object
            AfiliadoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(AfiliadoPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AfiliadoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            AfiliadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Afiliado object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Afiliado $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AfiliadoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AfiliadoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(AfiliadoPeer::DATABASE_NAME, AfiliadoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Afiliado
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AfiliadoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AfiliadoPeer::DATABASE_NAME);
        $criteria->add(AfiliadoPeer::ID, $pk);

        $v = AfiliadoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Afiliado[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AfiliadoPeer::DATABASE_NAME);
            $criteria->add(AfiliadoPeer::ID, $pks, Criteria::IN);
            $objs = AfiliadoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array(array('nro_doc'));
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseAfiliadoPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseAfiliadoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAfiliadoPeer::buildTableMap();

