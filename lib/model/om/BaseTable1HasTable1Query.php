<?php


/**
 * Base class that represents a query for the 'table1_has_table1' table.
 *
 * 
 *
 * @method     Table1HasTable1Query orderByTable1Id($order = Criteria::ASC) Order by the table1_id column
 * @method     Table1HasTable1Query orderByTable1Id1($order = Criteria::ASC) Order by the table1_id1 column
 *
 * @method     Table1HasTable1Query groupByTable1Id() Group by the table1_id column
 * @method     Table1HasTable1Query groupByTable1Id1() Group by the table1_id1 column
 *
 * @method     Table1HasTable1Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Table1HasTable1Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Table1HasTable1Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Table1HasTable1Query leftJoinTable1RelatedByTable1Id($relationAlias = null) Adds a LEFT JOIN clause to the query using the Table1RelatedByTable1Id relation
 * @method     Table1HasTable1Query rightJoinTable1RelatedByTable1Id($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Table1RelatedByTable1Id relation
 * @method     Table1HasTable1Query innerJoinTable1RelatedByTable1Id($relationAlias = null) Adds a INNER JOIN clause to the query using the Table1RelatedByTable1Id relation
 *
 * @method     Table1HasTable1Query leftJoinTable1RelatedByTable1Id1($relationAlias = null) Adds a LEFT JOIN clause to the query using the Table1RelatedByTable1Id1 relation
 * @method     Table1HasTable1Query rightJoinTable1RelatedByTable1Id1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Table1RelatedByTable1Id1 relation
 * @method     Table1HasTable1Query innerJoinTable1RelatedByTable1Id1($relationAlias = null) Adds a INNER JOIN clause to the query using the Table1RelatedByTable1Id1 relation
 *
 * @method     Table1HasTable1 findOne(PropelPDO $con = null) Return the first Table1HasTable1 matching the query
 * @method     Table1HasTable1 findOneOrCreate(PropelPDO $con = null) Return the first Table1HasTable1 matching the query, or a new Table1HasTable1 object populated from the query conditions when no match is found
 *
 * @method     Table1HasTable1 findOneByTable1Id(int $table1_id) Return the first Table1HasTable1 filtered by the table1_id column
 * @method     Table1HasTable1 findOneByTable1Id1(int $table1_id1) Return the first Table1HasTable1 filtered by the table1_id1 column
 *
 * @method     array findByTable1Id(int $table1_id) Return Table1HasTable1 objects filtered by the table1_id column
 * @method     array findByTable1Id1(int $table1_id1) Return Table1HasTable1 objects filtered by the table1_id1 column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTable1HasTable1Query extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTable1HasTable1Query object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Table1HasTable1', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Table1HasTable1Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Table1HasTable1Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Table1HasTable1Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Table1HasTable1Query) {
            return $criteria;
        }
        $query = new Table1HasTable1Query();
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
                         A Primary key composition: [$table1_id, $table1_id1]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Table1HasTable1|Table1HasTable1[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Table1HasTable1Peer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Table1HasTable1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Table1HasTable1 A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `TABLE1_ID`, `TABLE1_ID1` FROM `table1_has_table1` WHERE `TABLE1_ID` = :p0 AND `TABLE1_ID1` = :p1';
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
            $obj = new Table1HasTable1();
            $obj->hydrate($row);
            Table1HasTable1Peer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Table1HasTable1|Table1HasTable1[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Table1HasTable1[]|mixed the list of results, formatted by the current formatter
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
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(Table1HasTable1Peer::TABLE1_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(Table1HasTable1Peer::TABLE1_ID1, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(Table1HasTable1Peer::TABLE1_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(Table1HasTable1Peer::TABLE1_ID1, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the table1_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTable1Id(1234); // WHERE table1_id = 1234
     * $query->filterByTable1Id(array(12, 34)); // WHERE table1_id IN (12, 34)
     * $query->filterByTable1Id(array('min' => 12)); // WHERE table1_id > 12
     * </code>
     *
     * @see       filterByTable1RelatedByTable1Id()
     *
     * @param     mixed $table1Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function filterByTable1Id($table1Id = null, $comparison = null)
    {
        if (is_array($table1Id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(Table1HasTable1Peer::TABLE1_ID, $table1Id, $comparison);
    }

    /**
     * Filter the query on the table1_id1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTable1Id1(1234); // WHERE table1_id1 = 1234
     * $query->filterByTable1Id1(array(12, 34)); // WHERE table1_id1 IN (12, 34)
     * $query->filterByTable1Id1(array('min' => 12)); // WHERE table1_id1 > 12
     * </code>
     *
     * @see       filterByTable1RelatedByTable1Id1()
     *
     * @param     mixed $table1Id1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function filterByTable1Id1($table1Id1 = null, $comparison = null)
    {
        if (is_array($table1Id1) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(Table1HasTable1Peer::TABLE1_ID1, $table1Id1, $comparison);
    }

    /**
     * Filter the query by a related Table1 object
     *
     * @param   Table1|PropelObjectCollection $table1 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   Table1HasTable1Query The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTable1RelatedByTable1Id($table1, $comparison = null)
    {
        if ($table1 instanceof Table1) {
            return $this
                ->addUsingAlias(Table1HasTable1Peer::TABLE1_ID, $table1->getId(), $comparison);
        } elseif ($table1 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(Table1HasTable1Peer::TABLE1_ID, $table1->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTable1RelatedByTable1Id() only accepts arguments of type Table1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Table1RelatedByTable1Id relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function joinTable1RelatedByTable1Id($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Table1RelatedByTable1Id');

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
            $this->addJoinObject($join, 'Table1RelatedByTable1Id');
        }

        return $this;
    }

    /**
     * Use the Table1RelatedByTable1Id relation Table1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   Table1Query A secondary query class using the current class as primary query
     */
    public function useTable1RelatedByTable1IdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTable1RelatedByTable1Id($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Table1RelatedByTable1Id', 'Table1Query');
    }

    /**
     * Filter the query by a related Table1 object
     *
     * @param   Table1|PropelObjectCollection $table1 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   Table1HasTable1Query The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTable1RelatedByTable1Id1($table1, $comparison = null)
    {
        if ($table1 instanceof Table1) {
            return $this
                ->addUsingAlias(Table1HasTable1Peer::TABLE1_ID1, $table1->getId(), $comparison);
        } elseif ($table1 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(Table1HasTable1Peer::TABLE1_ID1, $table1->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTable1RelatedByTable1Id1() only accepts arguments of type Table1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Table1RelatedByTable1Id1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function joinTable1RelatedByTable1Id1($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Table1RelatedByTable1Id1');

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
            $this->addJoinObject($join, 'Table1RelatedByTable1Id1');
        }

        return $this;
    }

    /**
     * Use the Table1RelatedByTable1Id1 relation Table1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   Table1Query A secondary query class using the current class as primary query
     */
    public function useTable1RelatedByTable1Id1Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTable1RelatedByTable1Id1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Table1RelatedByTable1Id1', 'Table1Query');
    }

    /**
     * Exclude object from result
     *
     * @param   Table1HasTable1 $table1HasTable1 Object to remove from the list of results
     *
     * @return Table1HasTable1Query The current query, for fluid interface
     */
    public function prune($table1HasTable1 = null)
    {
        if ($table1HasTable1) {
            $this->addCond('pruneCond0', $this->getAliasedColName(Table1HasTable1Peer::TABLE1_ID), $table1HasTable1->getTable1Id(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(Table1HasTable1Peer::TABLE1_ID1), $table1HasTable1->getTable1Id1(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseTable1HasTable1Query