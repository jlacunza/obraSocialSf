<?php


/**
 * Base class that represents a query for the 'centroatencion_has_prestador' table.
 *
 * 
 *
 * @method     CentroatencionHasPrestadorQuery orderByCentroatencionId($order = Criteria::ASC) Order by the centroatencion_id column
 * @method     CentroatencionHasPrestadorQuery orderByPrestadorId($order = Criteria::ASC) Order by the prestador_id column
 *
 * @method     CentroatencionHasPrestadorQuery groupByCentroatencionId() Group by the centroatencion_id column
 * @method     CentroatencionHasPrestadorQuery groupByPrestadorId() Group by the prestador_id column
 *
 * @method     CentroatencionHasPrestadorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CentroatencionHasPrestadorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CentroatencionHasPrestadorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CentroatencionHasPrestadorQuery leftJoinCentroatencion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Centroatencion relation
 * @method     CentroatencionHasPrestadorQuery rightJoinCentroatencion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Centroatencion relation
 * @method     CentroatencionHasPrestadorQuery innerJoinCentroatencion($relationAlias = null) Adds a INNER JOIN clause to the query using the Centroatencion relation
 *
 * @method     CentroatencionHasPrestadorQuery leftJoinPrestador($relationAlias = null) Adds a LEFT JOIN clause to the query using the Prestador relation
 * @method     CentroatencionHasPrestadorQuery rightJoinPrestador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Prestador relation
 * @method     CentroatencionHasPrestadorQuery innerJoinPrestador($relationAlias = null) Adds a INNER JOIN clause to the query using the Prestador relation
 *
 * @method     CentroatencionHasPrestador findOne(PropelPDO $con = null) Return the first CentroatencionHasPrestador matching the query
 * @method     CentroatencionHasPrestador findOneOrCreate(PropelPDO $con = null) Return the first CentroatencionHasPrestador matching the query, or a new CentroatencionHasPrestador object populated from the query conditions when no match is found
 *
 * @method     CentroatencionHasPrestador findOneByCentroatencionId(int $centroatencion_id) Return the first CentroatencionHasPrestador filtered by the centroatencion_id column
 * @method     CentroatencionHasPrestador findOneByPrestadorId(int $prestador_id) Return the first CentroatencionHasPrestador filtered by the prestador_id column
 *
 * @method     array findByCentroatencionId(int $centroatencion_id) Return CentroatencionHasPrestador objects filtered by the centroatencion_id column
 * @method     array findByPrestadorId(int $prestador_id) Return CentroatencionHasPrestador objects filtered by the prestador_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCentroatencionHasPrestadorQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCentroatencionHasPrestadorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CentroatencionHasPrestador', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CentroatencionHasPrestadorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CentroatencionHasPrestadorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CentroatencionHasPrestadorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CentroatencionHasPrestadorQuery) {
            return $criteria;
        }
        $query = new CentroatencionHasPrestadorQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$centroatencion_id, $prestador_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CentroatencionHasPrestador|CentroatencionHasPrestador[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CentroatencionHasPrestadorPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CentroatencionHasPrestadorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   CentroatencionHasPrestador A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CENTROATENCION_ID`, `PRESTADOR_ID` FROM `centroatencion_has_prestador` WHERE `CENTROATENCION_ID` = :p0 AND `PRESTADOR_ID` = :p1';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CentroatencionHasPrestador();
            $obj->hydrate($row);
            CentroatencionHasPrestadorPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CentroatencionHasPrestador|CentroatencionHasPrestador[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CentroatencionHasPrestador[]|mixed the list of results, formatted by the current formatter
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
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the centroatencion_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCentroatencionId(1234); // WHERE centroatencion_id = 1234
     * $query->filterByCentroatencionId(array(12, 34)); // WHERE centroatencion_id IN (12, 34)
     * $query->filterByCentroatencionId(array('min' => 12)); // WHERE centroatencion_id > 12
     * </code>
     *
     * @see       filterByCentroatencion()
     *
     * @param     mixed $centroatencionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
     */
    public function filterByCentroatencionId($centroatencionId = null, $comparison = null)
    {
        if (is_array($centroatencionId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $centroatencionId, $comparison);
    }

    /**
     * Filter the query on the prestador_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPrestadorId(1234); // WHERE prestador_id = 1234
     * $query->filterByPrestadorId(array(12, 34)); // WHERE prestador_id IN (12, 34)
     * $query->filterByPrestadorId(array('min' => 12)); // WHERE prestador_id > 12
     * </code>
     *
     * @see       filterByPrestador()
     *
     * @param     mixed $prestadorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
     */
    public function filterByPrestadorId($prestadorId = null, $comparison = null)
    {
        if (is_array($prestadorId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $prestadorId, $comparison);
    }

    /**
     * Filter the query by a related Centroatencion object
     *
     * @param   Centroatencion|PropelObjectCollection $centroatencion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CentroatencionHasPrestadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCentroatencion($centroatencion, $comparison = null)
    {
        if ($centroatencion instanceof Centroatencion) {
            return $this
                ->addUsingAlias(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $centroatencion->getId(), $comparison);
        } elseif ($centroatencion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $centroatencion->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
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
     * @param   Prestador|PropelObjectCollection $prestador The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CentroatencionHasPrestadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPrestador($prestador, $comparison = null)
    {
        if ($prestador instanceof Prestador) {
            return $this
                ->addUsingAlias(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $prestador->getId(), $comparison);
        } elseif ($prestador instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $prestador->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
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
     * @param   CentroatencionHasPrestador $centroatencionHasPrestador Object to remove from the list of results
     *
     * @return CentroatencionHasPrestadorQuery The current query, for fluid interface
     */
    public function prune($centroatencionHasPrestador = null)
    {
        if ($centroatencionHasPrestador) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CentroatencionHasPrestadorPeer::CENTROATENCION_ID), $centroatencionHasPrestador->getCentroatencionId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CentroatencionHasPrestadorPeer::PRESTADOR_ID), $centroatencionHasPrestador->getPrestadorId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseCentroatencionHasPrestadorQuery