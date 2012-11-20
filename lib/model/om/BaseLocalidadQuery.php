<?php


/**
 * Base class that represents a query for the 'localidad' table.
 *
 * 
 *
 * @method     LocalidadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LocalidadQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     LocalidadQuery groupById() Group by the id column
 * @method     LocalidadQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     LocalidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LocalidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LocalidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LocalidadQuery leftJoinAfiliado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Afiliado relation
 * @method     LocalidadQuery rightJoinAfiliado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Afiliado relation
 * @method     LocalidadQuery innerJoinAfiliado($relationAlias = null) Adds a INNER JOIN clause to the query using the Afiliado relation
 *
 * @method     LocalidadQuery leftJoinCentroatencion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Centroatencion relation
 * @method     LocalidadQuery rightJoinCentroatencion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Centroatencion relation
 * @method     LocalidadQuery innerJoinCentroatencion($relationAlias = null) Adds a INNER JOIN clause to the query using the Centroatencion relation
 *
 * @method     LocalidadQuery leftJoinPrestador($relationAlias = null) Adds a LEFT JOIN clause to the query using the Prestador relation
 * @method     LocalidadQuery rightJoinPrestador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Prestador relation
 * @method     LocalidadQuery innerJoinPrestador($relationAlias = null) Adds a INNER JOIN clause to the query using the Prestador relation
 *
 * @method     Localidad findOne(PropelPDO $con = null) Return the first Localidad matching the query
 * @method     Localidad findOneOrCreate(PropelPDO $con = null) Return the first Localidad matching the query, or a new Localidad object populated from the query conditions when no match is found
 *
 * @method     Localidad findOneById(int $id) Return the first Localidad filtered by the id column
 * @method     Localidad findOneByDescripcion(string $descripcion) Return the first Localidad filtered by the descripcion column
 *
 * @method     array findById(int $id) Return Localidad objects filtered by the id column
 * @method     array findByDescripcion(string $descripcion) Return Localidad objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLocalidadQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLocalidadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Localidad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LocalidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     LocalidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LocalidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LocalidadQuery) {
            return $criteria;
        }
        $query = new LocalidadQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Localidad|Localidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LocalidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LocalidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Localidad A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DESCRIPCION` FROM `localidad` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Localidad();
            $obj->hydrate($row);
            LocalidadPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Localidad|Localidad[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Localidad[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LocalidadPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LocalidadPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(LocalidadPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LocalidadPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query by a related Afiliado object
     *
     * @param   Afiliado|PropelObjectCollection $afiliado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LocalidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAfiliado($afiliado, $comparison = null)
    {
        if ($afiliado instanceof Afiliado) {
            return $this
                ->addUsingAlias(LocalidadPeer::ID, $afiliado->getLocalidadId(), $comparison);
        } elseif ($afiliado instanceof PropelObjectCollection) {
            return $this
                ->useAfiliadoQuery()
                ->filterByPrimaryKeys($afiliado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAfiliado() only accepts arguments of type Afiliado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Afiliado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function joinAfiliado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Afiliado');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Afiliado');
        }

        return $this;
    }

    /**
     * Use the Afiliado relation Afiliado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AfiliadoQuery A secondary query class using the current class as primary query
     */
    public function useAfiliadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAfiliado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Afiliado', 'AfiliadoQuery');
    }

    /**
     * Filter the query by a related Centroatencion object
     *
     * @param   Centroatencion|PropelObjectCollection $centroatencion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LocalidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCentroatencion($centroatencion, $comparison = null)
    {
        if ($centroatencion instanceof Centroatencion) {
            return $this
                ->addUsingAlias(LocalidadPeer::ID, $centroatencion->getLocalidadId(), $comparison);
        } elseif ($centroatencion instanceof PropelObjectCollection) {
            return $this
                ->useCentroatencionQuery()
                ->filterByPrimaryKeys($centroatencion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCentroatencion() only accepts arguments of type Centroatencion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Centroatencion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function joinCentroatencion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Centroatencion');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Centroatencion');
        }

        return $this;
    }

    /**
     * Use the Centroatencion relation Centroatencion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CentroatencionQuery A secondary query class using the current class as primary query
     */
    public function useCentroatencionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCentroatencion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Centroatencion', 'CentroatencionQuery');
    }

    /**
     * Filter the query by a related Prestador object
     *
     * @param   Prestador|PropelObjectCollection $prestador  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LocalidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPrestador($prestador, $comparison = null)
    {
        if ($prestador instanceof Prestador) {
            return $this
                ->addUsingAlias(LocalidadPeer::ID, $prestador->getLocalidadId(), $comparison);
        } elseif ($prestador instanceof PropelObjectCollection) {
            return $this
                ->usePrestadorQuery()
                ->filterByPrimaryKeys($prestador->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPrestador() only accepts arguments of type Prestador or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Prestador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function joinPrestador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Prestador');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Prestador');
        }

        return $this;
    }

    /**
     * Use the Prestador relation Prestador object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PrestadorQuery A secondary query class using the current class as primary query
     */
    public function usePrestadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPrestador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Prestador', 'PrestadorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Localidad $localidad Object to remove from the list of results
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function prune($localidad = null)
    {
        if ($localidad) {
            $this->addUsingAlias(LocalidadPeer::ID, $localidad->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLocalidadQuery