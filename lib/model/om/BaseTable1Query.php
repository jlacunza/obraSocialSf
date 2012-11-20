<?php


/**
 * Base class that represents a query for the 'table1' table.
 *
 * 
 *
 * @method     Table1Query orderById($order = Criteria::ASC) Order by the id column
 * @method     Table1Query orderByUser($order = Criteria::ASC) Order by the user column
 * @method     Table1Query orderByPassword($order = Criteria::ASC) Order by the password column
 *
 * @method     Table1Query groupById() Group by the id column
 * @method     Table1Query groupByUser() Group by the user column
 * @method     Table1Query groupByPassword() Group by the password column
 *
 * @method     Table1Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Table1Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Table1Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Table1Query leftJoinTable1HasTable1RelatedByTable1Id($relationAlias = null) Adds a LEFT JOIN clause to the query using the Table1HasTable1RelatedByTable1Id relation
 * @method     Table1Query rightJoinTable1HasTable1RelatedByTable1Id($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Table1HasTable1RelatedByTable1Id relation
 * @method     Table1Query innerJoinTable1HasTable1RelatedByTable1Id($relationAlias = null) Adds a INNER JOIN clause to the query using the Table1HasTable1RelatedByTable1Id relation
 *
 * @method     Table1Query leftJoinTable1HasTable1RelatedByTable1Id1($relationAlias = null) Adds a LEFT JOIN clause to the query using the Table1HasTable1RelatedByTable1Id1 relation
 * @method     Table1Query rightJoinTable1HasTable1RelatedByTable1Id1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Table1HasTable1RelatedByTable1Id1 relation
 * @method     Table1Query innerJoinTable1HasTable1RelatedByTable1Id1($relationAlias = null) Adds a INNER JOIN clause to the query using the Table1HasTable1RelatedByTable1Id1 relation
 *
 * @method     Table1 findOne(PropelPDO $con = null) Return the first Table1 matching the query
 * @method     Table1 findOneOrCreate(PropelPDO $con = null) Return the first Table1 matching the query, or a new Table1 object populated from the query conditions when no match is found
 *
 * @method     Table1 findOneById(int $id) Return the first Table1 filtered by the id column
 * @method     Table1 findOneByUser(string $user) Return the first Table1 filtered by the user column
 * @method     Table1 findOneByPassword(string $password) Return the first Table1 filtered by the password column
 *
 * @method     array findById(int $id) Return Table1 objects filtered by the id column
 * @method     array findByUser(string $user) Return Table1 objects filtered by the user column
 * @method     array findByPassword(string $password) Return Table1 objects filtered by the password column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTable1Query extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTable1Query object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Table1', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Table1Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Table1Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Table1Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Table1Query) {
            return $criteria;
        }
        $query = new Table1Query();
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
     * @return   Table1|Table1[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Table1Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Table1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Table1 A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `USER`, `PASSWORD` FROM `table1` WHERE `ID` = :p0';
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
            $obj = new Table1();
            $obj->hydrate($row);
            Table1Peer::addInstanceToPool($obj, (string) $key);
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
     * @return Table1|Table1[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Table1[]|mixed the list of results, formatted by the current formatter
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
     * @return Table1Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Table1Peer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Table1Peer::ID, $keys, Criteria::IN);
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
     * @return Table1Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(Table1Peer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user column
     *
     * Example usage:
     * <code>
     * $query->filterByUser('fooValue');   // WHERE user = 'fooValue'
     * $query->filterByUser('%fooValue%'); // WHERE user LIKE '%fooValue%'
     * </code>
     *
     * @param     string $user The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function filterByUser($user = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($user)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $user)) {
                $user = str_replace('*', '%', $user);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Table1Peer::USER, $user, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Table1Peer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query by a related Table1HasTable1 object
     *
     * @param   Table1HasTable1|PropelObjectCollection $table1HasTable1  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   Table1Query The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTable1HasTable1RelatedByTable1Id($table1HasTable1, $comparison = null)
    {
        if ($table1HasTable1 instanceof Table1HasTable1) {
            return $this
                ->addUsingAlias(Table1Peer::ID, $table1HasTable1->getTable1Id(), $comparison);
        } elseif ($table1HasTable1 instanceof PropelObjectCollection) {
            return $this
                ->useTable1HasTable1RelatedByTable1IdQuery()
                ->filterByPrimaryKeys($table1HasTable1->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTable1HasTable1RelatedByTable1Id() only accepts arguments of type Table1HasTable1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Table1HasTable1RelatedByTable1Id relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function joinTable1HasTable1RelatedByTable1Id($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Table1HasTable1RelatedByTable1Id');

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
            $this->addJoinObject($join, 'Table1HasTable1RelatedByTable1Id');
        }

        return $this;
    }

    /**
     * Use the Table1HasTable1RelatedByTable1Id relation Table1HasTable1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   Table1HasTable1Query A secondary query class using the current class as primary query
     */
    public function useTable1HasTable1RelatedByTable1IdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTable1HasTable1RelatedByTable1Id($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Table1HasTable1RelatedByTable1Id', 'Table1HasTable1Query');
    }

    /**
     * Filter the query by a related Table1HasTable1 object
     *
     * @param   Table1HasTable1|PropelObjectCollection $table1HasTable1  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   Table1Query The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTable1HasTable1RelatedByTable1Id1($table1HasTable1, $comparison = null)
    {
        if ($table1HasTable1 instanceof Table1HasTable1) {
            return $this
                ->addUsingAlias(Table1Peer::ID, $table1HasTable1->getTable1Id1(), $comparison);
        } elseif ($table1HasTable1 instanceof PropelObjectCollection) {
            return $this
                ->useTable1HasTable1RelatedByTable1Id1Query()
                ->filterByPrimaryKeys($table1HasTable1->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTable1HasTable1RelatedByTable1Id1() only accepts arguments of type Table1HasTable1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Table1HasTable1RelatedByTable1Id1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function joinTable1HasTable1RelatedByTable1Id1($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Table1HasTable1RelatedByTable1Id1');

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
            $this->addJoinObject($join, 'Table1HasTable1RelatedByTable1Id1');
        }

        return $this;
    }

    /**
     * Use the Table1HasTable1RelatedByTable1Id1 relation Table1HasTable1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   Table1HasTable1Query A secondary query class using the current class as primary query
     */
    public function useTable1HasTable1RelatedByTable1Id1Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTable1HasTable1RelatedByTable1Id1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Table1HasTable1RelatedByTable1Id1', 'Table1HasTable1Query');
    }

    /**
     * Exclude object from result
     *
     * @param   Table1 $table1 Object to remove from the list of results
     *
     * @return Table1Query The current query, for fluid interface
     */
    public function prune($table1 = null)
    {
        if ($table1) {
            $this->addUsingAlias(Table1Peer::ID, $table1->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTable1Query